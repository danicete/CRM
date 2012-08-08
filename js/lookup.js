jQuery(document).ready(function($) {

	$('.req-list-button.next').on('click', function() {
		var currPage;
		var numOfPages = $('.req-list-page').length;
		$.each($('.req-list-page'), function(index, value) {
			if($(this).hasClass('currPage')) 
				currPage = index+1;
		});
		if(document.location.hash) 
			location.hash = "p"+(currPage+1);
		else
			document.location = document.location + "#p"+(currPage+1);
	});

	$('.req-list-button.prev').on('click', function() {
		var currPage;
		$.each($('.req-list-page'), function(index, value) {
			if($(this).hasClass('currPage'))
				currPage = index+1;
		});
		if(currPage > 1)
			location.hash = "p"+(currPage-1);
	});

	$('.req-list-button.first').on('click', function() {
		location.hash = "p1";
	});

	$('.req-list-button.end').on('click', function() {
		var numOfPages = $('.req-list-page').length;
		location.hash = "p"+numOfPages;
	});

	window.isListAnimating = false;

	setInterval(function() {
		var hash = document.location.hash;

		if (hash != "" && !window.isListAnimating) {
			if (hash.substring(1,2)=="p") {
				console.log("is a page");
				var pages = $('.req-list-page');
				var pageNum = parseInt(hash.substring(2,3));
				var numOfPages = pages.length;
				if (!(pageNum < 0 || pageNum > numOfPages)) {
					var currPage;
					$.each(pages, function(index, value) {
						if($(this).hasClass('currPage'))
							currPage = index+1;
					});
					if(!(pageNum == currPage)) {
						console.log("animating");
						window.isListAnimating = true;
						$('.req-list').animate({
							left: "-"+(pageNum-1)*650 + "px"
						},'fast', function() {
							$('.currPage').removeClass('currPage');
							$('.req-list-page').eq(pageNum-1).addClass('currPage');
							window.isListAnimating = false;
						});
					}
				}
			} else {

			}
			
		}
	}, 50);

});