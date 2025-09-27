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
    $users = [
        1 => (object)[ 'Name' => 'Alice', 'Email' => 'alice@example.com'],
        2 => (object)[ 'Name' => 'Bob', 'Email' => 'bob@example.com'],
        3 => (object)[ 'Name' => 'Charlie', 'Email' => 'charlie@example.com']
    ];

    if ($id === null) {
        // Cast the entire array of users to objects
        return array_map(fn($user) => (object)$user, $users);
    }

    return $users[$id] ?? null;
}

}
