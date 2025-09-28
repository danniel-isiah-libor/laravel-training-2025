<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    use HasFactory;

    // in default $table get the name of the model
    // if different table name with the model
    // protected $table = 'blogs';

    // if different database
    // modify .env and add DATABASE_CONNECTION and update config/database.php

    // protected $connection = 'new_mysql';

    // define primary key
    // protected $primaryKey ='post_id'

    protected $with=['user'];
    protected $fillable = [
        'title',
        'body',
        'user_id',
        'is_published'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

}
