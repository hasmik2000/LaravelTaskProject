<?php

namespace App\Console\Commands;

use App\Status;
use App\Task;
use Illuminate\Console\Command;

class DeleteTasks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:task';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete Existing task';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $status_id = Status::where('name', 'done')->first()->id;
        $task = Task::all()->where('status_id', $status_id);

        if ($this->confirm('Do you want to delete task?')) {
            dd($status_id);
        } else {
            $this->error('Something went wrong');
        }


    }
}
