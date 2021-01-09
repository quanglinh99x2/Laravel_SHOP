<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdminSettingController extends Controller
{
    //
    private $setting;
    function __construct(Setting $setting)
    {
        $this->setting = $setting;
    }

    public function index(){
        $settings = $this->setting->latest()->paginate(5);
        return view ('admin.setting.index',compact('settings'));
    }
    public function add(){
        return view('admin.setting.add');
    }
    public function postAdd(Request $request){
        $this->validate($request,[
            'config_key'=>'required|max:50',
            'config_value'=>'required|max:255'
        ],[
            'config_key.required'=>'Config key không được để trống !',
            'config_key.max'=>'Độ dài Config key không được quá 50 ký tự',
            'config_value.required'=>'Config value không được để trống !',
            'config_value.max'=>'Độ dài Config value không được quá 255 ký tự'
        ]);
        $this->setting->create([
            'config_key'=>$request->config_key,
            'config_value'=>$request->config_value,
            'type'=>$request->type
        ]);
        return redirect()->route('setting.index')->with('notification','Thêm mới thành công !');
    }
    public function edit($id){

        $setting = $this->setting->find($id);
        return view('admin.setting.edit',['id'=>$id],compact('setting'));
    }
    public function postEdit(Request $request,$id)
    {
        $this->validate($request,[
            'config_key'=>'required|max:50',
            'config_value'=>'required|max:255'
        ],[
            'config_key.required'=>'Config key không được để trống !',
            'config_key.max'=>'Độ dài Config key không được quá 50 ký tự',
            'config_value.required'=>'Config value không được để trống !',
            'config_value.max'=>'Độ dài Config value không được quá 255 ký tự'
        ]);
        try{
            DB::beginTransaction();

            $this->setting->find($id)->update([
                'config_key'=>$request->config_key,
                'config_value'=>$request->config_value,
                'type'=> $request->type
            ]);
            DB::commit();
        }
        catch(\Exception $exception){
            DB::rollBack();
            Log::error('Message :'.$exception->getMessage().' - Line:'.$exception->getLine());
        }


        return redirect()->route('setting.index')->with('notification','Cập nhật thành công !');
    }
    public function delete($id){
        try{
            DB::beginTransaction();
            $setting= $this->setting->find($id);
            // Xóa ảnh đại diện
            $setting->delete();
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
