<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Links;

class IndexController extends Controller
{
    public function index()
    {
        //点击量最高的6篇文章（站长推荐）
        $pics = Article::orderBy('art_view','desc')->take(6)->get();

        //图文列表5篇（带分页）
        $data = Article::orderBy('art_time','desc')->with('category')->paginate(5);


        //最新发布文章8篇
        $news = Article::orderBy('art_time','desc')->take(8)->get();
		
		//分类
		$categories = Category::get();

        //友情链接
        $links = Links::orderBy('link_order','asc')->get();

        return view('home.index',compact('pics','data','news','categories','links'));
    }
	
	public function category($cate_id){
		
	    //图文列表4篇（带分页）
        if($cate_id=="list"){
			$data = Article::orderBy('art_time','desc')->paginate(4);
		}else{
			$data = Article::where('cate_id',$cate_id)->orderBy('art_time','desc')->paginate(4);
		}
        //查看次数自增
        Category::where('cate_id',$cate_id)->increment('cate_view');

        //当前分类的子分类
        $submenu = Category::where('cate_pid',$cate_id)->get();

        $field = Category::find($cate_id);
        return view('home.category',compact('field','data','submenu'));
	}
	
	public function article($art_id)
    {
        $field = Article::with('category')->where('art_id',$art_id)->first();

        //查看次数自增
        Article::where('art_id',$art_id)->increment('art_view');

        $article['pre'] = Article::where('art_id','<',$art_id)->orderBy('art_id','desc')->first();
        $article['next'] = Article::where('art_id','>',$art_id)->orderBy('art_id','asc')->first();

        $data = Article::where('cate_id',$field->cate_id)->orderBy('art_id','desc')->take(6)->get();

        return view('home.article',compact('field','article','data'));
    }
}
