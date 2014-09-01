
@extends('layouts.master')

@section('content')
<h1>{{ $user->username }}</h1>
{{ $lists }}
<p>{{ link_to('/users', 'Go Back') }}</p>
@stop
