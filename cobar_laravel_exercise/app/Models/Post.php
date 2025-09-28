<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /*
    Connecting with the other databases

    protected $table = 'blogs';
    protected $connection = 'other_database';

    auto incrementing of id
    public $incrementing = false;

    database connection is located to other servers, declare a primary key
    protected $primaryKey = 'post_id';
    */
}
