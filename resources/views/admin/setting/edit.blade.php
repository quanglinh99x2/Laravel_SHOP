
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
        @include('admin.partials.content_header',['name'=>'Settings','key'=>'edit'])
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
                        <form action = "{{route('setting.postEdit',['id'=>$setting])}}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Config key</label>
                                <input type="text" name = "config_key" class="form-control @error('config_key') is-invalid @enderror" id="exampleInputEmail1"
                                       aria-describedby="" placeholder="Nhập config key"
                                       value="{{$setting->config_key}}">
                            </div>
                            @if($setting->type ==="text")
                                <div class="form-group">
                                    <input type="hidden" name="type" value="text">
                                    <label for="">Config value</label>
                                    <input type="text" name = "config_value" class="form-control @error('config_value') is-invalid @enderror" id="exampleInputEmail1"
                                           aria-describedby="" placeholder="Nhập config value"
                                           value="{{$setting->config_value}}">
                                </div>
                            @elseif($setting->type === "textarea")
                                <div class="form-group">
                                    <input type="hidden" name="type" value="textarea">
                                    <label for="">Config value</label>
                                    <textarea class="form-control" name="config_value" id="" rows="5">
                                        {{$setting->config_value}}
                                    </textarea>
                                </div>
                            @endif

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
