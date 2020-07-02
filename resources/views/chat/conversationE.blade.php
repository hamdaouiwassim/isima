
@extends('layouts.etudiant')


@section('content')
  
      
           
                                 
                                 
<div class="row p-5">
    <div class="col-md-12 p-5">
                @if ($chats->hasMorePages())
                <div class="text-center">

                
                        <a href="{{ $chats->nextPageUrl() }}" class="btn btn-light">
                            voir les messages precedentes

                        </a>
                        <hr />
                </div>
                @endif
                @foreach ($chats as $m)
                @if ($m->user->roles == "Etudiant")
                        @if ($m->iduser == Auth::user()->id )
                                <div class="alert alert-primary text-right">
                                    
                                    <p style="font-size:14px"><span style="font-size:16px">  {!! nl2br(e($m->message)) !!}</p>
                                    <span style="font-size:10px">{{ $m->created_at }}</span>
                                </div>
                        @else
                                <div class="alert alert-secondary">
                                    
                                    <p style="font-size:14px"><span style="font-size:16px"> {{ $m->user->enseignant->prenom }} {{ $m->user->enseignant->nom }}  </span> : {!! nl2br(e($m->message)) !!} </p>
                                    <span style="font-size:10px">{{ $m->created_at }}</span>
                                </div>
                        @endif
                @endif
                @endforeach
                @if ($chats->previousPageUrl())
                <div class="text-center">

                
                        <a href="{{ $chats->previousPageUrl() }}" class="btn btn-light">
                            voir les messages suivants
                        </a>
                        <hr />
                </div>
                @endif
                <div>
                    <form action="/chat/ajouter" method="post">
                        @csrf
                        <textarea name="message" class="form-control"></textarea>
                        <hr />
                        <input type="submit" value="Envoyer" class="btn btn-primary">
                    </form>
                </div>

    </div>
</div>
           
       
 

@endsection

