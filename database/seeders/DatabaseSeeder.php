<?php

namespace Database\Seeders;

use App\Models\Provinsi;
use App\Models\Travel;
use App\Models\TravelOption;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        TravelOption::factory(200)->recycle(
            [
                Travel::factory(30)->recycle(
                    [
                        Provinsi::factory(10)->create(),
                    ]
                )->create()
            ]
        )->create();
    }
}
