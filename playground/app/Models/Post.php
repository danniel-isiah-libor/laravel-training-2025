<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $table = 'blogs';

    // protected $connection = 'new_mysql';

    // public $incrementing = false;

    // protected $primaryKey = 'post_id';

    protected $fillable = [
        'user_id',
        'title',
        'body',
        'is_published'
    ];

    protected $with = ['user'];

    public function user()
    {
        return $this->belongsTo(User::class);
        // $this->belongsToMany();
    }
}
