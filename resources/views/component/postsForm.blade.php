{{ Form::label('title', 'عنوان المدونة', ['class' => 'control-label']) }}
{{ Form::text('title', null, ['class' => 'form-control form-control-lg', 'placeholder' => 'أكتب العنوان']) }}

{{ Form::label('info', 'موضوع الدونة', ['class' => 'control-label mt-3']) }}
{{ Form::textarea('info', null, ['class' => 'form-control', 'placeholder' => 'أكتب الموضوع']) }}

{{ Form::label('date', 'وقت إنشاء المقالة', ['class' => 'control-label mt-3']) }}
{{ Form::date('date', \Carbon\Carbon::now(), ['class' => 'form-control']) }}
{{ Form::label('image', 'صورة للمدونة', ['class' => 'control-label mt-3']) }}
{{Form::file('image', null, ['class' => 'form-control']) }}



	<div class="col-sm-4 center">
		<button class="btn btn-block btn-primary content-center" type="submit">حفظ</button>
	
</div>