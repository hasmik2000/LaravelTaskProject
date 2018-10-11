<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $countries = App\Country::all();
//
//        foreach ($countries as $country) {
//
//        }
        factory(App\Country::class, 3)->create();
    }
}
