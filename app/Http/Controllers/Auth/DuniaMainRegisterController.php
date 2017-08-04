<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Model\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DuniaMainRegisterController extends Controller
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
    protected $redirectTo = '/dunia-main';

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
            'birthdate' => 'required|date_format:Y-m-d',
            'mother_name' => 'required|string',
            'school_name' => 'required|string',
            'class_name' => 'required|string',
        ]);
    }

    public function registered(Request $request, $user)
    {
        // Log::warning('RegisterController registered ==> ' . \GuzzleHttp\json_encode($user));
        $params = [
            'birth_date' => $request->input('birthdate'),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'mother_name' => $request->input('mother_name'),
            'school_name' => $request->input('school_name'),
            'class_name' => $request->input('class_name')
        ];
        // Log::warning('RegisterController param ==> ' . \GuzzleHttp\json_encode($params));
        $user->detail()->create($params);
        $user->assignRole('Frontend');
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
