<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        Country::create(['name' => __('Japan')]);
        Country::create(['name' => __('South Korea')]);
        Country::create(['name' => __('Taiwan')]);
        Country::create(['name' => __('United States')]);
    }
}
