@extends('layouts.master')

@section('content')
    <h2 class="text-center"> المدونة</h2>
    <hr>
    @foreach($posts as $post)
    <div class="card-deck text-right">
        <div class="card">
        <img src="{{asset('Posts/'.$post->image)}}"  height="300" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{{$post->info}}</p>
            <p class="card-text"><small class="text-muted">بتاريخ:{{$post->date}}</small></p>
            <div class="card-text">
              إعداد :{{ $post->user->name }}
          </div>
          </div>
        </div>

        </div>
      



   
    
                    @endforeach
                </div>
 
            </div>
            

        

    @endsection