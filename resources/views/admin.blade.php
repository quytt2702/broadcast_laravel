@extends('layouts.app')

@section('content')
  <h1>ADMIN: {{ Auth::user()->name }}</h1>
@endsection
