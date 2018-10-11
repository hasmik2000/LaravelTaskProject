    <?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/
$factory->define(App\User::class, function (Faker $faker) {

    return [
//        'country_id' => factory(App\Country::class),
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'age' => random_int(10, 90),
        'email_verified_at' => now(),
        'password' => bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Task::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
    ];
});

$factory->define(App\Category::class, function (Faker $faker) {
   return [
       'name' => $faker->word,
   ];
});

$factory->define(App\Country::class, function (Faker $faker) {
    return [
      'name' => $faker->country,
    ];
});

$factory->define(App\Comment::class, function (Faker $faker) {
   return [
       'body' => $faker->paragraph,
   ];
});



