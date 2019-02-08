<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model {

    protected $guarded = ['id'];
    protected $dateFormat = 'U';

    public function users(){
        return $this->belongsTo('App\User');
    }


}
