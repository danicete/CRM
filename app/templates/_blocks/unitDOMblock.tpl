<div class="edit-request-container">
	<div class="edit-request-content">
		<h4 class="edit-request-title">{$unit.name}</h4>
		{foreach from=$unit.unitOptions item=option name=optionsLoop}
			<div class="edit-request-unit-option {if $option==1}editChosenOption{/if}">
				{$unit.optionquestion[$smarty.foreach.optionsLoop.index]}
				{if $smarty.foreach.optionsLoop.index < $unit.options_count}
				<input type="checkbox" class="edit-request-option-checkbox option{$smarty.foreach.optionsLoop.index+1}" style="display:none;" {if $option==1}checked="checked"{/if} />
				{/if}
			</div>

		{/foreach}
		{if $unit.details}
			<div class="edit-form-details-header">Details:</div>
			<div class="edit-request-details-display">
				{$unit.details}
				
			</div>
			<textarea style="display: none;" class="edit-option-details-textarea">{$unit.details}</textarea>
		{/if}
		{if $unit.format}
<!-- 			<div class="edit-request-format-display">
				<span class="donthide">Format:</span>
				{$unit.format}
				
			</div>
			<select style="display: none;" class="edit-option-format-select">{$unit.format}
				<option value="psd" {if $unit.format == 'psd'}selected="selected"{/if}>PSD</option>
				<option value="jpg/png" {if $unit.format == 'jpg/png'}selected="selected"{/if}>JPG/PNG</option>
				<option value="ai"{if $unit.format == 'ai'}selected="selected"{/if}>AI</option>
			</select> -->
		{/if}
	</div>
	<div class="edit-request-controls">
		<ul>
			<li class="request-control-edit">Edit</li>
			<li class="request-control-remove">Remove</li>
		</ul>
	</div>
	<input type="hidden" class="requestTypeHolder" value="{$unit.unit_type}" />
	<input type="hidden" class="hiddenUnitID" value="{$unit.id}" />
</div>