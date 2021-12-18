<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Validation\Rule;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'full_name',
        'email',
        'choosed',
        'password',
        'gender',
        'date_of_birth',
        'avatar',
        'category',
        'note',
        'color',
        'nickname',
        'user_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function wheel()
    {
        return $this->hasOne(User::class);
    }

    public static function rules($update = false, $id = null)
    {
        $common = [
            'first_name'    => "nullable|min:3|max:20",
            'last_name'     => "nullable|min:3|max:20",
            'full_name'     => "nullable|max:40",
            'email'         => "nullable|email|regex:/(.+)@(.+)\.(.+)/i|unique:users,email,$id",
            'password'      => 'nullable|confirmed',
            'other_email'   => "nullable|email|regex:/(.+)@(.+)\.(.+)/i|unique:users,email,$id",
            'phone'         => "nullable|numeric|digits_between:1,16",
            'other_phone'   => "nullable|numeric|digits_between:1,16",
            'gender'        => 'nullable',Rule::in(['Male','Female']),
            'religion'      => 'nullable',Rule::in(['Islam','Christianity']),
            'date_of_birth' => "nullable|date_format:Y-m-d|before:today",
            'avatar'        => 'nullable|image|mimes:jpeg,jpg,png,gif|max:10000'
        ];

        if ($update) {
            return $common;
        }

        return array_merge($common, [
            'email'         => 'nullable|email|regex:/(.+)@(.+)\.(.+)/i|max:255|unique:users',
            'password'      => 'required|confirmed|min:8',
        ]);
    }
}
