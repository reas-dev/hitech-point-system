<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class participantTransactionLog extends Model
{
    protected $table = "participants_transaction_logs";

    protected $fillable = [
        'participant_id', 'visitor_id', 'point'
    ];
}
