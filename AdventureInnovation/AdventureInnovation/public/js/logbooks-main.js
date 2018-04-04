/**
 * Created by amclean on 2018-04-04.
 */

/**
 * document ready jQuery call
 */
$(function () {

    /**
     * When create button is clicked, we'll redirect to the appropriate page
     * NB if nothing is selected, do nothing.
     */
    $('#logbookmain-create-btn').click(function () {
        // check if we've got a good selection
        var choice = $('#logbookmain-select-activity')[0].value;
        if (choice !== "disabled") {
            window.location = choice;
        }
    });

});
