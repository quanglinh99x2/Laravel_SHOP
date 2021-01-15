@extends('layouts.index')
@section('title')
    <title>Đăng nhập - Đăng ký</title>
@endsection
@section('css')

@endsection
@section('content')

<div class="breadcrumb-area pt-35 pb-35 bg-gray">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="{{ route('home.index') }}">Trang chủ</a>
                </li>
                <li class="active">Đăng nhập / Đăng ký </li>
            </ul>
        </div>
    </div>
</div>
<div class="login-register-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-toggle="tab" href="#lg1">
                            <h4> Đăng nhập </h4>
                        </a>
                        <a data-toggle="tab" href="#lg2">
                            <h4> Đăng ký </h4>
                        </a>
                    </div>

                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    @if (isset($errors))
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    @if (session('notification'))
                                        <div class="alert alert-danger">
                                            {{ session('notification') }}
                                        </div>
                                    @endif
                                    <form action="{{ route('post.login.customer') }}" method="post">
                                        @csrf
                                        <input type="text" name="user_name" placeholder="Username">
                                        <input type="password" name="user_password" placeholder="Password">
                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                                <input name="remember_me" type="checkbox">
                                                <label>Remember me</label>
                                                <a href="#">Quên mật khẩu?</a>
                                            </div>
                                            <button type="submit">Đăng nhập</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="lg2" class="tab-pane">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <p class="error errorLogin" style="color:red; font-size:12px ; display:none"></p>
                                    <form action="{{ route('register.customer') }}" method="post">
                                        @csrf
                                        <p class="error errorUsername" style="color:red;font-size:12px ; display:none"></p>
                                        <input id="username" type="text" name="username" placeholder="Username ">
                                        <p class="error errorFullname" style="color:red;font-size:12px ; display:none"></p>
                                        <input id="fullname" type="text" name="fullname" placeholder="Fullname ">

                                        <p class="error errorPassword" style="color:red;font-size:12px ; display:none"></p>
                                        <input  id="password" type="password" name="password" placeholder="Password">
                                        <p class="error errorEmail" style="color:red;font-size:12px ; display:none"></p>
                                        <input id="email" name="email" placeholder="Email" type="email">
                                        <p class="error errorPhone" style="color:red;font-size:12px ; display:none"></p>
                                        <input id="phone" name="phone"  placeholder="Phone" type="number">

                                        <div class="button-box">

                                            <button id="btn-submit" type="submit">Đăng ký</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')

    <script src="{{ asset('parlo/assets/js/addCart.js') }}"></script>
    <script>
        $(document).ready(function () {
            $("#btn-submit").click(function (e) {
            e.preventDefault();
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });

            $.ajax({
                'url':'register',
                'data':{
                    'username': $('#username').val(),
                    'fullname': $('#fullname').val(),
                    'email': $('#email').val(),
                    'password': $('#password').val(),
                    'phone': $('#phone').val(),
                },
                'type':'POST',
                success:function(data){
                    console.log(data);
                    if(data.error == true){
                        $('.error').hide();
                        if(data.message.username != undefined){
                            $('.errorUsername').show().text(data.message.username[0]);
                        }
                        if(data.message.fullname != undefined){
                            $('.errorFullname').show().text(data.message.fullname[0]);
                        }
                        if(data.message.phone != undefined){
                            $('.errorPhone').show().text(data.message.phone[0]);
                        }
                        if(data.message.email != undefined){
                            $('.errorEmail').show().text(data.message.email[0]);
                        }
                        if(data.message.password != undefined){
                            $('.errorPassword').show().text(data.message.password[0]);
                        }

                        // if(data.message.errorLogin != undefined){
                        //     $('.errorLogin').show().html("<div class='alert alert-danger'>"+data.message
                        //         .errorLogin[0]+"</div>");
                        // }
                    }
                    else{
                        // window.location.href = "{{asset('/login-checkout')}}";
                        alertify.success('Đăng ký thành công !');
                    }
                }
            });
        });
        });
    </script>
@endsection
