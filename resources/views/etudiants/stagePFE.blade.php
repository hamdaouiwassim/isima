@extends('layouts.etudiant')

@section('content')
  
      

        
            
           
                        <div class="row p-5">
                            <div class="col-md-12 p-5">
                            
                                        <h2>Stage PFE</h2>
                                        <hr />
                                        <div class="col-md-12">
                                        <h3> Nom : {{ $stage->titre }} </h3> 
                                        <p> Description : {{ $stage->description }} </p>
                                         
                                        <h4> Etat : </h4>  {{ $stage->etat }} 
                                        <br>
                                        <a href="{{ asset('stages') }}/{{ $stage->document }}" class="btn btn-primary">voir cahier de charge</a>

                                        <hr />
                                        <h4> Liste des enseignants qui'ont aimes cet projet </h4>
                                        @foreach($notifications as $n)
                                        <hr />    
                                        {{ $n->enseignant->nom }} {{ $n->enseignant->prenom }}
                                            
                                        @endforeach
                                        </div>
                               
                                
                            </div>
                        </div>
                  
            <!-- END BREADCRUMB-->

           <section>
           
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

