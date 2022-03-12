@extends('adminlte::page')

@section('title', 'To Do List')

@section('content_header')
    <h1>To Do's</h1>
@stop

@section('content')
  <h2>{{ $todo->title; }}</h2>
  <div><p>{{ $todo->progress; }}% finished</p></div>
@stop