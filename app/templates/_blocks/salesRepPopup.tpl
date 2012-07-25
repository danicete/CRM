<div id="salesRepPopup">
	{if $salesRepInfo|@count > 0}
	<h3>Choose Sales Rep</h3>
	<div class="salesRep-options-container">
		{foreach from=$salesRepInfo item=s name=salesRepLoop}
			<div class="salesRep-option">
				{$s.name}
				<input type="hidden" value="{$s.id}" />
			</div>	
		{/foreach}
	</div>
	{else}
	<h3>No Other Followers</h3>
	{/if}
</div>