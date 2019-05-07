<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_cases', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('cedula_student');
            $table->string('cedula_user');
            $table->text('observacion');
            $table->date('fecha_recibido');
            $table->date('fecha_revision');
            $table->string('estado');
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
        Schema::dropIfExists('academic_cases');
    }
}
