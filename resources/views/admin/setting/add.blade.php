
@extends('admin.layouts.admin')
@section('title')
    <title>Thêm mới Setting</title>
@endsection
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset("admins/product/add/add.css")}}">
@endsection
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.partials.content_header',['name'=>'Settings','key'=>'add'])
        <div class="content">
            <div class="container-fluid">

                <div class="row ml-5">
                    <div class="col-md-8">
                        @if (count($errors) >0)
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $err)
                                    {{ $err }} <br>
                                @endforeach
                            </div>
                        @endif
                        @if (session('notification'))
                            <div class="alert alert-success">
                                {{ session('notification') }}
                            </div>
                        @endif
                        <form action = "{{route('setting.postAdd')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Config key</label>
                                <input type="text" name = "config_key" class="form-control @error('config_key') is-invalid @enderror" id="exampleInputEmail1"
                                       aria-describedby="" placeholder="Nhập config key"
                                       value="{{old('config_key')}}">
                            </div>
                            @if(request()->type ==="text")
                                <div class="form-group">
                                    <input type="hidden" name="type" value="text">
                                    <label for="">Config value</label>
                                    <input type="text" name = "config_value" class="form-control @error('config_value') is-invalid @enderror" id="exampleInputEmail1"
                                           aria-describedby="" placeholder="Nhập config value"
                                           value="{{old('config_value')}}">
                                </div>
                            @elseif(request()->type === "textarea")
                                <div class="form-group">
                                    <input type="hidden" name="type" value="textarea">
                                    <label for="">Config value</label>
                                    <textarea class="form-control" name="config_value" id="" cols="30" rows="5">

                                    </textarea>
                                </div>
                            @endif


                            <button type="submit" class="btn btn-primary">Thêm mới</button>
                        </form>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>

        </div>
    </div>
@endsection

@section('js')
    <script src="{{asset("admins/product/add/add.js")}}"></script>

@endsection
