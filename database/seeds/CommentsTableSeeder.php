<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tasks = \App\Task::all();

        foreach ($tasks as $task) {
            $limit = random_int(3, 8);

            for ($i = 0; $i < $limit; $i++) {
                $comment = factory(\App\Comment::class)->make();

                $comment->task()->associate($task);

                $comment->save();

            }
        }

    }
}
