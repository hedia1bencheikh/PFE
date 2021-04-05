



<script type='text/javascript'>
  var map, drawingManager, outputPanel;
  function GetMap() {
   outputPanel = document.getElementById('pos');
outputPanel2 = document.getElementById('limite');

map = new Microsoft.Maps.Map('#myMap',{ center: new Microsoft.Maps.Location(36.8189700, 10.165790)});


//Load the DrawingTools module
Microsoft.Maps.loadModule('Microsoft.Maps.DrawingTools', function () {
   //Create an instance of the DrawingTools class and bind it to the map.
   var tools = new Microsoft.Maps.DrawingTools(map);
   //Show the drawing toolbar and enable editting on the map.
   tools.showDrawingManager(function (manager) {
       //Store a reference to the drawing manager as it will be useful later.
       drawingManager = manager;
      
       Microsoft.Maps.Events.addHandler(drawingManager, 'drawingChanging', measureShape);
       Microsoft.Maps.Events.addHandler(drawingManager, 'drawingStarted', measureShape);
   })
});
}
console.log($_GET['quartier/update']);

function measureShape(shape) {
if (shape instanceof Microsoft.Maps.Pushpin) {
 html="coords : ";
 html=html+"<input type='number' name='pinlat' readonly value='"+shape.getLocation().latitude+"'> / ";
html=html+"<input type='number' name='pinlon' readonly value='"+shape.getLocation().longitude+"'>";
   outputPanel.innerHTML = 'Shape: Pushpin<br/>' +html;
}
if (shape instanceof Microsoft.Maps.Polygon && shape.getLocations().length > 3) {

   
   var locs = shape.getLocations();
var html="<br/> coords : <br/>";
//Loop through and display every coordinate in the drawing area
var j=1;
for (i = locs.length - 1; i >= 0; i--) {

html=html+"<input type='number' name='polylat"+j+"' readonly value='"+locs[i].latitude+"'> / ";
html=html+"<input type='number' name='polylon"+j+"' readonly value='"+locs[i].longitude+"'><br/>";
j++;
}
html=html+"nombre des points :<input type='number' name='coordsnum' readonly value='"+j+"'><br/>";
   outputPanel2.innerHTML = html;
}

}



</script>



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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Modifier quartier</h1>
          </div><!-- /.col -->
        <!-- /.col -->
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
                    <form method="post" action="{{route('gouvernorat.save')}}" enctype="multipart/form-data">
                      @csrf

                  
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">id</label>
                    <input type="text" name="" value="{{$data['rang_projet']}}" required >
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">image1</label>
                    <br>
                    <img src="{{$data['image1']}}" class="rounded float-start" alt="...">
                    <br>
                    <input type="file" name="avatar" style="color:rgb(138, 164, 190); border-color:rgb(10, 14, 4); " size="100" >

                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">image2</label>
                    <br>
                    <img src="{{$data['image3']}}" class="rounded float-start" alt="...">
                    <br>
                    <input type="file" name="avatar" style="color:rgb(138, 164, 190); border-color:rgb(10, 14, 4); " size="100" >

                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">image3</label>
                    <br>
                    <img src="{{$data['image2']}}" class="rounded float-start" alt="...">
                    <br>
                    <input type="file" name="avatar" style="color:rgb(138, 164, 190); border-color:rgb(10, 14, 4); " size="100" >

                  </div>
<br>


  <div id="img" ></div>
        <label class="col-md-4 control-label">Position</label> 
        <div id="myMap" style="position:relative;width:600px;height:400px;"></div>
        <td><div id="map"></div>
       
                   <div id="limite"></div>
                   <div id="pos"></div>
                  
        </td>
  </div>
  <div class="col-md-4">
 
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
  </div>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script type='text/javascript' src='http://www.bing.com/api/maps/mapcontrol?callback=GetMap&key=AlHxWcdPzDYgl3G--u35VRhpYXffBSNAMnNcPjogHOjeA6GYRvS-SfHiQi0-bnCs' async defer></script>
  <!-- /.control-sidebar -->
@endsection









