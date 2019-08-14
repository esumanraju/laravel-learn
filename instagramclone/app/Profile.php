<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class Profile extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
