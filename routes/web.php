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
use App\User;
use App\DomainAvailability;
use App\subDomain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

Route::get('/viewUser',function(){
    $data = Data::all();
    return view('viewUser')->withData ($data);
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


Route::get('/search','PagesController@domainAvailability');
Route::post ( '/search', function () {

	$q = Input::get ( 'q' );
	if($q != ""){
		$domain = DomainAvailability::where( 'domain','=', $q . '.school.fj' )->get ();
		if (count ( $domain ) > 0)
			return view ( 'domainAvail' )->withDetails ( $domain )->withQuery ( $q );
		else
			return view ( 'domainAvail' )->withMessage ( 'No existing Domain,  ' . $q . '.school.fj is available.');
	}
	return view ( 'domainAvail' )->withMessage ( 'No existing Domain,  ' . $q . '.school.fj is available.');
} );

// Route::post('/searchDomain', function(){
// 	$x = Input::get('x');
// 	if($x != ""){
// 		$subdomain=subDomain::where('subdomain','LIKE', '%' .$x)->get ();
// 		if(count($subdomain)>0)
// 			return view ('layouts.dashboard')->withDetails ($subdomain)->withQuery ($x);
// 		else
// 			return view ( 'layouts.dashboard' )->withMessage ( 'No existing sub-domains for  ' . $x );
// 	}
// 	return view ( 'layouts.dashboard' )->withMessage ( 'No existing sub-domains for  ' . $x );
// });

Route::post('/searchSub','PagesController@subDomainQuery');
// Route::get('/searchSub/{x}','PagesController@subDomainQuery2');

Auth::routes();
Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');
Route::get('/cuser','PagesController@cuser');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard','PagesController@sqlViewTLD');
Route::get('/support','PagesController@support');


