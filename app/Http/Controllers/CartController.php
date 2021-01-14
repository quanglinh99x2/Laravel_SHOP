<?php
namespace App\Http\Controllers;
use App\Category;
use App\Trademark;
use Illuminate\Http\Request;

use Symfony\Component\VarDumper\VarDumper;
use App\Helper\Cart;
use App\Product;
use Illuminate\Support\Facades\Session;
class CartController extends Controller
{
    private $trademark;
    private $category;
    private $product;
    //
    function __construct(Trademark $trademark , Category $category, Product $product){
        $this->trademark = $trademark;
        $this->category = $category;
        $this->product = $product;
    }
    //
    public function index(){
        return view('pages.cart');
    }
    public function add_cart_ajax(Request $request){

        $product = $this->product->find($request->id_product);

        if($product != null){
            // nếu tồn tại thì gán oldCart bằng session cart đó, else thì gán bằng null
            // $oldCart = session('cart') ? session('cart') : null;
            if(session('cart')){
                $oldCart = session('cart');
            }
            else{
                $oldCart = null;
            }
            $newCart = new Cart($oldCart); // khởi tạo đối tượng Cart trong Helpers/Cart và truyền vào Cart cũ
            $newCart->AddCart($product,$request->id_product);
            $request->session()->put('cart', $newCart);
            // session(['cart'=>$newCart]);
        }
        // echo json_encode($newCart);
        return view('pages.sub_cart',compact('newCart'));
    }
    public function destroy(Request $request){
        $request->session()->forget('cart');

        return view('pages.cart');
    }
    public function deleteItemCart(Request $request){
        $pro_id = $request->pro_id_delete;
        if(session('cart')){
            $oldCart = session('cart');
        }
        else{
            $oldCart = null;
        }
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($pro_id);
        if(count($newCart->products) >0){
            $request->session()->put('cart', $newCart);
        }
        else{
            $request->session()->forget('cart');
        }
        return view('pages.sub_cart',compact('newCart'));
    }
    public function deleteItemCartShow(Request $request){
        $pro_id = $request->pro_id_delete;
        if(session('cart')){
            $oldCart = session('cart');
        }
        else{
            $oldCart = null;
        }
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($pro_id);
        if(count($newCart->products) >0){
            $request->session()->put('cart', $newCart);
        }
        else{
            $request->session()->forget('cart');
        }
        return view('partials.list_product_cart_item');
    }
    public function updateProduct(Request $request){

        if(session('cart')){
            $oldCart = session('cart');
        }
        else{
            $oldCart = null;
        }
        $newCart = new Cart($oldCart);
        $newCart->UpdateQuantityProduct($request->pro_id,$request->pro_qty);
        $request->session()->put('cart', $newCart);

        return view('partials.list_product_cart_item');
    }
    public function addCartMulti(Request $request){
        $product = $this->product->find($request->pro_id);
        if($product != null){

            if(session('cart')){
                $oldCart = session('cart');
            }
            else{
                $oldCart = null;
            }
            $newCart = new Cart($oldCart); // khởi tạo đối tượng Cart trong Helpers/Cart và truyền vào Cart cũ
            $newCart->AddMultiCart($product,$request->pro_id,$request->pro_qty);
            $request->session()->put('cart', $newCart);
            // session(['cart'=>$newCart]);
        }
        // echo json_encode($newCart);
        return view('pages.sub_cart',compact('newCart'));
    }
}
