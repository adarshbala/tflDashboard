<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Data;

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

    public function domainAvailability(){
        return view('domainAvail');
    }

    public function search(Request $request){
        if($request->ajax()){
            $Output="Domain is available";
            $domains = DB::table('current_domains')->where('domain','LIKE','%'.$request->search."%")->get();

            if($domains){
                foreach($domains as $key=> $domain){
                    $output.='<p>'.$domain->domain.'p';
                    
                }
                return Response($output);
            }
        }
    }
}
