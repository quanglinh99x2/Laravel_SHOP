<?php

namespace App\Http\Controllers;

use App\Trademark;
use Illuminate\Http\Request;
use App\Traits\StorageImageTraits;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
class TrademarkController extends Controller
{
    private $trademark;
    use StorageImageTraits;
    function __construct(Trademark $trademark)
    {
        $this->trademark= $trademark;
    }

    public function index(){
        $trademarks = $this->trademark->paginate(10);
        return view('admin.trademark.index',compact('trademarks'));
    }
    public function add(){

        return view('admin.trademark.add');
    }
    public function postAdd(Request $request){
        $this->validate($request,[
            'name'=>'required|unique:trademarks,name',
            'trademark_image'=>'required'
        ],[
            'name.required'=>'Tên thương hiệu không đuợc để trống!',
            'name.unique'=>'Tên sản phẩm đã tồn tại, vui lòng thử lại!',
            'trademark_image.required'=>'Hình ảnh không được để trống',
        ]);
        try {
            DB::beginTransaction();
            $trademark = new Trademark();

            $trademark->name = $request->name;
            $trademark->code = Str::slug($request->name);
            $dataImage = $this->storageTraitUpload($request,'trademark_image','trademark');
            if(!empty($dataImage)){
                $trademark->logo =$dataImage['file_path'];
            }
            $trademark->save();
            DB::commit();
            return redirect()->route('trademarks.index')->with('notification','Thêm mới thành công !');
        }
        catch(\Exception $exception){
            DB::rollBack();
            Log::error('Message :'.$exception->getMessage().' - Line:'.$exception->getLine());
        }
    }
    public function edit($id){
        $trademark = $this->trademark->find($id);
        return view('admin.trademark.edit',compact('trademark'));
    }
    public function postEdit(Request $request,$id){
        $this->validate($request,[
            'name'=>'required',
            'trademark_image'=>'required'
        ],[
            'name.required'=>'Tên thương hiệu không đuợc để trống!',

            'trademark_image.required'=>'Hình ảnh không được để trống',
        ]);
          try {
              DB::beginTransaction();
              $trademark = $this->trademark->find($id);
              $trademark->name = $request->name;
              $trademark->code = Str::slug($request->name);
            if($request->trademark_image != null ){
              if($trademark->logo != null){
                  //unlink
                  unlink(public_path($trademark->logo));
                  $dataImageFeatureProduct = $this->storageTraitUpload($request,'trademark_image','trademark');
                  if(!empty($dataImageFeatureProduct)){
                      $trademark->logo = $dataImageFeatureProduct['file_path'];
                  }
              }
            }

              $trademark->save();
              DB::commit();
              return redirect()->route('trademark.edit',['id'=>$trademark->id])->with('notification','Cập nhật thành công !');
          }
          catch(\Exception $exception){
              DB::rollBack();
              Log::error('Message :'.$exception->getMessage().' - Line:'.$exception->getLine());
          }
      }
      public function delete($id){
        try{
            DB::beginTransaction();
            $trademark= $this->trademark->find($id);
            unlink(public_path( $trademark->logo));

            $trademark->delete();
            DB::commit();
            return response()->json([
                'code' => '200',
                'status' => 'success',
            ],200);
        }
        catch(\Exception $exception){
            DB::rollBack();
            Log::error('Message :'.$exception->getMessage().' - Line:'.$exception->getLine());
            return response()->json([
                'code' => '500',
                'status' => 'fail',
            ],500);

        }

    }

}
