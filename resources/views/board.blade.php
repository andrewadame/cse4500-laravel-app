@extends('adminlte::page')

@section('title', 'title')

@section('content_header')
    <h1>Board</h1>
@stop

@section('content')
  <div class="card">
    <div class="card-body">
        <table id="table" class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">#</th><th>Task</th><th>Progress</th><th style="width: 40px">Label</th>
                </tr>
                    </thead>
                   <tbody>
                    <tr>
                    <tr>
                   <tbody>
         </table>
  </div>
</div> 
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
