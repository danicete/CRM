<div style="width: 800px;margin: 0  auto;">
	<h2>New Request PIN: {$formData.pin}</h2>
	<p>A new request has been submitted.</p>
	<p>This request is for the <b>{$formData.campaignName}</b> campaign and has an initial
		launch date of <b>{$formData.launchDate}</b></p>
	<a href="{$path.siteRoot}/view/?rpin={$formData.pin}">View Request</a>
</div>