<?php

namespace Database\Seeders;

use App\Models\Surveillant;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Surveillant::factory(50)->create();
    }
}
