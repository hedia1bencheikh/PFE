<?php

namespace App\Http\Controllers;
use App\Models\Projet;
use Illuminate\Http\Request;
use App\Models\Gouvernorat;
use App\Models\Commune;
use App\Models\Municipalite;
use Illuminate\Support\Facades\DB;
class ProjetController extends Controller
{
    public function index()
    {
        $projets=Projet::paginate(5);
      
        return view('backend/projet/show',compact('projets'));
        
   
    }
   
    public function create()
    {
        $gouvernaux=Gouvernorat::all();

        return view('backend/projet/create',compact('gouvernaux'));
        

    }
    public function commune($id,$id1)
    {
        $projet=DB::table('projets')
    ->where('id_gouvernorat',$id)->where('id_commune',$id1)->get();
  
        return view('backend/projet/show_projet_commune',compact('projet'));
        

    }
    public function test($id)
    {

$projet=DB::table('projets')->join('gouvernorats','gouvernorats.id','=','projets.id_gouvernorat')->select('projets.*')->where('projets.id_gouvernorat',$id)->get();

       return view('backend/projet/show_projet',compact('projet'));  
echo $projet;

    }
    public function tunisie()
    {
        

        return view('backend/projet/carte-tunisie');  


    }
    public function test2()
    {
        

        return view('backend/projet/essai2');  


    }
    public function projet_map(Request $req)
    {    
       
        
     //  $data=DB::table('quartier')->join('projet','projet.id','quartier.id_projet')->select('quartier.*')->where('projet.id','=',$req->id)->get();
       //return response()->json($data);
     
        
        
    $data=DB::table('quartiers')->join('limite_quartier','limite_quartier.id_quartier','=','quartiers.id')->join('projets','projets.id','=','quartiers.id_projet')->join('gouvernorats','gouvernorats.id','=','projets.id_gouvernorat')->select('quartiers.*','projets.rang_projet','projets.nombre_quartier','projets.nombre_maison','projets.superficie_quartier','projets.image1','projets.image2','projets.image3','limite_quartier.*')->where('projets.id','=',$req->id)->get();
    return response()->json($data);
  echo $data;
       
       
   
    }
    public function search(Request $req)
    {
$search=$req->get('search');
$projets=DB::table('projets')->where('id','like','%'.$search.'%')->paginate(5);
return view('backend/projet/show',compact('projets'));

    }
   
 function save(Request $req)
    {
    print_r($req->input());
        $projet = new Projet;
        $projet->rang_projet=$req->rang;
        $projet->id_gouvernorat=$req->gouvernorat;
        $projet->id_commune=$req->commune;
        $projet->id_municipalite=$req->municiplate;
        $projet->nombre_quartier=$req->q;
        $projet->nombre_maison=$req->m;
        $projet->nombre_habitant=$req->h;
        $projet->superficie_quartier=$req->superficie_quartier;
        $projet->superficie_quartier_couvert=$req->superficie_quartier_couvert;
        $projet->rapport_superificie=$req->rapport_superificie;
        $projet->taux_habitation=$req->taux_habitation;
        $projet->rapport_depense_maison=$req->rapport_depense_maison;
        $projet->composante_projet=$req->comment;
        $projet->assainissement_qte=$req->assainissement_qte;
        $projet->assainissement_cout=$req->assainissement_cout;
        $projet->assainissement_taux=$req->assainissement_taux;
        $projet->eclairage_public_qte=$req->eclairage_public_qte;
        $projet->eclairage_public_cout=$req->eclairage_public_cout;
        $projet->eclairage_public_taux=$req->eclairage_public_taux;
        $projet->voirie_qte=$req->voirie_qte;
        $projet->voirie_cout=$req->voirie_cout;
        $projet->voirie_taux=$req->voirie_taux;
        $projet->eau_potable_qte=$req->eau_potable_qte;
        $projet->eau_potable_cout=$req->eau_potable_cout;
        $projet->eau_potable_taux=$req->eau_potable_taux;
        $projet->drainage_qte=$req->drainage_qte;
        $projet->drainage_cout=$req->drainage_cout;
        $projet->drainage_taux=$req->drainage_taux;
        $projet->amel_habitat_qte=$req->amel_habitat_qte;
        $projet->amel_habitat_cout=$req->amel_habitat_cout;
        $projet->socio_collectif_cout=$req->socio_collectif_cout;
        $projet->industriel_cout=$req->industriel_cout;
        $projet->cout_total=$req->cout_total;
        $projet->type=$req->type;
        $projet->lat=0;
        $projet->lng=0;
        $projet->image1=" ";
        $projet->image2=" ";
        $projet->image3="";
        $projet->image4=" ";
        echo $projet->save();
        

        
    }
    function showdata($id)
    {
        $data=Projet::find($id);
        $gouvernaux=Gouvernorat::all();
        return view('backend/projet/update',['data'=>$data],compact('gouvernaux'));

    }

