
<section id="nav-bar" >
    <nav class="navbar navbar-expand-lg navbar-light ">
<a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('images/logo.webp')}}"></a>


<div style="color:#fff;text-align:right;"><p  style="align:right;">برنامج</p>
  
  <p >تعليم القرآن الكريم</p></div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars" aria-hidden="true"></i>
  </button>
  
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
  <div class="dropdown-menu warning">
    <a class="dropdown-item" href="{{ route('logout') }}"
    onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
     {{ __('خروج') }}
     
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
