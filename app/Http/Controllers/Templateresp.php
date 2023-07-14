<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Templateresp extends Controller
{
    //findadminpsw

    public function index()
    {
        return view('admin.index');
    }

    public function tousfac()
    {
        return view('admin.tousfacture');
    }

    public function tousatt()
    {
        return view('admin.tousattistation');
    } 

    public function rechechedate()
    {
        return view('admin.recherchedate');
    }

    public function recher()
    {
        return view('admin.rechercher');
    }

    public function insertuser()
    {
        return view('admin.ajouteremployer');
    }

    public function listuser()
    {
        return view('admin.listeemployer');
    }

    public function nouvatt()
    {
        return view('admin.nouvelleattisation');
    }
    public function attver()
    {
        return view('admin.attistationverifer');
    }
    public function attref()
    {
        return view('admin.attistationrefuse');
    }
    public function nouvfac()
    {
        return view('admin.nouvellefacture');
    }
    public function facver()
    {
        return view('admin\facureverifer');
        
    }
    public function facref()
    {
        return view('admin.facturerefuse');
    }

    public function insertfac()
    {
        return view('admin.insertfac');
    }

    public function findadminpsw()
    {
        return view('/admin/psw');
    }
}

