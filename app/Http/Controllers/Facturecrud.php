<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\facture;
use App\Models\Configfac;
use App\Models\User;
use auth;

class Facturecrud extends Controller
{
    //
    public function insertfac(Request $request)
    {  $userId = Auth::user()->id;
        $input = $request->input();
        $input['user_id'] = $userId;
        $socite = Auth::user()->societe;
        $input1 = $request->input();
        $input1['societe'] = $socite;
       $Facture = new Facture();
        $Facture->produit=$request['modele'];
         $Facture->date_facture=$request['date_facture'];
         $Facture->quantite=$request['quantite'];
         $Facture->prix=$request['prix'];
         $Facture->ht=$request['ht'];
         $Facture->r_sociale=$request['r_sociale'];
         $Facture->adresse=$request['adresse'];
         $Facture->ttc=$request['complelment_adr'];
         $Facture->postale=$request['postale'];
         $Facture->ville=$request['ville'];
         $Facture->id_user=$input['user_id'];
         $Facture->societe=$input1['societe'];
         $Facture->save();
         $data=Facture::all()->where('id_user',$userId);
         return view('user/tousfacuser', ['factures' => $data]);

}


function show(){
    $userId = Auth::user()->id;
    $data=Facture::all()->where('id_user',$userId);
    return view('user/tousfacuser', ['factures' => $data]);
  }

  function listevirife(){
    $userId = Auth::user()->id;
    $etat='validé';
    $data=Facture::all()->where('etat',$etat)->where('id_user',$userId);
    return view('user/recheruser', ['factures' => $data]);
  }
  
  function imprimefac($id){
    $data=Facture::find($id);
    return view('/user/imprimefacuser',['factures' => $data]);
  }
  
  function configfac(){
    $societe = Auth::user()->societe;
    $data=Configfac::all()->where('societe',$societe);       
     return view('/user/novfacuser', ['Configfacs' => $data]);
  }
}
