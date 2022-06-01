<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\URL;

class CostumeAuthentificationController extends Controller
{

    public function index(){}

    public function login()
    {

    }
    public function store(Request $request)
    {
        $request->validate([
            'Username' => 'required',
            'phonenumber' => 'required'
        ]);

        Auth::login($user = User::create([
            'username' => $request->username,
            'phonenumber' => $request->phonenumber,
        ]));

        Auth::routes();

        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);

    }

    public function registration(){

    }


}
