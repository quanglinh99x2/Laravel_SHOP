<?php

namespace App\Http\Controllers;

use App\Permission;
use Illuminate\Http\Request;

class AdminPermissionController extends Controller
{
    private $permission;
    function __construct(Permission $permission)
    {
        $this->permission = $permission;
    }
    public function create(){
        return view('admin.permission.add');
    }
    public function store(Request $request){
        $this->validate($request,
        [
            'permission_parent'=>'required|unique:permissions,name',
            'permission_child'=> 'required'
        ],
        [
            'permission_parent.required'=>'Hãy chọn tên module',
            'permission_parent.unique'=> 'Quyền đã tồn tại trong hệ thống !',
            'permission_child.required' => 'Hãy chọn quyền cho module'
        ]);
        $permission = new Permission();
        $permission->name = $request->permission_parent;
        $permission->display_name = $request->permission_parent;
        $permission->parent_id = 0;
        $permission->key_code = '';
        $permission->save();
        foreach($request->permission_child as $item){
            $permissionChild = new Permission();
            $permissionChild->name = $item.' '.$request->permission_parent;
            $permissionChild->display_name = $item.' '.$request->permission_parent;
            $permissionChild->parent_id = $permission->id;
            $permissionChild->key_code = $item .'_'. $request->permission_parent;
            $permissionChild->save();
        }
        return redirect()->route('permission.create')->with('notification','Thêm mới thành công !');
    }

}
