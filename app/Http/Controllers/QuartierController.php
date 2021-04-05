<?php

namespace App\Http\Controllers;
use App\Models\Quartier;

use App\Models\Limite_quartier;

use App\Models\Gouvernorat;
use App\Models\Projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuartierController extends Controller
{
    public function index()
 {   
     
    $gouvernaux=Gouvernorat::all();
    $projet=Projet::all();
    $quartier=Quartier::all();
   
    $limite_q=Limite_quartier::all();
    
     return view('backend/google_map/affiche',compact('quartier','limite_q','gouvernaux','projet'));
     

 }
 public function google_projet($id)
 { $gouvernaux=Gouvernorat::all();
     $projet=Projet::all();
     $quartier=Quartier::all();
    
     $limite_q=Limite_quartier::all();
     return view('backend/google_map/affiche',compact('quartier','limite_q','gouvernaux','projet','id'));

 }
 public function tous1($id)
 {
  $tous1=DB::table('quartier')->join('projet','projet.id','quartier.id_projet')->where('id_projet',$id)->get();
  return response()->json($tous1);
 }
 public function index_1(Request $req)
 {    
    
     
    $data=DB::table('quartier')->join('limite_quartier','limite_quartier.id_quartier','=','quartier.id')->join('projet','projet.id','=','quartier.id_projet')->join('gouvernorat','gouvernorat.id','=','projet.id_gouvernorat')->select('quartier.*','projet.rang_projet','projet.nombre_quartier','projet.nombre_maison','projet.superficie_quartier','projet.image1','projet.image2','projet.image3','limite_quartier.*')->where('gouvernorat.id','=',$req->id)->get();
    return response()->json($data);
  echo $data;
   
    
    

 }
 function showdata($id)
 {
     $data=Projet::find($id);
     return view('backend/google_map/update',['data'=>$data]);

 }
 function save(Request $req)
 {
    
    print_r($req->input());
    //$limite_q = new Limite_quartier;
    //$quartier = new Quartier;
    //$projet = new Projet;
    //$req-coordsnum=$req-coordsnum-1
//$quartier->nom=$req->nom_quartier;
//$quartier->lat=$req->pinlat;
//$quartier->lng=$req->pinlon;
echo $quartier->save;
$id_quartier=DB::table('quartier')->join('limite_quartier','limite_quartier.id_quartier','quartier.id')->select('quartier.id')->where('quartier.nom_quartier','=',$req->nom_quartier);
 for($x=1;$x<$req-coordsnum.length;$x++)
    {
        
$limite_q->lat_1=$req->polylat.$x;
$limite_q->id_quartier=$id_quartier;


  }
  $projet1=DB::table('projet')->select('id_porjet')->where('id_projet',$req->projet);
for($x=1;$x<$image.length;$x++)
{
    $projet->image.$x=$image.$x;
   

}
for($x=1;$x<$image.length;$x++)
{
    $projet->image.$x=$image.$x;
   

}



 }
 function tous()
 { 
    $data=DB::table('quartier')->join('limite_quartier','limite_quartier.id_quartier','=','quartier.id')->join('projet','projet.id','=','quartier.id_projet')->join('gouvernorat','gouvernorat.id','=','projet.id_gouvernorat')->select('quartier.*','projet.rang_projet','projet.nombre_quartier','projet.nombre_maison','projet.superficie_quartier','projet.image1','projet.image2','projet.image3','limite_quartier.*')->get();
    return response()->json($data);
  echo $data;
   

 }
 function update(Request $req)
 {
     
 }
 function delete($id)
 {
     $data = Quartier::find($id);
     $data->delete();
     
 }
 public function create()
 {
    $gouvernaux=Gouvernorat::all();
    $projet=Projet::all();
     return view('backend/google_map/create',compact('gouvernaux','projet'));
     


 }
 public function essai4()
 {
    $gouvernaux=Gouvernorat::all();
    $projet=Projet::all();
    $quartier=Quartier::all();
   
    $limite_q=Limite_quartier::all();
     return view('backend/google_map/essai4',compact('quartier','limite_q','gouvernaux','projet'));
     


 }
 public function google()
 {
    $gouvernaux=Gouvernorat::all();
    $projet=Projet::all();
    $quartier=Quartier::all();
   
    $limite_q=Limite_quartier::all();

     return view('backend/google_map/affiche_google',compact('quartier','limite_q','gouvernaux','projet'));
     


 }

}
