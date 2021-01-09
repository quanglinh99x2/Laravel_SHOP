<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Slider;
use App\Trademark;
use Illuminate\Http\Request;
use App\Components\GetListProductWithCategory;

use function GuzzleHttp\json_decode;

class PagesController extends Controller
{
    //
    private $slider;
    private $product;
    private $category;
    private $trademark;
    private $cateogry;
    function __construct(Slider $slider,Product $product, Category $category, Trademark $trademark){
        $this->slider =$slider;
        $this->product = $product;
        $this->category = $category;
        $this->trademark = $trademark;
        $this->category = $category;
    }
    public function index(){
        $sliders = $this->slider->get();
        $trademarks = $this->trademark->all();
        $category_parents = $this->category->where("parent_id",0)->get();
        $product_features = $this->product->latest()->take(6)->get();
        return view('pages.home',compact('sliders','product_features','category_parents','trademarks'));
    }
    public function product_categories($id){
        $category_parent_found =$this->category->find($id);

        $trademarks = $this->trademark->all();
        $category_parents = $this->category->where("parent_id",0)->get();
        // dd($product_category);
        return view('pages.product_category',compact('category_parent_found','category_parents','trademarks'));
    }
    public function product_trademarks($id){
        $trademark = $this->trademark->find($id);
        $trademarks = $this->trademark->all();
        $category_parents = $this->category->where("parent_id",0)->get();
        return view('pages.product_trademark',compact('trademark','category_parents','trademarks'));
    }
    public function detail_product($slug){
        $trademarks = $this->trademark->all();
        $category_parents = $this->category->where("parent_id",0)->get();
        $product = $this->product->where(['slug'=>$slug])->first();
        return view('pages.detail',compact('category_parents','trademarks','product'));
    }
}
