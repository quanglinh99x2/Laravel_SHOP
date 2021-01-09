
@extends('admin.layouts.admin')
@section('title')
    <title>Trang quản trị</title>
@endsection
@section('content')
    <div class="content-wrapper">
        @include('admin.partials.content_header',['name'=>'home','key'=>'home'])
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
            <div class="row">

               <H1>Trang Chủ</H1>

            </div>
            <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
@endsection
