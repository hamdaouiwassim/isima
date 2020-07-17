<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matiere;
use App\Avie;
use App\Filliere;

class AviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (auth()->user()->roles == "Etudiant"){
            $avies = Avie::where('idfilliere',auth()->user()->etudiant->idfilliere)->get();
        //$avies = Avie::where('iduser',auth()->user()->id)->get();
            return view('etudiants.avies.liste')->with('avies',$avies);
        }
    }
    public function aviesType($type){
        if ($type == "A"){
               $avies = Avie::where('type',"Absence")->get();
               return view('admins.avies.liste')->with('avies',$avies);
        }else if($type == "R"){
            $avies = Avie::where('type',"Rattrapage")->get();
               return view('admins.avies.liste')->with('avies',$avies);

        }else{
            $avies = Avie::where('type',"Examan")->get();
               return view('admins.avies.liste')->with('avies',$avies);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $fillieres = Filliere::all();
        $matieres = Matiere::all();
        return view('enseignants.avies.add')->with('matieres',$matieres)->with('fillieres',$fillieres);
    }
    public function avieexaman(){
        $fillieres = Filliere::all();
        $matieres = Matiere::all();
        return view('admins.avies.add')->with('matieres',$matieres)->with('fillieres',$fillieres);
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
        $avie = new Avie();
        $avie->idmatiere = $request->input('idmatiere');
        $avie->type = $request->input('type');
        $avie->salle = $request->input('salle');
        $avie->time = $request->input('time');
        $avie->date = $request->input('date');
        $avie->iduser = auth()->user()->id;
        $avie->idfilliere = $request->input('idfilliere');
        $avie->save();
        return redirect("/home");


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        //
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
        $avie = Avie::find($id);
        $fillieres = Filliere::all();
        $matieres = Matiere::all();
        return view('admins.avies.edit')->with('avie',$avie)->with('matieres',$matieres)->with('fillieres',$fillieres);
   

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $avie = Avie::find($request->input('idavie'));
        $avie->idmatiere = $request->input('idmatiere');
        $avie->type = $request->input('type');
        $avie->salle = $request->input('salle');
        $avie->time = $request->input('time');
        $avie->date = $request->input('date');
        $avie->iduser = auth()->user()->id;
        $avie->idfilliere = $request->input('idfilliere');
        $avie->update();
        return redirect("/enseignants/avies");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $support = Avie::find($id);
        $support->delete();
        return redirect()->back();
       
    }
    
    public function aviesenseignants(){
        $avies = Avie::where('iduser',auth()->user()->id)->get();
        return view('enseignants.avies.liste')->with('avies',$avies);
    }
}
