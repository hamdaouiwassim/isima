<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Message;
class MessagesController extends Controller
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
        $users = User::where('id', '!=', auth()->user()->id )
                            ->where('roles', '!=', "Admin" )
                            ->get();

        if (auth()->user()->roles == "Admin" ){
            return view('admins.messages.add')->with('users',$users);
        }else if ( auth()->user()->roles == "Etudiant") {
            return view('etudiants.messages.add')->with('users',$users);
        }else{
            return view('enseignants.messages.add')->with('users',$users);
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
       
        
        $message = new Message();
        $message->idemetteur = auth()->user()->id;
        $message->idrecepteur = $request->input('idrecepteur');
        $message->contenu = $request->input('contenu');
        $message->etat = "unseen";
        $message->save();
        return redirect("/discussion/".$request->input('idrecepteur'));


    }

    public function index(){
            $users = User::where('id', '!=', auth()->user()->id )
                            ->where('roles', '!=', "Admin" )
                            ->get();
            $messages = Message::where('idrecepteur',auth()->user()->id)
                                ->orWhere('idemetteur',auth()->user()->id)
                                ->orderBy('created_at')
                                ->get();
            //dd($emetteurs);
            if (auth()->user()->roles == "Admin" ){
                return view('admins.messages.liste')->with('messages',$messages)->with('users',$users);
            }else if ( auth()->user()->roles == "Etudiant") {
                return view('etudiants.messages.liste')->with('messages',$messages)->with('users',$users);
            }else{
                return view('enseignants.messages.liste')->with('messages',$messages)->with('users',$users);
            }
            
    }


    public function discussion($id){
        
        $user = User::find($id);
        $messages = Message::where('idrecepteur',auth()->user()->id)
                                ->Where('idemetteur',$id)
                                ->orWhere('idrecepteur',$id)
                                ->Where('idemetteur',auth()->user()->id)
                                ->orderBy('created_at')
                                ->get();
                                
                                if (auth()->user()->roles == "Admin" ){
                                    return view('admins.messages.discussion')->with('messages',$messages)->with('user',$user);
                                }else if ( auth()->user()->roles == "Etudiant") {
                                    return view('etudiants.messages.discussion')->with('messages',$messages)->with('user',$user);
                                }else{
                                    return view('enseignants.messages.discussion')->with('messages',$messages)->with('user',$user);
                                }
        

    }
 


}
