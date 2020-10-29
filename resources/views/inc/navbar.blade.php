<!DOCTYPE html>
<html lang="Ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
     crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>{{('القران الكريم')}}</title>
</head>
<body>
<section id="nav-bar" >
    <nav class="navbar navbar-expand-lg navbar-light ">
<a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('images/logo.webp')}}"></a>
<div style="color:#fff;text-align:right;"><p  style="align:right;">برنامج</p>
  
  <p >تعليم القرآن الكريم</p></div>
  


<div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">

 
 
  <li class="nav-item ">
    <a class="nav-link" href="{{url('/posts/index')}}">المدونة<span class="sr-only">(current)</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{url('/ser')}}">خدماتنا</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{url('/about')}}">عن البرنامج</a>
  </li>
  @auth
<li class="nav-item ">
  <button type="button" class="btn btn-warning"><a class="nav-link" href="{{url('posts/create')}}"> إضافة مدونة<span class="sr-only">(current)</span></a></button>
</li> 

  
  <li class="nav-item">
    <div class="btn-group" class="nav-item ">
      <button type="button" class="btn btn-warning dropdown-toggle" class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ Auth::user()->name }} 
      </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="{{ route('logout') }}"
    onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
     {{ __('Logout') }}
     
 </a>
  </div>
</div>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  @csrf
</form>
  </li>
  @endauth
  @guest           
    <li class="nav-item ">
      <a class="nav-link" href="{{ route('register') }}"> تسجيل دخول<span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="{{ route('login')}}"> دخول المسجلين<span class="sr-only">(current)</span></a>
    </li> 
    @endguest
  

</ul>
</div>
</nav>

</section>
</body></html>