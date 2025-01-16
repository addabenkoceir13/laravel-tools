<?php

namespace  App\Http\Controllers\Api;

use Illuminate\Http\Request;

interface LoginInterface
{
    public function login(Request $request);
}
