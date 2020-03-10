<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /* not to pass all posting data */
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
