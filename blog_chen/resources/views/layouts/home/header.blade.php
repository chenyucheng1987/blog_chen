<style>
a:hover{
	color:#0e90d2;
}
</style>
<header style="background:#fff;" id="amz-header" class="am-header-fixed">
<div class="am-container">
<h1 class="am-topbar-brand"><a href="/">陈禹丞博客</a></h1>
<button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-secondary am-show-sm-only am-collapsed" data-am-collapse="{target: '#collapse-head'}">
<span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span>
</button>
<div class="am-collapse am-topbar-collapse am-topbar-right" id="collapse-head">
<ul class="am-nav am-nav-pills am-topbar-nav">
      <li id="test"><a class="test" href="{{url('/')}}">首页</a></li>
	  <li><a href="{{url('/about')}}">关于我</a></li>
      <li><a href="{{url('/category/list')}}">文章列表</a></li>
      <li><a href="{{url('/album')}}">图片库</a></li>
      <li><a href="{{url('/gbook')}}">留言板</a></li>
</ul>
</div>
    <form class="am-topbar-form am-topbar-right am-form-inline" role="search">
      <div class="am-form-group">
        <input type="text" class="am-form-field am-input-sm" placeholder="站内搜索">
      </div>
	</form>
</div>
</header>