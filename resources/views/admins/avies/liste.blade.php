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
                                    <a href="{{ route('avieformexaman')}}" class="au-btn au-btn-icon au-btn--green">
                                        <i class="zmdi zmdi-plus"></i>Ajouter un avie d'examan</a>
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
                    <i class="zmdi zmdi-account-calendar"></i>Les avies</h3>
                    <hr >
                
                    <div class="table-responsive table-data">
                        <table class="table">
                           <thead>
                               <th>Type</th>
                               <th>Matiere</th>
                               <th>Date</th>
                               <th> Action </th>
                              
                           </thead>
                           <tbody>
                               @foreach ($avies as $avie)
                               <tr>
                               <td>{{ $avie->type }}</td>
                                                <td>{{ $avie->matiere->nom }}</td>
                                                <td>{{ $avie->date }}</td>
                              
                                
                                <td><a href="{{ route('avieEdit',['id'=>$avie->id])}}" class="btn btn-success">Modifier</a> <a class="btn btn-danger" href="{{ route('aviedestroy',['id'=>$avie->id])}}">Supprimer</a></td>
                            </tr>
                               @endforeach
                              
                           </tbody>
                       </table>
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

