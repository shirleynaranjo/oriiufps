<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresentacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presentacion', function (Blueprint $table) {
            $table->bigIncrements('idPresentacion');
            $table->string('director',100);           
            $table->string('correo',100);
            $table->string('textoPresentacion',500);
            $table->string('contacto',500);
            $table->string('mision',5000);
            $table->string('vision',5000);
            $table->string('fotoDirector',200)->nullable();
            $table->timestamps();
            $table->charset='utf8mb4';
            $table->collation='utf8mb4_spanish2_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presentacion');
    }
}
