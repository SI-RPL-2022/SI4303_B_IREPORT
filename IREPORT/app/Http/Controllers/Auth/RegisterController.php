<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Profile;
use DB;
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:1', 'confirmed'],
            // 'nama' => ['required'], 
            // 'alamat' => ['required'], 
            // 'tempat_lahir' => ['required'],
            // 'tanggal_lahir' => ['required'],
            // 'pp' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        // dd($data);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        // $fileName=time().'.'.$data->pp->extension();
        // $data->pp->move(public_path("image"), $fileName);
        // Profile::create([
        //     'name' => $data['nama'], 
        //     'alamat' => $data['alamat'], 
        //     'tempat_lahir' => $data['tempatLahir'],
        //     'tanggal_lahir' => $data['tanggalLahir'],
        //     'pp' => $fileName,   
        //     'user_id' => $user->id
        // ]);
        // dd($user);

        // return $user;
    }
}