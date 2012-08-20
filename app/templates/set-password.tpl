{include file=$header}
<h1 class="maintitle">Set your password, {$user.name}</h1>
<div style="margin: 20px auto; width: 260px;">
  <input type="password" id="newPass" />
  <button id="submitNewPass">Submit</button>
</div>
<input type="hidden" id="submitURL" value="{$path.siteRoot}/set-password/" />
<input type="hidden" id="userID" value="{$user.id}" />
<input type="hidden" id="userEmail" value="{$user.email}" />
{include file=$footer}