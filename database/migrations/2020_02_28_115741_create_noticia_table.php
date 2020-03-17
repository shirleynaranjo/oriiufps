<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticia', function (Blueprint $table) {
            $table->bigIncrements('idNoticia');
            $table->string('tituloNoticia',500);     
            $table->date('fechaPublicacion',500);       
            $table->string('descripcionNoticia',5000);             
            $table->string('imagen',200)->nullable();
            $table->string('imagenInicio',200)->nullable();  
            $table->string('video',200)->nullable();   
            $table->string('slug')->unique();     
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
        Schema::dropIfExists('noticia');
    }
}
