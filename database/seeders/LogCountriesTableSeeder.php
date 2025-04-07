<?php

namespace Database\Seeders;

use App\LogCountries;
use Carbon\Carbon as Time;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LogCountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        LogCountries::create([
            'username' => 'usertest',
            'request_timestamp' => Time::now()->timestamp,
            'num_countries_returned' => 1,
            'countries_details' => 'Countries of South America'
        ]);
    }
}
