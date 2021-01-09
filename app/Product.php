<?php

namespace App;
use App\ProductImages;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    //
    use SoftDeletes;
    protected $guarded=[];
    public function product_images(){
        return $this->hasMany('App\ProductImages','product_id','id');
    }
    // nhiều nhiều
    public function tags(){
        return $this->belongsToMany(Tag::class,'product_tags','product_id','tag_id');
    }
    public function categories(){
        return $this->belongsTo('App\Category','category_id','id');
    }
    public function trademarks(){
        return  $this->hasOne(Trademark::class,'trademark_id','id');
    }
}
