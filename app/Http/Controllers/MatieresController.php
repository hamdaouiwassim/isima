<?php

namespace App\Http\Controllers;
use App\Matiere;
use App\Filliere;
use Illuminate\Http\Request;

class MatieresController extends Controller
{
    //
     //
     public function index(){
        $matieres = Matiere::all();
        return view('admins.matieres.liste')->with('matieres',$matieres);
    }

    public function add(Request $request){
        $matiere = new Matiere();
        $matiere->nom = $request->input('nom');
        $matiere->description = $request->input('description');
        $matiere->idfilliere = $request->input('filliere');
        $matiere->save();
        return redirect('/matieres');
    
    }

    public function create(){

    $filleres = Filliere::all();
        return view('admins.matieres.add')->with('fillieres',$filleres);
    }

    public function destroy($id){

        $matiere = Matiere::find($id);
        
        $matiere->delete();
        return redirect('/matieres');
        
        
    }
}
