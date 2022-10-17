<?php

namespace Database\Seeders;

use App\Models\Ocupante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OcupanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ocupante::factory(10)->create();
    }
}
