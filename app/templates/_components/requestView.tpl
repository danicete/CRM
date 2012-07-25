<div class="view-page-content">
	<div style="text-align: center;">Request PIN: #{$requestPIN}</div>
	<div class="form-view-container">
		<h3>Campaign Info</h3>
		<div id="form-view-campaign" class="clearfix">
			<div class="form-view-label">Campaign Name</div>
			<div class="form-view-info">{$requestRow.campaignName}</div>
			<div class="form-view-label">Advertiser</div>
			<div class="form-view-info">{$requestRow.advertiser}</div>
			<div class="form-view-label">Agency</div>
			<div class="form-view-info">{$requestRow.agency}</div>
			<div class="form-view-label">Curse Sales Rep</div>
			<div class="form-view-info">{$curseSalesRep}</div>
			<div class="form-view-label">Launch Date</div>
			<div class="form-view-info">{$requestRow.launchDate|date_format:"%D"}</div>
		</div>
		<div id="form-view-summary">
			<h4>Summary of Request</h4>
			<p>{$requestRow.summary}</p>
			<h4>FTP Info</h4>
			<p>{$requestRow.ftpinfo}</p>
		</div>
		<div id="form-view-timeline">
			<div class="form-view-label">1st Mockups</div>
			<div class="form-view-info">{$requestRow.timeline1|date_format:"%D"}</div>
			<div class="clearfix"></div>
			<div class="form-view-label">Curse Feedback</div>
			<div class="form-view-info">{$requestRow.timeline2|date_format:"%D"}</div>
			<div class="clearfix"></div>
			<div class="form-view-label">Final Mockups</div>
			<div class="form-view-info">{$requestRow.timeline3|date_format:"%D"}</div>
			<div class="clearfix"></div>
			<div class="form-view-label">Final Feedback</div>
			<div class="form-view-info">{$requestRow.timeline4|date_format:"%D"}</div>
			<div class="clearfix"></div>
			<div class="form-view-label">Initial Launch</div>
			<div class="form-view-info">{$requestRow.timeline5|date_format:"%D"}</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
		<div id="form-view-units">
			{foreach from=$unitDetails item=unit}
				<div class="form-view-unit clearfix">
					<div class="form-view-unit-mocks">
						<h5>Unit Mocks</h5>
						{foreach from=$unit.mocks item=mock name=mocksLoop}
							<a href="{$mock.imgPath}">
								{$mock.pageName}
							</a>
						{/foreach}
						{if $unit.mocks|@count == 0}
							<p class="no-mocks-small">No mocks have been added yet.</p>
						{/if}
					</div>
					<h3>{$unit.name}</h3>
					{foreach name=optionsLoop from=$unit.timeline item=option}
					{if $unit.options[$smarty.foreach.optionsLoop.index] == 1}
					<div class="form-view-unit-option {if $unit.options[$smarty.foreach.optionsLoop.index] == 1}selectedOption{/if}">
						{$unit.timeline[$smarty.foreach.optionsLoop.index]}
					</div>
					{/if}
					{/foreach}
					<h4 class="unit-subtitle">Unit Details</h4>
					<div class="form-view-unit-details">
						{if $unit.details}
						{$unit.details}
						{else}
						<span style="font-size:12px;">No details were specified for this unit.</span>
						{/if}
					</div>
				</div>
			{/foreach}
		</div>
		<div id="form-view-user-actions">
			<h3>User Controls</h3>
			{if $loggedIn}
			<ul class="user-actions-list">
				{if $showControls}
				<li>
					<a id="actionEdit" class="user-action-button" href="{$path.siteRoot}/edit/?rpin={$requestPIN}">Edit</a>
				</li>
				{/if}
				<li>
					<a id="actionFollowers" class="user-action-button" href="{$path.siteRoot}/edit/view-followers/?rpin={$requestPIN}">Followers</a>
				</li>
				{if $showControls}
				<li>
					<a id="actionSubmitMocks" class="user-action-button" href="{$path.siteRoot}/edit/submit-mocks/?rpin={$requestPIN}">Manage Mocks</a>
				</li>
				{/if}
			</ul>
			{else}
			<p style="width: 170px">Please log in to view user controls.</p style="width: 170px">
			{/if}
		</div>
	</div>
</div>