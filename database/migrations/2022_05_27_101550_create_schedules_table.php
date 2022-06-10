<?php

use App\Models\Doctors;
use App\Models\Patient;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patients_id')->references('id')->on('patients')->onDelete('cascade')->onUpdate('cascade'); //paciente
            $table->foreignId('doctors_id')->references('id')->on('doctors')->onDelete('cascade')->onUpdate('cascade');  //Doctor
            $table->string('reason');      //motivo
            $table->date('date');     // data e horario da consulta
            $table->time('time');
            $table->boolean('confirmed')->notnull();
            $table->longText('diagnosis')->nullable();  //diagnostrico medico
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
        Schema::dropIfExists('schedules');
    }
};
