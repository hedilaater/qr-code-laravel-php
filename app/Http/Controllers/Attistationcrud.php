<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attistation;
use App\Models\User;
use auth;



class Attistationcrud extends Controller
{
    //
    public function insertatt(Request $request)
    {  
      $userId = Auth::user()->id;
      $input = $request->input();
      $input['user_id'] = $userId;
      $socite = Auth::user()->societe;
      $input1 = $request->input();
      $input1['societe'] = $socite;
      $Attistation = new Attistation();
        $Attistation->type=$request['type'];
         $Attistation->cin=$request['cin'];
         $Attistation->fonction=$request['fonction'];
         $Attistation->nom=$request['nom'];
         $Attistation->prenom=$request['prenom'];
         $Attistation->date_debuit=$request['date_debuit'];
         $Attistation->date_fin=$request['date_fin'];
         $Attistation->id_user=$input['user_id'];
         $Attistation->societe=$input1['societe'];
         $Attistation->save();
         $data=Attistation::all()->where('id_user',$userId);
         return view('user/tousattuser', ['attistations' => $data]);
}

function show(){
  $userId = Auth::user()->id;
  $data=Attistation::all()->where('id_user',$userId);
  return view('user/tousattuser', ['attistations' => $data]);
}

function listevirife(){
  $userId = Auth::user()->id;
  $etat='validé';
  $data=Attistation::all()->where('etat',$etat)->where('id_user',$userId);
  return view('user/rechechedateuser', ['attistations' => $data]);
}

function imprime($id){
  $data=Attistation::find($id);
  return view('/user/imprimeattuser',['attistations' => $data]);
}
function attemployer()
{
  return view('user.attemployer');
}

}
