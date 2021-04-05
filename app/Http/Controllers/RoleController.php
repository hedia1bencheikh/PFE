<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $roles=Role::all();
        return view('backend.role.index',compact('roles'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Permission::paginate(4);
        return view('backend.role.create',['permissions'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = Role::create(['name' => $request->input('role')]);
        $role->syncPermissions($request->input('permission'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function test()
    {
        //$permission = Permission::create(['name' => 'Afficher liste utilisateurs']);
       /*$permission = Permission::create(['name' => 'Ajouter un utilisateur']);
        $permission = Permission::create(['name' => 'Modifier un utilisateur']);
        $permission = Permission::create(['name' => 'Supprimer un utilisateur']);

         $permission = Permission::create(['name' => 'Afficher la liste des rôles']);
         $permission = Permission::create(['name' => 'Ajouter un rôle']);
         $permission = Permission::create(['name' => 'Modifier un rôle']);
         $permission = Permission::create(['name' => 'Supprimer un rôle']);

         $permission = Permission::create(['name' => 'Afficher la liste des projets']);
         $permission = Permission::create(['name' => 'Ajouter un projet']);
         $permission = Permission::create(['name' => 'Modifier un projet']);
         $permission = Permission::create(['name' => 'Supprimer un projet']);

         $permission = Permission::create(['name' => 'Afficher la liste des gouvernorats']);
         $permission = Permission::create(['name' => 'Ajouter un gouvernorat']);
         $permission = Permission::create(['name' => 'Modifier un gouvernorat']);
         $permission = Permission::create(['name' => 'Supprimer un gouvernorat']);

         $permission = Permission::create(['name' => 'Afficher la liste des communes']);
         $permission = Permission::create(['name' => 'Ajouter un commune']);
         $permission = Permission::create(['name' => 'Modifier un commune']);
         $permission = Permission::create(['name' => 'Supprimer un commune']);
      
         $permission = Permission::create(['name' => 'Afficher la liste des quartiers']);
         $permission = Permission::create(['name' => 'Ajouter un quartier']);
         $permission = Permission::create(['name' => 'Modifier un quartier']);
         $permission = Permission::create(['name' => 'Supprimer un quartier']);

         $permission = Permission::create(['name' => 'Afficher la liste des municipalites']);
         $permission = Permission::create(['name' => 'Ajouter un municipalite']);
         $permission = Permission::create(['name' => 'Modifier un municipalite']);
         $permission = Permission::create(['name' => 'Supprimer un municipalite']);

         $permission = Permission::create(['name' => 'Afficher la carte cliquable de la Tunisie ']);
         $permission = Permission::create(['name' => 'Afficher google map ']);
         $permission = Permission::create(['name' => 'Afficher les maps de Tunis']);
         $permission = Permission::create(['name' => 'Afficher les maps de zaghouan']);*/
      
        return view('backend.user.create');
    }
    public function delete($id)
    {
        $data =Role::find($id);
        $data->delete();
        
    }

}
