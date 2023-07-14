<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\models\User;
use App\Models\Admin;
use App\Models\Facture;
use App\Models\Attistation;
use App\Models\Configfac;
use auth;


class Admincrud extends Controller
{
    //
    public function adduser(Request $request)
    {
        $adminId = Auth::guard('admin')->user()->id;
      $input = $request->input();
      $input['admin_id'] = $adminId;
      $societe = Auth::guard('admin')->user()->societe;
      $input1 = $request->input();
      $input1['societe'] = $societe;
      $User = new User();
      $User->name=$request['name'];
      $User->societe=$input1['societe'];
      $User->cin=$request['telephone'];
      $User->email=$request['email'];
      $User->fonction=$request['etat'];
      $User->password=Hash::make($request['password']);
      $User->id_admin=$input['admin_id'];
      $User->save();
      $data=User::all()->where('id_admin',$adminId);
      return view('admin.listeemployer', ['Users' => $data]);    }
    
    function edituser(){
        $adminId = Auth::guard('admin')->user()->id;
        $data=User::all()->where('id_admin',$adminId);
        return view('admin.listeemployer', ['Users' => $data]);
      }


    function editatt(){
        $societe = Auth::guard('admin')->user()->societe;
       $data=Attistation::all()->where('societe',$societe);       
        return view('admin.tousattistation', ['attistations' => $data]);
      }
      
      function editfac(){
        $societe = Auth::guard('admin')->user()->societe;
       $data=Facture::all()->where('societe',$societe);       
        return view('admin.tousfacture', ['factures' => $data]);
      }

      function editfacverife(){
        $societe = Auth::guard('admin')->user()->societe;
        $etat='validé';
       $data=Facture::all()->where('societe',$societe)->where('etat',$etat);       
        return view('admin.facureverifer', ['factures' => $data]);
      }

      function editfacsup(){
        $societe = Auth::guard('admin')->user()->societe;
        $etat='refusé';
       $data=Facture::all()->where('societe',$societe)->where('etat',$etat);       
        return view('admin.facturerefuse', ['factures' => $data]);
      }

      function editfacnouv(){
        $societe = Auth::guard('admin')->user()->societe;
        
       $data=Facture::all()->where('societe',$societe)->where('etat','=','en attente');       
        return view('admin.nouvellefacture', ['factures' => $data]);
      }

      
      function editattverife(){
        $societe = Auth::guard('admin')->user()->societe;
        $etat='validé';
       $data=Attistation::all()->where('societe',$societe)->where('etat',$etat);       
        return view('admin.attistationverifer', ['attistations' => $data]);
      }

      function editattsup(){
        $societe = Auth::guard('admin')->user()->societe;
        $etat='refusé';
       $data=Attistation::all()->where('societe',$societe)->where('etat',$etat);       
        return view('admin.attistationrefuse', ['attistations' => $data]);
      }
      function editattnouv(){
        $societe = Auth::guard('admin')->user()->societe;
       $data=Attistation::all()->where('societe',$societe)->where('etat','=','en attente');       
        return view('admin.nouvelleattisation', ['attistations' => $data]);
      }

      function configfac(){
        $societe = Auth::guard('admin')->user()->societe;
       $data=Configfac::all()->where('societe',$societe);       
        return view('admin.recherchedate', ['Configfacs' => $data]);
      }

      public function insertconfigfac(Request $request)
      {
          $adminId = Auth::guard('admin')->user()->id;
        $input = $request->input();
        $input['admin_id'] = $adminId;
        $societe = Auth::guard('admin')->user()->societe;
        $input1 = $request->input();
        $input1['societe'] = $societe;
        $User = new Configfac();
        $User->modele=$request['produit'];
        $User->prix=$request['prix'];
        $User->ht=$request['ht'];
        $User->societe=$input1['societe'];
        $User->id_admin=$input['admin_id'];
        $User->save();
        $societe = Auth::guard('admin')->user()->societe;
        $data=Configfac::all()->where('societe',$societe);       
         return view('admin.recherchedate', ['Configfacs' => $data]);
      }

      function findconf($id){
        $data=Configfac::find($id);
        return view('/admin/modiferconf',['Configfac' => $data]);
      }

