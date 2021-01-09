
@extends('admin.layouts.admin')
@section('title')
    <title>Sửa danh mục</title>
@endsection
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset("admins/slider/edit/edit.css")}}">
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.partials.content_header',['name'=>'slider','key'=>'edit'])
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
                        <form action = "{{route('trademark.postEdit',['id'=>$trademark->id])}}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Tên thương hiệu</label>
                                <input type="text" name = "name" class="form-control" id="exampleInputEmail1"
                                       aria-describedby="" placeholder="Nhập tên thương hiệu"
                                       value="{{$trademark->name}}"
                                >
                            </div>
                            <div class="form-group">
                                <label for="">Hình ảnh</label>
                                <input type="file" name = "trademark_image" class="form-control-file" id="exampleInputEmail1"
                                       aria-describedby=""  >
                                <div class="col-md-12">
                                    <div class="row">
                                        <img class="image_feature" src="{{asset($trademark->slider_image)}}" alt="">

                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </form>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="{{asset("admins/product/add.js")}}"></script>

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script> CKEDITOR.replace( 'editor1', {
            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
        } );</script>
@endsection
