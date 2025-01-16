<?php

namespace  App\Http\Controllers\Api\Pattern;

use Illuminate\Http\Request;

interface LoginInterface
{
    public function login(Request $request);
}
