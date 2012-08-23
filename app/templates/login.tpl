{include file=$header}
<h1 class="maintitle">Login</h1>
<form class="login-form clearfix" method="POST" action="{$path.siteRoot}/login/?s=form&f={$loginForwardString}">
  <div class="login-form-title">Curse Email</div>
  <input type="text" class="login-form-value" name="loginUser" />
  <div class="login-form-title">Password</div>
  <input type="password" class="login-form-value" name="loginPw"/>
  <div class="clearfix"></div>
  <input type="submit" value="Submit" class="login-submit" />
  <input type="hidden" id="loginForwardLink" value="{$path.siteRoot}{$loginForwardString}" />
  <input type="hidden" id="loginDestLink" value="{$loginDestString}" />
</form>
{include file=$footer}