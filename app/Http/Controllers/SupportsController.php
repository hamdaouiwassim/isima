<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matiere;
use App\Support;

class SupportsController extends Controller
{
    //

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $matieres = Matiere::all();
        return view('enseignants.supports.add')->with('matieres',$matieres);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        //
        $file = $request->file('document');

        $fileName = uniqid().$file->getClientOriginalName();
        //Move Uploaded File
        $destinationPath = 'uploads/supportspedagogiques';
        $file->move($destinationPath,$fileName);
        
        $support = new Support();
        $support->idmatiere = $request->input('idmatiere');
        $support->document = $fileName;
        $support->iduser = auth()->user()->enseignant->id ;
        $support->nom = $request->input('nom');
        $support->save();
        return redirect("/supports");


    }

    public function index(){
            $supports = Support::where('iduser',auth()->user()->enseignant->id)->get();
            return view('enseignants.supports.liste')->with('supports',$supports);
    }

    public function destroy($id){

        $support = Support::find($id);
        $support->delete();
        return redirect('/supports');
        
        
    }
    public function modify($id){
        $support = Support::find($id);
        $matieres = Matiere::all();
        return view('enseignants.supports.edit')->with('support',$support)->with('matieres',$matieres);
    }
    public function supportmodifydb(Request $request,$id){
                $support = Support::find($id);
                //
                
                $file = $request->file('document');
                if ($file){
                    $fileName = uniqid().$file->getClientOriginalName();
                    //Move Uploaded File
                    $destinationPath = 'uploads/supports';
                    $file->move($destinationPath,$fileName);
                    $support->document = $fileName;
                }
                $support->idmatiere = $request->input('idmatiere');
                $support->nom = $request->input('nom');
                $support->update();
                return redirect("/supports");

    }


}
