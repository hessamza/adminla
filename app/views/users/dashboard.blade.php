
@extends('layout.main')
@section('title')
Dashboard
@endsection
@section('main-area')



<h1>Dashboard</h1>

<p>Welcome to your Dashboard. You rock!</p>


@if(Session::has('message'))
<p class="alert">{{ Session::get('message') }}</p>
@endif


@endsection