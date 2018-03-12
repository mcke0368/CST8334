
$(document).ready(function() { 
    
    $('#cert-button').click(function(){
        var cert = $('#cert-name').val();
        var file = $('#cert-pdf').val();
        var link = file.substring(12, file.length);
        var expiration = $('#cert-exp-date').val();
        addCertification(cert, expiration, link);
    });

    $('#send-all-data').click(function(){
        getAllFields();    
    });

    /* setup AJAX by adding csrf token to each request */
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    /* setup the dropdown links for the menu bar */
    setup_dropdown_links();
});

function addCertification(certification_name, expiration, link) {
   
    $("#edit-cert ul").append(
        '<li class="list-group-item">'+
        '<a data-toggle="modal" href="#edit-cert-modal">'+
        '<i class="fa fa-pencil-square-o edit-pencil" aria-hidden="true"></i></a>'+
        '<div id="cert-modal"></div>'+
        '<div style="overflow:hidden">'+
        '<h4>' + certification_name + '</h4>'+
        '<a target="_blank" href="pdfs/'+ link +'" class="btn btn-info float-right" role="button">Download Certificate</a>'+
        '</div>'+
        '<div>'+
        '<div class="small"><i class="fa fa-calendar-times-o" aria-hidden="true"></i> Expiry Date:' + expiration + '</div>'+
        '</div>'+
        '</a></li>'
    );

    

    //call an ajax enter this into the DB
    $.ajax({
        type: "POST",
        url: '/ajaxUpdateCerts',
        data: { name: certification_name, link: link, expiry:expiration },    
    })
    .done(function(msg) {
        console.log(msg);
    })
    .fail(function(jqXHR, textStatus) {
        console.log(jqXHR);
        console.log( "Request failed: " + textStatus );
    });

    $('#edit-cert-modal').modal('toggle');
}


function getAllFields() {
    var about = tinymce.get('tiny-about').getContent();
    var work = tinymce.get('tiny-work').getContent();
    var employment = tinymce.get('tiny-employment').getContent();
    var training = tinymce.get('tiny-training').getContent();
    var social_media = {};

    var phone = document.getElementsByName("phoneNr")[0].value;

    social_media["Facebook_URL"] = document.getElementsByName("Facebook_URL")[0].value;
    social_media["Instagram_URL"] = document.getElementsByName("Instagram_URL")[0].value;
    social_media["Twitter_URL"] = document.getElementsByName("Twitter_URL")[0].value;
    var videos = document.getElementsByName("Youtube_URL")[0].value;

    //call an ajax enter this into the DB
    $.ajax({
        type: "POST",
        url: '/ajaxUpdateProfile',
        data: { about: about, work: work, employment:employment, training:training, phone:phone, social_media:social_media, videos:videos },
    })
    .done(function(msg) {
        console.log(msg);
    })
    .fail(function(jqXHR, textStatus) {
        console.log(jqXHR);
        console.log( "Request failed: " + textStatus );
    });
}


/********************************************************************************************
 * Methods for the common dropdown method: profile link, logbooks link and logout
 *********************************************************************************************/

/* add required callback functions to onclick on the dropdown */
function setup_dropdown_links() {
    if (elem = document.getElementById('dropdown-profile')) {
        elem.onclick = dropdown_profile_callback;
    }
    if (elem = document.getElementById('dropdown-edit-profile')) {
        elem.onclick = dropdown_edit_profile_callback;
    }
    if (elem = document.getElementById('dropdown-logbooks')) {
        elem.onclick = dropdown_logbooks_callback;
    }
    if (elem = document.getElementById('dropdown-logout')) {
        elem.onclick = dropdown_logout_callback;
    }

}
/* callback for the profile link */
function dropdown_profile_callback() {
    location.href = "/profile";
}
/* callback for the edit profile link */
function dropdown_edit_profile_callback() {
    location.href = "/profile/edit";
}
/* callback for the logbooks page */
function dropdown_logbooks_callback() {
    location.href = "/logbookMainPage";
}
/* Logout requires a post request so add this function to the onclick of logout button */
function dropdown_logout_callback() {


    $.ajax({
        type: "POST",
        url: '/logout',
        data: { }
    })
        .done( function(msg) {
            /* TODO: anything needs to go here? */
            console.log('dropdown_logout_callback: done');
        })
        .fail( function (msg) {
            /* TODO: if this fails, is there a fallback for logout? */
            console.log('dropdown_logout_callbad: fail');

        })
        .success( function(msg) {
            /* logout successful, redirect to root */
            console.log('dropdown_logout_callback: success');
            location.href = '/';
        });
}


