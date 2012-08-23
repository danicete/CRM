<div id="form-page-1" class="form-page">
  <section id="campaign">
    <div class="section-button campaign"></div>
    <label for="campaignName">Campaign Name:</label>
    <input type="text" id="campaignName" class="campaign-form-input" />
    <div class="clearfix"></div>
    <label for="advertiser">Advertiser:</label>
    <input type="text" id="advertiser" class="advertiser-form-input" />
    <div class="clearfix"></div>
    <label for="agency">Agency:</label>
    <input type="text" id="agency" class="agency-form-input" />
    <div class="clearfix"></div>
    <label for="curseSalesRep">Curse Sales Rep:</label>
    <input type="text" disabled="disabled" class="salesrep-form-input" value="{$authName}" />
    <div class="clearfix"></div>
    <label for="launchDate">Launch Date:</label>
    <input type="text" id="launchDate" class="formDatePicker launchDate-form-input" />
    <div class="clearfix"></div>
  </section>
  <section id="timeline">
    <label for="timeline1">Curse Provides 1st Mockups:</label>
    <input type="text" id="timeline1" class="formDatePicker" />
    <div class="clearfix"></div>
    <label for="timeline2">Client Provides Feedback:</label>
    <input type="text" id="timeline2" class="formDatePicker" />
    <div class="clearfix"></div>
    <label for="timeline3">Curse Provides Final Mockups:</label>
    <input type="text" id="timeline3" class="formDatePicker" />
    <div class="clearfix"></div>
    <label for="timeline4">Client Provides Final Feedback:</label>
    <input type="text" id="timeline4" class="formDatePicker" />
    <div class="clearfix"></div>
    <label for="timeline5">Initial Campaign Launch:</label>
    <input type="text" id="timeline5" class="formDatePicker" />
    <div class="clearfix"></div>
  </section>
  <div class="clearfix"></div>
  <section id="summary">
    <div class="section-button summary"></div>
    <p>Summary of Unit Request (campaign goals, general creative direction, irregularities, etc.)</p>
    <textarea id="creativeUnits" class="form-ta"></textarea>
  </section>
  <section id="ftp">
    <div class="section-button ftp"></div>
    <p>FTP Information or YouSendIt Link:<span class="form-ast">*</span></p>
    <textarea id="ftpinfo" class="form-ta"></textarea>
    <p class="ftp-note"><span class="form-ast">*</span> Please note that all assets should be delivered via FTP or YouSendIt.
      If there is any other method of asset delivery, please write instructions on how to retieve the 
      assets in this section.</p>
  </section>
</div>