<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model {

    public static $VIDEO = 4;
    public static $AUDIO = 3;
    public static $PPT =   2;
    public static $PDF =   1;
    public static $TEXT =  0;

    public static $TYPES = [
        'Text Document',
        'PDF Document',
        'Power Point Slides',
        'Audio',
        'Video'
    ];

    protected $guarded = [
        'id',
        'duration'
    ];

    protected $dateFormat = 'U';

    public function section(){
        return $this->belongsTo('App\Section');
    }

}
