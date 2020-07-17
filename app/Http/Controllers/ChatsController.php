<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chat;
class ChatsController extends Controller
{
    //
    public function show(){
        $chats = Chat::orderBy('created_at','DESC')->paginate(3);
        /*return $chats;*/
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
      //Broadcast(new MessageDelivery($message))->toOthers();
      //return response()->json([ 'result'=>'0' ,'token'=>csrf_token()]);
      //return redirect()->back();

        
    }
    public function getAllMessages(){
        $messages =Chat::orderBy('created_at','DESC')->get();
        $data = Array();
        //dd($messages);
        foreach($messages as $message){
            $message['user'] = $message->user->name;
            //$message->original['user'] = $message->user->name;
            array_push($data, $message);
            //$data = $message->user->name;
        }
        //dd($data);
        return response()->json($data, 200);
    }

    /*public function storeMessage(){

    }*/

}
