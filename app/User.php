<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'country_id', 'name', 'email', 'age', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function tasks ()
    {
        return $this->hasMany(Task::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function setNameAttribute ($value)
    {
        $this->attributes['name'] = ucwords($value);
    }

    public function setEmailAttribute ($value)
    {
        $this->attributes['email'] = strtolower($value);
    }
}
