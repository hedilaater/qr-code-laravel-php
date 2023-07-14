<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Auth responsable
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth admin
Route::post('admin/login', [App\Http\Controllers\Auth\LoginController::class, 'adminlogin'])
    ->name('adminlogin');
    Route::get('admin/login', [App\Http\Controllers\Auth\LoginController::class, 'showadminlogin'])
    ->name('adminlogin');
    Route::group(['middleware' => 'auth:admin'], function () {
    
        Route::view('/admin', 'admin');
    });

//Auth superadmin
Route::post('superadmin/login', [App\Http\Controllers\Auth\LoginController::class, 'superadminlogin'])
->name('superadminlogin');
Route::get('superadmin/login', [App\Http\Controllers\Auth\LoginController::class, 'showsuperadminlogin'])
->name('superadminlogin');




//crud superadmin
Route::group(['middleware' => 'auth:superadmin'], function () {
    Route::get('/superadmin/index', [App\Http\Controllers\Superadmincrud::class, 'index'])->name('index');
   // Route::get('/superadmin/index', [App\Http\Controllers\Templatesuperadmin::class, 'index'])->name('index');
    Route::get('/superadmin/res', [App\Http\Controllers\Templatesuperadmin::class, 'res'])->name('responsable');
    Route::get('/superadmin/att', [App\Http\Controllers\Templatesuperadmin::class, 'att'])->name('attisation');
    Route::get('/superadmin/fac', [App\Http\Controllers\Templatesuperadmin::class, 'fac'])->name('facture');
    Route::get('/superadmin/emp', [App\Http\Controllers\Templatesuperadmin::class, 'emp'])->name('employer');
    Route::get('/superadmin/updatetat', [App\Http\Controllers\Templatesuperadmin::class, 'updatetat']);
    Route::get('/superadmin/res', [App\Http\Controllers\Superadmincrud::class, 'editresp'])->name('responsable');
    Route::get('/superadmin/emp', [App\Http\Controllers\Superadmincrud::class, 'editemp'])->name('employer');
    Route::get('/superadmin/att', [App\Http\Controllers\Superadmincrud::class, 'editatt'])->name('attisation');
    Route::get('/superadmin/fac', [App\Http\Controllers\Superadmincrud::class, 'editfac'])->name('facture');
    Route::get('findetat/{id}',[App\Http\Controllers\Superadmincrud::class, 'findetat']);
    Route::post('updatetat/{id}',[App\Http\Controllers\Superadmincrud::class, 'updatetat']);

    Route::view('/superadmin.login', 'superadmin.login');
});





//employer 
Route::group(['middleware' => 'auth'], function () { 

    //template employer
    Route::get('/user/indexuser', [App\Http\Controllers\Templateuser::class, 'index'])->name('userindex');
    Route::get('/user/tousfactureuser', [App\Http\Controllers\Templateuser::class, 'tousfac'])->name('tousfac');
    Route::get('/user/rechechedateuser', [App\Http\Controllers\Templateuser::class, 'rechechedate'])->name('rechechedate');
    Route::get('/user/recheruser', [App\Http\Controllers\Templateuser::class, 'recher'])->name('recher');
    Route::get('/user/novfacuser', [App\Http\Controllers\Templateuser::class, 'novfac'])->name('novfac');
    Route::get('/user/novellattuser', [App\Http\Controllers\Templateuser::class, 'nouvellatt'])->name('nouvellatt');
    Route::get('/user/modiferattuser', [App\Http\Controllers\Templateuser::class, 'modiferatt'])->name('modiferatt');
    Route::get('/user/modiferfacuser', [App\Http\Controllers\Templateuser::class, 'modiferfac'])->name('modiferfac');
   
   //profile employer
    Route::get('profile/{id}',[App\Http\Controllers\Templateuser::class, 'finduser']);
    Route::post('updateprofileuser/{id}',[App\Http\Controllers\Templateuser::class, 'updateprofileuser'])->name('updateprofileuser');
    
    
    //crud att
    Route::get('/user/monattestation',[App\Http\Controllers\AttistationCrud::class, 'attemployer'])->name('attemployer');
 Route::get('/user/tousattistionuser',[App\Http\Controllers\AttistationCrud::class, 'show'])->name('tousatt');
 Route::POST('insertatt',[App\Http\Controllers\Attistationcrud::class, 'insertatt'])->name('insertatt');
 Route::get('/user/attistationverife',[App\Http\Controllers\AttistationCrud::class, 'listevirife'])->name('rechechedate');;
 Route::get('imprime',[App\Http\Controllers\AttistationCrud::class, 'imprime'])->name('imprimeatt');
 Route::get('imprime/{id}',[App\Http\Controllers\AttistationCrud::class, 'imprime']);
  
 //crud facture
 Route::get('/user/tousfactureuser',[App\Http\Controllers\Facturecrud::class, 'show'])->name('tousfac');
 Route::POST('insertfac',[App\Http\Controllers\Facturecrud::class, 'insertfac'])->name('addfacture');
 Route::get('/user/factureverifer',[App\Http\Controllers\Facturecrud::class, 'listevirife'])->name('recher');;
 Route::get('imprimefac/{id}',[App\Http\Controllers\Facturecrud::class, 'imprimefac']);
 Route::get('/user/novfacuser', [App\Http\Controllers\Facturecrud::class, 'configfac'])->name('novfac');


 Route::view('/user', 'auth.login');

});




