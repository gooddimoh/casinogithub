<?php

namespace App\Http\Controllers;

use App\Models\imfeelinglucky;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\URL;

class CasinoDashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('home');
    }

    public function show()
    {

    }

    public function winlose()
    {
        echo "loose";
    }

    public function authentification()
    {
        //return link
    }

    public function generatelink($notifiable)
    {

        return URL::temporarySignedRoute(
            'verification.verify',
            Carbon::now()->addMinutes(Config::get('auth.verification.expire', 60)),
            [
                'id' => $notifiable->getKey(),
                'hash' => sha1($notifiable->getEmailForVerification()),
            ]
        );
    }

    public function copyunicallink()
    {
        $unicallink = "";
    }

    public function generateunicallink()
    {
        $unicallink = "";
    }

    public function deactivateunicallink()
    {
        $unicallink = "";
    }

    public function imfeelinglucky()
    {
        $random = mt_rand(1, 1000);

        if ($random ** 2) {
            echo "Win";
        } else {
            echo "Loose";
        }
        if ($random > 900) {
            $result = 70;
        }
        if ($random > 600) {
            $result = 50;
        }
        if ($random > 300) {
            $result = 30;
        }
        if ($random > 300) {
            $result = 10;
        }

        $imfeellucky = new imfeelinglucky();

        $imfeellucky->save([]);
    }

    public function history()
    {

    }

    public function d()
    {

    }
}
