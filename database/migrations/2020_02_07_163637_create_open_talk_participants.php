<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpenTalkParticipants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('open_talk_participants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('upload_id');
            $table->enum('category', ['student', 'general']);
            $table->string('name', 100);
            $table->string('school', 100)->nullable();
            $table->string('student_id', 30)->nullable();
            $table->string('phone', 15);
            $table->string('email', 100);
            $table->string('payment')->nullable();
            $table->string('paid_by', 100)->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('open_talk_participants');
    }
}
