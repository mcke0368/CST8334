@extends('layoutGuide')

@section('headGuide')
@stop
@section('bodyGuide')
    <h1 class='adam'>Risk Manager's report</h1>
    <h1 class='adam'>Date:{{$report->Report_date}}</h1>
    <h1 class='adam'>Time:{{$report->Report_time}}</h1>
    <h1 class='adam'>Temperature (C):{{$report->Temperature}}</h1>
    <h1 class='adam'>Wind :{{$report->Wind}}</h1>
    <h1 class='adam'>Precipitation :{{$report->Precipitation}}</h1>
    <h1 class='adam'>Visibility :{{$report->Visibility}}</h1>
    <h1 class='adam'>Surface Condition :{{$report->Surface_Condition}}</h1>
    <h1 class='adam'>Type of Injury :{{$report->Type_of_Injury}}</h1>
    <h1 class='adam'>Other Injury :{{$report->Other_Injury}}</h1>
    <h1 class='adam'>Type of Illness :{{$report->Type_of_Illness}}</h1>
    <h1 class='adam'>Other Illness :{{$report->Other_Illness}}</h1>
    <h1 class='adam'>Immediate Cause :{{$report->Immediate_Cause}}</h1>
    <h1 class='adam'>Other Cause :{{$report->Other_Cause}}</h1>
    <h1 class='adam'>Anatomical Location :{{$report->Anatomical_Location}}</h1>
@stop
