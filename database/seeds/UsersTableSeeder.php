<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = \App\Country::all();

        foreach ($countries as $country){
            $limit = random_int(1, 5);

            for ($i = 0; $i < $limit; $i++) {

                $user = factory(\App\User::class)->make();

                $user->country()->associate($country);

                $user->save();
            }
        }
//        factory(App\User::class, 15)->create();
    }
}
