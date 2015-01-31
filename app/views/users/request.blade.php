
@extends('layout.main')
@section('title')
Request
@endsection

@section('main-area')


{{ Form::open() }}
@if (Session::get("error"))
{{ Session::get("error") }}<br />
@endif
@if (Session::get("status"))
{{ Session::get("status") }}<br />
@endif
{{ Form::label("email", "Email") }}
{{ Form::text("email", Input::old("email")) }}
{{ Form::submit("reset") }}
{{ Form::close() }}


@endsection