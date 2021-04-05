



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
 
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-4">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Modifier un projet</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
           
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
         
          </div>
         
            <div class="card card-primary card-outline">
              
              <div class="card-body">
                <div class="mb-3">
    <form method="post" action="{{route('projet.update')}}"enctype="multipart/form-data" style="margin-left: auto;
    margin-right: auto; width : 1000px;"  class="needs-validation">
      @csrf
      
      <div class="form-group">
        <label class="col-md-4 control-label">Rang projet</label>  
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-road"></i></span>
        <input name="q" type="number" value="{{$data['rang_projet']}}" placeholder="nombre quartier" class="form-control">
        </div>
        </div>
        </div>
    
                      
                      <!-- Select Basic -->
                      <label class="col-md-4 control-label">Gouvernorat</label> 
                      <div class="form-group"> 
                    
                        <select name="gouvernorat" id="gouvernorat" class="dynamic" class="form-control selectpicker" data-dependent="gouvernorat" >
                          <div class="col-md-4 inputGroupContainer">
                          <option value="" class="form-control"  >Gouvernorat</option>
                    @foreach($gouvernaux as $gouvernorat)
                      <option value='{{$gouvernorat->id}}' class="form-control" >{{$gouvernorat->nom_gouvernorat_fr}}</option>
                      @endforeach
                          </div>
                      </select>
                      </div>
                      <label class="col-md-4 control-label">Commune</label> 
                      <div class="form-group" >
                      
                        <select style="width: 200px" class="dynamic_1" id="dynamic_1" name="commune">
                      
                          <option value="0" disabled="true" selected="true" class="dynamic_1" id="dynamic_1">Commune</option>
                        </select>
                      </div>
                      <label class="col-md-4 control-label">Municiplate</label> 
                      <div class="form-group" >
                       
                        <select style="width: 200px" class="dynamic_2" id="dynamic_2" name="municiplate">
                      
                          <option value="0" disabled="true" selected="true" class="dynamic_2" id="dynamic_2">Muciplaate</option>
                        </select>
                      </div>
                    {{csrf_field()}}
                    <div class="form-group">
                      <label class="col-md-4 control-label">nombre quartier</label>  
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-road"></i></span>
                      <input name="q" type="number" value="{{$data['nombre_quartier']}}" placeholder="nombre quartier" class="form-control">
                      </div>
                      </div>
                      </div>
                      
                      <div class="form-group">
                      <label class="col-md-4 control-label">nombre maison</label>  
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                      <input name="m" type="number" value="{{$data['nombre_maison']}}"  placeholder="nombre maison" class="form-control" >
                      </div>
                      </div>
                      </div>
                      
                      <div class="form-group">
                      <label class="col-md-4 control-label">nombre habitant</label>  
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input name="h" type="number" value="{{$data['nombre_habitant']}}"  placeholder="nombre habitant" class="form-control" >
                      </div>
                      </div>
                      </div>
                      
                      <div class="form-group">
                      <label class="col-md-4 control-label">assainissement cout</label>  
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                      <input  name="c" type="number" value="{{$data['assainissement_cout']}}"  placeholder="assainissement cout" class="form-control" >
                      </div>
                      </div>
                      </div>
                      
                      <div class="form-group">
                      <label class="col-md-4 control-label">superficie quartier</label>  
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-road"></i></span>
                      <input  name="superficie_quartier" value="{{$data['superficie_quartier']}}"  type="number" placeholder="superficie quartier" class="form-control" >
                      </div>
                      </div>
                      </div>
                      <div class="form-group">
                      <label class="col-md-4 control-label">rapport superificie</label>  
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-sort"></i></span>
                      <input name="rapport_superificie" value="{{$data['rapport_superificie']}}"  type="number" placeholder="rapport superificie" class="form-control" >
                      </div>
                      </div>
                      </div>
                      <div class="form-group">
                      <label class="col-md-4 control-label">taux habitation</label>  
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-stats"></i></span>
                      <input name="taux_habitation" value="{{$data['taux_habitation']}}"  type="number" placeholder="taux habitation" class="form-control" >
                      </div>
                      </div>
                      </div>
                      <div class="form-group">
                      <label class="col-md-4 control-label">superficie quartier couvert</label>  
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-fullscreen"></i></span>
                      <input name="superficie_quartier_couvert"  value="{{$data['superficie_quartier_couvert']}}"  type="number" placeholder="superficie quartier couvert" class="form-control" >
                      </div>
                      </div>
                      </div>
                      <div class="form-group">
                      <label class="col-md-4 control-label">taux habitation</label>  
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-stats"></i></span>
                      <input name="taux_habitation" type="number" value="{{$data['taux_habitation']}}"  placeholder="taux habitation" class="form-control" >
                      </div>
                      </div>
                      </div>
                      <div class="form-group">
                      <label class="col-md-4 control-label">rapport depense maison</label>  
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                      <input name="rapport_depense_maison" type="number" value="{{$data['rapport_depense_maison']}}"  placeholder="rapport depense maison" class="form-control" >
                      </div>
                      </div>
                      </div>
                      <div class="form-group">
                      <label class="col-md-4 control-label">composante projet</label>
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                            <textarea class="form-control" name="comment" value="{{$data['composante_projet']}}" style="margin:0" placeholder="composante projet"></textarea>
                      </div>
                      </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-4 control-label">assainissement qte</label>  
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-tint"></i></span>
                        <input name="assainissement_qte" type="number" value="{{$data['assainissement_qte']}}" placeholder="assainissement qte" class="form-control" >
                        </div>
                        </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label">assainissement taux</label>  
                          <div class="col-md-4 inputGroupContainer">
                          <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
                          <input name="assainissement_taux" type="number" value="{{$data['assainissement_taux']}}" placeholder="assainissement taux" class="form-control" >
                          </div>
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="col-md-4 control-label">assainissement_qte</label>  
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
                        <input name="assainissement_qte" type="number" value="{{$data['assainissement_qte']}}"  placeholder="assainissement_qte" class="form-control" >
                        </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label class="col-md-4 control-label">eclairage public qte</label>  
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-wrench"></i></span>
                        <input name="eclairage_public_qte" type="number" value="{{$data['eclairage_public_qte']}}"  placeholder="eclairage public qte" class="form-control" >
                        </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label class="col-md-4 control-label">eclairage public cout</label>  
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                        <input name="eclairage_public_cout" type="number" value="{{$data['eclairage_public_cout']}}"  placeholder="eclairage public cout" class="form-control" >
                        </div>
                        </div>
                        </div>
                        
                        <div class="form-group">
                        <label class="col-md-4 control-label">eclairage public taux</label>  
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-certificate"></i></span>
                        <input name="eclairage_public_taux" type="number" value="{{$data['eclairage_public_taux']}}"  placeholder="eclairage public taux" class="form-control" >
                        </div>
                        </div>
                        </div>
                        
                        <div class="form-group">
                        <label class="col-md-4 control-label">voirie qte</label>  
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-road"></i></span>
                        <input name="voirie_qte" type="number" value="{{$data['voirie_qte']}}" placeholder="voirie qte" class="form-control" >
                        </div>
                        </div>
                        </div>
                        
                        <div class="form-group">
                        <label class="col-md-4 control-label">voirie cout</label>  
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                        <input name="voirie_cout" type="number" value="{{$data['voirie_cout']}}"  placeholder="voirie cout" class="form-control" >
                        </div>
                        </div>
                        </div>
                        
                        <div class="form-group">
                        <label class="col-md-4 control-label">voirie taux</label>  
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-stats"></i></span>
                        <input name="voirie_taux" type="number" value="{{$data['voirie_taux']}}" placeholder="voirie taux" class="form-control" >
                        </div>
                        </div>
                        </div>
                        
                        <div class="form-group">
                        <label class="col-md-4 control-label">eau potable qte</label>  
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="	glyphicon glyphicon-tint"></i></span>
                        <input name="eau_potable_qte" type="number" value="{{$data['eau_potable_qte']}}"  placeholder="eau potable qte" class="form-control" >
                        </div>
                        </div>
                        </div>
                        
                        <div class="form-group">
                        <label class="col-md-4 control-label">eau potable cout</label>  
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                        <input name="eau_potable_cout" type="number" value="{{$data['eau_potable_cout']}}"  placeholder="eau potable cout" class="form-control" >
                        </div>
                        </div>
                        </div>
                        
                        <div class="form-group">
                        <label class="col-md-4 control-label">eau potable taux</label>  
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-stats"></i></span>
                        <input name="eau_potable_taux" type="number" value="{{$data['eau_potable_taux']}}"  placeholder="eau potable taux" class="form-control" >
                        </div>
                        </div>
                        </div>
                        
                        <div class="form-group">
                        <label class="col-md-4 control-label">drainage qte</label>  
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-adjust"></i></span>
                        <input name="drainage_qte" type="number" value="{{$data['drainage_qte']}}"  placeholder="drainage qte" class="form-control" >
                        </div>
                        </div>
                        </div>
                        
                        <div class="form-group">
                        <label class="col-md-4 control-label">drainage cout</label>  
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                        <input name="drainage_cout" type="number"  value="{{$data['drainage_cout']}}"  placeholder="drainage cout" class="form-control" >
                        </div>
                        </div>
                        </div>
                        
                        <div class="form-group">
                        <label class="col-md-4 control-label">drainage taux</label>  
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-stats"></i></span>
                        <input name="drainage_taux" type="number"  value="{{$data['drainage_taux']}}"  placeholder="drainage taux" class="form-control" >
                        </div>
                        </div>
                        </div>
                        
                        <div class="form-group">
                        <label class="col-md-4 control-label">amel habitat qte</label>  
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                        <input name="amel_habitat_qte" type="number" value="{{$data['amel_habitat_qte']}}"  placeholder="amel habitat qte" class="form-control" >
                        </div>
                        </div>
                        </div>
                        
                        <div class="form-group">
                        <label class="col-md-4 control-label">amel habitat cout</label>  
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                        <input name="amel_habitat_cout" type="number" value="{{$data['amel_habitat_cout']}}"  placeholder="amel habitat cout" class="form-control" >
                        </div>
                        </div>
                        </div>
                        
                        <div class="form-group">
                        <label class="col-md-4 control-label">socio collectif cout</label>  
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                        <input name="socio_collectif_cout" type="number" value="{{$data['socio_collectif_cout']}}"  placeholder="socio collectif cout" class="form-control" >
                        </div>
                        </div>
                        </div>
                        
                        <div class="form-group">
                        <label class="col-md-4 control-label">industriel cout</label>  
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                        <input name="industriel_cout" type="number" value="{{$data['industriel_cout']}}"  placeholder="industriel cout" class="form-control" >
                        </div>
                        </div>
                        </div>
                        
                        <div class="form-group">
                        <label class="col-md-4 control-label">cout total</label>  
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                        <input name="cout_total" type="number" value="{{$data['cout_total']}}"  placeholder="cout total" class="form-control" >
                        </div>
                        </div>
                        </div>
                        <!-- Text input-->
                        
                        <div class="form-group">
                        <label class="col-md-4 control-label">type</label>  
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="	glyphicon glyphicon-folder-close"></i></span>
                        <input name="type" placeholder="type" value="{{$data['type']}}"  class="form-control"  type="text" >
                        </div>
                        </div>
                        </div>
                      
                     <br>
                     <div class="form-group">
                      <label class="col-md-4 control-label"></label>
                      <div class="col-md-4">
                      <button type="submit"  >Send </button>
                      </div>
                      </div>
                </form>
  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

                      
                       
  <!-- /.content-wrapper -->

  

  {{csrf_field()}}
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
    
    $(document).on('change','.dynamic',function(){
     // console.log("hmm its change");
      var cat_id=$(this).val();
   // console.log(cat_id);
    var op=" ";
    var div=$(this).parent();
    $.ajax({
				type:'get',
				url:"{{ route('projet.gouvernorat') }}",
				data:{'id':cat_id},
        
				success:function(data){
					//console.log('success');

					console.log(data);

					//console.log(data.length);
					op+='<option value="0" selected disabled>choisir une commune</option>';
					for(var i=0;i<data.length;i++){
					op+='<option value="'+data[i].id+'">'+data[i].nom_commune_fr+'</option>';
				   }

				   $('#dynamic_1').html(op);				},
				error:function(){

				}
			});

      
      });
      $(document).on('change','.dynamic_1',function(){
     // console.log("hmm its change");
      var cat_id1=$(this).val();
    console.log(cat_id1);
    var op=" ";
    var div_1=$(this).parent();
    $.ajax({
				type:'get',
				url:"{{ route('projet.commune') }}",
				data:{'id':cat_id1},
        
				success:function(data){
					//console.log('success');

					console.log(data);
          	//console.log(data.length);
					op+='<option value="0" selected disabled>choisir une municiplate</option>';
					for(var i=0;i<data.length;i++){
					op+='<option value="'+data[i].id+'">'+data[i].nom_municipalite_fr+'</option>';
				   }

				   $('#dynamic_2').html(op);				},
				error:function(){

				}
        
      });
    })
      });
    </script>
  
  <!-- /.control-sidebar -->
  </div>
@endsection











