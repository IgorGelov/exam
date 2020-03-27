<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name');
            $table->string('surname');
            $table->string('embg_patient')->unique();
            
            $table->unsignedBigInteger('family_doctor_id');
            $table->index('family_doctor_id');
            $table->foreign('family_doctor_id')
                ->references('id')
                ->on('doctors');

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
        Schema::dropIfExists('patients');
    }
}
