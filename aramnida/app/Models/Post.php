<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Post extends Model
{
    use HasFactory;

    //protected $guarded = [];    

    protected $fillable = [
        'user_id', 'title', 'body'
    ];
    // protected $table = 'blogs';

    // protected $connection = 'new_mysql';

    // public $incrementing = false;

    // protected $primaryKey = 'post_id';

    public function user(){

        return $this->belongsTo(User::class);
    }

}
