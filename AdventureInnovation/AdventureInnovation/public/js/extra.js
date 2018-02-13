
$(document).ready(function() { 
    
    $('#cert-button').click(function(){
        var cert = $('#cert-name').val();
        var file = $('#cert-pdf').val();
        var link = file.substring(12, file.length);
        var expiration = $('#cert-exp-date').val();
        addCertification(cert, expiration, link);
    });

    $('#signup-form').submit(function (e) {
        e.preventDefault();
        var firstname = $('#inputfirstname').val();
        var lastname = $('#inputlastname').val();
        var username = $('#inputUsername').val();
        var email = $('#emailInput').val();
        var password = $('#passwordInput').val();

        createUser(firstname, lastname, username, email, password);
    });

    $('#send-all-data').click(function(){
        getAllFields();    
    });

    $("#b1").click(function() {
      window.location.href="http://localhost/login"; 
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#loginForm').submit(function(e) {
        var email = $("#exampleInputEmail1").val();
        var password = $("#exampleInputPassword1").val();
        
        e.preventDefault();
        $.ajax({
           type: "POST",
           url: '/signin',
           data: { email: email, password: password },
           success: function(data)
           {
                if(data == "true"){
                    console.log("LOGGED IN VIA AJAX.");
                    window.location.href = "profile";
                }
           }, 
           error: function(response)
            {
                alert('Incorrect Credentials');
            }
       });
     });

    $("#submit-contact").click( function (e) {
        e.preventDefault();
        $(".hideme").removeClass("hideme");
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
        '<a target="_blank" href="http://localhost/pdfs/'+ link +'" class="btn btn-info float-right" role="button">Download Certificate</a>'+
        '</div>'+
        '<div>'+
        '<div class="small"><i class="fa fa-calendar-times-o" aria-hidden="true"></i> Expiry Date:' + expiration + '</div>'+
        '</div>'+
        '</a></li>'
    );

    

    //call an ajax enter this into the DB
    $.ajax({
        type: "POST",
        url: '/updateCerts',
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
        url: '/updateProfile',
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

function createUser(firstname, lastname, username, email, password) {
   //call an ajax enter this into the DB
   $.ajax({
    type: "POST",
    url: '/signup',
    data: { firstname: firstname, lastname: lastname, username:username, email:email, 
        password:password },    
    })
    .done(function(msg) {
        console.log(msg);
        window.location.href = "confirmation";
    })
    .fail(function(jqXHR, textStatus) {
        console.log(jqXHR);
        console.log( "Request failed: " + textStatus );
    }); 
}
