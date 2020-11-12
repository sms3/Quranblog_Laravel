@extends('layouts.master')

@section('content')
<h1  dir="">{{$title}}</h1>
<ul class="list-group">
    @if(count($services) > 0 )
        @foreach( $services as $service) 

        <li class="list-group-item ">{{$service}}  </li>    
        @endforeach
    @endif
   
</ul>

<section id="services">
	<div class="container text-center">
		<h1 class="title">ماذا نقدم لكم ؟</h1>
		<div class="row text-center">
		<div class="col-md-4" services>
		<img src="images/cap.svg" class="service-img">
		<h4>شهادات الحفظ  </h4>
		<p>
		بعد انتهائك من برنامج حفظ يتم منحك شهادة الانتهاء من البرنامج مختومة من طرف الوزارة</p>
	</div>
<div class="col-md-4" services>
		<img src="images/video.svg" class="service-img">
		<h4> دروس حية </h4>
		<p>
		تحصص الدراسة حية و مباشرة مع الأستاذ تضمن الاستفادة و الايستعاب الجيد للدرس</p>
	</div><div class="col-md-4" services>
		<img src="images/stats.svg" class="service-img">
		<h4> منهجية ممتعة و محفزة  </h4>
		<p>منهجية بسيطة و محفزة في بيئة تساعدك على الإنجاز عبر أدوات و نظام تحفيز. </p>
	</div>
</div>

</div>
</section>

  
@endsection