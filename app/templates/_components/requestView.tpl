<div class="view-page-content">
	<div class="view-pin-container">Request PIN: #{$requestPIN}</div>
	<div class="form-view-container">
		<section id="form-view-campaign">
			<div id="campaign-info">
				<div class="section-button campaign"></div>
				<div>Campaign Name:<span>{$requestRow.campaignName}</span></div>
				<div>Advertiser:<span>{$requestRow.advertiser}</span></div>
				<div>Agency:<span>{$requestRow.agency}</span></div>
				<div>Curse Sales Rep:<span>{$curseSalesRep}</span></div>
				<div>Launch Date:<span>{$requestRow.launchDate|date_format:"%D"}</span></div>
			</div>
			<div id="timeline-info">
				<div>Curse Provides 1st Mockups:<span>{$requestRow.timeline1|date_format:"%D"}</span></div>
				<div>Client Provides Feedback:<span>{$requestRow.timeline2|date_format:"%D"}</span></div>
				<div>Curse Provides Final Mockups:<span>{$requestRow.timeline3|date_format:"%D"}</span></div>
				<div>Curse Provides Final Feedback:<span>{$requestRow.timeline4|date_format:"%D"}</span></div>
				<div>Initial Campaign Launch:<span>{$requestRow.timeline5|date_format:"%D"}</span></div>
			</div>
			<div class="clearfix"></div>
		</section>
		<div id="form-view-status" style="display:none;">
			<p>This request's current status: </p>
			 <div class="form-view-status status-{$requestRow.status}">{$requestRow.status}</div>
		</div>
		<section id="form-view-summary">
			<div class="section-button summary"></div>
			<p>{$requestRow.summary}</p>
		</section>
		<section id="form-view-ftp">
			<div class="section-button ftp"></div>
			<p>{$requestRow.ftpinfo}</p>
		</section>
		<div id="form-view-user-actions">
			<h3>User Controls</h3>
			{if $loggedIn}
			<ul class="user-actions-list">
				{if $showControls}
				<li>
					<a id="actionEdit" class="user-action-button" href="{$path.siteRoot}/edit/?rpin={$requestPIN}">
						<div class="action-icon edit"></div>
						Edit
					</a>
				</li>
				{/if}
				<li>
					<a id="actionFollowers" class="user-action-button" href="{$path.siteRoot}/edit/view-followers/?rpin={$requestPIN}">
						<div class="action-icon followers"></div>
						Followers
					</a>
				</li>
				{if $showControls}
				<li>
					<a id="actionSubmitMocks" class="user-action-button" href="{$path.siteRoot}/edit/submit-mocks/?rpin={$requestPIN}">
						<div class="action-icon mocks"></div>
						Manage Mocks
					</a>
				</li>
				{/if}
			</ul>
			{else}
			<p style="width: 170px">Please log in to view user controls.</p style="width: 170px">
			{/if}
		</div>
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
					{if $unit.timeline|@count > 0}
					{foreach name=optionsLoop from=$unit.timeline item=option}
					{if $unit.options[$smarty.foreach.optionsLoop.index] == 1}
					<div class="form-view-unit-option {if $unit.options[$smarty.foreach.optionsLoop.index] == 1}selectedOption{/if}">
						{$unit.timeline[$smarty.foreach.optionsLoop.index]}
					</div>
					{/if}
					{/foreach}
					{/if}
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
		
	</div>
</div>