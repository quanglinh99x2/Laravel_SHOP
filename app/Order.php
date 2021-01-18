<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'orders';
    protected $guarded=[];

    public function customer(){
        return $this->belongsTo(Customer::class,'customer_id','id');
    }
    public function payment(){
        return $this->belongsTo(Payment::class,'payment_id','id');
    }
    public function shipping(){
        return $this->belongsTo(Shipping::class,'shipping_id','id');
    }
}
