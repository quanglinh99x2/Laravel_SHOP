<?php
namespace App\Traits;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
trait StorageImageTraits{
    public function storageTraitUpload($request,$fieldName,$folderName){
        if($request->hasFile($fieldName)){
            $file = $request->$fieldName;
            //file đã được link vào public/storage
            // lấy file và lưu vào storage/app/public
            $fileNameOrigin = $file->getClientOriginalName();
            $fileNameHash = Str::random(20).'.'.$file->getClientOriginalExtension();
            $path = $request->file($fieldName)->storeAs('public/'.$folderName,$fileNameHash);
            //shopping_project/storage/app/public
            $dataUploadTrait = [
                'file_name'=>$fileNameOrigin,
                'file_path'=>$url = Storage::url($path)
            ];
            return $dataUploadTrait;
        }
        else{
            $fileNameOrigin ='no-image.png';
            $path ='public/no-image.png';
            $dataUploadTrait = [
                'file_name'=>$fileNameOrigin,
                'file_path'=>$url = Storage::url($path)
            ];
            return $dataUploadTrait;
        }
//        return null;
    }
    public function storageTraitUploadMultiFile($file,$folderName){
            $fileNameOrigin = $file->getClientOriginalName();
            $fileNameHash = Str::random(20).'.'.$file->getClientOriginalExtension();
            $path = $file->storeAs('public/'.$folderName,$fileNameHash);
            //shopping_project/storage/app/public
            $dataUploadTrait = [
                'file_name'=>$fileNameOrigin,
                'file_path'=>$url = Storage::url($path)
            ];
            return $dataUploadTrait;
    }
}
