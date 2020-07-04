<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManageAppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manage_applies', function (Blueprint $table) {
            $table->bigIncrements('id_apply');
            $table->unsignedBigInteger('jobs_id')->unsigned();
            $table->foreign('jobs_id')
                  ->references('id_job')
                  ->on('jobs');

            $table->integer('status')->default(0);

            $table->unsignedBigInteger('student_id')->unsigned();
            $table->foreign('student_id')
                  ->references('id_stu')
                  ->on('students');
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
        Schema::dropIfExists('manage_applies');
    }
}
