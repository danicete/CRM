<div id="addFollowersDialogContent">
	<div class="addFollowersUserContainer">
		{foreach from=$usersInfo item=user name=followersLoop}
			<div class="follower-container">
				<div class="follower-isadmin">
					<input type="checkbox" value="{$user.id}" class="add-user-checkbox" />
				</div>
				<div class="follower-name">{$user.name}</div>
				<div class="follower-email">{$user.email}</div>
				<div class="follower-controls">
					<input type="hidden" class="follower-hidden-id" value="{$user.id}">
				</div>
			</div>	
		{/foreach}
	</div>
	<div class="follower-actions">
		<div class="follower-action" id="followerDialogAdd">Add Follower(s)</div>
		<div class="follower-action" id="followerDialogClose">Close</div>
	</div>
	<input type="hidden" id="formID" value="{$reqRow.id}" />
</div>
<script>
{literal}

$('.addFollowersUserContainer .follower-container').on('click', function() {
	if($(this).hasClass('add-this-follower')) {
		$(this).removeClass("add-this-follower");
		$(this).find('.add-user-checkbox').prop('checked', false);
	} else {
		$(this).addClass("add-this-follower");
		$(this).find('.add-user-checkbox').prop('checked', true);
	}
});

$("#followerDialogAdd").on('click', function() {

	var url = $("#followersURL").val();
	var followersToAdd = [];

	$.each($('.add-this-follower'), function(index, value) {
		followersToAdd.push($(value).find('.follower-hidden-id').val());
	});
	
	$.post(url, {addFollowers: 1, followers: followersToAdd, formID: $("#formID").val()}, function(data) {
		if(data.status == "success") {
			window.location = window.location;
		} else {

		}
	},"json");
});
{/literal}
</script>