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

    protected $with = ['user'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
