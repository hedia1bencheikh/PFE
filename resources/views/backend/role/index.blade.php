@extends('layouts.composants.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Liste des rôles</h1>
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
                      
                      @if (Session::has('success'))
                      <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                       </div>
                      @endif
                    

                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">id</th>
                            <th scope="col">name</th>
                            <th scope="col">action 
                               <div class=" float-sm-right">
                                <a class="btn btn-success" href="{{route('roles.create')}}"><span class="fas fa-plus-square"></span></a>
                               </div>
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                            <tr>
                             
                              <td>{{$role->id}}</td>
                              <td>{{$role->name}}</td>
                              <td> 
                                <a class="btn btn-primary" href="{{route('roles.show',['id'=>$role->id])}}" role="button"><i class="far fa-eye"></i></a>
                                <a class="btn btn-danger" href="#delete"  role="button"  data-toggle="modal" data-target="#delete"><i class="far fa-trash-alt"></i></a>
                              </td>
                            </tr>
                            @endforeach
                       
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                  

                
          
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

  
  <!-- delete modal -->
  <div class="modal" tabindex="-1" role="dialog" id="delete">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Supprimer rôle</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
       
            <form action=""   method="post">
                @csrf
                @method('delete')
              
               <div class="modal-body">
                   <input type="hidden" name="delete" value="delete" id="id" name="id">
                <p>Voulez vous-vraiment supprimer ce rôle.</p>
               </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Ok</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                </div>
            </form>

       </div>
          
     
    </div>
  </div>
  <script>
       $('#delete').on('show.bs.modal',function (event){
           var button =$(event.relatedTarget)
           var id =button.data('catid')
           var modal = $(this)

           modal.find('.modal-body #id').val(id);
       })
   
  </script>
    <!-- /.delete modal -->
@endsection