<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model {

    protected $guarded = ['id'];
    protected $dateFormat = 'U';

    public function user(){
        return $this->belongsTo('App\User','student_id','id');
    }

    public function course(){
        return $this->belongsTo('App\Course');
    }


}