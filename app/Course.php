<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model {

    public static $EXPERT = 3;
    public static $INTERMEDIATE = 2;
    public static $BEGINNER = 1;
    public static $ALL_LEVELS = 0;

    public static $LEVELS = ['Beginner','Intermediate','Expert','All Levels'];

    protected $guarded  = [
        'id',
        'price',
        'views',
        'testVideo',
        'rating',
        'image',
        'introVideo',
        'bestSelling'
    ];

    protected $dateFormat = 'U';

    protected $hidden = [
        'views',
        'welcomeMsg',
        'congMsg'
    ];

    // One to Many and Many to One

    public function sections(){
        return $this->hasMany('App\Section');
    }

    public function students(){
        return $this->belongsToMany('App\User','course_student','course_id','student_id');
    }

    public function instructor(){
        return $this->belongsTo('App\User','instructor_id','id');
    }

    public function sales(){
        return $this->hasMany('App\Sale');
    }

    public function reviews(){
        return $this->hasMany('App\Review');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function certificates(){
        return $this->hasMany('App\Certificate');
    }

    public function coupons(){
        return $this->hasMany('App\Coupon');
    }

}
