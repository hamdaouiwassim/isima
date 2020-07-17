
@extends('layouts.enseignant')


@section('content')
  
      

        
            
            
          
                       
                                
                                 
                                 
                        <div class="row p-5">
                            <div class="col-md-12 p-5">
                                     
                                     
                                  <div id="chat" style="height:300px;overflow-y:scroll;overflow-x:hidden;padding:20px">

                                  </div>
                                        <div>
                                            <form id="form-message" action="" method="post">
                                               @csrf
                                            <textarea id="chat-text" placeholder="say hi and start conversation ...!" name="message" data-url="{{ route('messageStore') }}" class="form-control"></textarea>
                                            </form>
                                        </div>
                                       
                            </div>
                        </div>
                                   
                               
                         
                 
         

 
          

@endsection

