<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsScoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants_score', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('participant_id');
            $table->bigInteger('visit_count');
            $table->bigInteger('score_count');
            $table->float('final_score', 12, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants_score');
    }
}
