/**
 * Pulled from createLogType inline script into this file
 * by amclean on 2018-03-20.
 *
 * Modified by amclean on 2018-03-20
 *
 *
 */

/* document ready jQuery call */
$(function () {
    /*
     * callback for save button hit - this pops up a modal that prompts for
     * name and has a save button (see call method below)
     */
    $("#save-logbook-type-button").click(function () {
        $('#modal-save-logbook-type').modal('show');
    });

    /*
     * Modal for save - get name an process the dom before saving.
     * The rows of the form are cleaned up by removing (unwrapping) the extra
     * styling applied during the setup.
     */
    $("#modal-button-save-type").click(function () {

        var template_name = $("#logbook-template-name").val();
        var template_desc = $("#logbook-template-desc").val();

        $(".row-icons").remove();
        $(".row").unwrap();
        /*
        $(".col-sm-2").removeAttr("style");
        $(".col-sm-4").removeAttr("style");
        $(".col-sm-6").removeAttr("style");
        $(".col-sm-8").removeAttr("style");
        $(".col-sm-10").removeAttr("style");
        $(".col-sm-12").removeAttr("style");
*/
        var html_data = $("#custom-template").html();

        $.ajax({
            type: "POST",
            url: '/logbook-save-template',
            data: {template_name: template_name, template_desc: template_desc, html_data: html_data},
            success: function (data) {
                if (data == "true") {
                    //window.location.href = "logbook";
                }
            },
            error: function (response) {
                alert('Error');
            }
        });

    });

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
    dragula([document.getElementById('custom-template')], {
        moves: function (el, container, handle) {
            return handle.classList.contains('fa-arrows');
        }
    });

    // Add add-new-row button at the end
    $("<div class='row-parent' style='margin-top:3%;'><div><button id='add-new-row'  type='button' class='btn btn-success'>Add Row</button></div></div>").insertAfter("#custom-template");

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
        dragula([$(this).get(0)]);
    });

    // Set row padding
    $(".row-parent").css("padding-left", "2%");
    $(".row-parent").css("padding-right", "2%");

    // Set icon margin
    $("#custom-template i").css("margin-left", "3%");
    $("#custom-template i").css("margin-right", "3%");

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


    /************ Modals for the save and adding new widets ************************/


    // Add new element to the logbook row, button is clicked and modal will be shown.
    $("#modal-add .dropdown-menu li a").click(function () {

        $("#modal-add .dropdown .btn:first-child").text($(this).text());
        $("#modal-add .dropdown .btn:first-child").val($(this).text());

        if ($(this).text() == "Input") {
            pathname = window.location.pathname;
            pathname = pathname.substring(0, pathname.lastIndexOf('/')) + '/logbook-field-details/input-details.html';
            $.get(pathname, function (data) {
                $("#add-item-detail").html(data);
            });
        } else if ($(this).text() == "Text Area") {
            pathname = window.location.pathname;
            pathname = pathname.substring(0, pathname.lastIndexOf('/')) + '/logbook-field-details/text-area-details.html';
            $.get(pathname, function (data) {
                $("#add-item-detail").html(data);
            });
        } else if ($(this).text() == "Checkbox") {
            pathname = window.location.pathname;
            pathname = pathname.substring(0, pathname.lastIndexOf('/')) + '/logbook-field-details/checkbox-details.html';
            $.get(pathname, function (data) {
                $("#add-item-detail").html(data);
            });
        } else if ($(this).text() == "Radio") {
            pathname = window.location.pathname;
            pathname = pathname.substring(0, pathname.lastIndexOf('/')) + '/logbook-field-details/radio-details.html';
            $.get(pathname, function (data) {
                $("#add-item-detail").html(data);
            });
        } else if ($(this).text() == "Select") {
            pathname = window.location.pathname;
            pathname = pathname.substring(0, pathname.lastIndexOf('/')) + '/logbook-field-details/select-details.html';
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

        $("#custom-template").find('.row-parent').last().find(".fa-times").click(function () {
            $('#modal-delete').find("p").attr("id", $(this).parent().parent().index());
            $('#modal-delete').modal('show');
        });

        $("#custom-template").find('.row-parent').last().find(".fa-plus-circle").click(function () {
            $('#modal-add').find(".dropdown").attr("id", $(this).parent().parent().index());
            $('#modal-add').modal('show');
        });

    });
    /* enable drag and drop when the button is clicked */
    var state = false;
    $('#enable-dnd').click(function () {
        if (state == false) {
            $('#enable-dnd').removeClass('btn-danger');
            $('#enable-dnd').addClass('btn-success');
            state = true;
        } else {
            $('#enable-dnd').removeClass('btn-success');
            $('#enable-dnd').addClass('btn-danger');
            state = false;
        }
    });

});

