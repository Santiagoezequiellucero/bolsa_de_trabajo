<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrenadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrenadores', function (Blueprint $table) {
            $table->id();
            $table->string('nombres', 50);
            $table->string('apellido_paterno', 50);
            $table->string('apellido_materno', 50)->nullable();
            $table->string('foto_perfil')->nullable();
            $table->date('fecha_nacimiento');
            $table->string('club_actual', 50);
            $table->date('fecha_fin_contrato')->nullable();
            $table->text('sitio_web');
            //curriculum...opcional
            $table->string('agente', 50);//si o no         
            $table->string('email')->unique();
            $table->string('telefono', 15);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('entrenadores');
    }
}
