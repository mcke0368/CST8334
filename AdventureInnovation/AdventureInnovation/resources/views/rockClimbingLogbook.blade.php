@extends('layoutGuide')
@section('headGuide')
    <script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
    <script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.4791" type="text/javascript"></script>
    <script type="text/javascript">
        JotForm.init(function(){

            JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
            JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
            JotForm.calendarOther = {"today":"Today"};
            var languageOptions = document.querySelectorAll('#langList li');
            for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) {
                languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("6", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
            }
            JotForm.setCalendar("6", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""});
            $('input_10').spinner({ imgPath:'https://cdn.jotfor.ms/images/', width: '60', maxValue:'', minValue:'', allowNegative: false, addAmount: 1, value:'' });
            JotForm.alterTexts(undefined);
            JotForm.clearFieldOnHide="disable";
            JotForm.submitError="jumpToFirstError";
            /*INIT-END*/
        });

        JotForm.prepareCalculationsOnTheFly([null,{"name":"heading","qid":"1","text":"Rock Climbing Logbook","type":"control_head"},null,{"description":"","name":"typeA","qid":"3","subLabel":"","text":"Logbook Title:","type":"control_textbox"},{"description":"","name":"address","qid":"4","text":"Location","type":"control_address"},{"description":"","name":"time","qid":"5","text":"Time","type":"control_time"},{"description":"","name":"date","qid":"6","text":"Date","type":"control_datetime"},{"description":"","name":"typeA7","qid":"7","text":"Type of Rocks","type":"control_checkbox"},null,null,{"description":"","name":"typeA10","qid":"10","subLabel":"","text":"Height","type":"control_spinner"},{"description":"","name":"typeA11","qid":"11","subLabel":"","text":"Route Name:","type":"control_textbox"},{"description":"","name":"typeA12","qid":"12","text":"Weather","type":"control_checkbox"},null,null,{"description":"","name":"typeA15","qid":"15","text":"Unit","type":"control_radio"},{"description":"","name":"typeA16","qid":"16","subLabel":"","text":"Number of Attempts:","type":"control_dropdown"},null,{"description":"","name":"typeA18","qid":"18","text":"Rating:","type":"control_checkbox"},{"description":"","name":"input19","qid":"19","text":"","type":"control_radio"},{"description":"","name":"typeA20","qid":"20","text":"","type":"control_checkbox"},{"description":"","name":"typeA21","qid":"21","subLabel":"","text":"Note:","type":"control_textarea"},{"description":"","name":"typeA22","qid":"22","subLabel":"","text":"Circuit:","type":"control_textbox"},{"description":"","name":"typeA23","qid":"23","subLabel":"","text":"Coordinates:","type":"control_textbox"},{"description":"","name":"typeA24","qid":"24","subLabel":"","text":"Climb Number:","type":"control_textbox"}]);
        setTimeout(function() {
            JotForm.paymentExtrasOnTheFly([null,{"name":"heading","qid":"1","text":"Rock Climbing Logbook","type":"control_head"},null,{"description":"","name":"typeA","qid":"3","subLabel":"","text":"Logbook Title:","type":"control_textbox"},{"description":"","name":"address","qid":"4","text":"Location","type":"control_address"},{"description":"","name":"time","qid":"5","text":"Time","type":"control_time"},{"description":"","name":"date","qid":"6","text":"Date","type":"control_datetime"},{"description":"","name":"typeA7","qid":"7","text":"Type of Rocks","type":"control_checkbox"},null,null,{"description":"","name":"typeA10","qid":"10","subLabel":"","text":"Height","type":"control_spinner"},{"description":"","name":"typeA11","qid":"11","subLabel":"","text":"Route Name:","type":"control_textbox"},{"description":"","name":"typeA12","qid":"12","text":"Weather","type":"control_checkbox"},null,null,{"description":"","name":"typeA15","qid":"15","text":"Unit","type":"control_radio"},{"description":"","name":"typeA16","qid":"16","subLabel":"","text":"Number of Attempts:","type":"control_dropdown"},null,{"description":"","name":"typeA18","qid":"18","text":"Rating:","type":"control_checkbox"},{"description":"","name":"input19","qid":"19","text":"","type":"control_radio"},{"description":"","name":"typeA20","qid":"20","text":"","type":"control_checkbox"},{"description":"","name":"typeA21","qid":"21","subLabel":"","text":"Note:","type":"control_textarea"},{"description":"","name":"typeA22","qid":"22","subLabel":"","text":"Circuit:","type":"control_textbox"},{"description":"","name":"typeA23","qid":"23","subLabel":"","text":"Coordinates:","type":"control_textbox"},{"description":"","name":"typeA24","qid":"24","subLabel":"","text":"Climb Number:","type":"control_textbox"}]);}, 20);
    </script>
    <link href="https://cdn.jotfor.ms/static/formCss.css?3.3.4791" rel="stylesheet" type="text/css" />
    <link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.4791" />
    <link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.4791" />
    <link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.9/css/weather-icons.min.css">
    <style type="text/css">
        .form-label-left{
            width:150px;
        }
        .form-line{
            padding-top:12px;
            padding-bottom:12px;
        }
        .form-label-right{
            width:150px;
        }
        .form-all{
            width:690px;
            color:#555 !important;
            font-family:'Arial';
            font-size:14px;
        }
    </style>

    <style type="text/css" id="form-designer-style">
        /* Injected CSS Code */
        .form-label.form-label-auto {

            display: block;
            float: none;
            text-align: left;
            width: 100%;

        } /*PREFERENCES STYLE*/
        .form-all {
            font-family: Arial, sans-serif;
        }
        .form-all .qq-upload-button,
        .form-all .form-submit-button,
        .form-all .form-submit-reset,
        .form-all .form-submit-print {
            font-family: Arial, sans-serif;
        }
        .form-all .form-pagebreak-back-container,
        .form-all .form-pagebreak-next-container {
            font-family: Arial, sans-serif;
        }
        .form-header-group {
            font-family: Arial, sans-serif;
        }
        .form-label {
            font-family: Arial, sans-serif;
        }

        .form-label.form-label-auto {

            display: block;
            float: none;
            text-align: left;
            width: 100%;

        }

        .form-line {
            margin-top: 12px;
            margin-bottom: 12px;
        }

        .form-all {
            width: 690px;
        }

        .form-label-left,
        .form-label-right,
        .form-label-left.form-label-auto,
        .form-label-right.form-label-auto {
            width: 150px;
        }

        .form-all {
            font-size: 14px
        }
        .form-all .qq-upload-button,
        .form-all .qq-upload-button,
        .form-all .form-submit-button,
        .form-all .form-submit-reset,
        .form-all .form-submit-print {
            font-size: 14px
        }
        .form-all .form-pagebreak-back-container,
        .form-all .form-pagebreak-next-container {
            font-size: 14px
        }

        .supernova .form-all, .form-all {
            background-color: #fff;
            border: 1px solid transparent;
        }

        .form-all {
            color: #555;
        }
        .form-header-group .form-header {
            color: #555;
        }
        .form-header-group .form-subHeader {
            color: #555;
        }
        .form-label-top,
        .form-label-left,
        .form-label-right,
        .form-html,
        .form-checkbox-item label,
        .form-radio-item label {
            color: #555;
        }
        .form-sub-label {
            color: #6f6f6f;
        }

        .supernova {
            background-color: #54B2C7;
        }
        .supernova body {
            background: transparent;
        }

        .form-textbox,
        .form-textarea,
        .form-radio-other-input,
        .form-checkbox-other-input,
        .form-captcha input,
        .form-spinner input {
            background-color: #fff;
        }

        .supernova {
            background-image: none;
        }
        #stage {
            background-image: none;
        }

        .form-all {
            background-image: none;
        }

        .ie-8 .form-all:before { display: none; }
        .ie-8 {
            margin-top: auto;
            margin-top: initial;
        }

        /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/
        /* Injected CSS Code */
    </style>


