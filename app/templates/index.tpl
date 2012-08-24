
{include file=$header}

<h1 class="maintitle">Creative Request Manager</h1>
<div class="optionButton-container">
	<a class="optionButton new" href="{$path.siteRoot}/new/">
	  <div class="optionButtonContent">
	  	<div class="optionButton-wrapper">
		    <h4>New Request</h4>
		    <p>Want to submit a new creative request? Click here!</p>
		</div>
	  </div> 
	</a>
	<div class="optionButton-separator"></div>
	<a class="optionButton edit" href="{$path.siteRoot}/lookup/">
	  <div class="optionButtonContent">
	  	<div class="optionButton-wrapper">
		    <h4>View/Edit Existing Request</h4>
		    <p>If you want to view or make changes to a request that you made, click here.</p>
		</div>
	  </div>  
	</a>
</div>	

{include file=$footer}