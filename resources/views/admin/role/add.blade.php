@extends('admin.layouts.admin')
@section('title')
<title>Trang quản trị</title>
@endsection
@section('content')

@section('css')
    <link rel="stylesheet" href="{{ asset('admins/role/add/add.css') }}">
@endsection
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('admin.partials.content_header',['name'=>'Vai trò','key'=>'add'])
    <div class="content">
        <div class="container-fluid">

            <div class="row ml-2 mr-2">
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
                <form action="{{route('role.postAdd')}}" method="POST" style="width:100%;">
                    <div class="col-md-12">

                        @csrf
                        <div class="form-group">
                            <label for="">Nhập tên vai trò</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                aria-describedby="" placeholder="Nhập tên vai trò">
                        </div>
                        <div class="form-group">
                            <label for="">Nhập tên hiển thị</label>
                            <input type="text" name="display_name" class="form-control" id="exampleInputEmail1"
                                aria-describedby="" placeholder="Nhập tên hiển thị">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="">Chọn quyền </label>
                        @foreach($permissionParents as $permissionParentItem)
                        <div class="card border-info mb-3 pl-0 pr-0 col-md-12">
                            <div class="card-header bg-info">
                                <label>
                                    <input type="checkbox" name="" id="" class="checkbox-wrapper mr-2">
                                </label>
                                <strong>Module {{ $permissionParentItem->name }}</strong>
                            </div>

                            <div class="row">
                                @foreach($permissionParentItem->PermissionChild as $PermissionChildItem)
                                <div class="card-body text-info col-md-3">
                                    <label>
                                        <input type="checkbox" value="{{ $PermissionChildItem->id }}" name="permission_id[]" class="checkbox-child" id="">

                                    </label>
                                    {{ $PermissionChildItem->name }}
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <button type="submit" class="btn btn-primary mb-4">Thêm mới</button>
                </form>
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $('.checkbox-wrapper').click(function (e) {
                $(this).parents('.card').find('.checkbox-child').prop('checked',$(this).prop('checked'));
            });
        });
    </script>
@endsection
