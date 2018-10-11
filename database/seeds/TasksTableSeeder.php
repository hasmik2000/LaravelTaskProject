<?php

use Illuminate\Database\Seeder;
class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $users = \App\User::all();
//        $statuses = \App\Status::all();
//
//        foreach ($users as $user) {
//            $limit = random_int(5, 10);
//
//            for ($i = 0; $i < $limit; $i++) {
//                $task = factory(\App\Task::class)->make();
//
//                $task->user()->associate($user);
//
//                $task->save();
//            }
//        }
//        foreach ($statuses as $status) {
//            $limit = random_int(5, 10);
//            for ($i = 0; $i < $limit; $i++) {
//                $task = factory(\App\Task::class)->make();
//
//                $task->user()->associate($status);
//
//                $task->save();
//            }
//        }
        $faker = Faker\Factory::create();
        $users = \App\User::all('id')->pluck('id');
        $statuses = \App\Status::all('id')->pluck('id');

        foreach (range(5, 10) as $index) {
            \App\Task::create([
                'user_id' => $faker->randomElement($users),
                'status_id' => $faker->randomElement($statuses),
                'title' => $faker->sentence,
                'body' => $faker->paragraph,
            ]);
        }

    }
}
