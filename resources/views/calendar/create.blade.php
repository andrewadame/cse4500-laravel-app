@extends('adminlte::page')

@section('title', 'Calendar')

@section('content_header')
    <h1>To Do's</h1>
@stop

@section('content')
<form method="post" action="{{ route('calendar.store') }}" >
    @csrf
    <x-adminlte-input name="title" label="Title" />
    <x-adminlte-input name="date" type="number" min=0 max=100 label="Date" />
    <x-adminlte-input name="time" type="number" min=0 max=100 label="Time" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop