<?php

namespace App\Http\Controllers\Api\Pattern;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginWithEmailController extends Controller
{
    public function __invoke(Request $request, AuthContext $authContext)
    {
        $authContext->setStrategy(new LoginWithEmail());

        return $authContext->login($request);
    }
}
