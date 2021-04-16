<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJugadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugadores', function (Blueprint $table) {
            $table->id();
            $table->string('nombres', 50);
            $table->string('apellido_paterno', 50);
            $table->string('apellido_materno', 50)->nullable();
            $table->binary('foto_perfil')->nullable();
            $table->string('fecha_nacimiento');//<18 telefono apoderado 
            $table->string('nombre_apoderado', 50)->nullable();
            $table->string('telefono_apoderado', 15)->nullable();
            $table->string('club_actual', 50)->nullable();
            $table->string('fecha_fin_contrato')->nullable();
            $table->string('agente', 50)->nullable();//si o no
            $table->string('video1')->nullable();
            $table->string('video2')->nullable();
            $table->string('video3')->nullable();
            $table->string('pierna_habil', 50);
            $table->integer('altura')->nullable();
            $table->string('posicion', 50) ;
            $table->string('email')->unique();
            $table->string('telefono', 15);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('perfil_transfermarkt')->nullable();
            $table->string('perfil_soccerway')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('jugadores');
    }
}