@stop
@section('bodyGuide')



    <form class="jotform-form" action="https://submit.jotform.ca/submit/80515931548258/" method="post" name="form_80515931548258" id="80515931548258" accept-charset="utf-8">
        <input type="hidden" name="formID" value="80515931548258" />
        <div class="form-all">
            <ul class="form-section page-section">
                <li id="cid_1" class="form-input-wide" data-type="control_head">
                    <div class="form-header-group ">
                        <div class="header-text httal htvam">
                            <h2 id="header_1" class="form-header" data-component="header">
                                Rock Climbing Logbook
                            </h2>
                        </div>
                    </div>
                </li>
                <li class="form-line form-line-column form-col-1 jf-required" data-type="control_textbox" id="id_3">
                    <label class="form-label form-label-top" id="label_3" for="input_3">
                        Logbook Title:
                        <span class="form-required">
            *
          </span>
                    </label>
                    <div id="cid_3" class="form-input-wide jf-required">
                        <input type="text" id="input_3" name="q3_typeA" data-type="input-textbox" class="form-textbox validate[required]" size="50" value="" data-component="textbox" required="" />
                    </div>
                </li>
                <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_24">
                    <label class="form-label form-label-top" id="label_24" for="input_24"> Climb Number: </label>
                    <div id="cid_24" class="form-input-wide">
                        <input type="text" id="input_24" name="q24_typeA24" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" />
                    </div>
                </li>
                <li class="form-line form-line-column form-col-3 jf-required" data-type="control_textbox" id="id_11">
                    <label class="form-label form-label-top" id="label_11" for="input_11">
                        Route Name:
                        <span class="form-required">
            *
          </span>
                    </label>
                    <div id="cid_11" class="form-input-wide jf-required">
                        <input type="text" id="input_11" name="q11_typeA11" data-type="input-textbox" class="form-textbox validate[required]" size="30" value="" data-component="textbox" required="" />
                    </div>
                </li>
                <li class="form-line form-line-column form-col-4" data-type="control_textbox" id="id_22">
                    <label class="form-label form-label-top" id="label_22" for="input_22"> Circuit: </label>
                    <div id="cid_22" class="form-input-wide">
                        <input type="text" id="input_22" name="q22_typeA22" data-type="input-textbox" class="form-textbox" size="30" value="" data-component="textbox" />
                    </div>
                </li>
                <li class="form-line" data-type="control_textbox" id="id_23">
                    <label class="form-label form-label-top" id="label_23" for="input_23"> Coordinates: </label>
                    <div id="cid_23" class="form-input-wide">
                        <input type="text" id="input_23" name="q23_typeA23" data-type="input-textbox" class="form-textbox" size="30" value="" data-component="textbox" />
                    </div>
                </li>
                <li class="form-line jf-required" data-type="control_checkbox" id="id_12">
                    <label class="form-label form-label-top form-label-auto" id="label_12" for="input_12_0">
                        Weather
                        <span class="form-required">
            *
          </span>
                    </label>
                    <div id="cid_12" class="form-input-wide jf-required">
                        <div class="form-multiple-column" data-columncount="4" data-component="checkbox">
            <span class="form-checkbox-item">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox validate[required]" id="input_12_0" name="q12_typeA12[]" value="Type option 1" required="" />
                <lable>Sunny   </lable><i class="wi wi-day-sunny"></i>
            </span>
                            <span class="form-checkbox-item">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox validate[required]" id="input_12_1" name="q12_typeA12[]" value="Type option 2" required="" />
              <lable>Cloudy  </lable><i class="wi wi-day-cloudy"></i>
            </span>
                            <span class="form-checkbox-item">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox validate[required]" id="input_12_2" name="q12_typeA12[]" value="Type option 3" required="" />
              <lable>Rain    </lable><i class="wi wi-day-rain"></i>
            </span>
                            <span class="form-checkbox-item">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox validate[required]" id="input_12_3" name="q12_typeA12[]" value="Type option 4" required="" />
              <lable>Snow    </lable><i class="wi wi-day-snow"></i>
            </span>
                            <span class="form-checkbox-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox validate[required]" id="input_12_4" name="q12_typeA12[]" value="Type option 5" required="" />
              <lable>Windy    </lable><i class="wi wi-day-windy"></i>
            </span>
                            <span class="form-checkbox-item">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox validate[required]" id="input_12_5" name="q12_typeA12[]" value="Type option 6" required="" />
              <lable>Hot      </lable><i class="wi wi-hot"></i>
            </span>
                            <span class="form-checkbox-item">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox validate[required]" id="input_12_6" name="q12_typeA12[]" value="Type option 7" required="" />
              <lable>Hail     </lable><i class="wi wi-day-hail"></i>
            </span>
                            <span class="form-checkbox-item">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox validate[required]" id="input_12_7" name="q12_typeA12[]" value="Type option 8" required="" />
              <lable>Thunderstorm  </lable><i class="wi wi-day-thunderstorm"></i>
            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_address" id="id_4">
                    <label class="form-label form-label-top form-label-auto" id="label_4" for="input_4_addr_line1"> Location </label>
                    <div id="cid_4" class="form-input-wide">
                        <table summary="" class="form-address-table" cellpadding="0" cellspacing="0">
                            <tbody>
                            <tr>
                                <td colspan="2">
                  <span class="form-sub-label-container" style="vertical-align:top;">
                    <input type="text" id="input_4_addr_line1" name="q4_address[addr_line1]" class="form-textbox form-address-line" value="" data-component="address_line_1" />
                    <label class="form-sub-label" for="input_4_addr_line1" id="sublabel_4_addr_line1" style="min-height:13px;"> Street Address </label>
                  </span>
                                </td>
                            </tr>
                            <tr style="display:none;">
                                <td colspan="2">
                  <span class="form-sub-label-container" style="vertical-align:top;">
                    <input type="text" id="input_4_addr_line2" name="q4_address[addr_line2]" class="form-textbox form-address-line" size="46" value="" data-component="address_line_2" />
                    <label class="form-sub-label" for="input_4_addr_line2" id="sublabel_4_addr_line2" style="min-height:13px;"> Street Address Line 2 </label>
                  </span>
                                </td>
                            </tr>
                            <tr>
                                <td width="50%">
                  <span class="form-sub-label-container" style="vertical-align:top;">
                    <input type="text" id="input_4_city" name="q4_address[city]" class="form-textbox form-address-city" size="21" value="" data-component="city" />
                    <label class="form-sub-label" for="input_4_city" id="sublabel_4_city" style="min-height:13px;"> City </label>
                  </span>
                                </td>
                                <td>
                  <span class="form-sub-label-container" style="vertical-align:top;">
                    <input type="text" id="input_4_state" name="q4_address[state]" class="form-textbox form-address-state" size="22" value="" data-component="state" />
                    <label class="form-sub-label" for="input_4_state" id="sublabel_4_state" style="min-height:13px;"> State </label>
                  </span>
                                </td>
                            </tr>
                            <tr>
                                <td width="50%">
                  <span class="form-sub-label-container" style="vertical-align:top;">
                    <input type="text" id="input_4_postal" name="q4_address[postal]" class="form-textbox form-address-postal" size="10" value="" data-component="zip" />
                    <label class="form-sub-label" for="input_4_postal" id="sublabel_4_postal" style="min-height:13px;"> Zip Code </label>
                  </span>
                                </td>
                                <td>
                  <span class="form-sub-label-container" style="vertical-align:top;">
                    <select class="form-dropdown form-address-country" name="q4_address[country]" id="input_4_country" data-component="country">
                      <option value=""> Please Select </option>
                      <option value="United States"> United States </option>
                      <option value="Afghanistan"> Afghanistan </option>
                      <option value="Albania"> Albania </option>
                      <option value="Algeria"> Algeria </option>
                      <option value="American Samoa"> American Samoa </option>
                      <option value="Andorra"> Andorra </option>
                      <option value="Angola"> Angola </option>
                      <option value="Anguilla"> Anguilla </option>
                      <option value="Antigua and Barbuda"> Antigua and Barbuda </option>
                      <option value="Argentina"> Argentina </option>
                      <option value="Armenia"> Armenia </option>
                      <option value="Aruba"> Aruba </option>
                      <option value="Australia"> Australia </option>
                      <option value="Austria"> Austria </option>
                      <option value="Azerbaijan"> Azerbaijan </option>
                      <option value="The Bahamas"> The Bahamas </option>
                      <option value="Bahrain"> Bahrain </option>
                      <option value="Bangladesh"> Bangladesh </option>
                      <option value="Barbados"> Barbados </option>
                      <option value="Belarus"> Belarus </option>
                      <option value="Belgium"> Belgium </option>
                      <option value="Belize"> Belize </option>
                      <option value="Benin"> Benin </option>
                      <option value="Bermuda"> Bermuda </option>
                      <option value="Bhutan"> Bhutan </option>
                      <option value="Bolivia"> Bolivia </option>
                      <option value="Bosnia and Herzegovina"> Bosnia and Herzegovina </option>
                      <option value="Botswana"> Botswana </option>
                      <option value="Brazil"> Brazil </option>
                      <option value="Brunei"> Brunei </option>
                      <option value="Bulgaria"> Bulgaria </option>
                      <option value="Burkina Faso"> Burkina Faso </option>
                      <option value="Burundi"> Burundi </option>
                      <option value="Cambodia"> Cambodia </option>
                      <option value="Cameroon"> Cameroon </option>
                      <option value="Canada"> Canada </option>
                      <option value="Cape Verde"> Cape Verde </option>
                      <option value="Cayman Islands"> Cayman Islands </option>
                      <option value="Central African Republic"> Central African Republic </option>
                      <option value="Chad"> Chad </option>
                      <option value="Chile"> Chile </option>
                      <option value="China"> China </option>
                      <option value="Christmas Island"> Christmas Island </option>
                      <option value="Cocos (Keeling) Islands"> Cocos (Keeling) Islands </option>
                      <option value="Colombia"> Colombia </option>
                      <option value="Comoros"> Comoros </option>
                      <option value="Congo"> Congo </option>
                      <option value="Cook Islands"> Cook Islands </option>
                      <option value="Costa Rica"> Costa Rica </option>
                      <option value="Cote d&#x27;Ivoire"> Cote d&#x27;Ivoire </option>
                      <option value="Croatia"> Croatia </option>
                      <option value="Cuba"> Cuba </option>
                      <option value="Cyprus"> Cyprus </option>
                      <option value="Czech Republic"> Czech Republic </option>
                      <option value="Democratic Republic of the Congo"> Democratic Republic of the Congo </option>
                      <option value="Denmark"> Denmark </option>
                      <option value="Djibouti"> Djibouti </option>
                      <option value="Dominica"> Dominica </option>
                      <option value="Dominican Republic"> Dominican Republic </option>
                      <option value="Ecuador"> Ecuador </option>
                      <option value="Egypt"> Egypt </option>
                      <option value="El Salvador"> El Salvador </option>
                      <option value="Equatorial Guinea"> Equatorial Guinea </option>
                      <option value="Eritrea"> Eritrea </option>
                      <option value="Estonia"> Estonia </option>
                      <option value="Ethiopia"> Ethiopia </option>
                      <option value="Falkland Islands"> Falkland Islands </option>
                      <option value="Faroe Islands"> Faroe Islands </option>
                      <option value="Fiji"> Fiji </option>
                      <option value="Finland"> Finland </option>
                      <option value="France"> France </option>
                      <option value="French Polynesia"> French Polynesia </option>
                      <option value="Gabon"> Gabon </option>
                      <option value="The Gambia"> The Gambia </option>
                      <option value="Georgia"> Georgia </option>
                      <option value="Germany"> Germany </option>
                      <option value="Ghana"> Ghana </option>
                      <option value="Gibraltar"> Gibraltar </option>
                      <option value="Greece"> Greece </option>
                      <option value="Greenland"> Greenland </option>
                      <option value="Grenada"> Grenada </option>
                      <option value="Guadeloupe"> Guadeloupe </option>
                      <option value="Guam"> Guam </option>
                      <option value="Guatemala"> Guatemala </option>
                      <option value="Guernsey"> Guernsey </option>
                      <option value="Guinea"> Guinea </option>
                      <option value="Guinea-Bissau"> Guinea-Bissau </option>
                      <option value="Guyana"> Guyana </option>
                      <option value="Haiti"> Haiti </option>
                      <option value="Honduras"> Honduras </option>
                      <option value="Hong Kong"> Hong Kong </option>
                      <option value="Hungary"> Hungary </option>
                      <option value="Iceland"> Iceland </option>
                      <option value="India"> India </option>
                      <option value="Indonesia"> Indonesia </option>
                      <option value="Iran"> Iran </option>
                      <option value="Iraq"> Iraq </option>
                      <option value="Ireland"> Ireland </option>
                      <option value="Israel"> Israel </option>
                      <option value="Italy"> Italy </option>
                      <option value="Jamaica"> Jamaica </option>
                      <option value="Japan"> Japan </option>
                      <option value="Jersey"> Jersey </option>
                      <option value="Jordan"> Jordan </option>
                      <option value="Kazakhstan"> Kazakhstan </option>
                      <option value="Kenya"> Kenya </option>
                      <option value="Kiribati"> Kiribati </option>
                      <option value="North Korea"> North Korea </option>
                      <option value="South Korea"> South Korea </option>
                      <option value="Kosovo"> Kosovo </option>
                      <option value="Kuwait"> Kuwait </option>
                      <option value="Kyrgyzstan"> Kyrgyzstan </option>
                      <option value="Laos"> Laos </option>
                      <option value="Latvia"> Latvia </option>
                      <option value="Lebanon"> Lebanon </option>
                      <option value="Lesotho"> Lesotho </option>
                      <option value="Liberia"> Liberia </option>
                      <option value="Libya"> Libya </option>
                      <option value="Liechtenstein"> Liechtenstein </option>
                      <option value="Lithuania"> Lithuania </option>
                      <option value="Luxembourg"> Luxembourg </option>
                      <option value="Macau"> Macau </option>
                      <option value="Macedonia"> Macedonia </option>
                      <option value="Madagascar"> Madagascar </option>
                      <option value="Malawi"> Malawi </option>
                      <option value="Malaysia"> Malaysia </option>
                      <option value="Maldives"> Maldives </option>
                      <option value="Mali"> Mali </option>
                      <option value="Malta"> Malta </option>
                      <option value="Marshall Islands"> Marshall Islands </option>
                      <option value="Martinique"> Martinique </option>
                      <option value="Mauritania"> Mauritania </option>
                      <option value="Mauritius"> Mauritius </option>
                      <option value="Mayotte"> Mayotte </option>
                      <option value="Mexico"> Mexico </option>
                      <option value="Micronesia"> Micronesia </option>
                      <option value="Moldova"> Moldova </option>
                      <option value="Monaco"> Monaco </option>
                      <option value="Mongolia"> Mongolia </option>
                      <option value="Montenegro"> Montenegro </option>
                      <option value="Montserrat"> Montserrat </option>
                      <option value="Morocco"> Morocco </option>
                      <option value="Mozambique"> Mozambique </option>
                      <option value="Myanmar"> Myanmar </option>
                      <option value="Nagorno-Karabakh"> Nagorno-Karabakh </option>
                      <option value="Namibia"> Namibia </option>
                      <option value="Nauru"> Nauru </option>
                      <option value="Nepal"> Nepal </option>
                      <option value="Netherlands"> Netherlands </option>
                      <option value="Netherlands Antilles"> Netherlands Antilles </option>
                      <option value="New Caledonia"> New Caledonia </option>
                      <option value="New Zealand"> New Zealand </option>
                      <option value="Nicaragua"> Nicaragua </option>
                      <option value="Niger"> Niger </option>
                      <option value="Nigeria"> Nigeria </option>
                      <option value="Niue"> Niue </option>
                      <option value="Norfolk Island"> Norfolk Island </option>
                      <option value="Turkish Republic of Northern Cyprus"> Turkish Republic of Northern Cyprus </option>
                      <option value="Northern Mariana"> Northern Mariana </option>
                      <option value="Norway"> Norway </option>
                      <option value="Oman"> Oman </option>
                      <option value="Pakistan"> Pakistan </option>
                      <option value="Palau"> Palau </option>
                      <option value="Palestine"> Palestine </option>
                      <option value="Panama"> Panama </option>
                      <option value="Papua New Guinea"> Papua New Guinea </option>
                      <option value="Paraguay"> Paraguay </option>
                      <option value="Peru"> Peru </option>
                      <option value="Philippines"> Philippines </option>
                      <option value="Pitcairn Islands"> Pitcairn Islands </option>
                      <option value="Poland"> Poland </option>
                      <option value="Portugal"> Portugal </option>
                      <option value="Puerto Rico"> Puerto Rico </option>
                      <option value="Qatar"> Qatar </option>
                      <option value="Republic of the Congo"> Republic of the Congo </option>
                      <option value="Romania"> Romania </option>
                      <option value="Russia"> Russia </option>
                      <option value="Rwanda"> Rwanda </option>
                      <option value="Saint Barthelemy"> Saint Barthelemy </option>
                      <option value="Saint Helena"> Saint Helena </option>
                      <option value="Saint Kitts and Nevis"> Saint Kitts and Nevis </option>
                      <option value="Saint Lucia"> Saint Lucia </option>
                      <option value="Saint Martin"> Saint Martin </option>
                      <option value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon </option>
                      <option value="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines </option>
                      <option value="Samoa"> Samoa </option>
                      <option value="San Marino"> San Marino </option>
                      <option value="Sao Tome and Principe"> Sao Tome and Principe </option>
                      <option value="Saudi Arabia"> Saudi Arabia </option>
                      <option value="Senegal"> Senegal </option>
                      <option value="Serbia"> Serbia </option>
                      <option value="Seychelles"> Seychelles </option>
                      <option value="Sierra Leone"> Sierra Leone </option>
                      <option value="Singapore"> Singapore </option>
                      <option value="Slovakia"> Slovakia </option>
                      <option value="Slovenia"> Slovenia </option>
                      <option value="Solomon Islands"> Solomon Islands </option>
                      <option value="Somalia"> Somalia </option>
                      <option value="Somaliland"> Somaliland </option>
                      <option value="South Africa"> South Africa </option>
                      <option value="South Ossetia"> South Ossetia </option>
                      <option value="South Sudan"> South Sudan </option>
                      <option value="Spain"> Spain </option>
                      <option value="Sri Lanka"> Sri Lanka </option>
                      <option value="Sudan"> Sudan </option>
                      <option value="Suriname"> Suriname </option>
                      <option value="Svalbard"> Svalbard </option>
                      <option value="Swaziland"> Swaziland </option>
                      <option value="Sweden"> Sweden </option>
                      <option value="Switzerland"> Switzerland </option>
                      <option value="Syria"> Syria </option>
                      <option value="Taiwan"> Taiwan </option>
                      <option value="Tajikistan"> Tajikistan </option>
                      <option value="Tanzania"> Tanzania </option>
                      <option value="Thailand"> Thailand </option>
                      <option value="Timor-Leste"> Timor-Leste </option>
                      <option value="Togo"> Togo </option>
                      <option value="Tokelau"> Tokelau </option>
                      <option value="Tonga"> Tonga </option>
                      <option value="Transnistria Pridnestrovie"> Transnistria Pridnestrovie </option>
                      <option value="Trinidad and Tobago"> Trinidad and Tobago </option>
                      <option value="Tristan da Cunha"> Tristan da Cunha </option>
                      <option value="Tunisia"> Tunisia </option>
                      <option value="Turkey"> Turkey </option>
                      <option value="Turkmenistan"> Turkmenistan </option>
                      <option value="Turks and Caicos Islands"> Turks and Caicos Islands </option>
                      <option value="Tuvalu"> Tuvalu </option>
                      <option value="Uganda"> Uganda </option>
                      <option value="Ukraine"> Ukraine </option>
                      <option value="United Arab Emirates"> United Arab Emirates </option>
                      <option value="United Kingdom"> United Kingdom </option>
                      <option value="Uruguay"> Uruguay </option>
                      <option value="Uzbekistan"> Uzbekistan </option>
                      <option value="Vanuatu"> Vanuatu </option>
                      <option value="Vatican City"> Vatican City </option>
                      <option value="Venezuela"> Venezuela </option>
                      <option value="Vietnam"> Vietnam </option>
                      <option value="British Virgin Islands"> British Virgin Islands </option>
                      <option value="Isle of Man"> Isle of Man </option>
                      <option value="US Virgin Islands"> US Virgin Islands </option>
                      <option value="Wallis and Futuna"> Wallis and Futuna </option>
                      <option value="Western Sahara"> Western Sahara </option>
                      <option value="Yemen"> Yemen </option>
                      <option value="Zambia"> Zambia </option>
                      <option value="Zimbabwe"> Zimbabwe </option>
                      <option value="other"> Other </option>
                    </select>
                    <label class="form-sub-label" for="input_4_country" id="sublabel_4_country" style="min-height:13px;"> Country </label>
                  </span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </li>
                <li class="form-line form-line-column form-col-1 jf-required" data-type="control_datetime" id="id_6">
                    <label class="form-label form-label-top" id="label_6" for="lite_mode_6">
                        Date
                        <span class="form-required">
            *
          </span>
                    </label>
                    <div id="cid_6" class="form-input-wide jf-required">
                        <div data-wrapper-react="true">
                            <div style="display:none;">
              <span class="form-sub-label-container" style="vertical-align:top;">
                <input class="form-textbox validate[required, limitDate]" id="month_6" name="q6_date[month]" type="tel" size="2" data-maxlength="2" value="" required="" />
                <span class="date-separate">
                   -
                </span>
                <label class="form-sub-label" for="month_6" id="sublabel_month" style="min-height:13px;"> Month </label>
              </span>
                                <span class="form-sub-label-container" style="vertical-align:top;">
                <input class="form-textbox validate[required, limitDate]" id="day_6" name="q6_date[day]" type="tel" size="2" data-maxlength="2" value="" required="" />
                <span class="date-separate">
                   -
                </span>
                <label class="form-sub-label" for="day_6" id="sublabel_day" style="min-height:13px;"> Day </label>
              </span>
                                <span class="form-sub-label-container" style="vertical-align:top;">
                <input class="form-textbox validate[required, limitDate]" id="year_6" name="q6_date[year]" type="tel" size="4" data-maxlength="4" value="" required="" />
                <label class="form-sub-label" for="year_6" id="sublabel_year" style="min-height:13px;"> Year </label>
              </span>
                            </div>
                            <span class="form-sub-label-container" style="vertical-align:top;">
              <input class="form-textbox validate[required, limitDate, validateLiteDate]" id="lite_mode_6" type="text" size="12" data-maxlength="12" value="" required="" data-format="mmddyyyy" data-seperator="-" placeholder="mm-dd-yyyy" />
              <label class="form-sub-label" for="lite_mode_6" id="sublabel_litemode" style="min-height:13px;"> Date </label>
            </span>
                            <span class="form-sub-label-container" style="vertical-align:top;">
              <img alt="Pick a Date" id="input_6_pick" src="https://cdn.jotfor.ms/images/calendar.png" style="vertical-align:middle;" data-component="datetime" />
              <label class="form-sub-label" for="input_6_pick" style="min-height:13px;">  </label>
            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line form-line-column form-col-2" data-type="control_time" id="id_5">
                    <label class="form-label form-label-top" id="label_5" for="input_5_hourSelect"> Time </label>
                    <div id="cid_5" class="form-input-wide">
                        <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top;">
              <select class="time-dropdown form-dropdown" id="input_5_hourSelect" name="q5_time[hourSelect]" data-component="time-hour">
                <option>  </option>
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
                <option value="6"> 6 </option>
                <option value="7"> 7 </option>
                <option value="8"> 8 </option>
                <option value="9"> 9 </option>
                <option value="10"> 10 </option>
                <option value="11"> 11 </option>
                <option value="12"> 12 </option>
              </select>
              <span class="date-separate">
                 :
              </span>
              <label class="form-sub-label" for="input_5_hourSelect" id="sublabel_hour" style="min-height:13px;"> Hour </label>
            </span>
                            <span class="form-sub-label-container" style="vertical-align:top;">
              <select class="time-dropdown form-dropdown" id="input_5_minuteSelect" name="q5_time[minuteSelect]" data-component="time-minute">
                <option>  </option>
                <option value="00"> 00 </option>
                <option value="10"> 10 </option>
                <option value="20"> 20 </option>
                <option value="30"> 30 </option>
                <option value="40"> 40 </option>
                <option value="50"> 50 </option>
              </select>
              <label class="form-sub-label" for="input_5_minuteSelect" id="sublabel_minutes" style="min-height:13px;"> Minutes </label>
            </span>
                            <span class="form-sub-label-container" style="vertical-align:top;">
              <select class="time-dropdown form-dropdown" id="input_5_ampm" name="q5_time[ampm]" data-component="time-ampm">
                <option value="AM"> AM </option>
                <option selected="" value="PM"> PM </option>
              </select>
              <label class="form-sub-label" for="input_5_ampm" style="min-height:13px;">  </label>
            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_dropdown" id="id_16">
                    <label class="form-label form-label-top form-label-auto" id="label_16" for="input_16"> Number of Attempts: </label>
                    <div id="cid_16" class="form-input-wide">
                        <select class="form-dropdown" id="input_16" name="q16_typeA16" style="width:150px;" data-component="dropdown">
                            <option value="">  </option>
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                            <option value="5"> 5 </option>
                            <option value="6"> 6 </option>
                            <option value="7"> 7 </option>
                            <option value="8"> 8 </option>
                            <option value="9"> 9 </option>
                            <option value="10"> 10 </option>
                        </select>
                    </div>
                </li>
                <li class="form-line form-line-column form-col-1" data-type="control_checkbox" id="id_18">
                    <label class="form-label form-label-top" id="label_18" for="input_18_0"> Rating: </label>
                    <div id="cid_18" class="form-input-wide">
                        <div class="form-single-column" data-component="checkbox">
            <span class="form-checkbox-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_18_0" name="q18_typeA18[]" value="A" />
              <label id="label_input_18_0" for="input_18_0"> A </label>
            </span>
                            <span class="form-checkbox-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_18_1" name="q18_typeA18[]" value="B" />
              <label id="label_input_18_1" for="input_18_1"> B </label>
            </span>
                            <span class="form-checkbox-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_18_2" name="q18_typeA18[]" value="C" />
              <label id="label_input_18_2" for="input_18_2"> C </label>
            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line form-line-column form-col-2 jf-required" data-type="control_radio" id="id_19">
                    <label class="form-label form-label-top" id="label_19" for="input_19">
                    </label>
                    <div id="cid_19" class="form-input-wide jf-required">
                        <div class="form-single-column" data-component="radio">
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_19_0" name="q19_input19" value="3" required="" />
              <label id="label_input_19_0" for="input_19_0"> 3 </label>
            </span>
                            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_19_1" name="q19_input19" value="4" required="" />
              <label id="label_input_19_1" for="input_19_1"> 4 </label>
            </span>
                            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_19_2" name="q19_input19" value="5" required="" />
              <label id="label_input_19_2" for="input_19_2"> 5 </label>
            </span>
                            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_19_3" name="q19_input19" value="6" required="" />
              <label id="label_input_19_3" for="input_19_3"> 6 </label>
            </span>
                            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_19_4" name="q19_input19" value="7" required="" />
              <label id="label_input_19_4" for="input_19_4"> 7 </label>
            </span>
                            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_19_5" name="q19_input19" value="8" required="" />
              <label id="label_input_19_5" for="input_19_5"> 8 </label>
            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line form-line-column form-col-3" data-type="control_checkbox" id="id_20">
                    <label class="form-label form-label-top" id="label_20" for="input_20_0">  </label>
                    <div id="cid_20" class="form-input-wide">
                        <div class="form-single-column" data-component="checkbox">
            <span class="form-checkbox-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_20_0" name="q20_typeA20[]" value="+" />
              <label id="label_input_20_0" for="input_20_0"> + </label>
            </span>
                            <span class="form-checkbox-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_20_1" name="q20_typeA20[]" value="-" />
              <label id="label_input_20_1" for="input_20_1"> - </label>
            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line form-line-column form-col-4" data-type="control_spinner" id="id_10">
                    <label class="form-label form-label-top" id="label_10" for="input_10"> Height </label>
                    <div id="cid_10" class="form-input-wide">
                        <input type="number" id="input_10" name="q10_typeA10" data-type="input-spinner" class="form-spinner-input  form-textbox" value="" data-component="spinner" />
                    </div>
                </li>
                <li class="form-line form-line-column form-col-5" data-type="control_radio" id="id_15">
                    <label class="form-label form-label-top" id="label_15" for="input_15"> Unit </label>
                    <div id="cid_15" class="form-input-wide">
                        <div class="form-single-column" data-component="radio">
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_15_0" name="q15_typeA15" value="M" />
              <label id="label_input_15_0" for="input_15_0"> M </label>
            </span>
                            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_15_1" name="q15_typeA15" value="FT" />
              <label id="label_input_15_1" for="input_15_1"> FT </label>
            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line form-line-column form-col-6" data-type="control_checkbox" id="id_7">
                    <label class="form-label form-label-top" id="label_7" for="input_7_0"> Type of Rocks </label>
                    <div id="cid_7" class="form-input-wide">
                        <div class="form-multiple-column" data-columncount="2" data-component="checkbox">
            <span class="form-checkbox-item">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_7_0" name="q7_typeA7[]" value="Sandstone" />
              <label id="label_input_7_0" for="input_7_0"> Sandstone </label>
            </span>
                            <span class="form-checkbox-item">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_7_1" name="q7_typeA7[]" value="Limestone" />
              <label id="label_input_7_1" for="input_7_1"> Limestone </label>
            </span>
                            <span class="form-checkbox-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_7_2" name="q7_typeA7[]" value="Granite" />
              <label id="label_input_7_2" for="input_7_2"> Granite </label>
            </span>
                            <span class="form-checkbox-item" style="clear:left;">
              <label style="display:none;" for="other_7"> Other option </label>
              <input type="checkbox" class="form-checkbox-other form-checkbox" name="q7_typeA7[other]" id="other_7" value="other" />
              <input type="text" class="form-checkbox-other-input form-textbox" name="q7_typeA7[other]" data-otherhint="Other" placeholder="Other" size="15" id="input_7" />
              <br/>
            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_textarea" id="id_21">
                    <label class="form-label form-label-top form-label-auto" id="label_21" for="input_21"> Note: </label>
                    <div id="cid_21" class="form-input-wide">
                        <textarea id="input_21" class="form-textarea" name="q21_typeA21" cols="40" rows="6" data-component="textarea"></textarea>
                    </div>
                </li>
                <li class="form-line" data-type="control_button" id="id_25">
                    <div id="cid_25" class="form-input-wide">
                        <div style="text-align:right;" class="form-buttons-wrapper">
                            <button id="input_25" type="submit" class="form-submit-button" data-component="button">
                                Submit
                            </button>
                        </div>
                    </div>
                </li>
                <li style="clear:both">
                </li>
                <li style="display:none">
                    Should be Empty:
                    <input type="text" name="website" value="" />
                </li>
            </ul>
        </div>
    </form></body>
    </html>
    <script type="text/javascript">JotForm.ownerView=true;</script>
@stop