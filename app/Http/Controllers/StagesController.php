<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stage;
use App\Notification;

class StagesController extends Controller
{
    //
    public function index(){
        $stages = Stage::all();
        if (auth()->user()->roles == "Admin"){
            return view('admins.stages.liste')->with('stages',$stages);
        }
        return view('enseignants.stages.liste')->with('stages',$stages);
       
    }
    
    public function Notif($id){

        if (count(Notification::where('idenseignant',auth()->user()->enseignant->id)->where('idstage',$id)->get() ) == 0 ){
            
        $notif = new Notification();
        $notif->idenseignant = auth()->user()->enseignant->id;
        $notif->idstage = $id;
        
        $notif->save();
        }
        return redirect("/stages/all");
            
    }
    public function create(){
        $stage = Stage::where('idetudiant',auth()->user()->etudiant->id)->get();
        if (count($stage) > 0 ){
            $notifications = Notification::where('idstage',$stage[0]->id)->get();
            //dd($notifications);
           
            return view('etudiants.stagePFE')->with('stage',$stage[0])->with('notifications',$notifications); 
        }
        return view('etudiants.stage');
    }

    public function store(Request $request){
        //return view('etudiants.stage');

        $stage = new Stage();
        $stage->titre = $request->input('nom');
        $stage->description = $request->input('description');
        $file = $request->file('document');
        $fileName = uniqid().'.'.$file->getClientOriginalExtension();
        $destinationPath = 'stages';
        $file->move($destinationPath,$fileName);
        $stage->document = $fileName;
        $stage->etat = "En cours";
        $stage->idetudiant = auth()->user()->etudiant->id;
        $stage->save();
        return redirect('/stagepfe');
    }

    public function valide($id){

        $stage =Stage::find($id);
        $stage->etat = "Acceptee";
        $stage->update();
        return redirect("/stages/all");
        
            
    }

    public function refue($id){

        $stage =Stage::find($id);
        
        $stage->etat = "Refusee";
        $stage->update();
        return redirect("/stages/all");
            
    }
}
