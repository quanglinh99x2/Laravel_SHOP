
@extends('admin.layouts.admin')
@section('title')
    <title>Trang quản trị</title>
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.partials.content_header',['name'=>'menu','key'=>'edit'])
        <div class="content">
            <div class="container-fluid">

                <div class="row ml-5">
                    <div class="col-md-6">
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
                        <form action = "{{route('menus.postEdit',['id'=>$menu->id])}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Nhập tên menu</label>
                                <input type="text" name = "name" value="{{$menu->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="Nhập tên danh mục">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Chọn menu cha</label>
                                <select class="form-control" name = parent_id>
                                    <option value="0">Chọn menu cha</option>
                                    {!! $htmlOption  !!}

                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Sửa</button>
                        </form>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
