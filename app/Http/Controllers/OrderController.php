<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderDetail;
use App\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    //
    private $order;
    function __construct(Order $order)
    {
        $this->order = $order;
    }
    public function getListOrder(){
        $order = $this->order->get();
        return view('admin.order.index',compact('order'));
    }
    public function postOrder(Request $request){

        $this->validate($request,[
            'fullname'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'email'=>'required|email',
            'note'=>'required'

        ],[
            'fullname.required'=>'Họ và tên không được để trống !',
            'phone.required'=>'Số điện thoại không được để trống !',
            'address.required'=>'Địa chỉ không được để trống !',
            'email.required'=>'Email không được để trống !',
            'email.email'=>'Email không đúng định dạng !',
            'note.required'=>'Ghi chú không được để trống !',
        ]);
        // dd($request->session()->get('cart'));
        //  shipping table
        try{
            DB::beginTransaction();

            $shipping = new Shipping();
            $shipping->name = $request->fullname;
            $shipping->customer_id = $request->session()->get('id_customer');
            $shipping->address = $request->address;
            $shipping->phone = $request->phone;
            $shipping->email = $request->email;
            $shipping->note = $request->note;
            $shipping->save();
        // order table

            $order = new Order();
            $order->qty = $request->session()->get('cart')->totalQuantity;
            $order->amount = $request->session()->get('cart')->totalPrice;
            $order->date_order =  date('Y-m-d H:i:s');
            $order->status = 0;
            $order->shipping_id = $shipping->id;
            $order->payment_id = $request->payment_method;
            $order->customer_id = $request->session()->get('id_customer');
            $order->save();
        // order detail
            foreach($request->session()->get('cart')->products as $item){
                $orderDetail = new OrderDetail();
                $orderDetail->order_id = $order->id;
                $orderDetail->product_id = $item['productInfo']['id'];
                $orderDetail->price = $item['productInfo']['price'];
                $orderDetail->quantity = $item['quantity'];
                $orderDetail->status =0;
                $orderDetail->save();
            }
            $request->session()->forget('cart');
            DB::commit();
            return redirect()->route('home.index')->with('order_success','Đặt hàng thành công !');

        }
        catch(\Exception $exception){
            DB::rollBack();
            Log::error('Message :'.$exception->getMessage().' - Line:'.$exception->getLine());
        }
    }
}
