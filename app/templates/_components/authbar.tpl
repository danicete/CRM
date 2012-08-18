<div class="authbar">
	<a id="authHomeBtn" href="{$path.siteRoot}">Home</a>
	{if $loggedIn == 1}
		<a id="authLogoff" href="{$path.siteRoot}/logout/?currPage={$path.host}{$request_uri}?{$queryParams}">Log out</a>
		<p>You are logged in as: <span class="username">{$authName}</span><span class="authpipe">|</span></p>
	{else}
		<a id="authLogin" href="{$path.siteRoot}/login-form.ajax/">Log in</a>
		<p>{$authMessage}<span class="authpipe">|</span></p>
	{/if}
	<div class="clearfix"></div>
</div>