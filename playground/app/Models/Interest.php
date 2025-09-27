<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    public static function getData()
    {
        return [
            'Laravel',
            'Vue.js',
            'React.js',
            'Angular.js',
        ];
    }
}
