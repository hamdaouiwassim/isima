<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chat;
class ChatsController extends Controller
{
    //
    public function show(){
        $chats = Chat::paginate(3);
        if (auth()->user()->roles == "Etudiant"){
            return view('chat.conversationE')->with('chats', $chats);
        }else{
            return view('chat.conversationEns')->with('chats', $chats);
        }
        
    }
    public function store(Request $request){
        
      $message = new Chat();
      $message->iduser =auth()->user()->id ;
      $message->message =$request->input('message');
      $message->save();
      return redirect()->back();

        
    }

}
