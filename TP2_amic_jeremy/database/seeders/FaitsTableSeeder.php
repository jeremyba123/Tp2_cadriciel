<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FaitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    \App\Models\Fait::factory(20)->create(); // Utilisation d'une factory pour générer 20 faits aléatoires
}

}
