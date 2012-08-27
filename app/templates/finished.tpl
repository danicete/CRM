{inlcude file=$header}
<h1 class="maintitle">Request Complete</h1>
<div id="form-complete-page" class="form-page">
  <h2>You've successfully submitted a Creative Request!</h2>
  <h5>So awesome!</h5>
  <div class="complete-info">
    <div class="submit-summary">Changing your creative request or double-checking for errors is something
      you're probably going to want to do. Here's the Request PIN that you'll use
      to access the request you created. You'll also have a copy of this code in the
        email that you will be receiving... now!</div>
    <div id="pin-container">{$requestPin}</div>
    <a class="form-complete-view" href="{$path.siteRoot}{$viewURL}">Click here to view your request</a>
  </div>  
</div>
</div> 
{include file=$footer}