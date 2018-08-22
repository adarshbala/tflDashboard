<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
//use App\topLevelDomain; 
use App\Data;
use App\subDomain;
use Illuminate\Support\Facades\Input;

class PagesController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */



    public function index(){
        return view('pages.index');
    }

    public function domainAvailability(){
        return view('domainAvail');
    }

    public function sqlViewTLD(){
        $domains = DB::select('select * from domains');
        return view('layouts.dashboard',['domains'=> $domains]);
    }

    public function subDomainQuery(){
        $x = Input::get('x');
       // $x = ($request->x);
        if($x != ""){
            $subdomain=subDomain::where('subdomain','LIKE', '%' .$x)->get ();
            if(count($subdomain)>0)
                return view ('layouts.dashboard')->withDetails ($subdomain)->withQuery ($x);
            else
                return view ( 'layouts.dashboard' )->withMessage ( 'No existing sub-domains for  ' . $x );
        }
        return view ( 'layouts.dashboard' )->withMessage ( 'No existing sub-domains for  ' . $x );
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function about(){
        return view('pages.about');
    }

    public function services(){
        return view('pages.services');
    }

    public function cuser(){
        return view('pages.cuser');
    }

    public function support(){
        return view('layouts.support');
    }
}
