<div class="addRequestDialogContent">
	{section loop=$typeInfo.options_count name=typeInfoLoop}
		<div class="dialog-option">
			{$typeInfo.options[$smarty.section.typeInfoLoop.index]}
			<input type="checkbox" class="dialog-option-checkbox" />
		</div>	
	{/section}
	<textarea class="dialog-ta">Details...</textarea>
	<select class="dialog-select" style="display: none">
		<option value="jpg/png">Format:</option>
		<option value="psd">PSD</option>
		<option value="jpg/png" selected="selected">JPG/PNG</option>
		<option value="ai">AI</option>
	</section>	
</div>