



@extends('layouts.composants.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Ajouter une commune</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
           
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
              
                    <form method="post" action="{{route('gouvernorat.save')}}" enctype="multipart/form-data">
                      @csrf

                    
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">id_gouvernorat </label>
                    <input type="text" name="id_gouvernorat "  >
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">nom_commune_fr	</label>
                    <input type="text" name="nom_commune_fr	">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">nom_commune_ar</label>
                    <input type="text" name="nom_commune_ar">
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









