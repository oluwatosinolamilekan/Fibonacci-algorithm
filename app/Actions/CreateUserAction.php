<?php

namespace App\Actions;

use App\Models\User;

class CreateUserAction
{
    public function userDeatails()
    {
        $userData = [
            'email' => 'olamide@test.com',
            'name' => 'olamide',
            'password' => 'password'
        ];
        User::create($userData);
        return $userData;
    }
}
