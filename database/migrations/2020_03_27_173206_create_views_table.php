<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('views', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('doctor_id');
            $table->index('doctor_id');
            $table->foreign('doctor_id')
                ->references('id')
                ->on('doctors');

            $table->unsignedBigInteger('patient_id');
            $table->index('patient_id');
            $table->foreign('patient_id')
                ->references('id')
                ->on('patients');

            $table->date('date');    

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
        Schema::dropIfExists('views');
    }
}
