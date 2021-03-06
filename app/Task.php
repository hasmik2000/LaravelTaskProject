<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;

    protected $fillable = ['title','body'];

    protected $dates = ['deleted_at'];

    public function user ()
    {
        return $this->belongsTo(User::class);
    }

    public function categories ()
    {
        return $this->belongsToMany(Category::class);
    }

    public function comments ()
    {
        return $this->hasMany(Comment::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
