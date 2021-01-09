<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
class ProductImages extends Model
{
    //
    protected $guarded=[];
    public function products(){
        return $this->belongsTo('App\Product','product_id','id');
    }
}
