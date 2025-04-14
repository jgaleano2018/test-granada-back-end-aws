<?php

namespace Database\Seeders;

use App\Models\LogCountries;
use Illuminate\Database\Seeder;

class LogCountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LogCountries::factory(10)->create();
    }
}