//responsable 
Route::group(['middleware' => 'auth:admin'], function () { 
    
    
    //reponsable page 
//Route::get('/resp/index', [App\Http\Controllers\Templateresp::class, 'index'])->name('adminindex');
Route::get('/resp/recher', [App\Http\Controllers\Templateresp::class, 'recher'])->name('adminrecher');
Route::get('/resp/recherchedate', [App\Http\Controllers\Templateresp::class, 'rechechedate'])->name('adminrecherchedate');
Route::get('/resp/tablesuser', [App\Http\Controllers\Templateresp::class, 'tablesuser'])->name('admintablesuser');
Route::get('/resp/index', [App\Http\Controllers\Admincrud::class, 'index'])->name('adminindex');

    //crud user responsable 
    Route::get('/resp/updateuser', [App\Http\Controllers\Templateresp::class, 'insertuser'])->name('admininsertuser');
    Route::post('insertuser',[App\Http\Controllers\Admincrud::class,'adduser'])->name('adduser');
Route::get('/resp/listuser',[App\Http\Controllers\Admincrud::class, 'edituser'])->name('adminlisteuser');
Route::get('delete/{id}',[App\Http\Controllers\Admincrud::class, 'deleteuser']);
Route::get('finduser/{id}',[App\Http\Controllers\Admincrud::class, 'finduser']);
Route::post('updateuser/{id}',[App\Http\Controllers\Admincrud::class, 'updateuser'])->name('updateuser');



//crud att responsabe
Route::get('/resp/tousatt',[App\Http\Controllers\Admincrud::class, 'editatt'])->name('admintousatt');
Route::get('/resp/tousattverife',[App\Http\Controllers\Admincrud::class, 'editattverife'])->name('adminattver');
Route::get('/resp/tousattrfuser',[App\Http\Controllers\Admincrud::class, 'editattsup'])->name('adminattref');
Route::get('/resp/nouvatt', [App\Http\Controllers\Admincrud::class, 'editattnouv'])->name('adminnouvatt');
Route::get('actionatt/{id}',[App\Http\Controllers\Admincrud::class, 'actionatt']);
Route::post('updateatt/{id}',[App\Http\Controllers\Admincrud::class, 'updateatt'])->name('updateatt');


//crud config fac responsable
Route::post('updateconf/{id}',[App\Http\Controllers\Admincrud::class, 'updateconf'])->name('updateconf');
Route::get('findfac/{id}',[App\Http\Controllers\Admincrud::class, 'findconf']);
Route::get('deletefac/{id}',[App\Http\Controllers\Admincrud::class, 'deletefac']);
Route::post('configfac',[App\Http\Controllers\Admincrud::class,'insertconfigfac'])->name('configfac');
Route::get('/resp/config', [App\Http\Controllers\Templateresp::class, 'insertfac'])->name('admininsertfac');
Route::get('/resp/configfac', [App\Http\Controllers\Admincrud::class, 'configfac'])->name('adminrecherchedate');


//crud fac responsable
Route::get('/resp/nouvfac', [App\Http\Controllers\Admincrud::class, 'editfacnouv'])->name('adminnouvfac');
Route::get('/resp/facver', [App\Http\Controllers\Admincrud::class, 'editfacverife'])->name('adminfacver');
Route::get('/resp/facref', [App\Http\Controllers\Admincrud::class, 'editfacsup'])->name('adminfacref');
Route::get('/resp/tousfac', [App\Http\Controllers\Admincrud::class, 'editfac'])->name('admintousfac');
Route::get('actionfac/{id}',[App\Http\Controllers\Admincrud::class, 'actionfac']);
Route::get('actionfac/{id}',[App\Http\Controllers\Admincrud::class, 'actionfac']);
Route::post('updatefac/{id}',[App\Http\Controllers\Admincrud::class, 'updatefac'])->name('updatefac');

//profile responsable
Route::get('adminprofile/{id}',[App\Http\Controllers\Admincrud::class, 'findadmin']);
Route::post('updateprofile/{id}',[App\Http\Controllers\Admincrud::class, 'updateprofile'])->name('updateprofile');
Route::get('/resp/adminpsw',[App\Http\Controllers\Templateresp::class, 'findadminpsw'])->name('findadminpsw');
Route::post('changePassword',[App\Http\Controllers\Admincrud::class, 'changePassword'])->name('changePassword');
Route::get('/changePassword', [App\Http\Controllers\HomeController::class, 'showChangePasswordGet'])->name('changePasswordGet');
Route::post('/changePassword', [App\Http\Controllers\HomeController::class, 'changePasswordPost'])->name('changePasswordPost');

Route::view('admin.login', 'admin.login');

});