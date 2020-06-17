<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class visitorTransactionLog extends Model
{
    protected $table = "visitors_transaction_logs";

    protected $fillable = [
        'visitor_id', 'participant_id', 'score'
    ];
}
