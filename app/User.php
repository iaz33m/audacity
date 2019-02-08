<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public static $ADMINISTRATOR = 4;
    public static $PAID_INSTRUCTOR = 3;
    public static $INSTRUCTOR = 2;
    public static $STUDENT = 1;

    public static $ROLES = ['Student','Instructor','Paid Instructor','Administrator'];


    protected $guarded = [
        'id',
        'username',
        'earning',
        'emailVerified',
        'numberVerified',
        'pic',
        'views',
        'role'
    ];

    protected $dateFormat = 'U';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'password',
        'remember_token',
        'saveCreditCards',
        'earning',
        'views',
        'SEVisibility',
        'showCourses',
        'sendEmails',
        'role'
    ];

    // Many To One / One To Many

    public function certificates(){
        return $this->hasMany('App\Certificate','student_id','id');
    }

    public function sendMessages(){
        return $this->hasMany('App\Message','sender_id','id');
    }

    public function receivedMessages(){
        return $this->hasMany('App\Message','sender_id','id');
    }

    public function reviews(){
        return $this->hasMany('App\Review','student_id','id');
    }

    public function sales(){
        return $this->hasMany('App\Sale','student_id','id');
    }

    // Many To Many relationships

    public function announcements(){
        return $this->belongsTo('App\Announcement');
    }

    public function conversations(){
        return $this->hasMany('conversations','user_id','id');
    }

    public function courses(){
        return $this->belongsToMany('App\Course','course_student','student_id','course_id');
    }

    public function teachingCourses(){
        return $this->hasMany('App\Course','instructor_id','id');
    }

}
