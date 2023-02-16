<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\commissionController;
use App\Http\Controllers\tripeController;
use App\Http\Controllers\captainsController;
use App\Http\Controllers\moterController;
use App\Http\Controllers\maintenancesController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\ordesController;


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
 return view('auth.login');
 //   return view('welcome');

});
////////////////////test to get val

Route::get('demo/ajax', [DemoController::class, 'ajax']);


 ////////////veiw admin///////
Route::get('v_admin', [adminController::class, 'c_index'])->name('v_admin');
Route::get('v_admin/records', [adminController::class, 'c_records'])->name('v_admin/records');




Route::get('students', [StudentController::class, 'index'])->name('students');
Route::get('standards', [StudentController::class, 'getStandard'])->name('standards');
Route::get('results', [StudentController::class, 'getResult'])->name('results');
Route::get('students/records', [StudentController::class, 'records'])->name('students/records');
Route::get('students/d_records', [StudentController::class, 'd_records'])->name('students/d_records');

/////////////// add admin


Route::get('admin_register','admin\adminController@c_admin' )->name('admin_register');
Route::get('admin_register1','admin\adminController@Stort' );
Route::get('editm_view/{id}','admin\adminController@edit' );
Route::get('upm_view/{id}','admin\adminController@update' );
Route::get('Delm_view/{id}','admin\adminController@distory');



//////////////Motor//////////
Route::get('motor', [moterController::class, 'm_index'])->name('motor');
Route::get('motor/records', [moterController::class, 'm_records'])->name('motor/records');

//////////////captains//////////
Route::get('captains', [captainsController::class, 'c_index'])->name('captains');
Route::get('captains/records', [captainsController::class, 'c_records'])->name('captains/records');


//////////////show offline//////////


Route::get('order', [ordesController::class, 'of_index'])->name('order');
Route::get('of_getstatus', [ordesController::class, 'getstatus'])->name('of_getstatus');
Route::get('of_getcaptain', [ordesController::class, 'getcaptain'])->name('of_getcaptain');
Route::get('order/records', [ordesController::class, 'records'])->name('order/records');
Route::get('order/d_records', [ordesController::class, 'or_records'])->name('order/d_records');



//////////////Expenses//////////
Route::get('expenses', [ExpensesController::class, 'e_index'])->name('expenses');
Route::get('expenses/records', [ExpensesController::class, 'e_records'])->name('expenses/records');


//////////////Tripe//////////


Route::get('tripe', [tripeController::class, 't_index'])->name('tripe');
Route::get('getstatus', [tripeController::class, 'getstatus'])->name('getstatus');
Route::get('getcaptain', [tripeController::class, 'getcaptain'])->name('getcaptain');

Route::get('tripe/records', [tripeController::class, 'records'])->name('tripe/records');
Route::get('tripe/d_records', [tripeController::class, 't_records'])->name('tripe/d_records');

//////////////commission//////////
Route::get('commission', [commissionController::class, 'co_index'])->name('commission');
Route::get('commission/records', [commissionController::class, 'co_records'])->name('commission/records');

//////////////maintenances//////////

Route::get('maintenances', [maintenancesController::class, 'ma_index'])->name('maintenances');
Route::get('maintenances/records', [maintenancesController::class, 'ma_records'])->name('maintenances/records');


Route::get('m_display/{id}','maintenance\maintenanceController@test' );
Route::get('t_mission','maintenance\maintenanceController@mission')->name('t_mission');


////////////
//Route::get('a_mission', [a_missionController::class, 'a_mission'])->name('a_mission');

Route::get('a_mission','admin\a_missionController@a_mission')->name('a_mission');



///////////////////////////////fath


//////////////Motor
Route::get('m_create','Motor\moterController@create' );
Route::get('m_register1','Motor\moterController@stort' );

Route::get('m_display','Motor\moterController@display' )->name('m_display');
Route::get('m_distory/{id}','Motor\moterController@distory');
Route::get('m_editm_view/{id}','Motor\moterController@edit' );
Route::get('m_upm_view/{id}','Motor\moterController@update' );
Route::get('m_search','Motor\moterController@search' );



Route::get('m_getpdf', 'Motor\moterController@getpdf');


//////////////captains
Route::get('c_create','captains\captainsController@create' );
Route::get('c_register1','captains\captainsController@stort' );

Route::get('c_display','captains\captainsController@display' )->name('c_display');
Route::get('c_distory/{id}','captains\captainsController@distory');
Route::get('c_editm_view/{id}','captains\captainsController@edit' );
Route::get('c_upm_view/{id}','captains\captainsController@update' );
Route::get('c_search','captains\captainsController@search' );


Route::get('c_getpdf', 'captains\captainsController@getpdf');

//////////////Tripe
Route::get('t_create','tripe\tripeController@create' );
Route::get('t_register1','tripe\tripeController@stort' );

Route::get('t_display','tripe\tripeController@display' )->name('t_display');
Route::get('t_distory/{id}','tripe\tripeController@distory')->name('t_distory');
Route::get('t_editm_view/{id}','tripe\tripeController@edit' );
Route::get('t_upm_view/{id}','tripe\tripeController@update' );

Route::get('t_search','tripe\tripeController@search' );
Route::get('t_getpdf', 'tripe\tripeController@getpdf');

//////////////Expenses
Route::get('e_create','Expenses\ExpensesController@create' );
Route::get('e_register1','Expenses\ExpensesController@stort' );

Route::get('e_display','Expenses\ExpensesController@display' )->name('e_display');
Route::get('e_distory/{id}','Expenses\ExpensesController@distory');
Route::get('e_editm_view/{id}','Expenses\ExpensesController@edit' );
Route::get('e_upm_view/{id}','Expenses\ExpensesController@update' );
Route::get('e_search','Expenses\ExpensesController@search' );


Route::get('e_getpdf', 'Expenses\ExpensesController@getpdf');




//////////////commission
Route::get('co_create/{id}/{captain}','commission\commissionController@create' )->name('co_create/{id}/{captain}');
//Route::get('co_create','commission\commissionController@create' )->name('co_create');

Route::get('co_register1','commission\commissionController@stort' )->name('co_register1');
Route::get('co_distory/{id}','commission\commissionController@distory');
Route::get('co_editm_view/{id}','commission\commissionController@edit' );
Route::get('co_upm_view/{id}','commission\commissionController@update' );


//////////////maintenances
Route::get('ma_create','maintenance\maintenanceController@create' );
Route::get('ma_register1','maintenance\maintenanceController@stort' );
Route::get('ma_distory/{id}','maintenance\maintenanceController@distory');
Route::get('ma_editm_view/{id}','maintenance\maintenanceController@edit' );
Route::get('ma_upm_view/{id}','maintenance\maintenanceController@update' );




////////////////////Route import Excel in laravel
Route::get('/file-import','excel\importAPIController@importView')->name('import-view');
Route::post('/import','excel\importAPIController@importView')->name('import');

Route::get('t_import','tripe\tripeController@import' )->name('t_import');

////////////////// rest password
Route::get('e_pssword','admin\e_passwordController@index');
Route::get('e_pssword1/{id}', 'admin\e_passwordController@Stort');



///////////////login
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('dashboard','admin\a_missionController@a_mission')->name('dashboard');

});



////////////////////ofline////
Route::get('of_create','offline\ordesController@create' );
Route::get('of_register1','offline\ordesController@stort' );

Route::get('of_distory/{id}','offline\ordesController@distory');
Route::get('of_editm_view/{id}','offline\ordesController@edit' );
Route::get('of_upm_view/{id}','offline\ordesController@update' );




