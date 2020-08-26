<script src="https://cdn.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.19761" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/vendor/maskedinput.min.js?v=3.3.19761" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/vendor/jquery.maskedinput.min.js?v=3.3.19761" type="text/javascript"></script>
<!--[if lt IE 9]><script src="https://cdn.jotfor.ms/js/vendor/flashcanvas.js?3.3.19761" type="text/javascript"></script><![endif]-->
<script src="https://cdn.jotfor.ms/js/vendor/jSignature.min.noconflict.js?3.3.19761" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/vendor/jotform.signaturepad.js?3.3.19761" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.19761" type="text/javascript"></script>
<script type="text/javascript">
   JotForm.setConditions([{"action":[{"id":"action_1584519142188","visibility":"Show","isError":false,"field":"11"}],"id":"1584519151398","index":"0","link":"Any","priority":"0","terms":[{"id":"term_1584519142188","field":"10","operator":"equals","value":"Yes","isError":false}],"type":"field"},{"action":[{"id":"action_1584518790635","visibility":"ShowMultiple","isError":false,"fields":["8","9"]}],"id":"1584518806978","index":"1","link":"Any","priority":"1","terms":[{"id":"term_1584518790635","field":"7","operator":"equals","value":"Yes","isError":false}],"type":"field"}]);
	JotForm.init(function(){
if (window.JotForm && JotForm.accessible) $('input_18').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_8').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_9').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_11').setAttribute('tabindex',0);

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("15", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.setCalendar("15", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""});
	JotForm.newDefaultTheme = true;
	JotForm.newPaymentUIForNewCreatedForms = false;
	JotForm.newPaymentUI = true;
      JotForm.alterTexts(undefined);
	JotForm.clearFieldOnHide="disable";
	JotForm.submitError="jumpToFirstError";
    /*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([null,{"name":"heading","qid":"1","text":"Coronavirus Self Declaration Form","type":"control_head"},{"name":"submit2","qid":"2","text":"Submit","type":"control_button"},{"name":"name","qid":"3","text":"Name","type":"control_fullname"},null,null,{"name":"divider","qid":"6","type":"control_divider"},{"name":"haveYou7","qid":"7","text":"Have you traveled abroad, other city, hospitals for the last 2 months?","type":"control_radio"},{"name":"nameOf8","qid":"8","subLabel":"Country, State, City","text":"Name of the place(s) visited","type":"control_textarea"},{"name":"datesOf","qid":"9","subLabel":"Arrival and return dates for each area","text":"Dates of travel","type":"control_textarea"},{"name":"haveYou10","qid":"10","text":"Have you been in contact with people being infected, suspected or diagnosed with COVID-19?","type":"control_radio"},{"name":"yourRelationship","qid":"11","text":"Your relationship with the people and your last contact date with them","type":"control_textarea"},{"name":"pleaseState","qid":"12","text":"Please state whether you've experienced\u002Fare experiencing the following","type":"control_matrix"},{"name":"areYou","qid":"13","text":"Are you Pregnant?","type":"control_radio"},{"name":"input14","qid":"14","text":"I acknowledge that the information I've given is accurate and complete.","type":"control_text"},{"name":"date","qid":"15","text":"Date","type":"control_datetime"},{"name":"signature","qid":"16","text":"Signature","type":"control_signature"},{"description":"","name":"input17","qid":"17","text":"","type":"control_fullname"},{"description":"","name":"address","qid":"18","subLabel":"Country, State, City","text":"Address","type":"control_textarea"},{"description":"","name":"areYou19","qid":"19","text":"Are you a healthcare worker?","type":"control_radio"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"heading","qid":"1","text":"Coronavirus Self Declaration Form","type":"control_head"},{"name":"submit2","qid":"2","text":"Submit","type":"control_button"},{"name":"name","qid":"3","text":"Name","type":"control_fullname"},null,null,{"name":"divider","qid":"6","type":"control_divider"},{"name":"haveYou7","qid":"7","text":"Have you traveled abroad, other city, hospitals for the last 2 months?","type":"control_radio"},{"name":"nameOf8","qid":"8","subLabel":"Country, State, City","text":"Name of the place(s) visited","type":"control_textarea"},{"name":"datesOf","qid":"9","subLabel":"Arrival and return dates for each area","text":"Dates of travel","type":"control_textarea"},{"name":"haveYou10","qid":"10","text":"Have you been in contact with people being infected, suspected or diagnosed with COVID-19?","type":"control_radio"},{"name":"yourRelationship","qid":"11","text":"Your relationship with the people and your last contact date with them","type":"control_textarea"},{"name":"pleaseState","qid":"12","text":"Please state whether you've experienced\u002Fare experiencing the following","type":"control_matrix"},{"name":"areYou","qid":"13","text":"Are you Pregnant?","type":"control_radio"},{"name":"input14","qid":"14","text":"I acknowledge that the information I've given is accurate and complete.","type":"control_text"},{"name":"date","qid":"15","text":"Date","type":"control_datetime"},{"name":"signature","qid":"16","text":"Signature","type":"control_signature"},{"description":"","name":"input17","qid":"17","text":"","type":"control_fullname"},{"description":"","name":"address","qid":"18","subLabel":"Country, State, City","text":"Address","type":"control_textarea"},{"description":"","name":"areYou19","qid":"19","text":"Are you a healthcare worker?","type":"control_radio"}]);}, 20); 
</script>
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.19761" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5eb3b4ae85bd2e1e2966db96"/>
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_styles.css?3.3.19761" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_feature.css?3.3.19761" />
<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
.form-all {
  font-family: "Inter", sans-serif;
}
.form-all {
  width: 100%;
  max-width: 752px;
}
.form-label-left,
.form-label-right {
  width: 230px;
}
.form-label {
  display: inline-block;
  white-space: normal;
  word-break: break-word;
}
.form-label.form-label-auto {
  display: block;
  float: none;
  text-align: left;
}
.form-label-left {
  display: inline-block;
  white-space: normal;
  text-align: left;
}
.form-label-right {
  display: inline-block;
  white-space: normal;
  text-align: right;
}
.form-label-top {
  white-space: normal;
  display: block;
  float: none;
  text-align: left;
}
.form-radio-item label:before {
  top: 0;
}
.form-all {
  font-size: 16px;
}
.form-label {
  font-weight: bold;
}
.form-checkbox-item label,
.form-radio-item label {
  font-weight: normal;
}
.supernova {
  background-color: #ffffff;
  background-color: #ecedf3;
}
.supernova body {
  background-color: transparent;
}
/*
@width30: (unit(@formWidth, px) + 60px);
@width60: (unit(@formWidth, px)+ 120px);
@width90: (unit(@formWidth, px)+ 180px);
*/
/* | */
@media screen and (min-width: 480px) {
  .supernova .form-all {
    border: 1px solid #cdcfdf;
    -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1);
    box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1);
  }
}
/* | */
/* | */
@media screen and (max-width: 480px) {
  .jotform-form .form-all {
    margin: 0;
    width: 100%;
  }
}
/* | */
/* | */
@media screen and (min-width: 480px) and (max-width: 767px) {
  .jotform-form .form-all {
    margin: 0;
    width: 100%;
  }
}
/* | */
/* | */
@media screen and (min-width: 480px) and (max-width: 751px) {
  .jotform-form .form-all {
    margin: 0;
    width: 100%;
  }
}
/* | */
/* | */
@media screen and (min-width: 768px) {
  .jotform-form {
    padding: 60px 0;
    width: 100%;
  }
}
/* | */
/* | */
@media screen and (max-width: 751px) {
  .jotform-form .form-all {
    margin: 0;
    width: 100%;
  }
}
/* | */
.supernova .form-all,
.form-all {
  background-color: #ffffff;
  border: 1px solid transparent;
}
.form-header-group {
  border-color: #e6e6e6;
}
.form-matrix-table tr {
  border-color: #e6e6e6;
}
.form-matrix-table tr:nth-child(2n) {
  background-color: #f2f2f2;
}
.form-all {
  color: #2c3345;
}
.form-header-group .form-header {
  color: #2c3345;
}
.form-header-group .form-subHeader {
  color: #404a64;
}
.form-sub-label {
  color: #404a64;
}
.form-label-top,
.form-label-left,
.form-label-right,
.form-html {
  color: #555555;
}
.form-checkbox-item label,
.form-radio-item label {
  color: #6f6f6f;
}
.form-line.form-line-active {
  -webkit-transition-property: all;
  -moz-transition-property: all;
  -ms-transition-property: all;
  -o-transition-property: all;
  transition-property: all;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  -ms-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease;
  -moz-transition-timing-function: ease;
  -ms-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
  background-color: #ffffe0;
}
/* omer */
.form-radio-item,
.form-checkbox-item {
  padding-bottom: 0px !important;
}
.form-radio-item:last-child,
.form-checkbox-item:last-child {
  padding-bottom: 0;
}
/* omer */
.form-single-column .form-checkbox-item,
.form-single-column .form-radio-item {
  width: 100%;
}
.form-checkbox-item .editor-container div,
.form-radio-item .editor-container div {
  position: relative;
}
.form-checkbox-item .editor-container div:before,
.form-radio-item .editor-container div:before {
  display: inline-block;
  vertical-align: middle;
  left: 0;
  width: 18px;
  height: 18px;
}
.supernova {
  height: 100%;
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
  background-repeat: repeat;
}
.supernova {
  background-image: none;
}
#stage {
  background-image: none;
}
/* | */
.form-all {
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
  background-repeat: repeat;
}
.form-header-group {
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
}
li.form-line {
  margin-top: 12px;
  margin-bottom: 12px;
}
.form-line {
  padding: 12px 10px;
}
.form-all .qq-upload-button,
.form-all .form-submit-button,
.form-all .form-submit-reset,
.form-all .form-submit-print {
  font-size: 1em;
  padding: 9px 15px;
  font-family: "Inter", sans-serif;
  font-size: 16px;
  font-weight: normal;
}
.form-all .form-pagebreak-back,
.form-all .form-pagebreak-next {
  font-size: 1em;
  padding: 9px 15px;
  font-family: "Inter", sans-serif;
  font-size: 16px;
  font-weight: normal;
}
/*
& when ( @buttonFontType = google ) {
	@import (css) "@{buttonFontLink}";
}
*/
h2.form-header {
  line-height: 1.618em;
  font-size: 1.714em;
}
h2 ~ .form-subHeader {
  line-height: 1.5em;
  font-size: 1.071em;
}
.form-header-group {
  text-align: left;
}
/*.form-dropdown,
.form-radio-item,
.form-checkbox-item,
.form-radio-other-input,
.form-checkbox-other-input,*/
.form-captcha input,
.form-spinner input,
.form-error-message {
  padding: 4px 3px 2px 3px;
}
.form-header-group {
  font-family: "Inter", sans-serif;
}
.form-section {
  padding: 0px 38px;
}
div.form-header-group {
  margin: 0px -38px;
}
div.form-header-group {
  padding: 40px 52px;
}
.form-textbox,
.form-textarea {
  padding: 4px 3px 2px 3px;
}
.form-textbox,
.form-textarea,
.form-radio-other-input,
.form-checkbox-other-input,
.form-captcha input,
.form-spinner input {
  background-color: #ffffff;
}
[data-type="control_dropdown"] .form-input,
[data-type="control_dropdown"] .form-input-wide {
  width: 150px;
}
.form-label {
  font-family: "Inter", sans-serif;
}
li[data-type="control_image"] div {
  text-align: left;
}
li[data-type="control_image"] img {
  border: none;
  border-width: 0px !important;
  border-style: solid !important;
  border-color: false !important;
}
.form-line-column {
  width: auto;
}
.form-line-error {
  overflow: hidden;
  -webkit-transition-property: none;
  -moz-transition-property: none;
  -ms-transition-property: none;
  -o-transition-property: none;
  transition-property: none;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  -ms-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease;
  -moz-transition-timing-function: ease;
  -ms-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
  background-color: #fff4f4;
}
.form-line-error .form-error-message {
  background-color: #ff3200;
  clear: both;
  float: none;
}
.form-line-error .form-error-message .form-error-arrow {
  border-bottom-color: #ff3200;
}
.form-line-error input:not(#coupon-input),
.form-line-error textarea,
.form-line-error .form-validation-error {
  border: 1px solid #ff3200;
  -webkit-box-shadow: 0 0 3px #ff3200;
  -moz-box-shadow: 0 0 3px #ff3200;
  box-shadow: 0 0 3px #ff3200;
}
.ie-8 .form-all {
  margin-top: auto;
  margin-top: initial;
}
.ie-8 .form-all:before {
  display: none;
}
[data-type="control_clear"] {
  display: none;
}
/* | */
@media screen and (max-width: 480px), screen and (max-device-width: 767px) and (orientation: portrait), screen and (max-device-width: 415px) and (orientation: landscape) {
  .testOne {
    letter-spacing: 0;
  }
  .form-all {
    border: 0;
    max-width: initial;
  }
  .form-sub-label-container {
    width: 100%;
    margin: 0;
    margin-right: 0;
    float: left;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
  }
  span.form-sub-label-container + span.form-sub-label-container {
    margin-right: 0;
  }
  .form-sub-label {
    white-space: normal;
  }
  .form-address-table td,
  .form-address-table th {
    padding: 0 1px 10px;
  }
  .form-submit-button,
  .form-submit-print,
  .form-submit-reset {
    width: 100%;
    margin-left: 0!important;
  }
  div[id*=at_] {
    font-size: 14px;
    font-weight: 700;
    height: 8px;
    margin-top: 6px;
  }
}
#radioStylePreview,
#ddStylePreview {
  display: none;
}
#propsRadio .sb-label + .sb-option,
#propsDropdown .sb-label + .sb-option {
  display: none;
}

