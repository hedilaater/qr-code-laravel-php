<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\models\User;
use App\models\Superadmin;
use App\Models\Admin;
use App\Models\Facture;
use App\Models\Attistation;
use auth;

class Superadmincrud extends Controller
{
    //
    function editresp(){
        $data=Admin::all();
        return view('superadmin.tousresponsable', ['admins' => $data]);
      }

      function editemp(){
        $data=User::all();
        return view('superadmin.tousemployer', ['users' => $data]);
      }

      function editatt(){
        $data=Attistation::all();
        return view('superadmin.tousatt', ['attistations' => $data]);
      }

      function editfac(){
        $data=Facture::all();
        return view('superadmin.tousfacture', ['factures' => $data]);
      }

      function findetat($id){
        $data=Admin::find($id);
        return view('superadmin.etat',['Admin' => $data]);
      }

      function updatetat(Request $request,$id){
        $data=Admin::find($id);
        $data->etat=$request['action'];
        $data->update();
        $data=Admin::all();
        return view('superadmin.tousresponsable', ['admins' => $data]);
      }


      public function index(){
        $users= user::all()->count();
        $factures= Facture::all()->count();
        $attistations= Attistation::all()->count();
        $admins= Admin::all()->count();
      
      
      
        return view('superadmin/index',compact('users','factures','attistations','admins'));
      }

}
