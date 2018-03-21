@extends('layoutGuide')

@section('headGuide')
@stop
@section('bodyGuide')
    <h1>Risk Manager's report</h1>
    <h1>Date:{{$report->Report_date}}</h1>
    <h1>Time:{{$report->Report_time}}</h1>
    <h1>Temperature (C):{{$report->Temperature}}</h1>
    <h1>Wind :{{$report->Wind}}</h1>
    <h1>Precipitation :{{$report->Precipitation}}</h1>
    <h1>Visibility :{{$report->Visibility}}</h1>
    <h1>Surface Condition :{{$report->Surface_Condition}}</h1>
    <h1>Type of Injury :{{$report->Type_of_Injury}}</h1>
    <h1>Other Injury :{{$report->Other_Injury}}</h1>
    <h1>Type of Illness :{{$report->Type_of_Illness}}</h1>
    <h1>Other Illness :{{$report->Other_Illness}}</h1>
    <h1>Immediate Cause :{{$report->Immediate_Cause}}</h1>
    <h1>Other Cause :{{$report->Other_Cause}}</h1>
    <h1>Anatomical Location :{{$report->Anatomical_Location}}</h1>
@stop