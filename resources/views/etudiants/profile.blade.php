@extends('layouts.etudiant')

@section('content')
  
      

        
            
           
                        <div class="row p-5">
                            <div class="col-md-12 p-5">
                            

                                        <div class="col-md-12">
                                        <form action="{{ route('UpdateProfile')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                  
                                                    <div class="form-group">
                                                        <label for="nom" class="control-label mb-1">Numero inscription</label>
                                                        <input  name="numinscription" type="text" class="form-control" value={{ auth()->user()->etudiant->numinscription }} >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nom" class="control-label mb-1">Nom</label>
                                                        <input  name="nom" type="text" class="form-control" value={{ auth()->user()->etudiant->nom }} >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="prenom" class="control-label mb-1">Prenom</label>
                                                        <input  name="prenom" type="text" class="form-control" value={{ auth()->user()->etudiant->prenom }} >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nom" class="control-label mb-1">Photo</label>
                                                        <input  name="avatar" type="file" class="form-control"  >
                                                    </div>
                                                    <div class="form-group has-success">
                                                        <label for="email" class="control-label mb-1">Email</label>
                                                        <input id="email" name="email" type="email" class="form-control cc-name valid" data-val="true" value={{ auth()->user()->email }}>
                                                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password" class="control-label mb-1">Mot de passe</label>
                                                        <input id="password" name="password" type="password" class="form-control password identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-password="Please enter a valid card number" autocomplete="cc-number">
                                                        <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="cc-exp" class="control-label mb-1">Sexe</label>
                                                                <select name="sexe" id="" class="form-control">
                                                                    <option value="homme">Homme</option>
                                                                    <option value="femme">Femme</option>
                                                                </select>
                
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="x_card_code" class="control-label mb-1">Date de naissance</label>
                                                            <div class="input-group">
                                                                <input  name="datenaiss" type="date" class="form-control cc-cvc" value={{ auth()->user()->etudiant->datenaissance }}>
                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password" class="control-label mb-1">Nationalite</label>
                                                        <input id="password" name="nationalite" type="text" class="form-control password identified visa" value={{ auth()->user()->etudiant->nationalite }}>
                                                        <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                                    </div>
                                                    <div>
                                                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                            <i class="fa fa-user-plus fa-lg"></i>&nbsp;
                                                            <span id="payment-button-amount">Modifier</span>
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

