<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class FrontendLoginController extends Controller
{
    use AuthenticatesUsers;

    public function ajaxLogin(Request $request)
    {
        // Log::warning('ajaxlogin ajaxLogin ==> ' . \GuzzleHttp\json_encode($request->all()));
        if ($this->attemptLogin($request)) {
            $request->session()->regenerate();
            $this->clearLoginAttempts($request);
            return 'true';
        };
        return 'false';
    }

    public function ajaxRegister(Request $request)
    {
        $this->registerValidator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function registerValidator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }
}
