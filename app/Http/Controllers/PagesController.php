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

    public function domainAvailability(){
        return view('domainAvail');
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
}