/*__INSPECT_SEPERATOR__*/
.form-section.page-section {
    border : 5px solid #BB1F02;
}

.form-input-wide {

}

.form-matrix-headers.form-matrix-column-headers.form-matrix-column_0 {

}

.form-matrix-headers.form-matrix-row-headers {
    background : #efded9;
}

.form-matrix-headers.form-matrix-column-headers.form-matrix-column_1 {

}

#cid_12 th.form-matrix-headers {
    background-color : #efded9;
}


    /* Injected CSS Code */
</style>

<form class="jotform-form" action="https://submit.jotform.com/submit/202357490498464/" method="post" name="form_202357490498464" id="202357490498464" accept-charset="utf-8" autocomplete="on">
  <input type="hidden" name="formID" value="202357490498464" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div style="display:table;width:100%">
          <div class="form-header-group hasImage header-large" data-imagealign="Left">
            <div class="header-logo">
              <img src="https://www.jotform.com/uploads/EdwardWrighton/form_files/undraw_sync_files_xb3r.5e71f11356af03.28623706.png" alt="" width="311" class="header-logo-left" />
            </div>
            <div class="header-text httal htvam">
              <h1 id="header_1" class="form-header" data-component="header">
                Coronavirus Self Declaration Form
              </h1>
              <div id="subHeader_1" class="form-subHeader">
                For the health and safety of our community, declaration of illness is required. Be sure that the information you&#x27;ll give is accurate and complete. Please get immediate medical attention if you have any of the COVID-19 signs.
              </div>
            </div>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_fullname" id="id_3">
        <label class="form-label form-label-top form-label-auto" id="label_3" for="first_3"> Name </label>
        <div id="cid_3" class="form-input-wide" data-layout="full">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container " style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_3" name="q3_name[first]" class="form-textbox" size="10" value="" data-component="first" aria-labelledby="label_3 sublabel_3_first" />
              <label class="form-sub-label" for="first_3" id="sublabel_3_first" style="min-height:13px" aria-hidden="false"> First Name </label>
            </span>
            <span class="form-sub-label-container " style="vertical-align:top" data-input-type="last">
              <input type="text" id="last_3" name="q3_name[last]" class="form-textbox" size="15" value="" data-component="last" aria-labelledby="label_3 sublabel_3_last" />
              <label class="form-sub-label" for="last_3" id="sublabel_3_last" style="min-height:13px" aria-hidden="false"> Last Name </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_fullname" id="id_17">
        <label class="form-label form-label-top form-label-auto" id="label_17" for="first_17">  </label>
        <div id="cid_17" class="form-input-wide" data-layout="full">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container " style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_17" name="q17_input17[first]" class="form-textbox" size="10" value="" data-component="first" aria-labelledby="label_17 sublabel_17_first" />
              <label class="form-sub-label" for="first_17" id="sublabel_17_first" style="min-height:13px" aria-hidden="false"> Age </label>
            </span>
            <span class="form-sub-label-container " style="vertical-align:top" data-input-type="last">
              <input type="text" id="last_17" name="q17_input17[last]" class="form-textbox" size="15" value="" data-component="last" aria-labelledby="label_17 sublabel_17_last" />
              <label class="form-sub-label" for="last_17" id="sublabel_17_last" style="min-height:13px" aria-hidden="false"> Number </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_18">
        <label class="form-label form-label-top form-label-auto" id="label_18" for="input_18"> Address </label>
        <div id="cid_18" class="form-input-wide" data-layout="full">
          <span class="form-sub-label-container " style="vertical-align:top">
            <textarea id="input_18" class="form-textarea" name="q18_address" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_18 sublabel_input_18"></textarea>
            <label class="form-sub-label" for="input_18" id="sublabel_input_18" style="min-height:13px" aria-hidden="false"> Country, State, City </label>
          </span>
        </div>
      </li>
      <li class="form-line" data-type="control_divider" id="id_6">
        <div id="cid_6" class="form-input-wide" data-layout="full">
          <div data-component="divider" style="border-bottom:1px solid #BB1F03;height:1px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px">
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_radio" id="id_7">
        <label class="form-label form-label-top form-label-auto" id="label_7" for="input_7"> Have you traveled abroad, other city, hospitals for the last 2 months? </label>
        <div id="cid_7" class="form-input-wide" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_7" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_7_0" name="q7_haveYou7" checked="" value="Yes" />
              <label id="label_input_7_0" for="input_7_0"> Yes </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_7_1" name="q7_haveYou7" value="No" />
              <label id="label_input_7_1" for="input_7_1"> No </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line form-field-hidden" style="display:none;" data-type="control_textarea" id="id_8">
        <label class="form-label form-label-top form-label-auto" id="label_8" for="input_8"> Name of the place(s) visited </label>
        <div id="cid_8" class="form-input-wide" data-layout="full">
          <span class="form-sub-label-container " style="vertical-align:top">
            <textarea id="input_8" class="form-textarea" name="q8_nameOf8" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_8 sublabel_input_8"></textarea>
            <label class="form-sub-label" for="input_8" id="sublabel_input_8" style="min-height:13px" aria-hidden="false"> Country, State, City </label>
          </span>
        </div>
      </li>
      <li class="form-line form-field-hidden" style="display:none;" data-type="control_textarea" id="id_9">
        <label class="form-label form-label-top form-label-auto" id="label_9" for="input_9"> Dates of travel </label>
        <div id="cid_9" class="form-input-wide" data-layout="full">
          <span class="form-sub-label-container " style="vertical-align:top">
            <textarea id="input_9" class="form-textarea" name="q9_datesOf" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_9 sublabel_input_9"></textarea>
            <label class="form-sub-label" for="input_9" id="sublabel_input_9" style="min-height:13px" aria-hidden="false"> Arrival and return dates for each area </label>
          </span>
        </div>
      </li>
      <li class="form-line" data-type="control_radio" id="id_10">
        <label class="form-label form-label-top form-label-auto" id="label_10" for="input_10"> Have you been in contact with people being infected, suspected or diagnosed with COVID-19? </label>
        <div id="cid_10" class="form-input-wide" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_10" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_10_0" name="q10_haveYou10" checked="" value="Yes" />
              <label id="label_input_10_0" for="input_10_0"> Yes </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_10_1" name="q10_haveYou10" value="No" />
              <label id="label_input_10_1" for="input_10_1"> No </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line form-field-hidden" style="display:none;" data-type="control_textarea" id="id_11">
        <label class="form-label form-label-top form-label-auto" id="label_11" for="input_11"> Your relationship with the people and your last contact date with them </label>
        <div id="cid_11" class="form-input-wide" data-layout="full">
          <textarea id="input_11" class="form-textarea" name="q11_yourRelationship" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_11"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_matrix" id="id_12">
        <label class="form-label form-label-top form-label-auto" id="label_12" for="input_12"> Please state whether you've experienced/are experiencing the following </label>
        <div id="cid_12" class="form-input-wide" data-layout="full">
          <table summary="" role="presentation" cellPadding="4" cellSpacing="0" class="form-matrix-table" style="width:500px" data-component="matrix">
            <tr class="form-matrix-tr form-matrix-header-tr">
              <th class="form-matrix-th" style="border:none">
                 
              </th>
              <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_0" style="width:100px">
                <label id="label_12_col_0"> Yes </label>
              </th>
              <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_1" style="width:100px">
                <label id="label_12_col_1"> No </label>
              </th>
            </tr>
            <tr class="form-matrix-tr form-matrix-value-tr" role="group" aria-labelledby="label_12 label_12_row_0">
              <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                <label id="label_12_row_0"> Fever (Kalintura) </label>
              </th>
              <td class="form-matrix-values">
                <input type="radio" id="input_12_0_0" class="form-radio" name="q12_pleaseState[0]" value="Yes" aria-labelledby="label_12_col_0" />
                <label for="input_12_0_0" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
              <td class="form-matrix-values">
                <input type="radio" id="input_12_0_1" class="form-radio" name="q12_pleaseState[0]" value="No" aria-labelledby="label_12_col_1" />
                <label for="input_12_0_1" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
            </tr>
            <tr class="form-matrix-tr form-matrix-value-tr" role="group" aria-labelledby="label_12 label_12_row_1">
              <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                <label id="label_12_row_1"> Cough (Ubo) </label>
              </th>
              <td class="form-matrix-values">
                <input type="radio" id="input_12_1_0" class="form-radio" name="q12_pleaseState[1]" value="Yes" aria-labelledby="label_12_col_0" />
                <label for="input_12_1_0" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
              <td class="form-matrix-values">
                <input type="radio" id="input_12_1_1" class="form-radio" name="q12_pleaseState[1]" value="No" aria-labelledby="label_12_col_1" />
                <label for="input_12_1_1" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
            </tr>
            <tr class="form-matrix-tr form-matrix-value-tr" role="group" aria-labelledby="label_12 label_12_row_2">
              <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                <label id="label_12_row_2"> Colds (Sipon) </label>
              </th>
              <td class="form-matrix-values">
                <input type="radio" id="input_12_2_0" class="form-radio" name="q12_pleaseState[2]" value="Yes" aria-labelledby="label_12_col_0" />
                <label for="input_12_2_0" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
              <td class="form-matrix-values">
                <input type="radio" id="input_12_2_1" class="form-radio" name="q12_pleaseState[2]" value="No" aria-labelledby="label_12_col_1" />
                <label for="input_12_2_1" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
            </tr>
            <tr class="form-matrix-tr form-matrix-value-tr" role="group" aria-labelledby="label_12 label_12_row_3">
              <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                <label id="label_12_row_3"> Runny Nose (Subaw) </label>
              </th>
              <td class="form-matrix-values">
                <input type="radio" id="input_12_3_0" class="form-radio" name="q12_pleaseState[3]" value="Yes" aria-labelledby="label_12_col_0" />
                <label for="input_12_3_0" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
              <td class="form-matrix-values">
                <input type="radio" id="input_12_3_1" class="form-radio" name="q12_pleaseState[3]" value="No" aria-labelledby="label_12_col_1" />
                <label for="input_12_3_1" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
            </tr>
            <tr class="form-matrix-tr form-matrix-value-tr" role="group" aria-labelledby="label_12 label_12_row_4">
              <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                <label id="label_12_row_4"> Fatigue (Kakapoy) </label>
              </th>
              <td class="form-matrix-values">
                <input type="radio" id="input_12_4_0" class="form-radio" name="q12_pleaseState[4]" value="Yes" aria-labelledby="label_12_col_0" />
                <label for="input_12_4_0" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
              <td class="form-matrix-values">
                <input type="radio" id="input_12_4_1" class="form-radio" name="q12_pleaseState[4]" value="No" aria-labelledby="label_12_col_1" />
                <label for="input_12_4_1" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
            </tr>
            <tr class="form-matrix-tr form-matrix-value-tr" role="group" aria-labelledby="label_12 label_12_row_5">
              <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                <label id="label_12_row_5"> Nasal Congestion (Barado'g ilong) </label>
              </th>
              <td class="form-matrix-values">
                <input type="radio" id="input_12_5_0" class="form-radio" name="q12_pleaseState[5]" value="Yes" aria-labelledby="label_12_col_0" />
                <label for="input_12_5_0" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
              <td class="form-matrix-values">
                <input type="radio" id="input_12_5_1" class="form-radio" name="q12_pleaseState[5]" value="No" aria-labelledby="label_12_col_1" />
                <label for="input_12_5_1" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
            </tr>
            <tr class="form-matrix-tr form-matrix-value-tr" role="group" aria-labelledby="label_12 label_12_row_6">
              <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                <label id="label_12_row_6"> Sore Throat (Sakit sa Tutunlan) </label>
              </th>
              <td class="form-matrix-values">
                <input type="radio" id="input_12_6_0" class="form-radio" name="q12_pleaseState[6]" value="Yes" aria-labelledby="label_12_col_0" />
                <label for="input_12_6_0" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
              <td class="form-matrix-values">
                <input type="radio" id="input_12_6_1" class="form-radio" name="q12_pleaseState[6]" value="No" aria-labelledby="label_12_col_1" />
                <label for="input_12_6_1" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
            </tr>
            <tr class="form-matrix-tr form-matrix-value-tr" role="group" aria-labelledby="label_12 label_12_row_7">
              <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                <label id="label_12_row_7"> Vomiting (Suka) </label>
              </th>
              <td class="form-matrix-values">
                <input type="radio" id="input_12_7_0" class="form-radio" name="q12_pleaseState[7]" value="Yes" aria-labelledby="label_12_col_0" />
                <label for="input_12_7_0" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
              <td class="form-matrix-values">
                <input type="radio" id="input_12_7_1" class="form-radio" name="q12_pleaseState[7]" value="No" aria-labelledby="label_12_col_1" />
                <label for="input_12_7_1" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
            </tr>
            <tr class="form-matrix-tr form-matrix-value-tr" role="group" aria-labelledby="label_12 label_12_row_8">
              <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                <label id="label_12_row_8"> Shortness of Breathing (Lisud Ginhawa) </label>
              </th>
              <td class="form-matrix-values">
                <input type="radio" id="input_12_8_0" class="form-radio" name="q12_pleaseState[8]" value="Yes" aria-labelledby="label_12_col_0" />
                <label for="input_12_8_0" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
              <td class="form-matrix-values">
                <input type="radio" id="input_12_8_1" class="form-radio" name="q12_pleaseState[8]" value="No" aria-labelledby="label_12_col_1" />
                <label for="input_12_8_1" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
            </tr>
            <tr class="form-matrix-tr form-matrix-value-tr" role="group" aria-labelledby="label_12 label_12_row_9">
              <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                <label id="label_12_row_9"> Rashes (Katul Katul) </label>
              </th>
              <td class="form-matrix-values">
                <input type="radio" id="input_12_9_0" class="form-radio" name="q12_pleaseState[9]" value="Yes" aria-labelledby="label_12_col_0" />
                <label for="input_12_9_0" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
              <td class="form-matrix-values">
                <input type="radio" id="input_12_9_1" class="form-radio" name="q12_pleaseState[9]" value="No" aria-labelledby="label_12_col_1" />
                <label for="input_12_9_1" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
            </tr>
            <tr class="form-matrix-tr form-matrix-value-tr" role="group" aria-labelledby="label_12 label_12_row_10">
              <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                <label id="label_12_row_10"> Diarrhea (Kalibanga) </label>
              </th>
              <td class="form-matrix-values">
                <input type="radio" id="input_12_10_0" class="form-radio" name="q12_pleaseState[10]" value="Yes" aria-labelledby="label_12_col_0" />
                <label for="input_12_10_0" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
              <td class="form-matrix-values">
                <input type="radio" id="input_12_10_1" class="form-radio" name="q12_pleaseState[10]" value="No" aria-labelledby="label_12_col_1" />
                <label for="input_12_10_1" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
            </tr>
          </table>
        </div>
      </li>
      <li class="form-line" data-type="control_radio" id="id_13">
        <label class="form-label form-label-top form-label-auto" id="label_13" for="input_13"> Are you Pregnant? </label>
        <div id="cid_13" class="form-input-wide" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_13" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_13_0" name="q13_areYou" value="Yes" />
              <label id="label_input_13_0" for="input_13_0"> Yes </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_13_1" name="q13_areYou" value="No" />
              <label id="label_input_13_1" for="input_13_1"> No </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_radio" id="id_19">
        <label class="form-label form-label-top form-label-auto" id="label_19" for="input_19"> Are you a healthcare worker? </label>
        <div id="cid_19" class="form-input-wide" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_19" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_19_0" name="q19_areYou19" value="Yes" />
              <label id="label_input_19_0" for="input_19_0"> Yes </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_19_1" name="q19_areYou19" value="No" />
              <label id="label_input_19_1" for="input_19_1"> No </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_14">
        <div id="cid_14" class="form-input-wide" data-layout="full">
          <div id="text_14" class="form-html" data-component="text">
            <p>I acknowledge that the information I've given is accurate and complete.</p>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_datetime" id="id_15">
        <label class="form-label form-label-top form-label-auto" id="label_15" for="lite_mode_15"> Date </label>
        <div id="cid_15" class="form-input-wide" data-layout="half">
          <div data-wrapper-react="true">
            <div style="display:none">
              <span class="form-sub-label-container " style="vertical-align:top">
                <input type="tel" class="form-textbox validate[limitDate]" id="month_15" name="q15_date[month]" size="2" data-maxlength="2" maxLength="2" value="" autoComplete="off" aria-labelledby="label_15 sublabel_15_month" />
                <span class="date-separate" aria-hidden="true">
                   -
                </span>
                <label class="form-sub-label" for="month_15" id="sublabel_15_month" style="min-height:13px" aria-hidden="false"> Month </label>
              </span>
              <span class="form-sub-label-container " style="vertical-align:top">
                <input type="tel" class="form-textbox validate[limitDate]" id="day_15" name="q15_date[day]" size="2" data-maxlength="2" maxLength="2" value="" autoComplete="off" aria-labelledby="label_15 sublabel_15_day" />
                <span class="date-separate" aria-hidden="true">
                   -
                </span>
                <label class="form-sub-label" for="day_15" id="sublabel_15_day" style="min-height:13px" aria-hidden="false"> Day </label>
              </span>
              <span class="form-sub-label-container " style="vertical-align:top">
                <input type="tel" class="form-textbox validate[limitDate]" id="year_15" name="q15_date[year]" size="4" data-maxlength="4" data-age="" maxLength="4" value="" autoComplete="off" aria-labelledby="label_15 sublabel_15_year" />
                <label class="form-sub-label" for="year_15" id="sublabel_15_year" style="min-height:13px" aria-hidden="false"> Year </label>
              </span>
            </div>
            <span class="form-sub-label-container " style="vertical-align:top">
              <input type="text" class="form-textbox validate[limitDate, validateLiteDate]" id="lite_mode_15" size="12" data-maxlength="12" maxLength="12" data-age="" value="" data-format="mmddyyyy" data-seperator="-" placeholder="MM-DD-YYYY" autoComplete="off" aria-labelledby="label_15 sublabel_15_litemode" />
              <img class=" newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date" id="input_15_pick" src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime" aria-hidden="true" data-allow-time="No" data-version="v2" />
              <label class="form-sub-label" for="lite_mode_15" id="sublabel_15_litemode" style="min-height:13px" aria-hidden="false"> Date </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_signature" id="id_16">
        <label class="form-label form-label-top form-label-auto" id="label_16" for="input_16"> Signature </label>
        <div id="cid_16" class="form-input-wide" data-layout="half">
          <div data-wrapper-react="true">
            <div id="signature_pad_16" class="signature-pad-wrapper" style="width:312px;height:202px">
              <div data-wrapper-react="true">
                <!--[if IE 7]>
                  <script type="text/javascript" src="/js/vendor/json2.js"></script>
                <![endif]-->
              </div>
              <div class="signature-line signature-wrapper signature-placeholder" data-component="signature" style="width:312px;height:202px">
                <div id="sig_pad_16" data-width="310" data-height="200" data-id="16" data-required="false" class="pad ">
                </div>
                <input type="hidden" name="q16_signature" class="output4" id="input_16" />
              </div>
              <span class="clear-pad-btn clear-pad" role="button" tabindex="0">
                Clear
              </span>
            </div>
            <div data-wrapper-react="true">
              <script type="text/javascript">
              window.signatureForm = true
              </script>
            </div>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide" data-layout="full">
          <div data-align="center" class="form-buttons-wrapper form-buttons-center   jsTest-button-wrapperField">
            <button id="input_2" type="submit" class="form-submit-button form-submit-button-simple_red submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Submit
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
  <script>
  JotForm.showJotFormPowered = "new_footer";
  </script>
  <script>
  JotForm.poweredByText = "Powered by JotForm";
  </script>
  <input type="hidden" id="simple_spc" name="simple_spc" value="202357490498464" />
  <script type="text/javascript">
  document.getElementById("si" + "mple" + "_spc").value = "202357490498464-202357490498464";
  </script>
  <div class="formFooter-heightMask">
  </div>
  <div class="" style="display:none;">
    <div class="formFooter-wrapper formFooter-leftSide">
      <a href="https://www.jotform.com/?utm_source=formfooter&utm_medium=banner&utm_term=202357490498464&utm_content=jotform_logo&utm_campaign=powered_by_jotform_le" target="_blank" class="formFooter-logoLink"><img class="formFooter-logo" src="https://cdn.jotfor.ms/assets/img/logo/logo-new@1x.png" alt="Jotform Logo"></a>
    </div>
    <div class="formFooter-wrapper formFooter-rightSide">
      <span class="formFooter-text">
        Now create your own JotForm - It's free!
      </span>
      <a class="formFooter-button" href="https://www.jotform.com/?utm_source=formfooter&utm_medium=banner&utm_term=202357490498464&utm_content=jotform_button&utm_campaign=powered_by_jotform_le" target="_blank">Create your own JotForm</a>
    </div>
  </div>
</form>
<script src="https://cdn.jotfor.ms//js/vendor/smoothscroll.min.js?v=3.3.19761"></script>
<script src="https://cdn.jotfor.ms//js/errorNavigation.js?v=3.3.19761"></script>