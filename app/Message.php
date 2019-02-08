<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model {

    public static $IMPORTANT = 3;
    public static $UNREAD = 2;
    public static $READ = 1;
    public static $SPAM = 0;

    public static $STATUSES = ['Spam','Read','Unread','Important'];

    protected $guarded = [
        'id'
    ];

    protected $dateFormat = 'U';

    public function sender(){
        return $this->belongsTo('App\User','sender_id','id');
    }
    public function recipient(){
        return $this->belongsTo('App\User','recipient_id','id');
    }
    public function conversation(){
        return $this->belongsTo('App\Conversation');
    }
}
