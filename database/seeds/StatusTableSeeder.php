<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
               [
                   'name' => 'Not Started'
               ],
               [
                   'name' => 'In Progress'
               ],
               [
                   'name' => 'Approved'
               ],
               [
                   'name' => 'Done'
               ]
        ]);
    }
}
