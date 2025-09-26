<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public static function getData($id){
        $data = [
            1=>[
                'name'=>'John Doe',
                'email'=>'johndoe@gmail.com',
            ],
            2=>[
                'name'=>'Jane Doe',
                'email'=>'johndoe@gmail.com',
            ],
            3=>[
                'name'=>'John Doe',
                'email'=>'johndoe@gmail.com',
            ],
            4=>[
                'name'=>'John Doe',
                'email'=>'johndoe@gmail.com',
            ],
            5=>[
                'name'=>'John Doe',
                'email'=>'johndoe@gmail.com',
            ],
        ];
        $keys = array_keys($data);
        $objectData = array();
        foreach ($keys as $key) {
            array_push($objectData, (object)$data[1]);
        }
        return $objectData;
    }
}
