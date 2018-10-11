<?php

use Illuminate\Database\Seeder;
use App\Task;
use App\Category;

class CategoryTaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::all();

        Task::all()->each(function ($tasks) use ($categories) {
           $tasks->categories()->attach(
                $categories->random(rand(1, 3))->pluck('id')->toArray()
           );
        });
    }

}
