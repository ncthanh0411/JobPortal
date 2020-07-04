<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id_job');
            $table->string('title');
            $table->integer('Salary');
            $table->text('Job_description');
            $table->text('Requirement');
            $table->string('Expired_date');
            $table->integer('Status')->default(0);
            
            $table->unsignedBigInteger('company_id')->unsigned();
            $table->foreign('company_id')
                  ->references('id_com')
                  ->on('company_users');

            $table->unsignedBigInteger('categories_id')->unsigned();
            $table->foreign('categories_id')
                  ->references('id_cate')
                  ->on('categories');
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
        Schema::dropIfExists('jobs');
    }
}
