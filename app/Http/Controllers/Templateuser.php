<?php

namespace App\Http\Controllers;
use App\models\User;

use Illuminate\Http\Request;

class Templateuser extends Controller
{
    //
    public function index()
    {
        return view('user.indexuser');
    }

    public function tousfac()
    {
        return view('user.tousfacuser');
    }

    public function modiferfac()
    {
        return view('user.modiferfacuser');
    }
    

    public function tousatt()
    {
        return view('user.tousattuser');
    } 

    public function rechechedate()
    {
        return view('user.rechechedateuser');
    }

    public function recher()
    {
        return view('user.recheruser');
    }

    public function novfac()
    {
        return view('user.novfacuser');
    }

    public function nouvellatt()
    {
        return view('user.novellattuser');
    }

    public function modiferatt()
    {
        return view('user.modiferattuser');
    }

    public function imprimefac()
    {
        return view('user.imprimefacuser');
    }

    public function imprimeatt()
    {
        return view('user.imprimeattuser');
    }

    function finduser($id){
        $data=User::find($id);
      return view('/user/profile',['users' => $data]);
      }
      function updateprofileuser(Request $request,$id){
        $User=User::find($id);
        $User->etat=$request['etat'];
        $User->name=$request['name'];
        $User->telephone=$request['telephone'];
        $User->email=$request['email'];
        $User->update();
        
return view('/user.indexuser');      
    }
}
