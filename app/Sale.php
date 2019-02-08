<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model {

    protected $dateFormat = 'U';

    public function student(){
        return $this->belongsTo('App\User','student_id','id');
    }

    public function coupon(){
        return $this->belongsTo('App\Coupon');
    }

    public function course(){
        return $this->belongsTo('App\Course');
    }

}
