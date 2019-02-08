<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model {

    protected $guarded = ['id'];

    protected $dateFormat = 'U';

    public function messages(){
        return $this->hasMany('App\Message');
    }
}
