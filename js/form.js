/*
	form.js

	Validation and functional JS for the form page
*/

$(document).ready(function() {

	// Form "Next" and "Back" buttons
	$('.formBack').on("click", function() {

		var currPage = getCurrPage();

		if (currPage > 1) {
			$('#form-page-'+currPage).hide();
			$('#form-page-'+(currPage-1)).show();
			$('#list-page-'+currPage).removeClass('active-form-page');
			$('#list-page-'+(currPage-1)).addClass('active-form-page');
		}

		if (currPage - 1 < 3) {
			var icon = $('<div>').append($(document.createElement('div')).addClass('form-button-icon next'));
			$('.formNext').html("Next" + icon.html());
			$('.formNext').off("click").on("click", $.proxy(initializeNextButton,$('.formNext')));
		}

		if (currPage == 2) {
			$(this).hide();
		}			
	});

	$('.formNext').on("click", function() {
		var currPage = getCurrPage();

		$('#form-page-'+currPage).hide();
		$('#form-page-'+(currPage+1)).show();
		$('#list-page-'+currPage).removeClass('active-form-page');
		$('#list-page-'+(currPage+1)).addClass('active-form-page');

		if (currPage + 1 >= 3) {
			$(this).html("Finish");
			$(this).off("click").on("click", formFinished);
		}

		$('.form-button.formBack').show();
	});

	// Page form count functionality
	$('.form-page-count').on("click", function() {
		var clickedPage = parseInt($(this).attr("id").substring($(this).attr("id").length - 1));
		var currPage = getCurrPage();

		if(!(clickedPage == currPage)) {
			$("#form-page-"+currPage).hide();
			$("#form-page-"+clickedPage).show();

			$('.active-form-page').removeClass('active-form-page');
			$("#list-page-"+clickedPage).addClass('active-form-page');

			if(clickedPage == 3) {
				$('.formNext').html("Finish");
				$('.formNext').off("click").on("click", formFinished);
			} else {
				var icon = $('<div>').append($(document.createElement('div')).addClass('form-button-icon next'));
				$('.formNext').html("Next" + icon.html());
				$('.formNext').off("click").on("click", $.proxy(initializeNextButton,$('.formNext')));
			}
		}

		if(clickedPage == 2 || clickedPage == 3) {
			$('.form-button.formBack').show();
		}
	});

	// Unit option checkboxes
	$('.unit-request-checkbox').on('click', function(e) {
		e.preventDefault();
	});
	$('.unit-request-title').on('click', function(e) {
		if($(this).siblings('.unit-request-checkbox').prop('checked'))
			$(this).siblings('.unit-request-checkbox').prop('checked', false);
		else
			$(this).siblings('.unit-request-checkbox').prop('checked', true);

		if($(this).siblings('.unit-request-details').is(":visible")) {
			// Hide it
			$(this).siblings('.unit-request-details').slideUp('fast', $.proxy(function() {
				$(this).parent().removeClass('chosen-unit');
				$(this).siblings('.unit-request-checkbox').prop('checked', false);
			}, this));
		} else {
			// Show it
			$(this).siblings('.unit-request-details').slideDown('fast', $.proxy(function() {
				$(this).parent().addClass('chosen-unit');
				$(this).siblings('.unit-request-checkbox').prop('checked', true);
			}, this));
		}
	});

	// Textarea expansion
	$('.form-unit-details').on("focus", function() {
		$(this).animate({height:"90px"}, 300);
	});
	$('.form-unit-details').on("blur", function() {
		$(this).animate({height:"50px"}, 300);
	});

	// Request box expansion
	$('.unit-request-box').on("click", function(e) {
		//$(this).children('.unit-request-checkbox').trigger('click');
	});


	// Followers
	$('.follower-checkbox').on('click', function(e) {
		if($(this).hasClass('adminFollower')) {
			$(this).prop('checked', true);
		} else if($(this).prop('checked')) {
			$(this).parent().parent().addClass('selected');
		} else {
			$(this).parent().parent().removeClass('selected');
		}
	});
	
	// Datepicker
	$('.formDatePicker').datepicker({
		dateFormat: "mm/dd/yy",
		onSelect: function(dataText, inst) {
			if($(this).attr('id') == "launchDate") {
				$("#timeline5").val(dataText);
			}	
		}
	});

	// wysiwyg editor
	$('.form-ta').cleditor({width: 778});

	$('.form-button.formBack').hide();
});

// returns the current page number of the form as a number
function getCurrPage() {
	return parseInt($('.active-form-page').attr('id').substring($('.active-form-page').attr('id').length - 1));
}

function initializeBackButton() {
	$('.formBack').on("click", function() {

		var currPage = getCurrPage();

		if (currPage > 1) {
			$('#form-page-'+currPage).hide();
			$('#form-page-'+(currPage-1)).show();
			$('#list-page-'+currPage).removeClass('active-form-page');
			$('#list-page-'+(currPage-1)).addClass('active-form-page');
		}

		if (currPage - 1 < 3) {
			$('.formNext').html("Next");
			$('.formNext').off("click").on("click", $.proxy(initializeNextButton,this));
		}
	});
}

function initializeNextButton() {
	var currPage = getCurrPage();

	$('#form-page-'+currPage).hide();
	$('#form-page-'+(currPage+1)).show();
	$('#list-page-'+currPage).removeClass('active-form-page');
	$('#list-page-'+(currPage+1)).addClass('active-form-page');

	if (currPage + 1 >= 3) {
		$(this).html("Finish");
		$(this).off("click").on("click", formFinished);
	}

	$('.form-button.formBack').show();
}

