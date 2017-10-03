@extends('layout.login')
@section('content')
@include('errors.list')
{!! Form::model(['method'=>'POST','action'=>['HomeController@strore'],'files'=>true]) !!}
@include('home.personalform')
{!! Form::close() !!}
@endsection
