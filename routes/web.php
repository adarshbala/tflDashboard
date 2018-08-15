<?php


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

use App\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

Route::get('/viewUser',function(){
    $data = Data::all();
    return view('welcome')->withData ($data);
});
Route::post('/editItem', function (Request $request) {
	
	$rules = array (
			'fname' => 'required|alpha',
			'lname' => 'required|alpha',
			'email' => 'required|email',
			'gender' => 'required',
			'country' => 'required|regex:/^[\pL\s\-]+$/u',
			'salary' => 'required|regex:/^\d*(\.\d{2})?$/' 
	);
	$validator = Validator::make ( Input::all (), $rules );
	if ($validator->fails ())
		return Response::json ( array (
		    'errors' => $validator->getMessageBag ()->toArray () 
		) );
	else {
		
		$data = Data::find ( $request->id );
		$data->first_name = ($request->fname);
		$data->last_name = ($request->lname);
		$data->email = ($request->email);
		$data->gender = ($request->gender);
		$data->country = ($request->country);
		$data->salary = ($request->salary);
		$data->save ();
		return response ()->json ( $data );
	}
} );
Route::post('/deleteItem', function (Request $request) {
	Data::find ( $request->id )->delete ();
	return response ()->json ();
} );


Auth::routes();
Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');
Route::get('/cuser','PagesController@cuser');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home','PagesController@sqlViewTLD');