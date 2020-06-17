<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adminTransactionLog extends Model
{
    protected $table = "admin_transaction_logs";

    protected $fillable = [
        'admin_id', 'visitor_id', 'point', 'event_name'
    ];
}
