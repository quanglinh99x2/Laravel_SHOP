<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Components\Recursive;
use Illuminate\Support\Str;
use App\Category;
class CategoryController extends Controller
{
    private $category;

    function __construct(Category $category){
        $this->category = $category;
    }
    //
    public function create(){
        $htmlOption =$this->getCategory(0);
        return view ('admin.category.add',compact('htmlOption'));
    }
    public function index(){
        $categories = $this->category->paginate(5);
        return view ('admin.category.index',compact('categories'));
    }
    public function postAdd(Request $request){

        $this->validate($request,[
            'name'=>'required|min:2|max:30'
        ],[
            'name.required'=> "Bạn chưa nhập tên danh mục",
            'name.min'=>"Độ dài tên danh mục từ 2 đến 30 ký tự",
            'name.max'=>"Độ dài tên danh mục từ 2 đến 30 ký tự"
        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->parent_id = $request->parent_id;
        $category->slug =Str::slug($request->name,'-');
        $category->save();
        return redirect()->route('categories.create')->with('notification','Thêm mới thành công !');
    }
    public function edit($id){
        $category = $this->category->find($id);
        $htmlOption =$this->getCategory($category->parent_id);
        return view('admin.category.edit',compact('category','htmlOption'));
    }
    public function postEdit(Request $request,$id){

        $this->validate($request,[
            'name'=>'required|min:2|max:30'
        ],[
            'name.required'=> "Bạn chưa nhập tên danh mục",
            'name.min'=>"Độ dài tên danh mục từ 2 đến 30 ký tự",
            'name.max'=>"Độ dài tên danh mục từ 2 đến 30 ký tự"
        ]);
        // update
        $category = $this->category->find($id)->update([
            'name'=>$request->name,
            'parent_id'=> $request->parent_id,
            'slug'=> Str::slug($request->name,'-')
        ]);
        return redirect()->route('categories.index')->with('notification','Sửa thành công !');
    }
    public function getCategory($parentId){
        $data = $this->category->all();
        $recursive = new Recursive($data);
        $htmlOption =  $recursive->categoryRecursive($parentId);
        return $htmlOption;
    }
    public function delete($id){
        // sử dụng softDelete
        $this->category->find($id)->delete();
        return redirect()->route('categories.index')->with('notification','Delete thành công!');
    }}

