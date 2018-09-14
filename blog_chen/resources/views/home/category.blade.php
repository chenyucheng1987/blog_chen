@section('title','分类列表')
@extends('layouts.home.layout')
@section('content')
<hr>

<!-- content srart -->
<div class="am-g am-g-fixed blog-fixed">
    <div class="am-u-md-12 am-u-sm-12">
		@foreach($data as $d)
        <article class="am-g blog-entry-article">
            <div class="am-u-lg-4 am-u-md-12 am-u-sm-12 blog-entry-img">
                <img src="{{url($d->art_thumb)}}" alt="" class="am-u-sm-12">
            </div>
            <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-text">
                <span><a href="" class="blog-color">article &nbsp;</a></span>
                <span> {{$d->art_editor}}</span>
                <span>2015/10/9</span>
                <h1><a title="{{$d->art_title}}" href="{{url('article/'.$d->art_id)}}">{{$d->art_title}}</a></h1>
                <p>{{$d->art_description}}
                </p>
                <p><a href="" class="blog-continue">continue reading</a></p>
            </div>
        </article>
		@endforeach
 
    <ul class="am-pagination">
	  {{$data->links()}}
	</ul>
    </div>
</div>
<!-- content end -->
@endsection('content')
@section('javascript')
<script>
$(".pagination").addClass('am-pagination');
</script>
@endsection('javascript')