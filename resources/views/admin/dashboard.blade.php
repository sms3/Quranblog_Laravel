@extends('layouts.admin')

@section('title')
    صفحة المتحكم
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title" style="left:0;"> جدول المواضيع</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <tr>
                <td>#</td>
                <td>عنوان الموضوع</td>
                <td>حالة الموضوع</td>
                <td>
                   إعداد المسخدم:
                </td>
                
                <td>تغير حالة الموضوع</td>
               
            </tr>
            @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>
                    <a href="{{route('posts.show',['id'=>$post->id])}}">{{$post->title}}</a>
                </td>
                <td>
                    <p class="{{$post->Pstatus==1?'جاهز للعرض':'يحتاج للتدقيق'}}">
                        {{$post->Pstatus==1?'جاهز للعرض':'يحتاج للتدقيق'}}
                    </p>
                </td>
                <td>
                    {{$post->user->name}}
                </td>
                
                <td>
                    @if($post->Pstatus==0)
                    <a href="{{route('admin.dashboard',['id'=>$post->id])}}">تم التدقيق</a>
                    @endif
                </td>
                
            </tr>
            @endforeach
    
       
             
             
          </table>
           
      </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="card card-plain">
      
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('scripts')
    
@endsection