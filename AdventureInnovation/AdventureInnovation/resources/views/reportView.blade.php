@extends('layoutGuide')

@section('headGuide')
    <link rel="stylesheet" href="{{ URL::asset('slick/slick.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('slick/slick-theme.css') }}"/>
    <script>
        $(document).on("click", "#b2", function () {
            $('html, body').animate({
                scrollTop: $("#f1").offset().top
            }, 500);
        });
    </script>

@stop

@section('bodyGuide')
    
   <div id="c1" class="container-fluid">
       <div class="col-md-8 col-md-offset-2">
       <table class=" table table-striped table-bordered table-font">
            <thead>
                <tr> 
                    <th colspan="2">
                        <h2 class="text-center">Risk Manager's Report</h2>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                   <th colspan="2"><h4 class="text-center">General Information</h4></th>
               </tr>
               <tr>
                   <td class="col-md-3">Date:</td>
                   <td class="col-md-9">{{$report->Report_date}}</td>
               </tr>
               <tr>
                   <td class="col-md-3">Time:</td>
                   <td class="col-md-9">{{$report->Report_time}}</td>
               </tr>
       
               <tr>
                   <td class="col-md-3">Location:</td>
                   <td class="col-md-9">{{$report->Location}}</td>
               </tr>
               <tr>
                   <td class="col-md-3">Temperature (C):</td>
                   <td class="col-md-9">{{$report->Temperature}}</td>
               </tr>
               <tr>
                   <td class="col-md-3">Wind (km/h):</td>
                   <td class="col-md-9">{{$report->Wind}}</td>
               </tr>
               <tr>
                   <td class="col-md-3">Precipitation:</td>
                   <td class="col-md-9">{{$report->Precipitation}}</td>
               </tr>
               <tr>
                   <td class="col-md-3">Visibility:</td>
                   <td class="col-md-9">{{$report->Visibility}}</td>
               </tr>
               <tr>
                   <td class="col-md-3">Surface Condition:</td>
                   <td class="col-md-9">{{$report->Surface_Condition}}</td>
               </tr>
               <tr>
                   <th colspan="2"><h4 class="text-center">Details</h4></th>
               </tr>
       
               <tr>
                   <td class="col-md-3">Incident: </td>
                   <td class="col-md-9">{{$report->Incident}}</td>
               </tr>
               <tr>
                   <td class="col-md-3">Evacuation Method: </td>
                   <td class="col-md-9">{{$report->Evacuation_Method}}</td>
               </tr>
               <tr>
                   <td class="col-md-3">Damage: </td>
                   <td class="col-md-9">{{$report->Damage}}</td>
               </tr>
               <tr>
                   <td class="col-md-3">Is this a Lost-Day case?</td>
                   <td class="col-md-9">{{$report->Lost_Day}}</td>
               </tr>
               <tr>
                   <td class="col-md-3">If yes: # of days lost?: </td>
                   <td class="col-md-9">{{$report->Lost_Number_Of_Days}}</td>
               </tr>
               <tr>
                   <td class="col-md-3">Did the victim leave the field? </td>
                   <td class="col-md-9">{{$report->Victim_Left_Field}}</td>
               </tr>
               <tr>
                   <td class="col-md-3">If yes, on what date?:</td>
                   <td class="col-md-9">{{$report->Victim_Left_Date}}</td>
               </tr>
               <tr>
                   <td class="col-md-3">Did the victim visit a medical facility?  </td>
                   <td class="col-md-9">{{$report->Visit_Facility}}</td>
               </tr>
               <tr>
                   <td class="col-md-3">If yes, # of hours/days: </td>
                   <td class="col-md-9">{{$report->Left_Date}}</td>
               </tr>
               <tr>
                   <td class="col-md-3">Did the victim return the course?</td>
                   <td class="col-md-9">{{$report->Return_Field}}</td>
               </tr>
               <tr>
                   <td class="col-md-3">If yes, on what date?:</td>
                   <td class="col-md-9">{{$report->Return_Date}}</td>
               </tr>
               <tr>
                   <td class="col-md-3">Is this a re-curring injury?</td>
                   <td class="col-md-9">{{$report->Re_Curring}}</td>
               </tr>
               <tr>
                   <td class="col-md-3">Type of Injury:</td>
                   <td class="col-md-9">{{$report->Type_of_Injury}}</td>
               </tr>
               <tr>
                   <td class="col-md-3">Other Injury :</td>
                   <td class="col-md-9">{{$report->Other_Injury}}</td>
               </tr>
               <tr>
                   <td class="col-md-3">Anatomical Location:</td>
                   <td class="col-md-9">{{$report->Anatomical_Location}}</td>
               </tr>
               <tr>
                   <td class="col-md-3">Type of Illness :</td>
                   <td class="col-md-9">{{$report->Type_of_Illness}}</td>
               </tr>
               <tr>
                   <td class="col-md-3">Other Illness :</td>
                   <td class="col-md-9">{{$report->Other_Illness}}</td>
               </tr>
               <tr>
                   <td class="col-md-3">Immediate Cause:</td>
                   <td class="col-md-9">{{$report->Immediate_Cause}}</td>
               </tr>
               <tr>
                   <td class="col-md-3">Other Cause:</td>
                   <td class="col-md-9">{{$report->Other_Cause}}</td>
               </tr>
               <tr>
                   <td class="col-md-3">Program Activity:</td>
                   <td class="col-md-9">{{$report->Program_Activity}}</td>
               </tr>
       
               <tr>
                   <th colspan="2"><h4 class="text-center">End of Report</h4></th>
               </tr>
           </tbody>
       </table>
       </div>
   </div>



@stop