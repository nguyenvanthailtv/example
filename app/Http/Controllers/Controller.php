<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function addUser() {
        $user = [
            'name' => 'abc',
            'email' => 'abc@example.com',
            'password' => '123456789',
        ];
        User::create($user);
        return $user;
    }
}
