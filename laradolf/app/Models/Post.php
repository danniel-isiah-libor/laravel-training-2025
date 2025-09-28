<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    //if not in the env, can communicate with another database
    // protected $connection = 'mysql2';

    // if want to not use auto incrementing id
    // public $incrementing = false;

    //if database connection is on another, pointing of primary key
    // protected $primaryKey = 'post_id';
}
