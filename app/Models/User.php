<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Request;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    // public $timestamps = false;
    protected $fillable = [
        'username',
        'name',
        'email',
        'password',
        'no_hp',
        'role',
        'tanggal',
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    static public function getAdmin()
    {
        $return = self::select('users.*')->where('role', '=', "admin")->orderBy('id', 'desc')->paginate(3);
        return $return;
    }

    static public function getUser()
    {
        $query = self::select('users.*')->where('role', '=', 'user');
        if (!empty(Request::get('name'))) {
            $query = $query->where('name', 'like', '%' . Request::get('name') . '%');
        }
        $users = $query->orderBy('id', 'asc')->paginate(10, ['*'], 'user_page');

        return $users;
    }

    static public function getTotalAdmin()
    {
        $query = self::where('role', '=', "admin");
        return $query->count();
    }

    static public function getTotalUser()
    {
        $query = User::where('role', '=', "user");
        return $query->count();
    }
}
