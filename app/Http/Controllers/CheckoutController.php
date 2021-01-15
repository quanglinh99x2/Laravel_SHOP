<?php

namespace App\Http\Controllers;

use App\Customer;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CheckoutController extends Controller
{
    //
    private $customer;
    function __construct(Customer $customer )
    {
        $this->customer = $customer;
    }
    public function loginCheckout(){
        return view('pages.login_register');
    }
    public function register(Request $request){
        $rule=[
            'username'=>'required|unique:customers,username|min:6',
            'password'=>'required',
            'fullname'=>'required',
            'email'=>'required|email',
            'phone'=>'required'
        ];
        $messages=[
            'username.required'=>'Tài khoản không đuợc để trống!',
            'fullname.required'=>'Họ và tên không đuợc để trống!',
            'username.unique'=>'Tài khoản đã tồn tại, vui lòng thử lại!',
            'username.min'=>'Tên tài khoản tối thiểu 6 ký tự, vui lòng thử lại!',
            'password.required'=>'Mật khẩu không đuợc để trống!',
            'email.required'=>'Email không đuợc để trống!',
            'email.email'=>'Email không đúng định dạng!',
            'phone.required'=>'Số điện thoại không đuợc để trống!',
        ];
        $validator = \Illuminate\Support\Facades\Validator::make($request->all(),$rule,$messages);
        //nếu tồn tại lỗi => trả về giao diện lỗi
        if($validator->fails()){
            return response()->json([
               'error'=>true,
               'message'=>$validator->errors()
            ],200);
        }
        else{
            $customer = new Customer();
            $customer->username = $request->username;
            $customer->password = md5($request->password);
            $customer->email = $request->email;
            $customer->fullname = $request->fullname;
            $customer->phone = $request->phone;
            $customer->save();

            // đăng ký đ cần session làm j cả =))
            // $request->$request->session()->put('id_customer', $customer->id);
            // $request->$request->session()->put('username_customer', $customer->id);
            return response()->json([
                'error'=>false,
                'message'=>'Đăng ký thành công'
            ],200);
        }
    }
    public function checkout(Request $request){
        // dd($request->session()->get('id_customer'));
        $user =  $this->customer->find($request->session()->get('id_customer'));
        return view('pages.checkout',compact('user'));
    }
    public function postLogin(Request $request){
        $rule=[
            'user_name'=>'required',
            'user_password'=>'required'
        ];
        $messages=[
            'user_name.required'=>'Tài khoản không được để trống !',
            'user_password.required'=>'Mật khẩu không được để trống !'
        ];
        $validator = \Illuminate\Support\Facades\Validator::make($request->all(),$rule,$messages);
        if($validator->fails()){
            $errors = $validator->errors();
            return view('pages.login_register',compact('errors'));
        }
        $username = $request->user_name;
        $password = $request->user_password;

        $list_user = $this->customer->all();
        // dd( $list_user);
        foreach($list_user as $user){
            if($username == $user->username && md5($password) == $user->password){
                $request->session()->put('id_customer',$user->id);
                $request->session()->put('username_customer',$username);
                $request->session()->put('fullname_customer',$user->fullname);
                return redirect()->route('home.index');
            }
        }
        return view('pages.login_register',['errors'=>$validator->errors()])->with('notification','Tài khoản hoặc mật khẩu không chính xác !');
    }
    public function logout(Request $request){
        $request->session()->forget('id_customer');
        $request->session()->forget('username_customer');
        $request->session()->forget('fullname_customer');
        return redirect()->route('home.index');
    }
    public function infoAccount(){
        return view('pages.info_account');
    }
}
