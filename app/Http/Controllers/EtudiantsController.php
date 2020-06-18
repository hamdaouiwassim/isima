<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enseignant;
use App\User;
use App\Etudiant;
use Hash;
class EtudiantsController extends Controller
{
    //
     //
     public function index(){
        $users = User::where('roles',"Etudiant")->get();
        return view('admins.etudiants.liste')->with('users',$users);
    }

    public function add(Request $request){
        $user = new User();
        $user->email = $request->input('email');
        $user->password =Hash::make( $request->input('password'));
        $user->roles = $request->input('type');
        $user->name = $request->input('nom');
        $user->save();

    if ( $request->input('type') == "Etudiant" ){
        $etudiant = new Etudiant();
        $etudiant->iduser = $user->id ;
        $etudiant->numinscription = $request->input('numinscription');
        $etudiant->nom = $request->input('nom') ;
        $etudiant->prenom = $request->input('prenom') ;
        $etudiant->datenaissance =$request->input('datenaiss') ;
        $etudiant->nationalite =$request->input('nationalite') ;
        $etudiant->sexe = $request->input('sexe');
        $etudiant->save();
        return redirect('/etudiants');
    }

    }

    public function create(){
    
        
        
        return view('admins.etudiants.add');
    }

    public function destroy($id){

        $user = User::find($id);
        if ($user->roles == "Etudiant" ){
            $etudiant = Etudiant::where('iduser',$id)->get();
            $etudiant[0]->delete();
        }
        $user->delete();
        return redirect('/etudiants');
        
        
    }
}
