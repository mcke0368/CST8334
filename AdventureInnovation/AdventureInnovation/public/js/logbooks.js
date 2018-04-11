/**
 * Pulled from createLogType inline script into this file
 * by amclean on 2018-03-20.
 *
 * Modified by amclean on 2018-03-20
 *
 *
 */


var row_drake = null;
function gather_base_data() {
    var base_data = {};
    var start_time = $('#base-date')[0].value + " " +$('#base-start_time')[0].value;
    var end_time = $('#base-date')[0].value + " " +$('#base-end_time')[0].value;

    base_data['base-title'] = $('#base-logtitle')[0].value;
    base_data['base-location'] = $('#base-location')[0].value;
    base_data['base-route'] = $('#base-route')[0].value;
    base_data['base-company'] = $('#base-company')[0].value;
    base_data['base-position'] = $("#base-position")[0].value
    base_data['base-start_time'] = start_time;
    base_data['base-end_time'] = end_time;
    base_data['base-incident'] = $('#base-incident')[0].value;
    base_data['base-number_participants'] = $('#base-number_participants')[0].value;
    base_data['base-group_size'] = $('#base-group_size')[0].value;
    base_data['base-other_leaders'] = $('#base-other_leaders')[0].value;

    // sort out the weather

    // gather all weather conditions, and put into a string all checked values.
    var weather_conditions = "";
    $("*[name*='weather_conditions_']").each(function() {
        if (this.checked) {
            var name = this.name;
            name = name.replace("weather_conditions_","");
            weather_conditions += name + ":";
        }
    });
    base_data['base-weather_conditions'] = weather_conditions;
    base_data['base-weather_temp'] = $('#weather_temp')[0].value;
    base_data['base-weather_wind'] = $('#weather_wind')[0].value;
    base_data['base-weather_notes'] = $('#weather_notes')[0].value;
    return base_data;
}

function gather_activity_data() {

    // check for kayaking
    if ($("*[id*=kayaking]").length > 0) {
        return gather_kayaking_data();
    }
    else if ($("*[id*=rafting]").length > 0) {
        return gather_rafting_data();
    }
    else if ($("*[id*=climbing]").length > 0) {
        return gather_climbing_data();
    }
    else {
        return {};
    }
}


function gather_kayaking_data() {
    var kayaking_data = {};
    kayaking_data['rapid_class'] = $('#kayaking-rapid_class')[0].value;
    kayaking_data['flow_level'] = $('#kayaking-flow_level')[0].value;
    kayaking_data['launch_site'] = $('#kayaking-launch_site')[0].value;
    kayaking_data['takeout_site'] = $('#kayaking-takeout_site')[0].value;
    kayaking_data['distance'] = $('#kayaking-distance')[0].value;
    kayaking_data['boat_used'] = $('#kayaking-boat_used')[0].value;
    kayaking_data['notes'] = $('#kayaking-notes')[0].value;
    return kayaking_data;
}

function gather_rafting_data() {
    var rafting_data = {};
    rafting_data['rapid_class'] = $('#rafting-rapid_class')[0].value;
    rafting_data['flow_level'] = $('#rafting-flow_level')[0].value;
    rafting_data['launch_site'] = $('#rafting-launch_site')[0].value;
    rafting_data['takeout_site'] = $('#rafting-takeout_site')[0].value;
    rafting_data['trip_type'] = $('#rafting-trip_type')[0].value;
    rafting_data['trip_number'] = $('#rafting-trip_number')[0].value;
    rafting_data['notes'] = $('#rafting-notes')[0].value;
    return rafting_data;
}

function gather_climbing_data() {
    var climbing_data = {};

    climbing_data['climb_type'] = $('#climbing-climb_type')[0].value; //done
    climbing_data['multi_pitch'] = $('#climbing-multi_pitch')[0].value;//done
    var climbing_conditions = "";
    $("*[name*='climbing_conditions_']").each(function() {
        if (this.checked) {
            var name = this.name;
            name = name.replace("climbing_conditions_","");
            climbing_conditions += name + ":";
        }
    });
    climbing_data['climbing_conditions'] = climbing_conditions;
    climbing_data['rating_difficulty'] = $('#climbing-rating_difficulty')[0].value;//done
    climbing_data['rating_letter'] = $('#climbing-rating_letter')[0].value;//done
    climbing_data['height'] = $('#climbing-height')[0].value; //done
    climbing_data['notes']= $('#climbing-notes')[0].value;//done
    return climbing_data;
}

