<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\User;
use App\userControl;
use App\SfHfParticipant;
use App\participantsScore;
use App\Visitor;
use Illuminate\Support\Arr;
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
    // public function redirectTo(){

    //     // User role
    //     $role = Auth::user()->role;

    //     // Check user role
    //     switch ($role) {
    //         case 'developer':
    //                 return '/developer';
    //             break;
    //         case 'visitor':
    //                 return '/visitor';
    //             break;
    //         case 'admin':
    //                 return '/admin';
    //             break;
    //         default:
    //                 return '/';
    //             break;
    //     }
    // }

    protected $redirectTo = '/logout';

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
            'name' => ['required', 'string', 'min:2', 'max:50'],
            'email' => ['required', 'string', 'email:rfc', 'min:10', 'max:50','unique:users'],
            'phone' => ['required', 'min:8', 'max:14'],
            'username' => ['required', 'string', 'min:5', 'max:12','unique:users', 'alpha_num'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'password_confirmation' => 'same:password',
            'key-access' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if ($data['key-access'] == 'metrology')
        {
            $create = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'username' => $data['username'],
                'role' => 'visitor',
                'password' => Hash::make($data['password']),
            ]);

            $array = [1, 2, 3, 4];
            $random = Arr::random($array);

            $user = Visitor::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'username' => $data['username'],
                'state' => 1,
                'plot' => $random,
                'point' => 0
            ]);

            userControl::create([
                'user_id' => $create->id,
                'control_id' => $user->id,
                'role' => 'visitor'
            ]);

            return $create;
        }
        elseif ($data['key-access'] == 'integrity')
        {
            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'username' => $data['username'],
                'role' => 'admin',
                'password' => Hash::make($data['password']),
            ]);
        }
        elseif ($data['key-access'] == 'hilogy')
        {
            $user = SfHfParticipant::where('email', $data['email'])->first();
            if ($user)
            {
                $create = User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'phone' => $data['phone'],
                    'username' => $data['username'],
                    'role' => 'developer',
                    'password' => Hash::make($data['password']),
                ]);
                
                participantsScore::create([
                    'participant_id' => $user->id,
                    'visit_count' => 0,
                    'score_count' => 0,
                    'final_score' => 0
                ]);

                userControl::create([
                    'user_id' => $create->id,
                    'control_id' => $user->id,
                    'role' => 'developer'
                ]);

                return $create;
            }
            else
            {
                return redirect(url('/register'));
            }
        }
        else
        {
            abort(401);
            return redirect(url('/'));
        }
    }
}
