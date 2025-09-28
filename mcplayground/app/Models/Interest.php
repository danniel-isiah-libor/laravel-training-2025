<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    public $fillable = [""];
    public static function listAll()
    {
        return ['React', 'Vue.js', 'Next.js', 'Laravel'];
    }
}
