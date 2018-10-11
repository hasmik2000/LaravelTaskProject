<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use App\DripEmailer;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
//    protected $signature = 'email:send {user}';
    protected $signature = 'email:send';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send drip e-mails to a user';

//    protected $drip;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
//        $this->drip = $drip;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
//        $userId = $this->argument('user');
//        $name = $this->ask('What is your name');
//        $password = $this->secret('What is the password');
//        if ($this->confirm('Do you wish to continue?')) {
//            //
//        }
//        $name = $this->anticipate('What is your name', ['Taylor', 'Dayle']);
//        $this->info('Display this on the screen');
//        $this->error('Something went wrong');
        $this->line('Display this on the screen');
    }
}
