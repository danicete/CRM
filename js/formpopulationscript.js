$("#campaignName").val("James Test Campaign - " + new Date());
$("#advertiser").val("James Inc.");
$("#agency").val("James Inc.");
$("#launchDate").val("07/25/2012");

$("#timeline1").val("07/21/2012");
$("#timeline2").val("07/22/2012");
$("#timeline3").val("07/26/2012");
$("#timeline4").val("07/24/2012");
$("#timeline5").val("07/25/2012");


$("#unit1").click();
$("#unit1-option1").prop("checked", true);
$("#unit1-option2").prop("checked", true);
$("#unit1").siblings(".unit-request-details").find("input:radio").eq(0).prop("checked", true);
$("#unit1-details").val("test1");

$("#unit2").click();
$("#unit2-option1").prop("checked", true);
$("#unit2").siblings(".unit-request-details").find("input:radio").eq(1).prop("checked", true);
$("#unit2-details").val("test2");