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

    <form class="jotform-form" action="https://submit.jotform.ca/submit/80517764748266/" method="post" name="form_80517764748266" id="80517764748266" accept-charset="utf-8">
        <input type="hidden" name="formID" value="80517764748266" />
        <div class="form-all">
            <ul class="form-section page-section">
                <li id="cid_1" class="form-input-wide" data-type="control_head">
                    <div class="form-header-group ">
                        <div class="header-text httal htvam">
                            <h2 id="header_1" class="form-header" data-component="header">
                                Kayak Logbook
                            </h2>
                        </div>
                    </div>
                </li>
                <li class="form-line jf-required" data-type="control_textbox" id="id_3">
                    <label class="form-label form-label-top form-label-auto" id="label_3" for="input_3">
                        Logbook Title :
                        <span class="form-required">
                *
              </span>
                    </label>
                    <div id="cid_3" class="form-input-wide jf-required">
                        <input type="text" id="input_3" name="q3_logbookTitle" data-type="input-textbox" class="form-textbox validate[required]" size="50" value="" data-component="textbox" required="" />
                    </div>
                </li>
                <li class="form-line form-line-column form-col-1 jf-required" data-type="control_textbox" id="id_4">
                    <label class="form-label form-label-top" id="label_4" for="input_4">
                        Number of Paddlers :
                        <span class="form-required">
                *
              </span>
                    </label>
                    <div id="cid_4" class="form-input-wide jf-required">
                        <input type="text" id="input_4" name="q4_numberOf" data-type="input-textbox" class="form-textbox validate[required]" size="20" value="" data-component="textbox" required="" />
                    </div>
                </li>
                <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_5">
                    <label class="form-label form-label-top" id="label_5" for="input_5"> Journey # : </label>
                    <div id="cid_5" class="form-input-wide">
                        <input type="text" id="input_5" name="q5_typeA5" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" />
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
                <li class="form-line jf-required" data-type="control_textbox" id="id_6">
                    <label class="form-label form-label-top form-label-auto" id="label_6" for="input_6">
                        Launch Place :
                        <span class="form-required">
                *
              </span>
                    </label>
                    <div id="cid_6" class="form-input-wide jf-required">
                        <input type="text" id="input_6" name="q6_typeA6" data-type="input-textbox" class="form-textbox validate[required]" size="50" value="" data-component="textbox" required="" />
                    </div>
                </li>
                <li class="form-line form-line-column form-col-1" data-type="control_datetime" id="id_8">
                    <label class="form-label form-label-top" id="label_8" for="lite_mode_8"> Start Date : </label>
                    <div id="cid_8" class="form-input-wide">
                        <div data-wrapper-react="true">
                            <div style="display:none;">
                  <span class="form-sub-label-container" style="vertical-align:top;">
                    <input class="form-textbox validate[limitDate]" id="month_8" name="q8_startDate[month]" type="tel" size="2" data-maxlength="2" value="" />
                    <span class="date-separate">
                       -
                    </span>
                    <label class="form-sub-label" for="month_8" id="sublabel_month" style="min-height:13px;"> Month </label>
                  </span>
                                <span class="form-sub-label-container" style="vertical-align:top;">
                    <input class="form-textbox validate[limitDate]" id="day_8" name="q8_startDate[day]" type="tel" size="2" data-maxlength="2" value="" />
                    <span class="date-separate">
                       -
                    </span>
                    <label class="form-sub-label" for="day_8" id="sublabel_day" style="min-height:13px;"> Day </label>
                  </span>
                                <span class="form-sub-label-container" style="vertical-align:top;">
                    <input class="form-textbox validate[limitDate]" id="year_8" name="q8_startDate[year]" type="tel" size="4" data-maxlength="4" value="" />
                    <label class="form-sub-label" for="year_8" id="sublabel_year" style="min-height:13px;"> Year </label>
                  </span>
                            </div>
                            <span class="form-sub-label-container" style="vertical-align:top;">
                  <input class="form-textbox validate[limitDate, validateLiteDate]" id="lite_mode_8" type="text" size="12" data-maxlength="12" value="" data-format="mmddyyyy" data-seperator="-" placeholder="mm-dd-yyyy" />
                  <label class="form-sub-label" for="lite_mode_8" id="sublabel_litemode" style="min-height:13px;"> Date </label>
                </span>
                            <span class="form-sub-label-container" style="vertical-align:top;">
                  <img alt="Pick a Date" id="input_8_pick" src="https://cdn.jotfor.ms/images/calendar.png" style="vertical-align:middle;" data-component="datetime" />
                  <label class="form-sub-label" for="input_8_pick" style="min-height:13px;">  </label>
                </span>
                        </div>
                    </div>
                </li>
                <li class="form-line form-line-column form-col-2" data-type="control_time" id="id_9">
                    <label class="form-label form-label-top" id="label_9" for="input_9_hourSelect"> Start Time : </label>
                    <div id="cid_9" class="form-input-wide">
                        <div data-wrapper-react="true">
                <span class="form-sub-label-container" style="vertical-align:top;">
                  <select class="time-dropdown form-dropdown" id="input_9_hourSelect" name="q9_startTime[hourSelect]" data-component="time-hour">
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
                  <label class="form-sub-label" for="input_9_hourSelect" id="sublabel_hour" style="min-height:13px;"> Hour </label>
                </span>
                            <span class="form-sub-label-container" style="vertical-align:top;">
                  <select class="time-dropdown form-dropdown" id="input_9_minuteSelect" name="q9_startTime[minuteSelect]" data-component="time-minute">
                    <option>  </option>
                    <option value="00"> 00 </option>
                    <option value="10"> 10 </option>
                    <option value="20"> 20 </option>
                    <option value="30"> 30 </option>
                    <option value="40"> 40 </option>
                    <option value="50"> 50 </option>
                  </select>
                  <label class="form-sub-label" for="input_9_minuteSelect" id="sublabel_minutes" style="min-height:13px;"> Minutes </label>
                </span>
                            <span class="form-sub-label-container" style="vertical-align:top;">
                  <select class="time-dropdown form-dropdown" id="input_9_ampm" name="q9_startTime[ampm]" data-component="time-ampm">
                    <option value="AM"> AM </option>
                    <option selected="" value="PM"> PM </option>
                  </select>
                  <label class="form-sub-label" for="input_9_ampm" style="min-height:13px;">  </label>
                </span>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_textbox" id="id_7">
                    <label class="form-label form-label-top form-label-auto" id="label_7" for="input_7"> End Place : </label>
                    <div id="cid_7" class="form-input-wide">
                        <input type="text" id="input_7" name="q7_typeA7" data-type="input-textbox" class="form-textbox" size="50" value="" data-component="textbox" />
                    </div>
                </li>
                <li class="form-line form-line-column form-col-1" data-type="control_datetime" id="id_10">
                    <label class="form-label form-label-top" id="label_10" for="lite_mode_10"> End Date : </label>
                    <div id="cid_10" class="form-input-wide">
                        <div data-wrapper-react="true">
                            <div style="display:none;">
                  <span class="form-sub-label-container" style="vertical-align:top;">
                    <input class="form-textbox validate[limitDate]" id="month_10" name="q10_date10[month]" type="tel" size="2" data-maxlength="2" value="" />
                    <span class="date-separate">
                       -
                    </span>
                    <label class="form-sub-label" for="month_10" id="sublabel_month" style="min-height:13px;"> Month </label>
                  </span>
                                <span class="form-sub-label-container" style="vertical-align:top;">
                    <input class="form-textbox validate[limitDate]" id="day_10" name="q10_date10[day]" type="tel" size="2" data-maxlength="2" value="" />
                    <span class="date-separate">
                       -
                    </span>
                    <label class="form-sub-label" for="day_10" id="sublabel_day" style="min-height:13px;"> Day </label>
                  </span>
                                <span class="form-sub-label-container" style="vertical-align:top;">
                    <input class="form-textbox validate[limitDate]" id="year_10" name="q10_date10[year]" type="tel" size="4" data-maxlength="4" value="" />
                    <label class="form-sub-label" for="year_10" id="sublabel_year" style="min-height:13px;"> Year </label>
                  </span>
                            </div>
                            <span class="form-sub-label-container" style="vertical-align:top;">
                  <input class="form-textbox validate[limitDate, validateLiteDate]" id="lite_mode_10" type="text" size="12" data-maxlength="12" value="" data-format="mmddyyyy" data-seperator="-" placeholder="mm-dd-yyyy" />
                  <label class="form-sub-label" for="lite_mode_10" id="sublabel_litemode" style="min-height:13px;"> Date </label>
                </span>
                            <span class="form-sub-label-container" style="vertical-align:top;">
                  <img alt="Pick a Date" id="input_10_pick" src="https://cdn.jotfor.ms/images/calendar.png" style="vertical-align:middle;" data-component="datetime" />
                  <label class="form-sub-label" for="input_10_pick" style="min-height:13px;">  </label>
                </span>
                        </div>
                    </div>
                </li>
                <li class="form-line form-line-column form-col-2" data-type="control_time" id="id_11">
                    <label class="form-label form-label-top" id="label_11" for="input_11_hourSelect"> End Time : </label>
                    <div id="cid_11" class="form-input-wide">
                        <div data-wrapper-react="true">
                <span class="form-sub-label-container" style="vertical-align:top;">
                  <select class="time-dropdown form-dropdown" id="input_11_hourSelect" name="q11_endTime[hourSelect]" data-component="time-hour">
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
                  <label class="form-sub-label" for="input_11_hourSelect" id="sublabel_hour" style="min-height:13px;"> Hour </label>
                </span>
                            <span class="form-sub-label-container" style="vertical-align:top;">
                  <select class="time-dropdown form-dropdown" id="input_11_minuteSelect" name="q11_endTime[minuteSelect]" data-component="time-minute">
                    <option>  </option>
                    <option value="00"> 00 </option>
                    <option value="10"> 10 </option>
                    <option value="20"> 20 </option>
                    <option value="30"> 30 </option>
                    <option value="40"> 40 </option>
                    <option value="50"> 50 </option>
                  </select>
                  <label class="form-sub-label" for="input_11_minuteSelect" id="sublabel_minutes" style="min-height:13px;"> Minutes </label>
                </span>
                            <span class="form-sub-label-container" style="vertical-align:top;">
                  <select class="time-dropdown form-dropdown" id="input_11_ampm" name="q11_endTime[ampm]" data-component="time-ampm">
                    <option value="AM"> AM </option>
                    <option selected="" value="PM"> PM </option>
                  </select>
                  <label class="form-sub-label" for="input_11_ampm" style="min-height:13px;">  </label>
                </span>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_textbox" id="id_12">
                    <label class="form-label form-label-top form-label-auto" id="label_12" for="input_12"> Trip Leader /Instructor (if applicable) </label>
                    <div id="cid_12" class="form-input-wide">
                        <input type="text" id="input_12" name="q12_typeA12" data-type="input-textbox" class="form-textbox" size="50" value="" data-component="textbox" />
                    </div>
                </li>
                <li class="form-line form-line-column form-col-1" data-type="control_textbox" id="id_13">
                    <label class="form-label form-label-top" id="label_13" for="input_13"> Kayak used (design) : </label>
                    <div id="cid_13" class="form-input-wide">
                        <input type="text" id="input_13" name="q13_typeA13" data-type="input-textbox" class="form-textbox" size="30" value="" data-component="textbox" />
                    </div>
                </li>
                <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_14">
                    <label class="form-label form-label-top" id="label_14" for="input_14"> Distance Traveled : </label>
                    <div id="cid_14" class="form-input-wide">
                        <input type="text" id="input_14" name="q14_typeA14" data-type="input-textbox" class="form-textbox" size="30" value="" data-component="textbox" />
                    </div>
                </li>
                <li class="form-line jf-required" data-type="control_textarea" id="id_15">
                    <label class="form-label form-label-top form-label-auto" id="label_15" for="input_15">
                        Description of route :
                        <span class="form-required">
                *
              </span>
                    </label>
                    <div id="cid_15" class="form-input-wide jf-required">
                        <textarea id="input_15" class="form-textarea validate[required]" name="q15_descriptionOf" cols="60" rows="6" data-component="textarea" required=""></textarea>
                    </div>
                </li>
                <li class="form-line jf-required" data-type="control_textbox" id="id_16">
                    <label class="form-label form-label-top form-label-auto" id="label_16" for="input_16">
                        Conditions:
                        <span class="form-required">
                *
              </span>
                    </label>
                    <div id="cid_16" class="form-input-wide jf-required">
                        <input type="text" id="input_16" name="q16_conditions" data-type="input-textbox" class="form-textbox validate[required]" size="60" value="" data-component="textbox" required="" />
                    </div>
                </li>
                <li class="form-line" data-type="control_textarea" id="id_17">
                    <label class="form-label form-label-top form-label-auto" id="label_17" for="input_17"> Note : </label>
                    <div id="cid_17" class="form-input-wide">
                        <textarea id="input_17" class="form-textarea" name="q17_note" cols="60" rows="6" data-component="textarea"></textarea>
                    </div>
                </li>
                <li class="form-line" data-type="control_button" id="id_2">
                    <div id="cid_2" class="form-input-wide">
                        <div style="text-align:right;" class="form-buttons-wrapper">
                            <button id="input_2" type="submit" class="form-submit-button" data-component="button">
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
    </form>
    <script type="text/javascript">JotForm.ownerView=true;</script>
@stop