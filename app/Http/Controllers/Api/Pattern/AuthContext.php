<?php

namespace App\Http\Controllers\Api\Pattern;

use Illuminate\Http\Request;

class AuthContext
{
    public $strategy;
    public function setStrategy(LoginInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    public function login(Request $request)
    {
        return $this->strategy->login($request);
    }
}
