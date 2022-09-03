@extends('adminlte::page')

@section('title')
    @yield('title')
@stop

@section('content_header')
  @yield('content_header')
@stop

@section('content')
  @yield('content')
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
  @yield('js')
@stop