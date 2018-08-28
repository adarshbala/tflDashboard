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
        $domains = DB::select('select domains from domains');
        return view('layouts.dashboard',['domains'=> $domains]);
    }

    public function subDomainQuery(){
        $domains = DB::select('select domains from domains');
        $x = Input::get('x');
       // $x = ($request->x);
        if($x != ""){
            $subdomain=subDomain::where('subdomain','LIKE', '%' .$x)->get ();
            if(count($subdomain)>0)
                return view ('layouts.dashboard')->withDetails ($subdomain)->with(compact('x', 'domains'));
            else
                return view ( 'layouts.dashboard' )->withMessage ( 'No existing sub-domains for ' . $x )->with(compact('x', 'domains'));
        }
        return view ( 'layouts.dashboard' )->withMessage ( 'Please enter domain name. ' )->with(compact('x', 'domains'));
    }

    // public function subDomainQuery2(Request $request){
    //     $domains = DB::select('select domains from domains');
    //     // $x = Input::get('x');
    //     $x = $request->input('x');
    //     // $x = ".com.fj";
    //     if($x != ""){
    //         $subdomain=subDomain::where('subdomain','LIKE', '%' .$x)->get ();
    //         if(count($subdomain)>0)
    //         {
    //             return view ('layouts.dashboard')->withDetails ($subdomain)->with(compact('x', 'domains'));
    //         }
    
    //         else
    //         {
    //             return view ( 'layouts.dashboard' )->withMessage ( 'No existing sub-domains for ' . $x )->with(compact('x', 'domains'));
    //         }
   
    //     }
    //     return view ( 'layouts.dashboard' )->withMessage ( 'Please enter domain name. ' )->with(compact('x', 'domains'));
    // }


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
