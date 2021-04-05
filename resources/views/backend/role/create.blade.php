@extends('layouts.composants.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Ajouter rôle</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
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
               
                
                <form action="{{route('roles.store')}}"   method="post">
                    @csrf
                    <div>
                        <label for="role">ajouter le nom de role  :</label>
                        <input type="text" id="role" name="role">
                    </div>
                    <div>
                        choisir les fonctionnalités : <br>
                        @foreach ($permissions as $permission)
                             
                              <input type="checkbox" id="{{$permission['id']}}" name="permission[]" value="{{$permission['id']}}">
                              <label for="{{$permission['id']}}">{{$permission['name']}}</label>
                              <br>
                        @endforeach
                         <span>
      
                 {{ $permissions->links()}}
              </span>
              <br>
              <style>
                  .w-5
                  {
                      display: 
                      none;
                  }
              </style>
                       
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                   
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