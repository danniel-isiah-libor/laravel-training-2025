<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    //
    public static function getInterestData(){
        return [
            'Sports',
            'Music',
            'Travel',
            'Reading',
            'Cooking',
            'Gaming',
            'Technology'
        ];
    }
}