/**
 * callback function for populating the duration.
 */
function checktime() {
    var start = new Date('2015-03-25T' + $('#base-start_time')[0].value + "Z")
    var end = new Date('2015-03-25T' + $('#base-end_time')[0].value + "Z")
    if (start && end) {
        var diff =  end - start;
        if (diff >= 0) {
            var seconds = Math.floor(diff / 1000); //ignore any left over units smaller than a second
            var minutes = Math.floor(seconds / 60);
            seconds = seconds % 60;
            var hours = Math.floor(minutes / 60);
            minutes = minutes % 60;
            $('#base-duration')[0].value = "Hr: " + hours + " Min: " + minutes;
        } else {
            $('#base-duration')[0].value = ""
        }
    }
}

function enable_dragndrop() {
    /********************** template stlying in preparation of allowing the drag and drop. ************/

    // Add HTML icons for each rows
    $("#custom-template").find('.row').wrap("<div class='row-parent'></div>");
    $("#custom-template").find('.row-parent').prepend(
        "<div class='row-icons' style='text-align:center'>" +
        "   <i class='fa fa-arrows' aria-hidden='true'></i>" +
        "   <i class='fa fa-plus-circle' aria-hidden='true'" +
        "   ></i><i class='fa fa-times' aria-hidden='true'></i>" +
        "</div>"
    );

    // Apply dragula to move rows
    row_drake = dragula([document.getElementById('custom-template')], {
        moves: function (el, container, handle) {
            return handle.classList.contains('fa-arrows');
        }
    });

    // CSS logbook type
    $("#custom-template").children().each(function (index) {
        $(this).css("border-style", "dashed");
        $(this).css("border-color", "#828282");
    });

    // CSS row
    $("#custom-template").find(".row").children().each(function (index) {
        $(this).css("border-style", "dotted");
        $(this).css("border-color", "#b7b7b7");
    });

    // Apply dragula to move elements in a row
    $("#custom-template").find('.row').each(function (index) {
        drake = dragula([$(this).get(0)]);
    });

    // Set row padding
    $(".row-parent").css("padding-left", "2%");
    $(".row-parent").css("padding-right", "2%");

    // Set icon margin
    $("#custom-template i").css("margin-left", "3%");
    $("#custom-template i").css("margin-right", "3%");

    // Set icon justification
    $(".row-icons").css("text-align", "center");

    // When clicking deleting-row icon
    $(".fa-times").click(function () {
        $('#modal-delete').find("p").attr("id", $(this).parent().parent().index());
        $('#modal-delete').modal('show');
    });

    // When clicking adding-element icon
    $(".fa-plus-circle").click(function () {
        $('#modal-add').find(".dropdown").attr("id", $(this).parent().parent().index());
        $('#modal-add').modal('show');
    });

    // Delete a row in a logbook type
    $("#modal-button-delete").click(function () {
        var rowNum = parseInt($('#modal-delete').find("p").attr('id'));

        $('#custom-template').find(".row-parent").slice(rowNum, rowNum + 1).remove();
    });

}


function disable_dragndrop() {
    // remove all drag and drop from rows
    if (row_drake) {
        row_drake.destroy();
    }
    $('#custom-template').find(".row-icons").remove();
    $('#custom-template').find(".row").each(function() {
        if ($(this).parent().hasClass('row-parent')) {
            $(this).unwrap();
        }
    });

    $('#custom-template').find(".col-sm-2").removeAttr("style");
    $('#custom-template').find(".col-sm-4").removeAttr("style");
    $('#custom-template').find(".col-sm-6").removeAttr("style");
    $('#custom-template').find(".col-sm-8").removeAttr("style");
    $('#custom-template').find(".col-sm-10").removeAttr("style");
    $('#custom-template').find(".col-sm-12").removeAttr("style");
}


/**
 * Set the menu button states for normal mode
 */
var editStr = "Edit Template";
var doneStr = "Done Editing";
function template_edit_mode() {
    enable_dragndrop();
    $('#edit-template-button').html(doneStr);
    $('#save-log-button')[0].setAttribute("disabled", "disabled");
    $('#save-template-button')[0].setAttribute("disabled", "disabled");
    $('#add-new-row')[0].removeAttribute('disabled');
}

