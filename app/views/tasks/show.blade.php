@extends('layouts.master')

@section('content')
  <table class="table">
	  <tr><td>Title:</td><td>{{ $task->title }}</td></tr>
	  <tr><td>Body:</td><td>{{ $task->body }}</td></tr>
	  <tr><td>User Id:</td><td>{{ $task->user_id }}</td></tr>
	  <tr><td>Completed:</td><td>{{ $task->completed }}</td></tr>
  </table>
  <p>{{ link_to('/tasks', 'Go Back') }}</p>
@stop
