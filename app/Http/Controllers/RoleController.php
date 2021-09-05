<?php

namespace App\Http\Controllers;

use App\Models\Permission;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        $permissions = Permission::with('action', 'module')->get()->groupBy('module.name');
        return view('admin.role.index', compact('roles', 'permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $roles = new Role();
        $roles->name = $request->name;
        $roles->description = $request->description;
        $roles->save();

         $notification = array(
            'message' => 'Role insert successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('admin.roles.list')->with($notification);
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

    // All Role List
    public function AdminRoleList()
    {
        $allRoles = Role::all();
        return view('admin.role.list', compact('allRoles'));
    }

    public function AdminRoleEdit($id){
        $allRoles = Role::find($id);
        return view('admin.role.role_edit',compact('allRoles'));
    }

    public function AdminRoleUpdate(Request $request, $id) {
        
        $roles = Role::find($id);
        $request->validate([
            'name' => 'required',
        ]);
        
        $roles->name = $request->name;
        $roles->save();

        $notification = array(
            'message' => 'roles update successfully',
            'alert-type' => 'info',
        );

        return redirect()->route("admin.roles.list")->with($notification);
    }

    public function AdminRoleDelete($id) {
        $roles = Role::find($id);
        $roles->delete();

         $notification = array(
            'message' => 'Role delete successfully',
            'alert-type' => 'warning',
        );

        return redirect()->route("admin.roles.list")->with($notification);
    }
}
