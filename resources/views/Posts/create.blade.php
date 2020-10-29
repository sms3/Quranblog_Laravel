@extends('layouts.master')

@section('title','إنشاء مدونة جديدة')

    @section('content')
    <div class="row">
        @if(auth()->user()->usertype=='admin')
    <div><a href="{{route('admin.dashboard.index')}}"><button >عودة</button></a></div>
    @endif
        <div class="col-sm-12">
            <h1 style="text-align:center;">إنشاء موضوع جديد</h1>
            {!! Form::open(['action' =>'PostsController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
            @component('component.postsForm')
    
            @endcomponent
            {!! Form::Close() !!}
        </div>
    </div>
    
    @endsection