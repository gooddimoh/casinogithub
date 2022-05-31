<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminPanelController extends Controller
{

    public function index()
    {

    }

    public function listofallusers()
    {

    }

    public function edituser()
    {
        $User = User::all();
    }

    public function createuser()
    {
        user::created();
        $User = User::all();

    }
}
