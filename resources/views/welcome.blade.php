@extends('layouts.master')

@section('content')
<section id="banner">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<p class="btitle">
					تعليم القرآن الكريم </p>
					<p>
				تعلم بطريقة سهلة و ميسرة</p>
			 <a href="https://www.youtube.com/embed/qtvgJriJVG0?rel=0&showinfo=0"><img src="{{asset('images/play1.png')}}" class="btn-play"> كيفية التسجيل </a>
			 </div>
			 <div class="col-md-6 text-center">
			 	
			 <img src="{{asset('images/q.png')}}" class="img-fluid">
			</div>
		</div>
	</div>
	
</section>
<section class="gallery">
<div class="container">
<div class="row">
<div class="col-md-4">
<img src="{{asset('images/img1.jpg')}}" class="img-fluid"></div>

<div class="col-md-4">
<img src="{{asset('images/img3.jpg')}}" class="img-fluid"></div>

<div class="col-md-4">
<img src="{{asset('images/img.jpg')}}" class="img-fluid">
</div></div></div>
</section>
<!-- conect us -->
<section id="social-media">
	<div class="container text-center">
		<p>تابعنا على مواقع التواصل</p>
		<div class="social-icons">
		<a href="https://www.facebook.com/equranapp/"> <img src="{{asset('images/facebook.png')}}"></a>
		<a href="https://www.youtube.com/channel/UC2SG4RoDT2ijc17pYaQ7T0g"><img src="{{asset('images/yotub.png')}}"></a>
		<a href="https://twitter.com/equranapp1?s=09"> <img src="{{asset('images/twitter.png')}}"></a>
</div>
</div>
</section>


@endsection