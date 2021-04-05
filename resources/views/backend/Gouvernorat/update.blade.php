



@extends('layouts.composants.main')

@section('content')
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
   
  </ul>

 

        
    
  
</nav>
 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Modifier une gouvernorat</h1>
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
                <div class="mb-3">
                    <form method="post" action="{{route('gouvernorat.update')}}">
                      @csrf
                    <label for="exampleFormControlInput1" >id</label>
                    <input type="text" name="id" value="{{$data['id']}}" readonly  >
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">nom_gouvernorat_fr</label>
                    <input type="text" name="nom_gouvernorat_fr" value="{{$data['nom_gouvernorat_fr']}}"  >
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">nom_gouvernorat_ar</label>
                    <input type="text" name="nom_gouvernorat_ar" value="{{$data['nom_gouvernorat_ar']}}" >
                  </div>


                  <button type="button" class="btn btn-info">Confirmer</button>
                  <button type="reset" class="btn btn-default" >Annuler</button>
                                </form>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
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
@endsection