function formFinished() {

	console.log("number of errors: " + $('.form-input-error').length);
	$('.form-input-error').removeClass('form-input-error');
	$('.page-has-error').removeClass('page-has-error');
	$('.error-tooltip').removeClass('error-tooltip');

	$('.form-input-error-element').remove();

	var page1HasError = false;
	var page2HasError = false;
	var page3HasError = false;

	// Validate (show first page with errors)

	/* ---===|| Page 1 ||===--- */
	$.each($("#form-page-1 input"), function(index, value) {
		var inputVal = $(value).val().trim();
		if (inputVal == '') {
			$(value).addClass('form-input-error');
			page1HasError = true;
		}
	});
	if($("#launchDate").val().trim() == '' || $("#launchDate").val().trim().split('/').length != 3) {
		$("#launchDate").addClass('form-input-error');
		page1HasError = true;
	}

	/* ---===|| Page 2 ||===--- */
	var previousDate = 0;
	var previousValue;
	$.each($("#form-page-1 .formDatePicker"), function(index, value) {
		var thisDate = new Date($(value).val());
		if(thisDate >= previousDate) {
			var inputVal = $(value).val().trim();
			if (inputVal == '' || inputVal.split('/').length != 3) {
				$(value).addClass('form-input-error');
				page2HasError = true;
			}
		} else {
			if(previousValue) {
				$(previousValue).attr("title", "This value is invalid. It comes after a previous date.");
				$(previousValue).addClass('form-input-error error-tooltip');
				page2HasError = true;
			} else {
				$(value).attr("title", "This value is invalid. It comes before a previous date.");
				$(value).addClass('form-input-error error-tooltip');
				page2HasError = true;
			}
		}
		previousDate = thisDate;
		previousValue = value;
	});

	if(page1HasError || page2HasError || page3HasError) {

		$('.active-form-page').removeClass('active-form-page');

		// Show the first page with errors
		if(page1HasError) {
			$('.form-page').hide();
			$("#form-page-1").show();
			$("#list-page-1").addClass('active-form-page');
		} else if(page2HasError) {
			$('.form-page').hide();
			$("#form-page-2").show();
			$("#list-page-2").addClass('active-form-page');
		} else if(page3HasError) {
			$('.form-page').hide();
			$("#form-page-3").show();
			$("#list-page-3").addClass('active-form-page');
		}

		// Mark the pages where there are errors
		if(page1HasError)
			$("#list-page-1").addClass('page-has-error');
		if(page2HasError)
			$("#list-page-2").addClass('page-has-error');
		if(page3HasError)
			$("#list-page-3").addClass('page-has-error');

		if(page1HasError || page2HasError || page3HasError) {
			$('.formNext').html("Next");
			$('.formNext').off("click").on("click", $.proxy(initializeNextButton,this));
		}

		$('.error-tooltip[title]').tooltip({position: "center right"}).show();

		$.each($('.error-tooltip'), function(index, value){
			$(value).data('tooltip').show();
		});

	} else {

		// No errors?


		// Show finished page
		// Submit data to server
		// Show complete page on successful response
		$("#form-page-3").fadeOut(400, function() {
			$("#form-finished-page").fadeIn(400,submitFormData);
		});

	}
}

function submitFormData() {

	var formData = gatherFormData();


	$.post($("#form-submit-URL").data().formsubmiturl + "?t=newrequest", formData, function(data) {

		if (data.status == "success") {
			$("#form-finished-page").fadeOut(400, function() {

				window.location = data.forwardURL;

			});
		}
		
	}, "json");
}

function gatherFormData() {

	// Do not attempt to understand what exactly is going on here.
	// It is futile. Assume this shit works. I would know. I built it.
	// Tony Stark up in this
	console.log("gatherFormData");
	
	// Gather basic text data
	var returnData = {
		campaignName: 	$("#campaignName").val().trim(),
		advertiser: 	$("#advertiser").val().trim(),
		agency: 		$("#agency").val().trim(),
		curseSalesRep: 	$("#curseSalesRep").data().authuserid,
		launchDate: 	$("#launchDate").val().trim(),
		timeline1: 		$("#timeline1").val(),
		timeline2: 		$("#timeline2").val(),
		timeline3: 		$("#timeline3").val(),
		timeline4: 		$("#timeline4").val(),
		timeline5: 		$("#timeline5").val(),
		creativeUnits: 	$("#creativeUnits").val().trim(),
		ftpinfo: 		$("#ftpinfo").val().trim(),
		units:			[],
		followers: 		[]
	};

	// Parse options and record data
	$.each($('.unit-request-box'), function(index,value) {
		var dataObject = {};
		if($(value).children('.unit-request-checkbox').prop("checked")) {
			var unitID = $(value).children('.unit-request-checkbox').attr("id");
			dataObject.unitID = unitID;
			dataObject.unitOptions = [];

			var optionCount = 1;
			$.each($(value).find(".unit-checkbox"), function(index,value) {

				if($(value).children('.unit-option-checkbox').prop("checked")) {
					dataObject.unitOptions.push(optionCount);
				}

				optionCount++;
			});

			dataObject.details = $(value).find('.form-unit-details').val();
			dataObject.format  = "jpg/png";
		}

		if (Object.keys(dataObject).length > 0)
			returnData.units.push(dataObject);
	});

	// Gather follower data
	$.each($('.follower-checkbox'), function(index, value) {
		if($(this).prop('checked')) {
			var userID = $(this).siblings('.hidden-user-id').val();
			returnData.followers.push(userID);
		}
	});

	return returnData;
}