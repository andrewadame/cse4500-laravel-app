@extends('adminlte::page')

@section('title', 'Calendar')

@section('content_header')
    <h1>Calendar's</h1>
@stop

@section('content')
  <h2>{{ $clndr->title; }}</h2>
  <div><p>{{ $clndr->progress; }}% finished</p></div>
@stop