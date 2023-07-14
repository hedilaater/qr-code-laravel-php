<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Templatesuperadmin extends Controller
{
    //

    public function index()
    {
        return view('superadmin.index');
    }

    public function fac()
    {
        return view('superadmin.tousfacture');
    }

    public function att()
    {
        return view('superadmin.tousatt');
    }

    public function res()
    {
        return view('superadmin.tousresponsable');
    }

    public function emp()
    {
        return view('superadmin.tousemployer');
    }

    public function updatetat()
    {
        return view('superadmin.etat');
    }

}
