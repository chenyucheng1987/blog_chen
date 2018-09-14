<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table='article';
    protected $primaryKey='art_id';
    public $timestamps=false;
    protected $guarded=[];
	
	public function category(){
		return $this->belongsTo('App\Models\Category', 'cate_id');
	}
}
