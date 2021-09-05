<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::all();
        return view('admin.department.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.department.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:departments',
        ]);

        $departments = new Department();
        $departments->name = $request->name;
        $departments->description = $request->description;
        $departments->save();

        $notification = array(
            'message' => "Department Create Success",
            'alert-type' => "success"
        );

        return Redirect()->route("departments.index")->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return ' show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departments = Department::findOrFail($id);
        return view('admin.department.edit', compact('departments'));
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
        $departments = Department::findOrFail($id);
        $request->validate([
            'name' => 'required',
        ]);

        $departments->name = $request->name;
        $departments->save();

        $notification = array(
            'message' => 'User update successfully',
            'alert-type' => 'info',
        );

        return redirect()->route("departments.index")->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function DepartmentDelete($id)
    {
        $departments = Department::findOrFail($id);
        $departments->delete();
        $notification = array(
            'message' => 'Department delete successfully',
            'alert-type' => 'warning',
        );

        return redirect()->route("departments.index")->with($notification);
    }
}
