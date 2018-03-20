@extends('layoutGuide')

@section('headGuide')
    <style>

        #logbook-cards, #report-cards {
            margin-top: 5%;
        }

        #logbook-cards .card, #report-cards .card {
            background-color: #E3E3E3;
            border-style: solid;
            border-color: #C8C8C8;
            padding-top: 1%;
            padding-bottom: 4%;
            padding-right: 3%;
            padding-left: 3%;
            border-radius: 10px;
            margin: 5%;
        }

        #logbook-history-container, #report-history-container {
            background-color: #E3E3E3;
            border-style: solid;
            border-color: #C8C8C8;
            padding: 3%;
        }

        #logbook-history-container .pre-scrollable, #report-history-container .pre-scrollable {
            background-color: #EEEAEA;
            border-style: solid;
            border-color: #C8C8C8;
        }

        .pre-scrollable .card {
            border-style: solid;
            border-color: #C8C8C8;
            padding-top: 3%;
            padding-left: 3%;
        }

    </style>
    <script>
        $( function() {
            $(".log-type-card a.btn-create-log").click(function() {
                var type_id = $(this).attr('id') ;
                $.ajax({
                    type: "POST",
                    url: '/setLogType',
                    data: { type_id: type_id },
                    success: function(data)
                    {
                        if(data == "true"){
                            window.location.href = "createDefaultLogbook";
                        }
                    },
                    error: function(response)
                    {
                        alert('Error');
                    }
                });

            });

            $(".log-ref").click(function() {
                var log_id = $(this).attr('id') ;
                $.ajax({
                    type: "POST",
                    url: '/setLog',
                    data: { log_id: log_id },
                    success: function(data)
                    {
                        if(data == "true"){
                            window.location.href = "defaultLog";
                        }
                    },
                    error: function(response)
                    {
                        alert('Error');
                    }
                });

            });

            $(".delete-log-type-btn").click(function() {
                var logbook_type_id = $(this).attr("id").substr(2);
                var logbook_type_title = $(this).attr("name");
                $('#modal-delete-logtype').find("p#pid-log-type").attr("name", logbook_type_id);
                $('#modal-delete-logtype').find("p#pid-log-type").text(logbook_type_title);
                $('#modal-delete-logtype').modal('show');
            });

            $("#modal-button-delete-log-type").click(function() {
                var logbook_type_id = $("#modal-delete-logtype #pid-log-type").attr("name");

                $.ajax({
                    type: "POST",
                    url: '/deleteLogType',
                    data: { logbook_type_id: logbook_type_id },
                    success: function(data)
                    {
                        if(data == "true"){

                        }

                        location.reload();
                    },
                    error: function(response)
                    {
                        location.reload();
                    }
                });

            });

            $(".log-ref .delete-log-icon").click(function(e) {
                e.stopPropagation();
            });

            $(".delete-log-icon").click(function() {
                var logbook_id = $(this).attr("id").substr(2);
                var logbook_title = $(this).attr("name");
                $('#modal-delete-log').find("p#pid-log").attr("name", logbook_id);
                $('#modal-delete-log').find("p#pid-log").text(logbook_title);
                $('#modal-delete-log').modal('show');
            });

            $("#modal-button-delete-log").click(function() {
                var logbook_id = $("#modal-delete-log #pid-log").attr("name");

                $.ajax({
                    type: "POST",
                    url: '/deleteLog',
                    data: { logbook_id: logbook_id },
                    success: function(data)
                    {
                        if(data == "true"){

                        }

                        location.reload();
                    },
                    error: function(response)
                    {
                        location.reload();
                    }
                });

            });

        });
    </script>
@stop

@section('bodyGuide')

    <div class="container-fulid backgroundSeaBlue"><h1 class="text-center" style="margin:0; padding:1%; color:white;">Testing</h1></div>

    <div class="container">
        @include('logs.partial.panel-form');
    </div>

@stop