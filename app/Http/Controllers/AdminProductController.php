<?php

namespace App\Http\Controllers;

use App\Category;
use App\Components\Recursive;
use App\Product;
use App\ProductImages;
use App\Tag;
use App\Trademark;
use App\Traits\StorageImageTraits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
class AdminProductController extends Controller
{
    use StorageImageTraits;
    //create variable local
    private $product;
    private $category;
    private $productImages;
    private $trademark;
    function __construct(Product $product, Category $category,ProductImages $productImages,Trademark $trademark)
    {
        $this->product = $product;
        $this->category = $category;
        $this->productImages = $productImages;
        $this->trademark = $trademark;
    }
    //
    public function index(){
        $products = $this->product->latest()->paginate(5);
        return view('admin.product.index',['products'=>$products]);
    }
    public function add(){
        $htmlOption =$this->getCategory('');
        $listTrademarks = $this->trademark->all();
        return view('admin.product.add',['htmlOption'=>$htmlOption,'listTrademarks'=>$listTrademarks]);
    }
    public function postAdd(Request $request ){
        $this->validate($request,[
            'name'=>'required|unique:products,name',
            'desc'=>'required|min:3',
            'price'=>'required',
            'product_content'=>'required',
            'trademark_id'=>'required'
        ],[
            'name.required'=>'Tên sản phẩm không đuợc để trống!',
            'name.unique'=>'Tên sản phẩm đã tồn tại, vui lòng thử lại!',
            'desc.required'=>'Mô tả ngắn không được để trống',
            'price.required'=>'Giá tiền không được để trống',
            'product_content.required'=>'Nội dung không được để trống',
            'trademark_id.required'=>'Hãy chọn thương hiệu'
        ]);
        try{
            DB::beginTransaction();
            $product_1 = new Product();
            $product_1->name = $request->name;
            $product_1->desc = $request->desc;
            $product_1->price =$request->price;
            $product_1->slug = Str::slug($request->name);
            $product_1->content = $request->product_content;
            $product_1->trademark_id = $request->trademark_id;
            $product_1->user_id =Auth::id();
            $product_1->category_id = $request->category_id;

            $dataImageFeatureProduct = $this->storageTraitUpload($request,'product_image','product');
            if(!empty($dataImageFeatureProduct)){
                $product_1->product_image_path = $dataImageFeatureProduct['file_path'];
                $product_1->product_image = $dataImageFeatureProduct['file_name'];

            }
            $product_1->save();
            // anhr liên quan
            if($request->hasFile('image_detail_path')){
                foreach($request->image_detail_path  as $image_item){
                    $productImageDetail = $this->storageTraitUploadMultiFile($image_item,'product');
                    $image_pro = new ProductImages();
                    $image_pro->image_path=$productImageDetail['file_path'];
                    $image_pro->product_id = $product_1->id;
                    $image_pro->image_name=$productImageDetail['file_name'];
                    $image_pro->save();
                }
            }
            // insert data tag to tag_table and product_tag_table
            if(!empty($request->product_tag)){
                foreach($request->product_tag as $itemTag){
                    // Hàm firstOrCreate :nếu có dữ liệu này trong bảng rồi thì lấy dữ liệu
                    // Nếu dữ liệu chưa có trong bảng thì insert vào r lấy ra dữ liệu
                    $tagInstance = Tag::firstOrCreate([
                        'name'=>$itemTag
                    ]);
                    $arrTagIds[] = $tagInstance->id;
                }
                $product_1->tags()->attach($arrTagIds);
            }
            // lấy data product và tag vừa insert ,insert-> to table product_tags
            // dùng phương thức attach của laravel để insert nhanh

            DB::commit();
            return redirect()->route('product.add')->with('notification','Thêm mới thành công !');
//        dd($data);
        }
        catch(\Exception $exception){
            DB::rollBack();
            Log::error('Message :'.$exception->getMessage().' - Line:'.$exception->getLine());
        }
//        return NULL;
    }
    public function getCategory($parentId)
    {
        $data = $this->category->all();
        $recursive = new Recursive($data);
        $htmlOption = $recursive->categoryRecursive($parentId);
        return $htmlOption;
    }
    public function edit($id){
        $listTrademarks = $this->trademark->all();
        $product = $this->product->find($id);
        $htmlOption =$this->getCategory($product->category_id);
        return view('admin.product.edit',compact('product','htmlOption','listTrademarks'));
    }


