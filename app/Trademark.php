<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trademark extends Model
{
    protected $table = 'trademarks';
    protected $guarded=[];

    public function products(){
        return $this->hasMany(Product::class,'trademark_id','id');
    }

}
