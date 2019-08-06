@extends('layouts.app')
@section('title', '403')

@section('content')
    <div style="text-align: center  ">
        <h1>没有权限 </h1>
        {{--<h2>{{ $user }}</h2>--}}
        <a style='text-align: center' href="{{url()->previous()}}">返回上一页</a>
    </div>
@stop