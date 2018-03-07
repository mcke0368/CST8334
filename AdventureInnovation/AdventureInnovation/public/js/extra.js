
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

    //call an ajax enter this into the DB
    $.ajax({
        type: "POST",
        url: '/ajaxUpdateProfile',
        data: { about: about, work: work, employment:employment, training:training },    
    })
    .done(function(msg) {
        console.log(msg);
    })
    .fail(function(jqXHR, textStatus) {
        console.log(jqXHR);
        console.log( "Request failed: " + textStatus );
    });
}


