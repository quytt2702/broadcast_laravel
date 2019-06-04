@extends('layouts.app')

@section('content')

<input type="hidden" id="user_id" value="{{ Auth::user()->id }}">

<h1>USER: {{ Auth::user()->name }}</h1>

@endsection
