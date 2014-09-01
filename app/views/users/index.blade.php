@extends('layouts.master')

@section('content')
<h1>All Tasks</h1>
  @foreach ($users as $user)
  	<li>{{link_to("users/$user->id", $user->username) }}</li>
  @endforeach
@stop
