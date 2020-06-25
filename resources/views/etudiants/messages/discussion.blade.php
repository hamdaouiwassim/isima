@extends('layouts.etudiant')

@section('content')
  
      

        
            
            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span">You are here:</span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="#">Home</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Dashboard</li>
                                        </ul>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

           <section>
            <div class="user-data m-b-30">
                <h3 class="title-3 m-b-30">
                    
                    <hr >
                
                <div>
                    @foreach ($messages as $message )
                        @if ( auth()->user()->id == $message->idemetteur )
                             <div class="alert alert-success"> Moi : {{ $message->contenu }} </div>
                           
                        @else
                            <div class="alert alert-primary">{{ $user->name}} : {{ $message->contenu }} </div>
                        @endif
                        <br />
                    @endforeach

                            
                    <form action="{{ route('messagecreate')}}" method="post" >
                        @csrf
                            
                          
                            
                          
                             
                            <input  name="idrecepteur"  type="hidden"  value="{{$user->id}}">
                    

                            <div class="form-group has-success">
                             
                                <textarea name="contenu"  class="form-control cc-name valid" placeholder="salut ..." ></textarea>
                               
                            </div>

                             

                        

                          
                            
                            
                           
                            <div>
                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                    <i class="fa fa-envelope fa-lg"></i>&nbsp;
                                    <span id="payment-button-amount">Envoyer</span>
                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                </button>
                            </div>
                        </form>
                </div>
                
            </div>
           </section>
     

           

            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
          

    </div>
@endsection

