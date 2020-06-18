<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enseignant;
use App\User;
use App\Etudiant;
use Hash;
class EnseignantsController extends Controller
{
    //
    public function index(){
        $users = User::where('roles',"Enseignant")->get();
        return view('admins.enseignants.liste')->with('users',$users);
    }

    public function add(Request $request){

        $user = new User();
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->roles = $request->input('type');
        $user->name = $request->input('nom');
        // Ajout BD
        $user->save();

    if ( $request->input('type') == "Enseignant" ){
        $enseignant = new Enseignant();
        $enseignant->iduser = $user->id ;
        $enseignant->nom = $request->input('nom') ;
        $enseignant->prenom = $request->input('prenom') ;
        $enseignant->datenaissance =$request->input('datenaiss') ;
        $enseignant->nationalite =$request->input('nationalite') ;
        $enseignant->sexe = $request->input('sexe');
        $enseignant->save();
        return redirect('/enseignants');
    }
    }

    public function create(){    
        return view('admins.enseignants.add');
    }

    public function destroy($id){

        $user = User::find($id);
        if ($user->roles == "Enseignant" ){
            $enseignant = Enseignant::where('iduser',$id)->get();
            $enseignant[0]->delete();
        }
        $user->delete();
        return redirect('/enseignants');
        
        
    }
}
