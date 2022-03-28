<?php

namespace App\Console\Commands;

use App\Actions\FibonacciAction;
use App\Actions\UserAction;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;

class ActionConsole extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'action:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        $email = $this->ask('What is your email?');
        $password = $this->ask('What is your password?');
        $number = $this->ask('choose a lucky number');
        if($email === null || $password == null || $number === null){
            $this->error('You need to feel email, password and number request');
            return 0;
        }
        return (new UserAction())->run($email, $password, $number);
    }
}
