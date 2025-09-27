<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Interests extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'id',
        'interests',
        'description'
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
    public static function FetchData($id){
            $data = (object) [
                1 => (object) [
                    'name' => 'Ddemian',
                    'age' => 21,
                    'address' => 'Manila',
                    'email' => 'ddraze@gmail.com'
                ],
                2 => (object) [
                    'name' => 'Juan',
                    'age' => 25,
                    'address' => 'Cebu',
                    'email' => 'qwe@gmail.com'
                ],
                3 => (object) [
                    'name' => 'Pedro',
                    'age' => 30,
                    'address' => 'Davao',
                    'email' => 'dasd@gmail.com'
                ],
                4 => (object) [
                    'name' => 'Maria',
                    'age' => 28,
                    'address' => 'Baguio',
                    'email' => 'dzxc@gmail.com'
                ],
                5 => (object) [
                    'name' => 'Ana',
                    'age' => 22,
                    'address' => 'Iloilo',
                    'email' => 'ddruie@gmail.com'
                ]
            ];

            return $data->$id ?? 'No data found';

    }
}

