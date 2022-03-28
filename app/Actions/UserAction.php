<?php

namespace App\Actions;

use Illuminate\Support\Facades\Auth;

class UserAction extends CreateUserAction
{
    /**
     * @throws \Exception
     */
    public function run($email, $password, $number)
    {
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $generatedRandomNumber =  (new FibonacciAction())->run();
            if(in_array($number, $generatedRandomNumber)){
                dump('You have been reward with 2USD');
            }else{
                dump('Try Again');
            }
        }
        throw new \Exception('Check Credentials');
    }
}
