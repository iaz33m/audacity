<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    protected $guarded = [
        'id'
    ];

    protected $dateFormat = 'U';

    public function children(){
        return $this->hasMany('App\Category' ,'parent_id','id');
    }

    public function parent(){
        return $this->belongsTo('App\Category','parent_id');
    }

    public function courses(){
        return $this->hasMany('App\Course');
    }


}
