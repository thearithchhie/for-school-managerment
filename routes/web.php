<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PermissionController;

Auth::routes();

Route::get("/admin/logout", [AdminController::class, 'Logout'])->name('admin.logout');
Route::group(['middleware' => 'auth'], function(){

    Route::get('/', function(){ return view('admin.index'); });

    Route::resource('departments', DepartmentController::class);
    Route::resource('roles', RoleController::class);

    Route::get('/admin/roles/list/',[RoleController::class, 'AdminRoleList'])->name('admin.roles.list');
    Route::get('/admin/roles/edit/{id}',[RoleController::class, 'AdminRoleEdit'])->name('admin.role.edit');
    Route::post('/admin/role/update/{id}',[RoleController::class, 'AdminRoleUpdate'])->name('admin.role.update');
    Route::get('/admin/role/delete/{id}',[RoleController::class, 'AdminRoleDelete'])->name('admin.role.delete');

    Route::prefix("permissions")->group(function (){
        Route::get('/add', [PermissionController::class, 'PermissionAdd'])->name('permissions.add');
        Route::post('/create', [PermissionController::class, 'RoleCreate'])->name('permissions.create');
        Route::get('/list', [PermissionController::class, 'RoleList'])->name('permissions.list');
    });

});

