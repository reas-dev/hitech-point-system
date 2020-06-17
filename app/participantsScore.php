<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class participantsScore extends Model
{
    use Sortable;

    protected $table = "participants_score";

    protected $fillable = [
        'participant_id', 'visit_count', 'score_count', 'final_score'
    ];
}
