@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center">
                	{{$posts->title}}
                </div>

                <div class="card-body">
                <img src="{{asset('Posts/'.$posts->image)}}" height="200" class="card-img-top" alt="">
                </div>
                <div class="card-body">
                    
                    </div>
                <p>
                	{{$posts->info}}
                </p>
                <p>
                	{{$posts->date}}
                </p>
            </div>
            </div>
                
                
            </div>
        </div>
    </div>
</div>
@endsection
