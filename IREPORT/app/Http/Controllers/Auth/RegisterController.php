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
        //     'nama' => ['required'], 
        //     'alamat' => ['required'], 
        //     'tempat_lahir' => ['required'],
        //     'tanggal_lahir' => ['required'],
            // 'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
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
        $user= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role'=> 2,
            'point' => 0
        ]);

        // $fileName=time().'.'.$data->foto->extension();
        // $data->foto->move(public_path("image"), $fileName);
        
        Profile::create([
            'nama' => $data['nama'], 
            'alamat' => $data['alamat'], 
            'tempatLahir' => $data['tempatLahir'],
            'tanggalLahir' => $data['tanggalLahir'],
            // 'foto' => $data['foto']->move(public_path("image"), time().'.'.$data['foto']->extension()),
            'foto' => 'noPP.jpg',
            // 'point' => 0,
            'user_id' => $user->id
        ]);

        return $user;
    }
}