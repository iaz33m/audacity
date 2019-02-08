<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model {

    protected $guarded = [
        'id'
    ];

    protected $dateFormat = 'U';

    public function student(){
        return $this->belongsTo('App\User','student_id','id');
    }

    public function course(){
        return $this->belongsTo('App\Course');
    }

}
