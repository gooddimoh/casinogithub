<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CasinoDashboardController extends Controller
{
    public function index()
    {
        $this->validate();


    }

    public function winlose()
    {

    }

    public function authentification()
    {
        //return link
    }


    public function Imfeelinglucky()
    {
        $random = mt_rand(1, 1000);

        if($random == 900){ }
        if($random == 600){ }
        if($random == 300){ }
        if($random == 300){ }
    }

    public function History()
    {

    }

    public function d()
    {

    }
}
