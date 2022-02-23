<?php

namespace App\Http\Controllers;

use App\Ldap\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use LdapRecord\Container;

class AuthController extends Controller
{

    public function login()
    {
        return view('login');
    }

    public function doubleFA()
    {
        return view('2FA');
    }


    public function checklogin(Request $request)
    {
        $validator = Validator::make([$request], [
            'username' => 'required',
            'password' => 'required'
        ]);
        $user_data = $validator->validate();
//        $connection = Container::getDefaultConnection();
//        $user = User::findByOrFail('samaccountname', $user_data['username']);
//        if ($connection->auth()->attempt($user->getDn(), $user_data['password'])){
//            return redirect()->route('2fa');
//        }

        if (Auth::attempt($user_data)) {
            return redirect()->route('2fa');
        }

    }

    public function check2fa(Request $request)
    {
        if ($request->get('2fa') == '123'){
            return redirect('successlogin');
        }
        return back()->with('error', 'Code incorrect');

    }

    public function successlogin()
    {
        return view('successlogin');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function test()
    {
        return view('welcome');
    }
}
