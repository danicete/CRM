<div style="width: 800px;margin: 0  auto;">
	<h2>New request for: <a href="{$path.siteRoot}/view/?rpin={$formData.pin}">{$formData.campaignName}</a></h2>
	<p>A new creative request has been submitted.</p>
	<div><b>Sales Rep:</b>&nbsp;{$salesRepName}</div>
	<div><b>Launch Date:</b>&nbsp;{$formData.launchDate}</div>
	<br />
	<br />
	<br />
	<div style="width: 600px;text-align: center;">Approval Schedule</div>
	<table style="width: 600px;">
		<tr><td style="font-weight: bold;">Curse Provides 1st Mockups:</td><td>{$formData.timeline1}</td></tr>
		<tr><td style="font-weight: bold;">Client Provides Feedback:</td><td>{$formData.timeline2}</td></tr>
		<tr><td style="font-weight: bold;">Curse Provides Final Mockups:</td><td>{$formData.timeline3}</td></tr>
		<tr><td style="font-weight: bold;">Client Provides Final Feedback:</td><td>{$formData.timeline4}</td></tr>
		<tr><td style="font-weight: bold;">Initial Campaign Launch:</td><td>{$formData.timeline5}</td></tr>
	</table>
	<br />
	<br />
	<div><b>FTP Info:</b>&nbsp;{$formData.ftpinfo}</div>
	<p><a href="{$path.siteRoot}/view/?rpin={$formData.pin}">View Request</a></p>
</div>