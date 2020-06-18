<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filliere;

class FillieresController extends Controller
{
    //
    public function index(){
        $filleres = Filliere::all();
        return view('admins.fillieres.liste')->with('fillieres',$filleres);
    }

    public function add(Request $request){
        $filliere = new Filliere();
        $filliere->libelle = $request->input('libelle');
        $filliere->niveau = $request->input('niveau');
        $filliere->groupe = $request->input('groupe');
        $filliere->save();
        return redirect('/fillieres');
    
    }

    public function create(){
    
        return view('admins.fillieres.add');
    }

    public function destroy($id){

        $Filliere = Filliere::find($id);
        
        $Filliere->delete();
        return redirect('/fillieres');
        
        
    }
}
