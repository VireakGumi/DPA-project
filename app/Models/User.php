<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasApiTokens, HasFactory, Notifiable;

    public const STATUS_IS_ACTIVE = 1;
    public const STATUS_IS_NOT_ACTIVE = 2;
    public const DEFAULT_AVATAR = "no_photo.jpg";

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'full_name',
        'email',
        'password',
        'username',
        'picture',
        'bio',
        'status',
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

    public function getPictureAttribute($value)
    {
        return $value ? asset('/images/users/' . $value) : asset('/images/users/no_photo.jpg');
    }

    /**
     * Relationship
     *
     */

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_role')->withTimestamps();
    }

    /**
     * Functionality Helper
     *
     */

    public static function AuthResourceObj($id, $token = '')
    {
        $user = User::where('id', $id)->first([
            'id',
            'username',
            'full_name',
            'email',
            'email_verified_at',
            'picture',
            'status',
            'created_at'
        ]);
        if (strlen($token) > 0)
            $user->token = $token;
        return $user;
    }

    protected function GetUserProfile()
    {
        $token = get_session_key('token');
        $user = User::whereHas('tokens', function ($query) use ($token) {
            $query->where('id', $token);
        })->first([
                    'id',
                    'username',
                    'full_name',
                    'email',
                    'email_verified_at',
                    'picture',
                    'bio',
                    'status',
                    'created_at'
                ]);
        if (!$user)
            return null;
        return $user;
    }
}
