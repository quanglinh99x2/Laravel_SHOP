<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class LiveSearchController extends Controller
{
    private $product;
    function __construct(Product $product)
    {
        $this->product = $product;
    }
    public function searchProductAjax(Request $request){

        if ($request->ajax()) {
            $output = '';
            if(empty($request->search)){
                $products = $this->product->all();
            }
            else{
                $products = $this->product->where('name', 'LIKE', '%' . $request->search . '%')->get();
            }
            foreach($products as $item){
                $output .= '<tr>';
                $output .='<td>'. $item->id .'</td>';
                $output .='<td>'. $item->name .'</td>';
                $output .='<td>'. number_format($item->price , 0,'',',') .'</td>';
                $output .='<td> <img class="img-pro" src="'.asset($item->product_image_path).'" alt="image"></td>';
                $output .='<td>'.   optional($item->categories)->name .'</td>';
                $output .='<td>'. $item->created_at .'</td>';
                $output .= '<td>
                                        <a href="'.route('product.edit',['id' => $item->id]).'" class="btn
                                        btn-default">Sửa</a>
                                        <a href="'.route
                                        ('product.delete',
                                        ['id' => $item->id]).'"
                                           class="btn_delete
                                         btn
                                        btn-danger">Xóa</a>
                                    </td>';
                $output .= '<tr>';
            }
            echo $output;
        }
    }
}
