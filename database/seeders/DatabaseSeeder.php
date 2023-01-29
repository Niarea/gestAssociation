<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{ Members, Association };

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       Association::factory()->has(Members::factory()->count(4))->count(10)->create();
    }
}
