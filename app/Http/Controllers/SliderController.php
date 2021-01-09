<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Traits\StorageImageTraits;
class SliderController extends Controller
{
    use StorageImageTraits;
    //
    private $slider;
    function __construct(Slider $slider)
    {
        $this->slider =$slider;
    }
    public function index()
    {
        $sliders = $this->slider->paginate(5);
        return view('admin.slider.index', compact('sliders'));
    }
    public function add(){

        return view('admin.slider.add');
    }
    public function postAdd(Request $request){
        $this->validate($request,[
            'name'=>'required|unique:sliders,name',
            'description'=>'required|min:3',

            'slider_image'=>'required'
        ],[
            'name.required'=>'Tên slider không đuợc để trống!',
            'name.unique'=>'Tên sản phẩm đã tồn tại, vui lòng thử lại!',
            'description.required'=>'Mô tả ngắn không được để trống',
            'slider_image.required'=>'Hình ảnh không được để trống',
        ]);
        try {
            DB::beginTransaction();
            $slider = new Slider();
            $slider->name = $request->name;
            $slider->description = $request->description;

            $dataImageFeatureProduct = $this->storageTraitUpload($request,'slider_image','slider');
            if(!empty($dataImageFeatureProduct)){
                $slider->slider_image =$dataImageFeatureProduct['file_path'];
            }
            $slider->save();
            DB::commit();
            return redirect()->route('slider.index')->with('notification','Thêm mới thành công !');
        }
        catch(\Exception $exception){
            DB::rollBack();
            Log::error('Message :'.$exception->getMessage().' - Line:'.$exception->getLine());
        }
    }
    public function edit($id){
        $slider = $this->slider->find($id);
        return view('admin.slider.edit',compact('slider'));
    }
    public function postEdit(Request $request,$id){
      $this->validate($request,[
            'name'=>'required',
            'description'=>'required|min:3',

            'slider_image'=>'required'
        ],[
            'name.required'=>'Tên slider không đuợc để trống!',
            'description.required'=>'Mô tả ngắn không được để trống',
            'slider_image.required'=>'Hình ảnh không được để trống',
        ]);
        try {
            DB::beginTransaction();
            $slider = $this->slider->find($id);
            $slider->name = $request->name;
            $slider->description = $request->description;

            if($slider->slider_image != null){
                //unlink
                unlink(public_path($slider->slider_image));
                $dataImageFeatureProduct = $this->storageTraitUpload($request,'slider_image','slider');
                if(!empty($dataImageFeatureProduct)){
                    $slider->slider_image =$dataImageFeatureProduct['file_path'];
                }
            }

            $slider->save();
            DB::commit();
            return redirect()->route('slider.edit',['id'=>$slider->id])->with('notification','Cập nhật thành công !');
        }
        catch(\Exception $exception){
            DB::rollBack();
            Log::error('Message :'.$exception->getMessage().' - Line:'.$exception->getLine());
        }
    }
    public function delete($id){
        try{
            DB::beginTransaction();
            $slider= $this->slider->find($id);
            unlink(public_path( $slider->slider_image));

            $slider->delete();
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
