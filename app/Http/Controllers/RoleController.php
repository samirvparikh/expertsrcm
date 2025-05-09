<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Exports\PermissionExport;
use App\Imports\PermissionImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\User;
use DB;

class RoleController extends Controller
{
    public function index() {
        $permissions = Permission::orderBy('group_name')->get();
        return view('permission.all_permission',compact('permissions'));
    } // End Method 


    public function create() {
        return view('permission.add_permission');
    } // End Method 

    public function StorePermission(Request $request) {
        $permission = Permission::create([
            'name' => $request->name,
            'group_name' => $request->group_name,
        ]);

        $notification = array(
            'message' => 'Permission Created Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('permissions.index')->with($notification); 

    } // End Method 


    public function EditPermission($id) {

        $permission = Permission::find($id);
        return view('permission.edit_permission',compact('permission'));

    }// End Method 


    public function UpdatePermission(Request $request) {
        $per_id = $request->id;

        Permission::find($per_id)->update([
            'name' => $request->name,
            'group_name' => $request->group_name,
        ]);

        $notification = array(
            'message' => 'Permission Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('permissions.index')->with($notification); 

    } // End Method 


    public function DeletePermission($id) {

        Permission::find($id)->delete();

        $notification = array(
            'message' => 'Permission Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 

    }// End Method 


    public function ImportPermission() {

        return view('permission.import_permission');

    }// End Method 


    /////////// All Roles Mehtod //////////////////////

    public function AllRoles() {

        $roles = Role::orderBy('name')->get();
        return view('roles.all_roles',compact('roles'));

    }// End Method


    public function AddRoles() {
        return view('roles.add_roles');
    }// End Method

    public function StoreRoles(Request $request) {
        
        Role::create([
            'name' => $request->name,
        ]);

        $notification = array(
            'message' => 'Role Created Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('roles.index')->with($notification);  

    }// End Method


    public function EditRoles($id) {

        $roles = Role::find($id);
        return view('roles.edit_roles',compact('roles'));

    }// End Method


    public function UpdateRoles(Request $request) {

        $role_id = $request->id;

        Role::find($role_id)->update([
            'name' => $request->name,
        ]);

        $notification = array(
            'message' => 'Role Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('roles.index')->with($notification);   

    }// End Method

    public function DeleteRoles($id) {

        Role::find($id)->delete();

        $notification = array(
            'message' => 'Role Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);   

    }// End Method


    public function AddRolesPermission() {

        $roles = Role::all();
        $permissions = Permission::all();
        $permission_groups = User::getpermissionGroups();
        return view('rolesetup.add_roles_permission',compact('roles','permissions','permission_groups'));

    }// End Method

    public function RolePermissionStore(Request $request) {

        $data = array();
        $permissions = $request->permission;

        foreach ($permissions as $key => $item) {
            $data['role_id'] = $request->role_id;
            $data['permission_id'] = $item;

            DB::table('role_has_permissions')->insert($data);
        } // end foreach

        $notification = array(
            'message' => 'Role Permission Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('rolepermissions.index')->with($notification);   

    }// End Method


    public function AllRolesPermission() {

        $roles = Role::all();
        return view('rolesetup.all_roles_permission',compact('roles'));

    }// End Method


    public function AdminEditRoles($id) {

        $role = Role::find($id);
        $permissions = Permission::all();
        $permission_groups = User::getpermissionGroups();
        return view('rolesetup.edit_roles_permission',compact('role','permissions','permission_groups'));

    }// End Method

    public function AdminRolesUpdate(Request $request, $id)
    {
        // dd($request);

        $role = Role::find($id);
        $permissions = $request->permission;
        // dd($permissions);
        if (!empty($permissions)) {
            $role->syncPermissions($permissions);
        }

        $notification = array(
            'message' => 'Role Permission Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('rolepermissions.index')->with($notification); 
  
    }// End Method

    public function AdminDeleteRoles($id)
    {
        $role = Role::find($id);
        if (!is_null($role)) {
            $role->syncPermissions([]);
        }

        $notification = array(
            'message' => 'Role Permission Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }// End Method



}
 