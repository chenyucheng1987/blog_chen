@section('title','首页')
@extends('layouts.home.layout')
@section('content')
<!-- content srart -->
<div style="background-color:#E6ECF0; padding:10px;" class="am-hide-sm-only">
<header class="am-g am-g-fixed blog-fixed blog-text-center blog-header am-with-fixed-header" >
	<div class="am-u-sm-4"><img src="http://chen-leo.com/resources/views/index/img/avatar.jpg" class="am-circle " style="width: 160px; height: 150px ;"></div>
    <div class="am-u-sm-8 am-u-sm-centered">
        <h2 class="am-hide-sm-only" style="padding:50px;">程序员最讨厌的四件事：写注释、写文档、别人不写注释、别人不写文档……</h2>
    </div>
</header>
</div>
<div class="am-g am-g-fixed blog-fixed">
    <div class="am-u-md-8 am-u-sm-12">
		@foreach($data as $d)
        <article class="am-g blog-entry-article">
            <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-img">
                <img src="{{url($d->art_thumb)}}" alt="" class="am-u-sm-12">
            </div>
            <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-text">
                <span><a href="{{ url('/category/'.$d->cate_id)}}" class="blog-color">{{ $d->category->cate_name }}</a></span>
                <span> {{ $d->art_editor }}</span>
                <span>{{ date('Y-m-d',$d->art_time)}}</span>
                <h1><a title="{{$d->art_title}}" href="{{url('article/'.$d->art_id)}}">{{ $d->art_title }}</a></h1>
                <p>{{$d->art_description}}
                </p>
                <p><a href="" class="blog-continue">continue reading</a></p>
            </div>
        </article>
		@endforeach
	  {{$data->links()}}
    </div>
	@include('layouts.home.side')
</div>
<!-- content end -->
@endsection('content')
@section('javascript')
<script>
$(".pagination").addClass('am-pagination');
</script>
@endsection('javascript')