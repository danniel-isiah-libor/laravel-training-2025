<?php

namespace App\Models;

class Interest
{
    public static function getAll()
    {
        return [
            'Laravel',
            'Vue.js',
            'React.js',
            'Angular.js',
        ];
    }
}