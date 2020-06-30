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
            return view('enseignants.home');
        }
        
    }
    public function profile(){
        if (Auth::user()->roles == "Admin"){
            return view('admins.profile');
        }else if (Auth::user()->roles == "Etudiant"){
            return view('etudiants.profile');
        }else{
            return view('enseignants.profile');
        } 
    }
    public function Update(Request $request){

        if ( auth()->user()->roles == "Admin" ){
            
                $file = $request->file('avatar');
                $user = auth()->user();
                if ($file){
                    $fileName = uniqid().'.'.$file->getClientOriginalExtension();
                    $destinationPath = 'users';
                    $file->move($destinationPath,$fileName);
            
                    $user->avatar = $fileName;
                    
                }
                $user->update();
                return view('admins.profile');
        }
        

        if ( auth()->user()->roles == "Etudiant" ){
            $etudiant = auth()->user()->etudiant;
            //$etudiant->iduser = $user->id ;
            $etudiant->numinscription = $request->input('numinscription');
            $etudiant->nom = $request->input('nom') ;
            $etudiant->prenom = $request->input('prenom') ;
            $etudiant->datenaissance =$request->input('datenaiss') ;
            $etudiant->nationalite =$request->input('nationalite') ;
            $etudiant->sexe = $request->input('sexe');
            $etudiant->update();
            
        }else if (auth()->user()->roles == "Enseignant"){
            $enseignant = auth()->user()->enseignant;
            //$enseignant->iduser = $user->id ;
            $enseignant->nom = $request->input('nom') ;
            $enseignant->prenom = $request->input('prenom') ;
            $enseignant->datenaissance =$request->input('datenaiss') ;
            $enseignant->nationalite =$request->input('nationalite') ;
            $enseignant->sexe = $request->input('sexe');
            $enseignant->update();

        }

        $file = $request->file('avatar');
        $user = auth()->user();
        if ($file){
            $fileName = uniqid().'.'.$file->getClientOriginalExtension();
            $destinationPath = 'users';
            $file->move($destinationPath,$fileName);
    
            $user->avatar = $fileName;
            
        }
        
        $user->email = $request->input('email');
        if ($request->input('password') != ""){
            $user->password =Hash::make( $request->input('password'));
        }
        //$user->roles = $request->input('type');
        $user->name = $request->input('nom');
        $user->update();
        if (Auth::user()->roles == "Admin"){
            return view('admins.profile');
        }else if (Auth::user()->roles == "Etudiant"){
            return view('etudiants.profile');
        }else{
            return view('enseignants.profile');
        } 
    }
}
