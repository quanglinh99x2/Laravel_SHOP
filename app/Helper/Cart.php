<?php
namespace App\Helper;

class Cart{


    public $totalPrice = 0;
    public $totalQuantity = 0;
    public $products = null;

    public function __construct($cart){
        if($cart){
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQuantity = $cart->totalQuantity;
        }
    }

    public function AddCart($product,$id){
        $newProduct = ['quantity' => 0,'price'=>$product->price,'productInfo'=>$product];
        if($this->products){
            if(array_key_exists($id,$this->products)){
                $newProduct = $this->products[$id];
            }
        }
        $newProduct['quantity']++;
        $newProduct['price'] = $newProduct['quantity'] * $product->price;
        //cập nhật lại cart
        $this->products[$id] = $newProduct;
        $this->totalPrice += $product->price;
        $this->totalQuantity++;
    }
    public function AddMultiCart($product,$id,$qty_add){
        $newProduct = ['quantity' => 0,'price'=>$product->price,'productInfo'=>$product];
        if($this->products){
            if(array_key_exists($id,$this->products)){
                $newProduct = $this->products[$id];
            }
        }
        $newProduct['quantity'] +=  $qty_add;
        $newProduct['price'] = $newProduct['quantity'] * $product->price;
        //cập nhật lại cart
        $this->products[$id] = $newProduct;
        $this->totalPrice += $product->price * $qty_add;
        $this->totalQuantity+= $qty_add;
    }
    public function DeleteItemCart($id){
        $this->totalPrice-= $this->products[$id]['price'];
        $this->totalQuantity -=  $this->products[$id]['quantity'];
        unset($this->products[$id]);
    }
    public function UpdateQuantityProduct($id,$newQty){
        // trừ đi tổng tiền và tổng số lượng sản phẩm được sửa

        $this->totalQuantity -= $this->products[$id]['quantity'];
        $this->totalPrice -=$this->products[$id]['price'];
        // gán lại tổng số lượng và tổng tiền mới của sản phẩm được sửa
        $this->products[$id]['quantity'] = $newQty;
        $this->products[$id]['price'] = $newQty * $this->products[$id]['productInfo']['price'];

        $this->totalQuantity+=  $this->products[$id]['quantity'];
        $this->totalPrice  += $this->products[$id]['price'];
    }

}
