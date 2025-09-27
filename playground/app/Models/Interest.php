<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    //
    public static function fetchData(){
        $data = [
            1 => 'Laravel',
            2 => 'Vue.js',
            3 => 'Angular.js'
        ];

        return $data;
    }
}
