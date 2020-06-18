<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->roles == "Admin"){
            return view('admins.home');
        }else if (Auth::user()->roles == "Etudiant"){
            return view('etudiants.home');
        }else{
            return view('ensignants.home');
        }
        
    }
}
