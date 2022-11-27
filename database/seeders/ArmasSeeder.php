<?php

namespace Database\Seeders;

use App\Models\Armas;
use Illuminate\Database\Seeder;

class ArmasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Armas::factory(10)->create();
    }
}
