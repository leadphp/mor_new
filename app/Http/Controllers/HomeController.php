<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exreport;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function thanku(Request $r)
    {
        return json_encode($r->all()); 
    }

    public function questions()
    {
        $exreport = Exreport::orderBy('id','desc')->first(); 
        return view('questions')->with('exreport',$exreport);
    }

    public function login()
    {
        return redirect('/#login');
    }

    public function register()
    {
        return redirect('/#register');
    }

    public function about_us(){

    return view('frontEnd.about_Us');

    }

    public function contact_us(){

    return view('frontEnd.contact_Us');
    
    }
    public function how_it_works(){

    return view('frontEnd.how_it_works');
    
    }
    public function compare_offers(){

    return view('frontEnd.compare_offer');
    
    }
}
