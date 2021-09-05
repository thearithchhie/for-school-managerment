<?php

namespace App\Http\Controllers;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\Permission;

class PermissionController extends Controller
{
     public function PermissionAdd()
    {
        $data['roles'] = Role::all();
        return view('admin.permission.create',$data);
    }

    public function RoleCreate(Request $request) {
        dd($request->all());
        $request->validate([
            'role_id' => 'required|unique:permissions',
        ]);

        Permission::create($request->all());

        $notification = [
             'message' => "Permission Update Success",
            'alert-type' => "success"
        ];
       return Redirect()->back()->with($notification);
    }
}