      function updateconf(Request $request,$id){
        $User=Configfac::find($id);
        $User->modele=$request['produit'];
        $User->prix=$request['prix'];
        $User->ht=$request['ht'];
        $User->update();
        $societe = Auth::guard('admin')->user()->societe;
        $data=Configfac::all()->where('societe',$societe);       
         return view('admin.recherchedate', ['Configfacs' => $data]);
      }

     function deletefac($id){
        $Configfac=Configfac::find($id);
        $Configfac->delete();
        $societe = Auth::guard('admin')->user()->societe;
        $data=Configfac::all()->where('societe',$societe);       
         return view('admin.recherchedate', ['Configfacs' => $data]);
      }

      function actionatt($id){
        $data=Attistation::find($id);
        return view('/admin/modiferatt',['attistations' => $data]);
      }
      function updateatt(Request $request,$id){
        $data=Attistation::find($id);
        $data->etat=$request['action'];
        $data->update();
        $societe = Auth::guard('admin')->user()->societe;
        $data=Attistation::all()->where('societe',$societe);       
        return view('admin.tousattistation', ['attistations' => $data]);
      }

      function actionfac($id){
        $data=Facture::find($id);
        return view('/admin/modiferfac',['factures' => $data]);
      }
      function updatefac(Request $request,$id){
        $data=Facture::find($id);
        $data->etat=$request['action'];
        $data->update();
        $societe = Auth::guard('admin')->user()->societe;
        $data=Facture::all()->where('societe',$societe);       
         return view('admin.tousfacture', ['factures' => $data]);      
      }

      function finduser($id){
        $data=User::find($id);
        return view('/admin/modiferemployer',['users' => $data]);
      }


      function updateuser(Request $request,$id){
        $User=User::find($id);
        $User->societe=$request['societe'];
        $User->name=$request['name'];
        $User->telephone=$request['telephone'];
        $User->email=$request['email'];
        $User->update();
        $adminId = Auth::guard('admin')->user()->id;
        $data=User::all()->where('id_admin',$adminId);
        return view('admin.listeemployer', ['Users' => $data]);
      }

      function deleteuser($id){
        $user=User::find($id);
        $user->delete();
        $adminId = Auth::guard('admin')->user()->id;
        $data=User::all()->where('id_admin',$adminId);
        return view('admin.listeemployer', ['Users' => $data]);

      }

      function findadmin($id){
        $data=Admin::find($id);
      return view('/admin/profile',['admins' => $data]);
      }

      function updateprofile(Request $request,$id){
        $User=Admin::find($id);
        $User->societe=$request['societe'];
        $User->name=$request['name'];
        $User->telephone=$request['telephone'];
        $User->email=$request['email'];
        $User->update();
        $societe = Auth::guard('admin')->user()->societe;
        $users= user::where('societe',$societe)->count();
        $factures= Facture::where('societe',$societe)->count();
        $factureverifers= Facture::where('societe',$societe)->where('etat','=','validé')->count();
        $facturerefusers= Facture::where('societe',$societe)->where('etat','=','refusé')->count();
        $attistations= Attistation::where('societe',$societe)->count();
        $attistationverifes= Attistation::where('societe',$societe)->where('etat','=','validé')->count();
        $attistationrefusers= Attistation::where('societe',$societe)->where('etat','=','refusé')->count();
        return view('admin/index',compact('users','factures','attistations','attistationverifes','attistationrefusers','factureverifers','facturerefusers'));  
          }

          
public function index(){
  $societe = Auth::guard('admin')->user()->societe;
  $users= user::where('societe',$societe)->count();
  $factures= Facture::where('societe',$societe)->count();
  $factureverifers= Facture::where('societe',$societe)->where('etat','=','validé')->count();
  $facturerefusers= Facture::where('societe',$societe)->where('etat','=','refusé')->count();
  $attistations= Attistation::where('societe',$societe)->count();
  $attistationverifes= Attistation::where('societe',$societe)->where('etat','=','validé')->count();
  $attistationrefusers= Attistation::where('societe',$societe)->where('etat','=','refusé')->count();
  return view('admin/index',compact('users','factures','attistations','attistationverifes','attistationrefusers','factureverifers','facturerefusers'));
}

    }

    


