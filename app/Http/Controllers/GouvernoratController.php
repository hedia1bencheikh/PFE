<?php

namespace App\Http\Controllers;
use App\Models\Gouvernorat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Projet;


class GouvernoratController extends Controller
{
    
    public function index()
    {
        $gouvernaux=Gouvernorat::paginate(5);
      
        return view('backend/gouvernorat/show',compact('gouvernaux'));
        
   
    }
    public function create()
    {
      
      
        return view('backend/gouvernorat/create');
        


    }
    public function search(Request $req)
    {
$search=$req->get('search');
$gouvernaux=DB::table('gouvernorat')->where('nom_gouvernorat_fr','like','%'.$search.'%')->paginate(5);
return view('backend/gouvernorat/show',compact('gouvernaux'));

    }
   
 function save(Request $req)
    {
    print_r($req->input());
        $gouvernorat = new Gouvernorat;
        $gouvernorat->nom_gouvernorat_fr = $req->nom_gouvernorat_fr;
        $gouvernorat->nom_gouvernorat_ar = $req->nom_gouvernorat_ar;
        echo $gouvernorat->save();

    }
    function showdata($id)
    {
        $data=Gouvernorat::find($id);
        return view('backend/gouvernorat/update',['data'=>$data]);

    }

    function update(Request $req)
    {
        print_r($req->input());


       
        $data=Gouvernorat::find($req->id);
        $data->nom_gouvernorat_fr=$req->nom_gouvernorat_fr;
        $data->nom_gouvernorat_ar=$req->nom_gouvernorat_ar;
       echo $data->save();



    }
    function delete($id)
    {
        $data = DB::table('gouvernorat')->where('gouvernorat.id','=',$id);
       
        $data->delete();
    
        
        
    }
}
