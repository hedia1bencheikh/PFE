<?php

namespace App\Http\Controllers;
use App\Models\Commune;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CommuneController extends Controller
{
    public function index()
    {
        $communes=Commune::paginate(5);
      
        return view('backend/communes/show',compact('communes'));
        
   
    }
    public function create()
    {

        return view('backend/communes/create');
        


    }
    public function search(Request $req)
    {
$search=$req->get('search');
$communes=DB::table('commune')->where('nom_commune_fr','like','%'.$search.'%')->paginate(5);
return view('backend/communes/show',compact('communes'));

    }
    function save(Request $req)
    {
    print_r($req->input());
        $gouvernorat = new Commune;
        $commune->nom_commune_fr= $req->nom_commune_fr;
        $commune->nom_commune_ar= $req->nom_commune_ar;
        echo $commune->save();

    }
    function showdata($id)
    {
        $data=Commune::find($id);
        return view('backend/communes/update',['data'=>$data]);

    }

    function update(Request $req)
    {
        print_r($req->input());


       
        $data=Commune::find($req->id);
        $data->nom_commune_fr->$req->nom_commune_fr;
        $data->nom_commune_ar=$req->nom_commune_ar;
       echo $data->save();



    }
    function delete($id)
    {
        $data = Commune::find($id);
        $data->delete();
        
    }
  


  
}
