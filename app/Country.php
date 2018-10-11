<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function tasks()
    {
        return $this->hasManyThrough(
            'App\Task',
            'App\User',
            'country_id',
            'user_id',
            'id',
            'id'
        );
    }
}