/**
 * Set the menu button states for edit mode
 */
function template_normal_mode() {
    disable_dragndrop();
    $('#edit-template-button').html(editStr);
    $('#save-log-button')[0].removeAttribute('disabled');
    $('#save-template-button')[0].removeAttribute('disabled');
    $('#add-new-row')[0].setAttribute("disabled", "disabled");
}


/* document ready jQuery call */
$(function () {



    /**
     * add callback for template dropdown
     */
    $("#load-template-button").click(function () {
        template_normal_mode();
        $('#modal-select-logbook-type').modal('show');
    });

    /**
     * Modal for selecting a template.  If an existing template is chosen,
     * load that one.  If new, remove all content from #custome-template
     */
    $("#modal-button-select-type").click(function () {

        var value = $("#logbook-select-template").find(":selected")[0].value
        if (value == "new") {
            $("#custom-template").empty();
        } else {
            $("#custom-template").empty();
            $("#custom-template").append(value);
        }

    });

    /**
     * clear all contents from the customization
     */
    $("#clear-template-button").click(function () {
        template_normal_mode();
        $("#custom-template").empty();
    });


    /**
     * Add callbacks for duration
     */
    $('#base-start_time').change(checktime);
    $('#base-end_time').change(checktime);
    /**
     * Call checktime to update the duration if it is already populated
     */
    checktime();


    /**
     * Callback for editbutton
     * - toggle the button name
     * - call either enable_dragndrop or disable_dragndrop
     * - disable save while editing
     */
    $('#edit-template-button').click(function() {

       if (this.innerHTML == editStr) {
           template_edit_mode();
       } else {
           template_normal_mode();
       }
    });


    /**
     * initial state for menu buttons
     */
    template_normal_mode();


    /**
     * callback for submitting a log
     */

    $('#save-log-button').click(function() {

        /* TODO - make sure we're in a clean state, ie remove all dnd stuff */

        /* gather up all the data */
        var formData = new FormData();
        /* base_data */
        var base_data = gather_base_data();
        /* activity data */
        var activity_data = gather_activity_data();
        var activity_name = $('#logbook-activity-name')[0].innerHTML.trim();
        /* custom data */
        var custom_data = $('#custom-template').html();
        /* attachments */
        var attachments = $('#attachments')[0].files;

        for (var i = 0; i < attachments.length; i++) {
            var file = attachments[i];

            // Check the file type.
            if (!file.type.match('image.*')) {
                continue;
            }

            // Add the file to the request.
            formData.append('files[]', file, file.name);
        }
        formData.append('base_data', JSON.stringify(base_data));
        formData.append('activity_data',  JSON.stringify(activity_data));
        formData.append('activity_name', activity_name);
        formData.append('custom_data', custom_data);
        $.ajax({
            type: "POST",
            url: '/logbook/save-log',
            processData : false,
            contentType : false,
            //data: {base_data: base_data, activity_data: activity_data, activity: activity_name, custom_data: custom_data},
            data: formData,
            success: function (data) {
                // make sure we didn't get any errors
                var jdata = JSON.parse(data);
                if (jdata['error']) {
                    var errors = jdata['error'];
                    // clean up error messages by removing 'base-'
                    errors = errors.map( function(item) {
                        return item.replace('base-','');});

                    // make error div visible
                    $("#error-messages").css('display','block');
                    // remove old meesages
                    $("#error-messages").find("ul").empty();
                    // add in each of the errors
                    $.each( errors, function( key, value ) {
                        $("#error-messages").find("ul").append('<li>'+value+'</li>');
                    });
                }
                else {
                    window.location.href = "/logbookMainPage";
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(xhr.responseText);
                alert(thrownError);
            }

        });

    });

    /*
     * callback for save button hit - this pops up a modal that prompts for
     * name and has a save button (see call method below)
     */
    $("#save-template-button").click(function () {
        $('#modal-save-logbook-type').modal('show');
    });


    /*
     * Modal for save - get name an process the dom before saving.
     * The rows of the form are cleaned up by removing (unwrapping) the extra
     * styling applied during the setup.
     */
    $("#modal-button-save-type").click(function () {
        //disable_dragndrop();
        var template_name = $("#logbook-template-name").val();
        var template_desc = $("#logbook-template-desc").val();
        var html_data = $("#custom-template").html();

        $.ajax({
            type: "POST",
            url: '/logbook/save-template',
            data: {template_name: template_name, template_desc: template_desc, html_data: html_data},
            success: function (data) {
                if (data == "true") {
                    // update the options list
                    $('#logbook-select-template')
                        .append($("<option></option>").attr("value",html_data).text(template_name));

                    //window.location.href = "logbook";
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(xhr.responseText);
                alert(thrownError);
            }
        });

    });



    /************ Modals for the save and adding new widets ************************/


    // Add new element to the logbook row, button is clicked and modal will be shown.
    $("#modal-add .dropdown-menu li a").click(function () {

        $("#modal-add .dropdown .btn:first-child").text($(this).text());
        $("#modal-add .dropdown .btn:first-child").val($(this).text());

        if ($(this).text() == "Input") {
            pathname = '/logbook-field-details/input-details.html';
            $.get(pathname, function (data) {
                $("#add-item-detail").html(data);
            });
        } else if ($(this).text() == "Text Area") {
            pathname = '/logbook-field-details/text-area-details.html';
            $.get(pathname, function (data) {
                $("#add-item-detail").html(data);
            });
        } else if ($(this).text() == "Checkbox") {
            pathname = '/logbook-field-details/checkbox-details.html';
            $.get(pathname, function (data) {
                $("#add-item-detail").html(data);
            });
        } else if ($(this).text() == "Radio") {
            pathname = '/logbook-field-details/radio-details.html';
            $.get(pathname, function (data) {
                $("#add-item-detail").html(data);
            });
        } else if ($(this).text() == "Select") {
            pathname = '/logbook-field-details/select-details.html';
            $.get(pathname, function (data) {
                $("#add-item-detail").html(data);
            });
        }

    });


    // Add new element to the logbook row, modal will be closed and element will be created.
    $("#modal-button-add").click(function () {
        var rowNum = parseInt($('#modal-add').find(".dropdown").attr("id"));
        var fieldType = $("#modal-add .dropdown .btn:first-child").val();

        if (fieldType == "Input") {
            var inputTitle = $(this).parent().parent().find("#add-item-detail").find("#input-title").val();
            var inputPlaceholder = $(this).parent().parent().find("#add-item-detail").find("#input-phd").val();
            var inputSize = $("#add-item-detail input[type='radio']:checked").parent('label').text();

            if (inputSize != 2 && inputSize != 4 && inputSize != 6 && inputSize != 8 && inputSize != 10 && inputSize != 12) {
                inputSize = 6
            }

            $('#custom-template').find(".row-parent").slice(rowNum, rowNum + 1).find(".row").append('<div class="col-sm-' + inputSize + '"><div class="form-group"><label for="' + inputTitle + '">' + inputTitle + '</label><input type="text" class="form-control" id="' + inputTitle + '" placeholder="' + inputPlaceholder + '"></div></div>');

        } else if (fieldType == "Text Area") {
            var textTitle = $(this).parent().parent().find("#add-item-detail").find("#text-title").val();
            var textPlaceholder = $(this).parent().parent().find("#add-item-detail").find("#text-phd").val();
            var textSize = $("#add-item-detail input[type='radio']:checked").parent('label').text();

            if (textSize != 6 && textSize != 8 && textSize != 10 && textSize != 12) {
                textSize = 12
            }

            $('#custom-template').find(".row-parent").slice(rowNum, rowNum + 1).find(".row").append('<div class="col-sm-' + textSize + '"><div class="form-group"><label for="' + textTitle + '">' + textTitle + '</label><textarea rows="5" class="form-control" id="' + textTitle + '" placeholder="' + textPlaceholder + '"></textarea></div></div>');

        } else if (fieldType == "Checkbox") {

            var cboxTitle = $(this).parent().parent().find("#add-item-detail").find("#cbox-title").val();
            var cboxes = []

            $("#add-item-detail input[type='checkbox']:checked").each(function (index) {
                cboxes.push($(this).parents('.checkbox').find("input[type='text']").val());
            });

            var checkboxHTML = "<div class='col-sm-6'><div class='form-group'><label class='checkbox-title' style='font-weight: bold; pointer-events: none;'>";

            checkboxHTML += cboxTitle;
            checkboxHTML += "<input type='checkbox' name='' style='visibility: hidden;'></label>";

            cboxes.forEach(function (element) {
                checkboxHTML += "<label style='font-weight: normal;'><input type='checkbox'>&nbsp;";
                checkboxHTML += element;
                checkboxHTML += "&nbsp;&nbsp;&nbsp;</label>"
            });

            checkboxHTML += "</div></div>"

            $('#custom-template').find(".row-parent").slice(rowNum, rowNum + 1).find(".row").append(checkboxHTML);

        } else if (fieldType == "Radio") {

            var radioTitle = $(this).parent().parent().find("#add-item-detail").find("#rbutton-title").val();
            var rbuttons = []

            $("#add-item-detail input[type='checkbox']:checked").each(function (index) {
                rbuttons.push($(this).parents('.checkbox').find("input[type='text']").val());
            });

            var radioButtonHTML = "<div class='col-sm-6'><div class='form-group'><label class='radio-inline' style='font-weight: bold; pointer-events: none;'>";

            radioButtonHTML += radioTitle;
            radioButtonHTML += "<input type='radio' name='' style='visibility: hidden;'></label><form>";

            rbuttons.forEach(function (element) {
                radioButtonHTML += "<label class='radio-inline'><input type='radio' name='optradio'>";
                radioButtonHTML += element;
                radioButtonHTML += "</label>"
            });

            radioButtonHTML += "</form></div></div>"

            $('#custom-template').find(".row-parent").slice(rowNum, rowNum + 1).find(".row").append(radioButtonHTML);

        } else if (fieldType == "Select") {
            var sListTitle = $(this).parent().parent().find("#add-item-detail").find("#select-title").val();
            var sLists = []

            $("#add-item-detail input[type='checkbox']:checked").each(function (index) {
                sLists.push($(this).parents('.checkbox').find("input[type='text']").val());
            });

            var sListscheckboxHTML = "<div class='col-sm-4'><div class='form-group'><label for='sel-";
            sListscheckboxHTML += sListTitle;
            sListscheckboxHTML += "'>";
            sListscheckboxHTML += sListTitle;
            sListscheckboxHTML += "</label><select class='form-control' id='sel-";
            sListscheckboxHTML += sListTitle;
            sListscheckboxHTML += "'>";

            sLists.forEach(function (element) {
                sListscheckboxHTML += "<option>";
                sListscheckboxHTML += element;
                sListscheckboxHTML += "</option>"
            });

            sListscheckboxHTML += "</select></div>"

            $('#custom-template').find(".row-parent").slice(rowNum, rowNum + 1).find(".row").append(sListscheckboxHTML);
        }


        $("#custom-template").find(".row").children().each(function (index) {
            $(this).css("border-style", "dotted");
            $(this).css("border-color", "#b7b7b7");
        });

        $("#custom-template").find('.row').each(function (index) {
            dragula([$(this).get(0)]);
        });


    });

    // Add new row to the logbook type
    $("#add-new-row").click(function () {
        $("#custom-template").append("<div class='row-parent'><div class='row'><div class='col-sm-12'></div></div></div>");

        $("#custom-template").find('.row-parent').last().prepend("<div class='row-icons'><i class='fa fa-arrows' aria-hidden='true'></i><i class='fa fa-plus-circle' aria-hidden='true'></i><i class='fa fa-times' aria-hidden='true'></i></div>");

        $("#custom-template").children().each(function (index) {
            $(this).css("border-style", "dashed");
            $(this).css("border-color", "#828282");
        });

        $(".row-parent").css("padding-left", "2%");
        $(".row-parent").css("padding-right", "2%");

        $("#custom-template i").css("margin-left", "3%");
        $("#custom-template i").css("margin-right", "3%");

        // Set icon justification
        $(".row-icons").css("text-align", "center");

        $("#custom-template").find('.row-parent').last().find(".fa-times").click(function () {
            $('#modal-delete').find("p").attr("id", $(this).parent().parent().index());
            $('#modal-delete').modal('show');
        });

        $("#custom-template").find('.row-parent').last().find(".fa-plus-circle").click(function () {
            $('#modal-add').find(".dropdown").attr("id", $(this).parent().parent().index());
            $('#modal-add').modal('show');
        });

    });
});

