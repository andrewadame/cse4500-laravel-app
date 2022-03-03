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
                    <th style="width: 10px">#</th><th>Class</th>
                </tr>
                    </thead>
                   <tbody>
                    <tr>
                      <td>CSE-4500 "PLATFORM COMPUTING"</td>
                    </tr>
                    <tr>
                      <td>CSE-4410 "GAME PROGRAMMING"</td>
                    </tr>
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
