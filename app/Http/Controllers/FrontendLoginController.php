<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FrontendLoginController extends Controller
{
    use AuthenticatesUsers;

    public function ajaxLogin(Request $request)
    {
        Log::warning('ajaxlogin ajaxLogin ==> ' . \GuzzleHttp\json_encode($request->all()));
        if ($this->attemptLogin($request)) {
            $request->session()->regenerate();
            $this->clearLoginAttempts($request);
            return 'true';
        };
        return 'false';
    }
}
