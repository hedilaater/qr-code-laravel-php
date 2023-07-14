<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\models\User;
use App\Models\Admin;
use App\Models\Superdmin;
use App\Models\Facture;
use App\Models\Attistation;
use App\Models\Configfac;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
            $this->middleware('guest')->except('logout');
            $this->middleware('guest:admin')->except('logout');
            $this->middleware('guest:superadmin')->except('logout');
    }

    public function showsuperadminlogin()
    {
        return view('superadmin.login');
    }

    public function superadminlogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('superadmin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            $users= user::all()->count();
            $factures= Facture::all()->count();
            $attistations= Attistation::all()->count();
            $admins= Admin::all()->count();
            return view('superadmin.index',compact('users','factures','attistations','admins'));
        }
        return back()->withInput($request->only('email', 'remember'));
    }




    public function showadminlogin()
    {
        return view('admin.login', ['url' => 'admin']);
    }

    public function adminlogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password ,'etat'=>'accepter'], $request->get('remember'))) {

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
        return back()->withInput($request->only('email', 'remember'));
    }
    
}
