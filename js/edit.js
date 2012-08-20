
/**********************
	edit.js

	Author: James Watson
	Date: 6/5/2012
	Project: CR Website

***********************/

$(document).ready(function() {

	$('.edit-date .edit-form-field-input').datepicker({
		dateFormat: "mm/dd/yy"
	});
	$('.edit-form-textarea').cleditor({
		width: 758,
		controls:     // controls to add to the toolbar
	                    "bold italic underline strikethrough subscript superscript | font size " +
	                    "style | color highlight removeformat | bullets numbering | outdent " +
	                    "indent | alignleft center alignright justify | undo redo | " +
	                    "rule image link unlink | cut copy paste pastetext"
	});
	$('.cleditorMain').hide();

	$('.edit-text .edit-form-field-value').on('click', function(e) {
		if (!$(this).hasClass('editting'))  {
			resetEdittingField();
			$(this).addClass('editting');
			$(this).children('div').hide();
			$(this).children('.edit-form-field-input').show().off('keydown').on('keydown',inputKeypress);
			$(this).children('.edit-form-field-input').focus();

			initializeClickOff(e);
		} else {
			console.log("You clicked on a field is being editted.");
		}

	});

	$('.edit-date .edit-form-field-value').on('click', function(e) {

		if (!$(this).hasClass('editting'))  {
			resetEdittingField();
			$(this).addClass('editting');
			$(this).children('div').hide();
			$(this).children('.edit-form-field-input').show().off('keydown').on('keydown',dateKeypress);
			$(this).children('.edit-form-field-input').focus();

			initializeClickOff(e);
		} else {
			console.log("You clicked on a field is being editted.");
		}
	});

	$('.edit-salesRep .edit-form-field-value').on('click', function(e) {

		if (!$(this).hasClass('editting'))  {
			resetEdittingField();
			$(this).addClass('editting');

			var url = $("#editAjaxURL").val();
			var formID = $("#formID").val();
			var currentRep = $(this).children('div').data('authuserid');
			var theParent = $(this).parent();
			var self = this;
			$.post(url, {salesRepPopup: 1, currentRep: currentRep, formID: formID}, function(data) {
				if(data.status == "success") {
					theParent.css('position','relative');

					var w = parseInt($(self).css('width'));
					var o = $(data.output);
					o.css({
						position: 'absolute',
						top: '30px',
						left: '0px'
					});
					theParent.append(o);
					initializeSalesRepPopup();
				} else {

				}
			},"json");

			initializeClickOff(e);
		} else {
			console.log("You clicked on a field is being editted.");
		}
	});

	$('.edit-form-summary-container').on('click', function(e) {

		if (!$(this).hasClass('editting'))  {
			resetEdittingField();
			$(this).addClass('editting');
			$(this).children('.edit-value-display').hide();
			$(this).children('.cleditorMain').show();

			initializeClickOff(e);
		} else {
			console.log("You clicked on a field is being editted.");
		}
	});

	initializeUnitControls();

	$("#dialogSave").on('click', saveNewUnit);

	$('.addRequestContent').on('click', function() {
		$("#addRequestDialog").dialog({width: 450,
			open: function(event, ui) {
				initializeDialog();
			},
			close: function(event, ui) {
				$('.addRequestDialogContent').remove();
				$('.unit-type-select').off('change');
			}
		});
		$("#ui-dialog-title-addRequestDialog").html("Add New Unit");
	});

	$("#saveform").on('click', function() {

		var formData = gatherFormData();
		var savePostURL = $("#formSavePostURL").val();
		console.log(formData);
		$.post(savePostURL, {saveform: 1, formData: formData}, function(data) {
			if (data.status == "success") {
				window.location = data.savedURL;
			} else {

			}
		},"json");
	});
	$("#resetform").on('click', function() {
		window.location = window.location;
	});

	// Mocks
	$('.mock-type-select').on('change', function(e) {
		if ($(this).val() == 0) {
			$('#fileupload').fileupload('disable');
			$("#addFilesInput").css('top', '9999px');
	        $("#addFilesButton").addClass('disabled');
		} else {
			var unitVal = $(this).val();
			"use strict";
			var addIndex = $(this).children('option').index($(this).children('option:selected')) - 1;

            $("#addFilesInput").css('top', '0');
            $("#addFilesButton").removeClass('disabled');
            $("#fileupload").find('.hidden-unit-value').val(unitVal);
            $("#fileupload").find('#hidden-add-index').val(addIndex);
            $('#fileupload').fileupload('enable');
		}
	});

	// Initialize the jQuery File Upload widget:
	if ($("#fileupload").length > 0) {
		$('#fileupload').fileupload();
	    $("#fileupload").bind('fileuploaddone', function(e, data) {
	    		console.log("WHERE ARE MY BALLS");
		        var data = eval(data.result);
		        data = data[0];
		        var cont = $(document.createElement('div')).addClass('mock mock-overlay').hide();

		        var del = $(document.createElement('div')).addClass('delete-overlay').attr('title','Remove this mock');
		        var hidden = $(document.createElement('input')).attr('type', 'hidden').val(data.linkID);

		        del.append(hidden);

		        var uploadedImg = $(document.createElement('img')).attr('src', data.url);
		        var a = $(document.createElement('a')).addClass('view-mock-thumbnail').attr({
		          href: data.url,
		          title: data.name
		        }).colorbox();

		        a.append(uploadedImg);
		        cont.append(del);
		        cont.append(a);

		        $('.mock-type-container').eq(data.addIndex).find('p.no-mocks').remove();
		        $('.mock-type-container').eq(data.addIndex).append(cont);

		        cont.fadeIn('slow', function() {
		        	$('.mock').children('.delete-overlay').on('click', function() {
			          var linkID = $(this).children('input:hidden').val();
			          var self = $(this);
			          $("#removeMockDialog").dialog({
			            open: function(event, ui) {
			              $("#ui-dialog-title-removeMockDialog").text('Remove mock?');
			              $("#removeMockConfirm").on('click', function() {
			                var removeURL = $("#mockRemoveURL").val();
			                $.post(removeURL, {linkID: linkID}, function(data) {
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
		        });

		  	});
		$("#addFilesInput").css('top', '9999px');
		$('#fileupload').fileupload('disable');
	}

	$.each($("#edit-form-campaign .edit-form-field-value"), function(index,value) {
		var currWidth = parseInt($(value).css('width'));
		var parentWidth = parseInt($(value).parent().parent().css('width'));

		var labelWidth = parseInt($(value).parent().siblings('.edit-form-label').css('width')) + 8;

		$(value).css('width', (parentWidth - labelWidth) + 'px');
	});

});

function initializeClickOff(theEvent) {
	
	$('html').off('click').on('click', function(e) {
		var elem = $(e.target);
		if(theEvent.target === e.target || elem.hasClass('editting') || elem.closest('.edit-form-field-value').hasClass('editting') || elem.hasClass('ui-icon') || elem.hasClass('ui-corner-all')) {
			// Do what the U.N. does. (nothing)
		} else {
			console.log(elem);
			resetEdittingField();
		}
	});
}

function resetEdittingField() {

	$.each($('.edit-text .editting'),function(index, value) {
		console.log("clear text");
		var newVal = $(value).children('.edit-form-field-input').val();
		$(value).children('.edit-value-display').html(newVal).show();
		$(value).children('.edit-form-field-input').hide();
		$(value).removeClass('editting');
		if (newVal.trim() != $(value).children('.edit-original-value').val().trim())
			$(value).addClass('changed');
		else
			$(value).removeClass('changed');
	});
	$.each($('.edit-date .editting'),function(index, value) {
		console.log("clear date");
		var newVal = $(value).children('.edit-form-field-input').val();
		$(value).children('.edit-value-display').html(newVal).show();
		$(value).children('.edit-form-field-input').hide();
		$(value).removeClass('editting');
		if (newVal.trim() != $(value).children('.edit-original-value').val().trim())
			$(value).addClass('changed');
		else
			$(value).removeClass('changed');
	});
	$.each($('.edit-salesRep .editting'),function(index, value) {
		var newVal = $(value).children('.edit-value-display').data('authuserid');
		$(value).removeClass('editting');
		if (newVal != $(value).children('.edit-original-value').val())
			$(value).addClass('changed');
		else
			$(value).removeClass('changed');
		$("#salesRepPopup").remove();
	});
	$.each($('.edit-form-summary-container.editting'), function(index, value) {
		console.log("clear textarea");
		//console.log($(value).find('iframe').contents().find('body').html());
		var newVal = $(value).find('iframe').contents().find('body').html();
		$(value).children('.edit-value-display').html(newVal).show();
		$(value).children('.cleditorMain').hide();
		$(value).removeClass('editting');
		if (newVal != $(value).children('.edit-original-value').val())
			$(value).addClass('changed');
		else
			$(value).removeClass('changed');
	});
	$('html').off('click');
}

function inputKeypress(e) {
	
	if (e.which ==  13 || e.keyCode == 13) {
		// Press Enter
		resetEdittingField();
	} else if (e.which == 9 || e.keyCode == 9) {
		e.preventDefault();
		e.stopPropagation();
		resetEdittingField();
		var id = $(this).blur().getEditInputId();
		$("#edit-field-value-" + (id+1)).click();
	}
}
function dateKeypress(e) {
	if (e.which ==  13 || e.keyCode == 13) {
		// Press Enter
		resetEdittingField();
		$(this).datepicker("hide");
	} else if (e.which == 9 || e.keyCode == 9) {
		e.preventDefault();
		e.stopPropagation();
		var id = $(this).blur().getEditInputId();
		if ($("#edit-field-value-" + (id+1)).length > 0)
			$("#edit-field-value-" + (id+1)).click();
		else {
			resetEdittingField();
			$(this).datepicker("hide");
		}
			
	}
}
function saveNewUnit() {

	console.log("saveNewUnit");

	var dialog = $("#addRequestDialog");

	var unitData = {
		unit_type: 		dialog.find('.unit-type-select').val(),
		name: 			dialog.find('.unit-type-select option:selected').text(),
		options_count: 	dialog.find('.dialog-option').length,
		details: 		dialog.find('.dialog-ta').val(),
		format: 		dialog.find('.dialog-select').val(),
		unitOptions: 	[]
	};

	$.each(dialog.find('.dialog-option'), function(index, value) {
		var pushval = $(value).children('.dialog-option-checkbox').prop('checked') ? 1 : 0;
		unitData.unitOptions.push(pushval);
	});

	buildUnitDOM(unitData);

	$("#addRequestDialog").dialog("close");

}

function initializeDialog() {
	$('.unit-type-select').off('change').on('change', function(e) {
		$('.addRequestDialogContent').remove();
		var url = $("#editAjaxURL").val();
		$.post(url,{fetchUnitInfo:1, type_id: $(this).val()}, function(data) {
			if(data.status == "success") {
				$(data.output).insertBefore(".request-dialog-buttons");

				$('.dialog-ta').on('focus', function() {
					if ($(this).val().trim() == "Details...")
						$(this).val('');
				}).on('blur', function() {
					if ($(this).val().trim() == "")
						$(this).val('Details...');
				});

				$('.dialog-option-checkbox').off('click').on('click', function() {
					if (!$(this).prop('checked'))
						$(this).parent().removeClass('editChosenOption');
					else
						$(this).parent().addClass('editChosenOption');
				});

			} else {

			}
		},"json");
	});
}

function initializeSalesRepPopup() {
	$('.salesRep-option').on('click', function() {
		var name = $(this).text();
		var id = $(this).children('input:hidden').val();

		$("#curseSalesRep").data('authuserid', id);
		$("#curseSalesRep").text(name);

		resetEdittingField();
	});
}

function buildUnitDOM(unitData) {

	var url = $("#editAjaxURL").val();
	$.post(url, {buildDOMUnit: 1, unitData: unitData}, function(data) {
		if (data.status == "success") {

			var unitElement = $(data.output);
			unitElement.insertBefore($('.edit-request-container').last());
			initializeUnitControls();
		} else {

		}
	},"json");
	
}

function initializeUnitControls() {
	$('.request-control-edit').off('click').on('click', function() {

		var request = $(this).parent().parent().parent();

		if (request.hasClass('editting')) {

			request.removeClass('editting');

			request.find('.edit-request-option-checkbox').hide();
			var detailsVal = request.find('.edit-option-details-textarea').val();
			if (request.find('.edit-request-details-display').length > 0)
				request.find('.edit-request-details-display').html(detailsVal).show();
			request.find('.edit-option-details-textarea').hide();

			request.find('.request-control-edit').html('Edit');

		} else {

			request.addClass('editting');
			request.find('.edit-request-option-checkbox').show();
			request.find('.edit-request-details-display').hide();
			request.find('.edit-option-details-textarea').show();
			
			request.find('.request-control-edit').html('Save');
		}
	
	});
	// Need to add unit remove dialog
	$('.request-control-remove').off('click').on('click', function() {
		var self = this;
		var request = $(this).parent().parent().parent();
		if (!request.hasClass('editting')) {
			$("#removeUnitDialog").dialog({width: 450,
				open: function(event, ui) {
					$('.ui-dialog-titlebar').text('Remove Unit?');
					$("#dialogYes").off('click').on('click', function() {
						$(request).remove();
						$("#removeUnitDialog").dialog('close');
					});
					$("#dialogNo").off('click').on('click', function() {
						$("#removeUnitDialog").dialog('close');
					});
				}
			});
		}
	});

	$('.edit-request-option-checkbox').off('click').on('click', function() {
		if (!$(this).prop('checked'))
			$(this).parent().removeClass('editChosenOption');
		else
			$(this).parent().addClass('editChosenOption');
	});
}

function gatherFormData() {

	var formData = {
		requestPin: 	$("#formPin").val(),
		formID: 		$("#formID").val(),
		campaignName: 	$("#campaignName").text().trim(),
		advertiser: 	$("#advertiser").text().trim(),
		agency: 		$("#agency").text().trim(),
		curseSalesRep: 	parseInt($("#curseSalesRep").data('authuserid')),
		timeline1: 		$("#timeline1").text(),
		timeline2: 		$("#timeline2").text(),
		timeline3: 		$("#timeline3").text(),
		timeline4: 		$("#timeline4").text(),
		timeline5: 		$("#timeline5").text(),
		summary: 		$("#summary").text().trim(),
		ftpinfo: 		$("#ftpinfo").text().trim(),
		units:			[]
	};

	// Units
	var l = $("#edit-form-units").children('.edit-request-container').length;
	$.each($("#edit-form-units").children('.edit-request-container'), function(index, value){

		if (!(index == (l - 1))) {
			var unit = $(value);

			var unitData = {
				unitID: unit.children('.hiddenUnitID').length > 0 ? unit.children('.hiddenUnitID').val() : 0,
				unit_type: unit.children('.requestTypeHolder').val(),
				unitOptions: new Array(5),
				details: typeof unit.find('.edit-option-details-textarea').val() === "undefined" ? "" : unit.find('.edit-option-details-textarea').val(),
				format: typeof unit.find('.edit-option-format-select').val() === "undefined" ? "" : unit.find('.edit-option-format-select').val(),
			};

			$.each(unit.find('.edit-request-unit-option'), function(oindex, ovalue) {
				var pushVal = $(ovalue).children('.edit-request-option-checkbox').prop('checked') ? (oindex + 1) : 0;
				unitData.unitOptions[oindex] = pushVal;
				
			});

			formData.units.push(unitData);
		}

	});

	return formData;
}