<div class="edit-request-container">
	<div class="edit-request-content">
		<h4 class="edit-request-title">{$unit.name}</h4>
		{foreach from=$unit.unitOptions item=option name=optionsLoop}
		{if $smarty.foreach.optionsLoop.index%2 == 0}
			<div class="unit-option-group">
		{/if}
			<div class="edit-request-unit-option">
				{if $smarty.foreach.optionsLoop.index < $unit.options_count}
				<input type="checkbox" class="edit-request-option-checkbox option{$smarty.foreach.optionsLoop.index+1}" {if $option==1}checked="checked"{/if} />
				{/if}
				{$unit.optionquestion[$smarty.foreach.optionsLoop.index]}
			</div>
		{if $smarty.foreach.optionsLoop.index%2 == 1 || $smarty.foreach.optionsLoop.last}
			</div>
		{/if}
		{/foreach}
		<div class="clearfix"></div>
		<div class="edit-form-details-header">Unit Details</div>
		<textarea class="edit-option-details-textarea">{$unit.details}</textarea>
	</div>
	<div class="edit-request-remove">Remove</div>
	<input type="hidden" class="requestTypeHolder" value="{$unit.unit_type}" />
	<input type="hidden" class="hiddenUnitID" value="{$unit.id}" />
</div>