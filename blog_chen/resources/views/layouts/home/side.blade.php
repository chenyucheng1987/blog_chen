    <div class="am-u-md-4 am-u-sm-12 blog-sidebar">
        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-text-center blog-title"><span>关于我</span></h2>
            <p>PHP后端开发工程师</p>
        </div>
        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-text-center blog-title"><span>Contact ME</span></h2>
            <p>
                <a href=""><span class="am-icon-qq am-icon-fw am-primary blog-icon"></span></a>
                <a href=""><span class="am-icon-github am-icon-fw blog-icon"></span></a>
                <a href=""><span class="am-icon-weibo am-icon-fw blog-icon"></span></a>
                <a href=""><span class="am-icon-reddit am-icon-fw blog-icon"></span></a>
                <a href=""><span class="am-icon-weixin am-icon-fw blog-icon"></span></a>
            </p>
        </div>
        <div class="blog-clear-margin blog-sidebar-widget blog-bor am-g ">
            <h2 class="blog-title"><span>文章分类</span></h2>
            <div class="am-u-sm-12 blog-clear-padding">
			@if(!empty($categories))
            @foreach($categories as $v)
            <a href="{{url('/category/'.$v->cate_id)}}" class="blog-tag">{{$v->cate_name}}</a>
			@endforeach
			@endif
            </div>
        </div>
        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-title"><span>最新文章</span></h2>
            <ul class="am-list">
				@if(!empty($news))
                @foreach($news as $v)
				<li><a href="{{url('/article/'.$v->art_id)}}">{{$v->art_title}}</a></li>
				@endforeach
				@endif
            </ul>
        </div>        
		<div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-title"><span>点击排行</span></h2>
            <ul class="am-list">
				@if(!empty($pics))
                @foreach($pics as $v)
				<li><a href="{{url('/article/'.$v->art_id)}}">{{$v->art_title}}</a></li>
				@endforeach
				@endif
            </ul>
        </div>        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-title"><span>友情链接</span></h2>
            <ul class="am-list">
				@if(!empty($links))
                @foreach($links as $v)
				<li><a href="{{url($v->link_url)}}">{{$v->link_name}}</a></li>
				@endforeach
				@endif
            </ul>
        </div>
    </div>