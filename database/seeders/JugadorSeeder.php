<?php

namespace Database\Seeders;
use App\Models\Jugador;

use Illuminate\Database\Seeder;

class JugadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jugador::factory(25)->create();
    }
}
