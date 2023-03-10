<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'first_name' => ['required', 'string', 'alpha_num', 'max:25'],
            'last_name' => ['required', 'string', 'alpha_num', 'max:25'],
            'gender_id' => ['required', 'integer'],
            'role_id' => ['required', 'integer'],
            'photo' => ['required', 'image', 'mimes:jpeg,jpg,png'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'regex:/^(?=.*[0-9]).+$/', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {   
        if(request()->hasfile('photo')){
            $extension = request()->photo->getClientOriginalExtension();
            $proofNameToStore = $data['first_name'] . '_' . $data['last_name'] . '.' . $extension;
            request()->photo->storeAs('public/users', $proofNameToStore);
        }

        return User::create([
            'role_id' => $data['role_id'],
            'gender_id' => $data['gender_id'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'photo' => $proofNameToStore,
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