    function update(Request $req)
    {
        print_r($req->input());
        $projet = new Projet;
        $projet->rang_projet=$req->rang;
        $projet->id_gouvernorat=$req->gouvernorat;
        $projet->id_commune=$req->commune;
        $projet->id_municipalite=$req->municiplate;
        $projet->nombre_quartier=$req->q;
        $projet->nombre_maison=$req->m;
        $projet->nombre_habitant=$req->h;
        $projet->superficie_quartier=$req->superficie_quartier;
        $projet->superficie_quartier_couvert=$req->superficie_quartier_couvert;
        $projet->rapport_superificie=$req->rapport_superificie;
        $projet->taux_habitation=$req->taux_habitation;
        $projet->rapport_depense_maison=$req->rapport_depense_maison;
        $projet->composante_projet=$req->comment;
        $projet->assainissement_qte=$req->assainissement_qte;
        $projet->assainissement_cout=$req->assainissement_cout;
        $projet->assainissement_taux=$req->assainissement_taux;
        $projet->eclairage_public_qte=$req->eclairage_public_qte;
        $projet->eclairage_public_cout=$req->eclairage_public_cout;
        $projet->eclairage_public_taux=$req->eclairage_public_taux;
        $projet->voirie_qte=$req->voirie_qte;
        $projet->voirie_cout=$req->voirie_cout;
        $projet->voirie_taux=$req->voirie_taux;
        $projet->eau_potable_qte=$req->eau_potable_qte;
        $projet->eau_potable_cout=$req->eau_potable_cout;
        $projet->eau_potable_taux=$req->eau_potable_taux;
        $projet->drainage_qte=$req->drainage_qte;
        $projet->drainage_cout=$req->drainage_cout;
        $projet->drainage_taux=$req->drainage_taux;
        $projet->amel_habitat_qte=$req->amel_habitat_qte;
        $projet->amel_habitat_cout=$req->amel_habitat_cout;
        $projet->socio_collectif_cout=$req->socio_collectif_cout;
        $projet->industriel_cout=$req->industriel_cout;
        $projet->cout_total=$req->cout_total;
        $projet->type=$req->type;
        $projet->lat=0;
        $projet->lng=0;
        $projet->image1=" ";
        $projet->image2=" ";
        $projet->image3="";
        $projet->image4=" ";
        echo $projet->save();
        




    }
    function delete($id)
    {
        $data = Projet::find($id);
        $data->delete();
        
    }
    public function findProductName(Request $request){
      //$request->id here is the id of our chosen option id
      $data=Commune::select('nom_commune_fr','id')->where('id_gouvernorat',$request->id)->get();

      return response()->json($data);//then sent this data to ajax success

}

public function findCommune(Request $request)
{
    $data=Municipalite::select('nom_municipalite_fr','id')->where('id_commune',$request->id)->get();
    
    return response()->json($data);
}
public function essai3()
{
   
    
    
    return view('backend/projet/essai3');


}
}