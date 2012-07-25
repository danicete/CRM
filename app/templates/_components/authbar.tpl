<div class="authbar">
	<a id="authHomeBtn" href="{$path.siteRoot}">Home</a>
	{if $loggedIn == 1}
		<p>You are logged in as: <span>{$authName}</span></p>
		<a id="authLogoff" href="{$path.siteRoot}/logout/?currPage={$path.host}{$request_uri}?{$queryParams}">Log out</a>
	{else}
		<a id="authLogin" href="{$path.siteRoot}/login-form.ajax/">Log in</a>
		<p>{$authMessage}</p>
	{/if}
</div>