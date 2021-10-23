<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Id int identity(1,1) primary key,
        // Municipio_Id int not null,
        // Nombre varchar(120) not null,
        // CP int,
        // Zona varchar(32) not null
        Schema::create('localidades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('cp');
            $table->string('t_asentamiento');
            $table->unsignedBigInteger('municipio_id');
            
            $table->foreign('municipio_id')->references('id')->on('municipios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('localidades');
    }
}
