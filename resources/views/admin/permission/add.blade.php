
@extends('admin.layouts.admin')
@section('title')
    <title>Trang quản trị</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('admins/role/add/add.css') }}">
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.partials.content_header',['name'=>'menu','key'=>'add'])
        <div class="content">
            <div class="container-fluid">

                <div class="row ml-3 mr-3">
                    <form action = "{{route('permission.store')}}" method="POST" style="width:100%">
                    <div class="col-md-12">
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

                            @csrf

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Chọn menu cha</label>
                                <select class="form-control" name = "permission_parent">
                                    <option value="">Chọn tên module</option>
                                    @foreach (config('permissions.permission_parent') as $permission_parent_item)
                                    <option value="{{ $permission_parent_item }}">{{ $permission_parent_item }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="card border-info mb-3 pl-0 pr-0 col-md-12">
                                <div class="card-header bg-info">
                                    <label>
                                        <input type="checkbox" name="" id="" class="checkbox-wrapper mr-2">
                                    </label>
                                    <strong>Chọn quyền truy cập</strong>
                                </div>

                                <div class="row">
                                    @foreach(config('permissions.permission_child') as $PermissionChildItem)
                                    <div class="card-body text-info col-md-3">
                                        <label>
                                            <input type="checkbox" value="{{ $PermissionChildItem}}" name="permission_child[]" class="checkbox-child" id="">

                                        </label>
                                        {{ $PermissionChildItem}}
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
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
