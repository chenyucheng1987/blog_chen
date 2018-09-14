@section('title','分类列表')
@extends('layouts.home.layout')
@section('content')
<hr>
<!-- content srart -->
<div class="am-g am-g-fixed blog-fixed blog-content">
    <div class="am-u-sm-12">
      <article class="am-article blog-article-p">
        <div class="am-article-hd">
          <h1 class="am-article-title blog-text-center">{{$field->art_title}}</h1>
          <p class="am-article-meta blog-text-center">
              <span><a href="{{ url('/category/'.$field->cate_id)}}" class="blog-color">{{ $field->category->cate_name }}&nbsp;</a></span>
			  <span>{{ date('Y-m-d',$field->art_time)}}</span>
              <span>点击次数：{{$field->art_view}}&nbsp;</span>
          </p>
        </div>        
        <div class="am-article-bd">
        <img src="assets/i/f17.jpg" alt="" class="blog-entry-img blog-article-margin">          
		{!! $field->art_content !!}
        </div>
      </article>
        
        <div class="am-g blog-article-widget blog-article-margin">
          <div class="am-u-lg-4 am-u-md-5 am-u-sm-7 am-u-sm-centered blog-text-center">
            <span class="am-icon-tags"> &nbsp;</span> 标签 : {{$field->art_tag}}
            <hr>
            <a href=""><span class="am-icon-qq am-icon-fw am-primary blog-icon"></span></a>
            <a href=""><span class="am-icon-wechat am-icon-fw blog-icon"></span></a>
            <a href=""><span class="am-icon-weibo am-icon-fw blog-icon"></span></a>
          </div>
        </div>

        <hr>
        <div class="am-g blog-author blog-article-margin">
          <div class="am-u-sm-3 am-u-md-3 am-u-lg-2">
            <img src="assets/i/f15.jpg" alt="" class="blog-author-img am-circle">
          </div>
          <div class="am-u-sm-9 am-u-md-9 am-u-lg-10">
          <h3><span>作者 &nbsp;: &nbsp;</span><span class="blog-color">{{$field->art_editor}}</span></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
        <hr>
        <ul class="am-pagination blog-article-margin">
			@if($article['pre'])
			<li class="am-pagination-prev"><a href="{{url('article/'.$article['pre']->art_id)}}" class="">上一篇：{{$article['pre']->art_title}}</a></li>    
            @else
            <li class="am-pagination-prev">&laquo; 没有上一篇了</a></li>
            @endif
		    @if($article['next'])
            <li class="am-pagination-next"><a href="{{url('article/'.$article['next']->art_id)}}">下一篇：{{$article['next']->art_title}}</a></li>  
            @else
            <li class="am-pagination-next">没有下一篇了</li>
            @endif
        </ul>
        
        <hr>

        <form class="am-form am-g">
            <h3 class="blog-comment">评论</h3>
          <fieldset>
            <div class="am-form-group am-u-sm-4 blog-clear-left">
              <input type="text" class="" placeholder="名字">
            </div>
            <div class="am-form-group am-u-sm-4">
              <input type="email" class="" placeholder="邮箱">
            </div>

            <div class="am-form-group am-u-sm-4 blog-clear-right">
              <input type="password" class="" placeholder="网站">
            </div>
        
            <div class="am-form-group">
              <textarea class="" rows="5" placeholder="一字千金"></textarea>
            </div>
        
            <p><button type="submit" class="am-btn am-btn-default">发表评论</button></p>
          </fieldset>
        </form>

        <hr>
    </div>
</div>
<!-- content end -->
@endsection('content')