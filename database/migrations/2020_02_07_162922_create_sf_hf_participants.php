<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSfHfParticipants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sf_hf_participants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('event_cat', ['sf', 'hf']);
            $table->enum('app_cat', ['web', 'mobile', 'game']);
            $table->string('project_title', 50);
            $table->string('school', 100);
            $table->string('lead_name', 50);
            $table->string('lead_student_id', 30);
            $table->string('member_name', 50);
            $table->string('member_student_id', 30);
            $table->string('phone', 15);
            $table->string('email', 50);
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
        Schema::dropIfExists('sf_hf_participants');
    }
}
