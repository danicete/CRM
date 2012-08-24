{include file=$header}
<h2 class="maintitle newtitle">New Creative Request</h2>
<div class="formContainer">
  <div class="form-content-container">
    {$formPage1}
    {$formPage2}
    {$formPage3}
    {$formFinishedPage}
    {$formCompletePage}
  </div>  <!-- .form-content-container -->
  <div class="form-bottom-container">
    <ul class="form-bottom-list">
      <li><a class="formBack form-button hidden-button">Back<div class="form-button-icon back"></div></a></li>
      <li id="list-page-1" class="form-page-count active-form-page">1</li>
      <li id="list-page-2" class="form-page-count">2</li>
      <li id="list-page-3" class="form-page-count">3</li>
      <li><a class="formNext form-button">Next<div class="form-button-icon next"></div></a></li>
    </ul> 
  </div>  <!-- .form-bottom-container -->
</div>  <!-- .formContainer -->
<div id="form-submit-URL" data-formsubmiturl="{$formSubmitURL}"></div>
<div id="curseSalesRep" data-authuserid="{$authUserID}"></div>
{include file=$footer}