<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
class Post extends Model
{
    use hasFactory;

    // protected $table = 'blogs';

    //connection for separate database
    // protected $connection = 'new_mysql';

    protected $fillable = [
        'title',
        'body',
        'author'
    ];
    // for easier access without using 'with' in the controller
    protected $with = ['user'];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
