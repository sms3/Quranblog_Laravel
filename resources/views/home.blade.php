@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(auth()->user()->usertype=='admin')
    <div><a href="{{route('admin.dashboard.index')}}"><button >عودة</button></a></div>
    @endif
            <div class="card">
                <div class="card-header" style="color: blue;text-align:center;font-size:24pt">قائمة المواضيع</div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <table class="table">
                      <tr>
                          <td>#</td>
                          <td>عنوان الموضوع</td>
                          <td>حالة الموضوع</td>
                          
                      </tr>
                      @foreach($posts as $post)
                      <tr>
                          <td>{{$post->id}}</td>
                          <td>
                              <a href="{{route('posts.show',['id'=>$post->id])}}">{{$post->title}}</a>
                          </td>
                          <td>
                            <p class="{{$post->Pstatus==1?'نشط':'غير نشط'}}">
                                {{$post->Pstatus==1?'نشط':'غير نشط'}}
                            </p>
                        </td>
                          
                         
                      </tr>
                      @endforeach
                  </table>
        





                    
                   
                    @endsection
         
