<?php

namespace App\Http\Controllers\Auth;

use App\Model\User;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'city' => 'required|string',
            'address' => 'required',
            'birthdate' => 'required|date_format:d/m/Y'
        ]);
    }

    public function registered(Request $request, $user)
    {
        Log::warning('RegisterController registered ==> ' . \GuzzleHttp\json_encode($request->all()));
        $params = [
            'birth_date' => Carbon::createFromFormat('d/m/Y', $request->input('birthdate'))->format('Y-m-d'),
            'address' => $request->input('address'),
            'city' => $request->input('city')
        ];
        Log::warning('RegisterController param ==> ' . \GuzzleHttp\json_encode($params));
        $user->details()->create($params);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
