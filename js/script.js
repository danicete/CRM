/* Author: James Watson

	For: Creative Request Project

*/

$(document).ready(function() {

	// Show login menu
	$("#authLogin").on("click", function(e) {
		e.preventDefault();
		var url = $(this).attr("href");

		$.post(url, {}, function(data) {
			if(data.status == "success") {
				var cont = $(document.createElement('div')).addClass('login-container');

				$("#authLogin").addClass('loginopen');

				cont.append(data.output).hide();
				$("#content").append(cont);
				cont.fadeIn(200, initializeLoginForm);

				$("html").on("click", function(e) {
					if($(e.target).hasClass("j-loginFormFlag")) {
						// Do nothing
					} else
						removeLoginForm();
				});
				
			} else {
				console.log("There was an error with the login form.");
			}

		},"json");

		return false;
	});

	$('.lookup-pin-input').on("keyup", function() {
		$(this).val($(this).val().toUpperCase());
	}).on("keypress", function(e) {
		if(e.which == 13 || e.keyCode == 13) {
			$("#lookup-pin-submit").click();
		}
	});

	// Lookup -------------------------------------------

	$('.unfollow-option').on('click', function() {

		var url = $(this).attr("href");

		$("#unfollowDialog").dialog({
			width: 400,
			open: function(event, ui)  {
				$("#ui-dialog-title-unfollowDialog").text('Confirm');
				$("#unfollowDialogConfirm").on('click', function() {
					$.post(url, {unfollow: 1}, function(data) {
						if(data.status == "success") {
							window.location = window.location;
						} else {

						}
					},"json");
				});
				$("#unfollowDialogDeny").on('click', function() {
					$("#unfollowDialog").dialog('close');
				});
			}
		});

		return false;
	});

	// ------------------------------------------- Lookup

	// View page ----------------------------------------
	$("#actionFollowers").on('click', function(e) {
		e.preventDefault();
		var url = $(this).attr('href');
		$.post(url, {ajax: 1}, function(data) {
			if (data.status == "success") {
				$("#followersDialog").append(data.output);
				$("#followersDialog").dialog({width: 500,
					open: function(event, ui) {
						$("#followerControls").on('click', function() {
							window.location = $(this).data().url;
						});
						$("#followerClose").on('click', function() {
							$("#followersDialog").dialog('close');
						});
					},
					close: function(event, ui) {
						$('.viewFollowersContainer').remove();
					}
				});
				$("#ui-dialog-title-followersDialog").text("Current Followers");
			} else {

			}
		},"json");
	});

	$('.view-mock-thumbnail').colorbox();

	$('.mock').children('.delete-overlay').on('click', function() {
      var linkID = $(this).children('input:hidden').val();
      var self = $(this);
      $("#removeMockDialog").dialog({
        open: function(event, ui) {
          $("#ui-dialog-title-removeMockDialog").text('Remove mock?');
          $("#removeMockConfirm").on('click', function() {
            var removeURL = $("#mockRemoveURL").val();
            $.post(removeURL, {removeMock: 1, linkID: linkID}, function(data) {
              if(data.status == "success") {
                $("#removeMockDialog").dialog('close');
                self.parent().fadeOut('slow', function() {
                  $(this).remove();
                });
              } else {

              }
            },"json");
          });
          $("#removeMockDeny").on('click', function() {
            $("#removeMockDialog").dialog('close');
          });
        }
      })
    });

	// ---------------------------------------- View page 

	// Followers ----------------------------------------
	
	$("#followerAdd").on('click', function() {
		var url = $("#followersURL").val();
		var pin = $("#requestPIN").val();
		$.post(url, {addFollowersAjax: 1, rpin: pin}, function(data) {
			if (data.status == "success") {
				$("#addFollowerDialog").append(data.output);
				$("#addFollowerDialog").dialog({
					width: 500,
					open: function(event, ui) {
						$("#ui-dialog-title-addFollowerDialog").text("Add Follower(s)");
						$("#followerDialogClose").on('click', function() {
							$("#addFollowerDialog").dialog('close');
						});
					},
					close: function(event, ui) {
						$("#addFollowersDialogContent").remove();
					}
				});

			} else {

			}
		},"json");
	});

	// ** Follower Controls ** //
	var initializeFollowerControls = (function() {
		
		$('.follower-remove-control').on('click', function() {

			var userID = $(this).siblings('.follower-hidden-id').val();
			$("#removeFollowerDialog").dialog({
				width: 450,
				open: function(event, ui) {
					$("#userID").val(userID);
					$("#ui-dialog-title-removeFollowerDialog").text("Are you sure?");
					$("#removeDialogConfirm").on('click', function() {
						var url = $("#followersURL").val();
						var fID = $("#userID").val();
						var formID = $("#formID").val();
						$.post(url, {removeFollower: 1, followerID: fID, formID: formID}, function(data) {
							if (data.status == "success") {
								window.location = window.location;
							} else {

							}
						},"json");
						
					});
					$("#removeDialogDeny").on('click', function() {
						$("#removeFollowerDialog").dialog('close');
					});
				},
				close: function(event, ui) {
					
				}
			})
		});

	})();


	// ---------------------------------------- Followers
	
});

function removeLoginForm() {

	$('.login-container').fadeOut(400, function() {
		$(this).remove();		
	});
	$("html").off("click");
	$("#authLogin").removeClass('loginopen');
}

function initializeLoginForm() {

	$('.loginErr').remove();

	$(".loginForm #submitBtn").on("click", function() {

		var url = $(this).attr("formaction");
		var email = $("#userLogin").val().trim();
		var pass = $("#passLogin").val().trim();

		$.post(url, {email: email, pass: pass}, function(data) {

			if(data.status ==  "failed") {
				var slug = Math.random*1000;
				$("#submitBtn").parent().append($(document.createElement('span')).addClass('loginErr').attr('id',slug).html('Login failed.'));
				$("#"+slug).delay(4500).fadeOut(400, function() {
						$(this).remove();
				});
				
			}
			else {
				//alert("Login successful. Reloading.");
				window.location = window.location;
			}

		},"json");
	});

	$("#userLogin").on("keyup", function(e) {
		var inputVal = $(this).val();
		if($(this).val().length >= 10) {
			var currVal = inputVal.substring(0 , inputVal.length - 10);
		} else
			var currVal = inputVal;

		$(this).val(currVal + "@curse.com");
		$(this).setCursorPosition(currVal.length);
	});

	$("#passLogin").on("keypress", function(e) {
		if(e.which == 13 || e.keyCode == 13) {
			$("#submitBtn").click();
		}
	});

	$("#userLogin").focus();
}





