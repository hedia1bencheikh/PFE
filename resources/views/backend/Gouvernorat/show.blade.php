@extends('layouts.composants.main')

@section('content')
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
   
  </ul>

  <!-- SEARCH FORM -->
  <form class="form-inline ml-3" action="/gouvernorat/search" method="get">
    <div class="input-group input-group-sm">
      <input class="form-control form-control-navbar" type="search" name="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-navbar" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </form>

        
    
  
</nav>
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Liste des gouvernorats</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a class="btn btn-success" href="{{route('gouvernorat.create')}}"><span class="fas fa-plus-square"></span></a></li>

            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
         
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-12">
          

            <div class="card card-primary card-outline">
              
              <div class="card-body">
                
                <div class="container">
                  <div class="row">
                    <div class="col-12">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nom gouvernorat en Français</th>
                            <th scope="col">Nom gouvernorat en Arabe</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($gouvernaux as $gouvernorat)
                            <div class="salut">
                              <input type="hidden" class="id" value="{{$gouvernorat->id}}">
                            <tr>
                             
                              <td>{{$gouvernorat->id}}</td>
                              <td>{{$gouvernorat->nom_gouvernorat_fr}}</td>
                              <td>{{$gouvernorat->nom_gouvernorat_ar}}</td>

                              {{ csrf_field() }} 
                              {{ method_field('DELETE') }}

                              <td>
                                <a class="btn btn-success" href="{{route('gouvernorat.edit',['id'=>$gouvernorat->id])}}" role="button"><i class="fas fa-edit"></i></a>
                               
                                <a class="btn btn-danger" href="#delete" role="button" onclick="gouvernoratdelete({{$gouvernorat->id}})"  data-toggle="modal" data-target="#delete"><i class="far fa-trash-alt"></i></a>
                              </td>
                            </tr>
                            </div>
                            @endforeach
                       
                        </tbody>
                      </table>
                      
                      
              <span>
                
                <div class="d-flex justify-content-center">
                                        {!! $gouvernaux->links() !!}
                                    </div>
             </span>
             <style>
                 .w-5
                 {
                     display: 
                     none;
                 }
             </style>
                    </div>
                  </div>
                </div>
               

                
          
              </div>
            </div>
          </div>
        
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  
  <script>

          function gouvernoratdelete(id)
    
 
  {
    if (confirm("Voulez-Vous vraiment supprimer ce gouvernorat ?"))
    {
      
      $.ajax(
      {
        url:'gouvernorat/'+id,
        type:"DELETE",
        dataType:"json",
        data:{
          _token:$("input[name=_token]").val()



        },
        success:function(response)
        {
          $("#sid"+id).remove();
        }
        


      });
    }
    else
    {
      alert("hello");
    }

  }
    </script>
@endsection