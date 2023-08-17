<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fait;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Fait::factory(20)->create();
    }
}
