<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function index()
    {
        echo "adminpanel";
    }

    public function listofallusers()
    {
        return view('/adminpanel/listofallusers');
    }

    public function useredit()
    {
        $User = User::all();
    }

    public function createuser()
    {
        user::created();
        $User = User::all();

    }

    public function userdelete()
    {
        user::created();
        $User = User::all();

    }
}
