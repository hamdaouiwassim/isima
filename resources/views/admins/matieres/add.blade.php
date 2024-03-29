@extends('layouts.admin')

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
                                    <a href="{{ route('matiereform')}}" class="au-btn au-btn-icon au-btn--green">
                                        <i class="zmdi zmdi-plus"></i>Ajouter un matiere</a>
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
                    <i class="zmdi zmdi-account-calendar"></i>Les matieres</h3>
                    <hr >
                
                <div class="table-responsive">
                    <div class="col-10 offset-1">
                        <div class="card">
                            <div class="card-header">Ajouter matiere</div>
                            <div class="card-body">
                                <div class="card-title">
                                    <h3 class="text-center title-2">Coordonnes</h3>
                                </div>
                                <hr>
                            <form action="{{ route('matierecreate')}}" method="post" >
                                @csrf
                                    
                                  
                                    <div class="form-group">
                                        <label for="nom" class="control-label mb-1">Nom</label>
                                        <input  name="nom" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                    </div>
                                    <div class="form-group">
                                        <label for="prenom" class="control-label mb-1">Description</label>
                                        <textarea  name="description"  class="form-control" aria-required="true" aria-invalid="false" ></textarea>
                                    </div>
                                    <div class="form-group has-success">
                                        <label for="email" class="control-label mb-1">filliere</label>
                                        <select name="filliere" class="form-control">
                                            @foreach ($fillieres as $filliere )
                                        <option value="{{ $filliere->id }}">{{ $filliere->libelle}}</option>
                                            @endforeach
                                            
                                        </select>
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

