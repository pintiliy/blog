<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;


class TestRoleController extends Controller
{
    public function userList()
    {
        $users = User::all();
        $roles = Role::all()->keyBy('name');
        $permissions = Permission::all()->keyBy('name');

        return view('users', [
            'users' => $users,
            'roles' => $roles,
            'permissions' => $permissions,
        ]);
    }


    public function saveUserPermissions(Request $request)
    {
        $usersRole = $request->all()['users'];
        if($usersRole)
        {
            foreach($usersRole as $userId => $roleId)
            {
               if( isset($usersRole) )
               {
                   $user = User::findOrFail($userId);
                   $role = Role::findOrFail($roleId);
                   $user->detachRoles();
                   $user->attachRole($role);
                   $user->save();
               }
            }
        }
        return back();
    }

    public function saveRolePermissions(Request $request)
    {
        $rolePermissions = $request->all()['roles'];

        if($rolePermissions)
        {
            foreach($rolePermissions as $roleId => $permissions)
            {
                $role = Role::findOrFail($roleId);
                $role->detachPermissions( $role->perms()->get() );

                if($permissions)
                {
                    foreach($permissions as $permissionId)
                    {
                        $permission = Permission::findOrFail($permissionId);
                        $role->attachPermission($permission);
                    }
                }
            }
        }
        return back();
    }

}
