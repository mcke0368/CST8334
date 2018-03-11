<!doctype html>
<html lang="{{ app()->getLocale() }}">
    {!! Form::open(array('route' => 'videos.store')) !!}
    {{Form::label('Title','Titles:')}}
    {{Form::text('Title',null,array('class' => 'form-control'))}}
    </br>
    {{Form::label('URL','URL :')}}
    {{Form::text('URL',null,array('class' => 'form-control'))}}
    {{Form::submit('Add Link')}}
    {!! Form::close() !!}
</html>