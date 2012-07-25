<div class="recent-requests-container loggedIn">
	<h4>Your Recent Requests</h4>
	<div class="recent-requests-content">
		{foreach from=$recentRequests item=request name=recentRequestsLoop}
			<div class="recent-row clearfix {if $smarty.foreach.recentRequestsLoop.index%2 == 1}recentEven{/if}">
				<div class="request-row-id">
					<a href="{$path.siteRoot}/view/?rpin={$request.pin}" class="request-row-id-link">#&nbsp;{"%05d"|sprintf:$request.id}</a>
				</div>
				<div class="request-row-salesRep">{$request.campaignName|truncate:24:"..."}</div>
				<div class="request-row-options">
					<a href="{$path.siteRoot}/edit/?rpin={$request.pin}">Edit</a>
					<a class="unfollow-option" href="{$path.siteRoot}/edit/followers/?userid={$authUserID}&requestid={$request.id}">Unfollow</a>
				</div>
			</div>
		{/foreach}
	</div>
</div>	