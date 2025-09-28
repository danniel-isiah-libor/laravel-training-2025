<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Interest extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
    ];

    public static function getInterests()
    {
        return (object) [
            1 => (object) [
                    'id' => 1,
                    'name' => 'Laravel'
                ],
            2 => (object) [
                    'id' => 2,
                    'name' => 'Vue Js'
                ],
            3 => (object) [
                    'id' => 3,
                    'name' => 'React Js'
                ],
            4 =>  (object) [
                    'id' => 4,
                    'name' => 'Django'
                ],
        ];
    }

    public static function getInterestsIds()
    {
        $interests = self::getInterests();

        $interestsArray = (array) $interests;

        return array_map(fn($interest) => $interest->id, $interestsArray);
    }
}
