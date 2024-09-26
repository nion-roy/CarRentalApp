<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
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


    public static function createUser($requestData)
    {
        $user = new User();
        $user->name = $requestData['name'];
        $user->email = $requestData['email'];
        $user->password = Hash::make($requestData['password']);
        $user->role = $requestData['role'];
        return $user;
    }

    public static function updateUser($id, $requestData)
    {
        $user = self::find($id);
        $user->name = $requestData['name'];
        $user->email = $requestData['email'];
        $user->password = Hash::make($requestData['password']);
        $user->role = $requestData['role'];
        $user->save();

        return $user;
    }


    public static function destroyUser($id)
    {
        $user = self::find($id);
        $user->delete();

        return $user;
    }
}
