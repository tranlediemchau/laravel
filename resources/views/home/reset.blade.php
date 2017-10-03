@extends('layout.login')
@section('content')
    @if( Session::has('flash_message'))
        <div class="alert alert-success {{Session::has('flash_message_importance')?'alert-important':''}}">
            @If( Session::has('flash_message_important'))
            <button type="button" class="close" data-dismiss="left" aria-hidden ="true">&times;</button>
            @endif
            {{Session::get('flash_message')}}
        </div>
    @endif
@include('errors.list')
    {!! Form::model(['method'=>'PATCH','action'=>['HomeController@passwordupdate'],'files'=>true]) !!}
            @include('home.resetform')
    {!! Form::close() !!}
@endsection
