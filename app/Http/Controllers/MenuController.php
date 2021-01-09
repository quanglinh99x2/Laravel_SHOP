<?php

namespace App\Http\Controllers;

use App\Components\MenuRecursive;
use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    private $menu;
    private $menuRecursive;
    function __construct(Menu $menu, MenuRecursive $menuRecursive){
        $this->menu = $menu;
        $this->menuRecursive = $menuRecursive;
    }
    //
    public function index(){
        $menus = $this->menu->paginate(5);
        return view('admin.menus.index',compact('menus'));
    }
    public function add(){
        $menuRecursive = new MenuRecursive();
        $htmlOption = $this->menuRecursive->menuRecursiveAdd();
        return view('admin.menus.add',compact('htmlOption'));
    }
    public function postAdd(Request $request){
        $this->validate($request,[
           'name'=>'required|min:3|max:30'
        ],[
            'name.required'=>"Tên menu không được để trống",
            'name.min'=>'Độ dài phải từ 3 đến 30 ký tự',
        ]);
        $this->menu->create([
           'name'=> $request->name,
            'parent_id'=> $request->parent_id,
            'slug'=>Str::slug($request->name)
        ]);
        return redirect()->route('menus.index')->with('notification','Thêm mới thành công');
    }
    public function edit($id){
        $menu = $this->menu->find($id);
        $htmlOption = $this->menuRecursive->menuRecursiveAdd($menu->parent_id);
        return view('admin.menus.edit',compact('menu','htmlOption'));
    }
    public function postEdit($id,Request $request){
        $this->validate($request,[
            'name'=>'required|min:2|max:30'
        ],[
            'name.required'=> "Bạn chưa nhập tên danh mục",
            'name.min'=>"Độ dài tên danh mục từ 2 đến 30 ký tự",
            'name.max'=>"Độ dài tên danh mục từ 2 đến 30 ký tự"
        ]);
        $this->menu->find($id)->update([
           'name'=> $request->name,
            'parent_id'=>$request->parent_id,
            'slug'=>Str::slug($request->name)
        ]);
        return redirect()->route('menus.index')->with('notification','Update success');
    }
    public function delete($id){
        //xóa sử dụng soft delte
        $this->menu->find($id)->delete();
//
        return redirect()->route('menus.index')->with('notification','Xóa thành công!');
    }
}
