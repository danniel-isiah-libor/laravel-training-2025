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
            'password'          => 'hashed',
        ];
    }

    public static function getData($id)
    {
        $users = [
            1 => [
                'name'  => 'John Doe',
                'email' => 'johndoe@mail.com',
            ],
            2 => [
                'name'  => 'Juan Delacruz',
                'email' => 'juandelacruz@mail.com',
            ],
            3 => [
                'name'  => 'Maui Taylor',
                'email' => 'mauitaylor@mail.com'
            ],
            4 => [
                'name'  => 'Joyce Jimenez',
                'email' => 'joycejimenez@mail.com'
            ],
            5 => [
                'name'  => 'Johnny Sins',
                'email' => 'johnnysins@mail.com'
            ]
        ];

        if ($id){
            return $users[$id] ?? null;
        }

        return $users;
    }
}
