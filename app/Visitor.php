<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Visitor extends Model
{
    use Sortable;

    protected $table = "visitors";

    protected $fillable = [
        'name', 'email', 'state', 'plot', 'point', 'username', 'phone'
    ];
}
