<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        City::create(['country_id' => 1, 'name' => __('Fukuoka'), 'adult_price' => 125, 'children_price' => 85]);
        City::create(['country_id' => 1, 'name' => __('Kobe'), 'adult_price' => 190, 'children_price' => 155]);
        City::create(['country_id' => 1, 'name' => __('Nagoya'), 'adult_price' => 200, 'children_price' => 175]);
        City::create(['country_id' => 1, 'name' => __('Osaka'), 'adult_price' => 150, 'children_price' => 100]);
        City::create(['country_id' => 1, 'name' => __('Sapporo'), 'adult_price' => 250, 'children_price' => 195]);
        City::create(['country_id' => 1, 'name' => __('Tokyo'), 'adult_price' => 100, 'children_price' => 75]);
        City::create(['country_id' => 1, 'name' => __('Yokohama'), 'adult_price' => 100, 'children_price' => 75]);
        City::create(['country_id' => 2, 'name' => __('Busan'), 'adult_price' => 250, 'children_price' => 195]);
        City::create(['country_id' => 2, 'name' => __('Daegu'), 'adult_price' => 250, 'children_price' => 195]);
        City::create(['country_id' => 2, 'name' => __('Daejeon'), 'adult_price' => 200, 'children_price' => 175]);
        City::create(['country_id' => 2, 'name' => __('Gwangju'), 'adult_price' => 250, 'children_price' => 195]);
        City::create(['country_id' => 2, 'name' => __('Incheon'), 'adult_price' => 200, 'children_price' => 175]);
        City::create(['country_id' => 2, 'name' => __('Seoul'), 'adult_price' => 200, 'children_price' => 175]);
        City::create(['country_id' => 3, 'name' => __('Hsinchu'), 'adult_price' => 100, 'children_price' => 75]);
        City::create(['country_id' => 3, 'name' => __('Kaohsiung'), 'adult_price' => 200, 'children_price' => 175]);
        City::create(['country_id' => 3, 'name' => __('New Taipei'), 'adult_price' => 190, 'children_price' => 155]);
        City::create(['country_id' => 3, 'name' => __('Taichung'), 'adult_price' => 150, 'children_price' => 100]);
        City::create(['country_id' => 3, 'name' => __('Tainan'), 'adult_price' => 250, 'children_price' => 195]);
        City::create(['country_id' => 3, 'name' => __('Taipei'), 'adult_price' => 125, 'children_price' => 85]);
        City::create(['country_id' => 3, 'name' => __('Taoyuan'), 'adult_price' => 100, 'children_price' => 75]);
        City::create(['country_id' => 4, 'name' => __('Chicago'), 'adult_price' => 125, 'children_price' => 85]);
        City::create(['country_id' => 4, 'name' => __('Houston'), 'adult_price' => 190, 'children_price' => 155]);
        City::create(['country_id' => 4, 'name' => __('Los Angeles'), 'adult_price' => 190, 'children_price' => 155]);
        City::create(['country_id' => 4, 'name' => __('New York'), 'adult_price' => 125, 'children_price' => 85]);
        City::create(['country_id' => 4, 'name' => __('San Francisco'), 'adult_price' => 125, 'children_price' => 85]);
        City::create(['country_id' => 4, 'name' => __('Washington'), 'adult_price' => 125, 'children_price' => 85]);
    }
}