    public function deleteImagePro($id){
//        lấy image cần xóa
        $imageSelected = $this->productImages->find($id);
//        dd( $imageSelected->product_id);

        if($imageSelected->image_name != 'no-name.png'){
//            Storage::delete($imageSelected->image_path);
//                unlink(asset($imageSelected->image_path));
            $image_path = $imageSelected->image_path;
            unlink(public_path( $imageSelected->image_path));
        }
        $imageSelected->delete();
        return redirect()->route('product.edit',['id'=> $imageSelected->product_id])->with('notification','Đã xóa một ảnh sản phẩm !');

    }
    public function postEdit(Request $request ,$id){
        $this->validate($request,[
            'name'=>'required',
            'desc'=>'required|min:3',
            'price'=>'required',
            'product_content'=>'required',
            'trademark_id'=> 'required'
        ],[
            'name.required'=>'Tên sản phẩm không đuợc để trống!',
            'desc.required'=>'Mô tả ngắn không được để trống',
            'price.required'=>'Giá tiền không được để trống',
            'product_content.required'=>'Nội dung không được để trống',
            'trademark_id.required'=>'Hãy chọn thương hiệu'
        ]);
        try{
            DB::beginTransaction();

            $product_1 = $this->product->find($id);
            $product_1->name = $request->name;
            $product_1->desc = $request->desc;
            $product_1->price =$request->price;
            $product_1->slug = Str::slug($request->name);
            $product_1->content = $request->product_content;
            $product_1->trademark_id = $request->trademark_id;
            $product_1->user_id =Auth::id();
            $product_1->category_id = $request->category_id;
            // check empty avatar
            if($request->product_image != null){
                if($product_1->product_image !='no-name.png'){
                    unlink(public_path( $product_1->product_image_path));
                }
                $dataImageFeatureProduct = $this->storageTraitUpload($request,'product_image','product');
                if(!empty($dataImageFeatureProduct)){
                    $product_1->product_image_path =$dataImageFeatureProduct['file_path'];
                    $product_1->product_image = $dataImageFeatureProduct['file_name'];
                }
            }
            $product_1->save();
            if($request->hasFile('image_detail_path')){
                foreach($request->image_detail_path  as $image_item){
                    $productImageDetail = $this->storageTraitUploadMultiFile($image_item,'product');
                    $product_1->product_images()->create([
                        'image_path'=>$productImageDetail['file_path'],
                        'image_name'=>$productImageDetail['file_name'],
                        // Không cần nhập trường product_id nữa vì dùng product_1 vừa khởi tạo
//                    'product_id'=>$product_1->id
                    ]);
                }
            }
            // insert data tag to tag_table and product_tag_table
            if(!empty($request->product_tag)){


                foreach($request->product_tag as $itemTag){
                    // Hàm firstOrCreate :nếu có dữ liệu này trong bảng rồi thì lấy dữ liệu
                    // Nếu dữ liệu chưa có trong bảng thì insert vào r lấy ra dữ liệu
                    $tagInstance = Tag::firstOrCreate([
                        'name'=>$itemTag
                    ]);
                    $arrTagIds[] = $tagInstance->id;
                }
                $product_1->tags()->sync($arrTagIds);
            }
            // lấy data product và tag vừa insert ,insert-> to table product_tags
            // dùng phương thức attach của laravel để insert nhanh

            DB::commit();
            return redirect()->route('product.edit',['id'=>$id])->with('notification','Cập nhật thành công !');
//        dd($data);
        }
        catch(\Exception $exception){
            DB::rollBack();
            Log::error('Message :'.$exception->getMessage().' - Line:'.$exception->getLine());
        }
    }
    public function delete($id){
        try{
            DB::beginTransaction();
            $product= $this->product->find($id);

            //xóa các tags liên quan trong bảng trung gian (intermediate table)
            $product->tags()->detach();
            // Xóa ảnh đại diện
            $product->product_images()->delete();
            if($product->product_image !='no-name.png'){
                unlink(public_path( $product->product_image_path));
            }
            // xóa các ảnh liên quan
            foreach($product->product_images as $imagePro){
                if($imagePro->image_name !='no-name.png'){
                    unlink(public_path( $imagePro->image_path));
                }
            }
            $product->delete();
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
