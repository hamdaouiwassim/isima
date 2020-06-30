@extends('layouts.etudiant')

@section('content')
  
      

        
            
           
                        <div class="row p-5">
                            <div class="col-md-12 p-5">
                            
<h2>Stage PFE</h2>
<hr />
                                        <div class="col-md-12">
                                        <form action="{{ route('stageStore')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                  
                                                    <div class="form-group">
                                                        <label for="nom" class="control-label mb-1">Nom</label>
                                                        <input  name="nom" type="text" class="form-control"  >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nom" class="control-label mb-1">Description</label>
                                                        <textarea  name="description"  class="form-control"  ></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="prenom" class="control-label mb-1">document</label>
                                                        <input  name="document" type="file" class="form-control"  >
                                                    </div>
                                                    <div>
                                                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                            <i class="fa fa-user-plus fa-lg"></i>&nbsp;
                                                            <span id="payment-button-amount">Ajouter</span>
                                                            <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                        </button>
                                                    </div>
                                                </form>
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

