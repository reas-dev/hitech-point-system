<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plot extends Model
{
    protected $table = "plots";

    protected $fillable = [
        'plot_a', 'plot_b', 'plot_c', 'plot_d'
    ];
}
