{include file=$header}
<h1 class="maintitle viewtitle">Viewing Request #{"%05d"|sprintf:$requestRow.id}</h1>
<div class="full-page-container clearfix">
  {$requestContent}
</div>
<div id="followersDialog" style="display: none"></div>
{include file=$footer}