@extends('layouts.enseignant')

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
                    <i class="zmdi zmdi-account-calendar"></i>Les stages</h3>
                
                <div class="table-responsive table-data">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>
                                    <label class="au-checkbox">
                                        <input type="checkbox">
                                        <span class="au-checkmark"></span>
                                    </label>
                                </td>
                                <td>Nom</td>
                                <td>cahier de charge</td>
                                
                                <td>Action</td>
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stages as $stage )
                                
                            
                            <tr>
                                <td>
                                    <label class="au-checkbox">
                                        <input type="checkbox">
                                        <span class="au-checkmark"></span>
                                    </label>
                                </td>
                                <td>
                                        <h6>{{ $stage->titre }}</h6>
                                           
                                </td>
                                <td>

                                    <a href="{{ asset('stages')}}/{{$stage->document }}" class="btn btn-primary">Voir le document</a>
                                        
                                   
                                </td>
                                
                                <td>
                                <a href="{{ route('stageNotif',['id'=> $stage->id ]) }}" class="btn btn-success">J'aime</a>
                                
                                </td>
                             
                               
                            </tr>
                         
                            @endforeach
                         
                        </tbody>
                    </table>
                </div>
                <div class="user-data__footer">
                    <button class="au-btn au-btn-load">load more</button>
                </div>
            </div>
           </section>
     

           

            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
          

    </div>
@endsection

