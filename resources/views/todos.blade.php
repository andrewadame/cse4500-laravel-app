@section('plugins.Datatables', true)

@extends('adminlte::page')

@section('title', 'To Do List')

@section('content_header')
    <h1>To Do's</h1>
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
          <td>1.</td>
          <td>Getting a Normal Sleep Schedule</td>
          <td><div class="progress progress-xs"><div class="progress-bar progress-bar-danger" style="width: 55%"></div></div></td>
          <td><span class="badge bg-danger">55%</span></td>
        </tr>
        <tr>
          <td>2.</td>
          <td>Procrastination</td>
          <td><div class="progress progress-xs"><div class="progress-bar bg-warning" style="width: 80%"></div></div></td>
          <td><span class="badge bg-warning">80%</span></td>
        </tr>
        <tr>
          <td>3.</td>
          <td>Finish Practice Assignment #4</td>
          <td><div class="progress progress-xs"><div class="progress-bar bg-success" style="width: 100%"></div></div></td>
          <td><span class="badge bg-success">100%</span></td>
      </tbody>
    </table>
  </div>
</div>
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop
