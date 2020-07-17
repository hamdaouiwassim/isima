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
                    
                   
                
                
                            
                    <div class="table-responsive table-data">
                        <table class="table">
                                           <thead>
                                               <th>Utilisateur</th>
                                               <th>Discussion</th>
                                               
                                           </thead>
                                           <tbody>
                                               @foreach ($users as $user)
                                               <tr>
                                                            <td>{{ $user->name }}</td>
                                               <td><a href="{{ route('discussionform',['id'=>$user->id]) }}" class="btn btn-primary">Ouvrir le discussion</a></td>
                                                           
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

