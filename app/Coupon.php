<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model {


    protected $guarded = ['id','price'];

    protected $dateFormat = 'U';

    public function sales(){
        return $this->hasMany('App\Sale');
    }

    public function course(){
        return $this->belongsTo('App\Course');
    }

}
