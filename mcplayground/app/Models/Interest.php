<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    public static function listAll()
    {
        return ['React', 'Vue.js', 'Next.js', 'Laravel'];
    }
}
