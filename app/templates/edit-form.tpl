<div class="edit-form-wrapper">

	<h1 class="maintitle edittitle">Editing Request #{"%05d"|sprintf:$requestData.id}</h1>
	<div class="edit-form-container clearfix">
		<section id="edit-form-campaign" class="edit-form-section clearfix">
			<div class="section-button campaign"></div>
			<div id="edit-form-campaign-info">
				{foreach from=$campaignInfo item=c name=campaignLoop}
				<div class="edit-row clearfix">
					<div class="edit-form-field edit-{$c.type}">
						<div id="edit-field-value-{$smarty.foreach.campaignLoop.index+1}" class="edit-form-field-value">
							<div class="edit-value-display" id="{$c.fieldDOMId}" {if $c.userID}data-authuserid="{$c.userID}"{/if}>{$c.value}</div>
							<input type="text" class="edit-form-field-input" style="display: none;" value="{$c.value}" />
							<input type="hidden" class="edit-original-value" value="{if $c.userID}{$c.userID}{else}{$c.value}{/if}" />
						</div>
					</div>
					<div class="edit-form-label">{$c.title}:</div>
					
				</div>
				{/foreach}
			</div>
			<div id="edit-form-timeline-info">
				{foreach from=$timelineInfo item=c name=timelineLoop}
				<div class="edit-row clearfix">
					<div class="edit-form-field edit-{$c.type}">
						<div id="edit-field-value-{$smarty.foreach.campaignLoop.index+$smarty.foreach.timelineLoop.index+2}" class="edit-form-field-value">
							<div class="edit-value-display" id="{$c.fieldDOMId}">{$c.value|date_format:"%m/%d/%Y"}</div>
							<input type="text" class="edit-form-field-input" style="display: none;" value="{$c.value|date_format:"%m/%d/%Y"}" />
							<input type="hidden" class="edit-original-value" value="{$c.value|date_format:"%m/%d/%Y"}" />
						</div>
					</div>
					<div class="edit-form-label timeline-label">{$c.title}:</div>
					
				</div>
				{/foreach}
			</div>
		</section><!-- #edit-form-campaign -->
		<section id="edit-form-summary" class="edit-form-section">
			<div class="section-button summary"></div>
			<div class="edit-form-summary-container edit-form-field-value">
				<div class="edit-value-display" id="summary">{$requestData.summary}</div>
				<textarea id="test" class="edit-form-textarea" style="display: none;">{$requestData.summary}</textarea>
				<input type="hidden" class="edit-original-value" value="{$requestData.summary}" />
			</div>
		</section><!-- #edit-form-summary -->
		<section id="edit-form-ftp" class="edit-form-section">
			<div class="section-button ftp"></div>
			<div class="edit-form-summary-container edit-form-field-value">
				<div class="edit-value-display" id="ftpinfo">{$requestData.ftpinfo}</div>
				<textarea class="edit-form-textarea" style="display: none;">{$requestData.ftpinfo}</textarea>
				<input type="hidden" class="edit-original-value" value="{$requestData.ftpinfo}" />
			</div>	
		</section><!-- #edit-form-ftp -->
		<div class="addRequestContent">Request Another Unit</div>
		<section id="edit-form-units" class="edit-form-section">
			{foreach from=$unitsInfo item=unit name=unitsLoop}
				{include file=$unitDOMblock}
			{/foreach}
				
		</section><!-- #edit-form-units -->
	</div><!-- .edit-form-container -->
	<div class="edit-form-user-buttons-container clearfix">
		<div class="edit-form-user-button" id="resetform">
			Reset Form
		</div>
		<div class="edit-form-user-button" id="saveform">
			Save Changes
		</div>
	</div>
	{include file=$addRequestDialog}
	{include file=$removeUnitDialog}
	<input type="hidden" id="formSavePostURL" value="{$path.siteRoot}/edit/" />
	<input type="hidden" id="editAjaxURL" value="{$path.siteRoot}/edit.ajax/" />
	<input type="hidden" id="formID" value="{$requestData.id}" />
	<input type="hidden" id="formPin" value="{$requestData.pin}" />
</div><!-- .edit-form-wrapper -->