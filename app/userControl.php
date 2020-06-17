<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userControl extends Model
{
    protected $table = "user_control";

    protected $fillable = [
        'user_id', 'control_id', 'role'
    ];
}
