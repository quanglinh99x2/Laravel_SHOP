
@extends('admin.layouts.admin')
@section('title')
    <title>Quản lý sản phẩm</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('admins/product/list/list.css')}}">
@endsection
@section('content')

    <div class="content-wrapper">
        @include('admin.partials.content_header',['name'=>'trademark','key'=>'danh sách'])
        <div class="content">
            <div class="container-fluid">
                <div class="row">
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
                    <div class="col-md-12">
                        <a href="{{ route('trademark.add') }}" class="btn btn-success float-right m-2">Add</a>
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên thương hiệu</th>
                                <th scope="col">Hình ảnh </th>
                                <th scope="col">Ngày tạo</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($trademarks as $item)
                                <tr>
                                    <th scope="row">{{$item->id}}</th>
                                    <td>{{ $item->name }}</td>

                                    <td>
                                        <img class="img-pro" src="{{asset($item->logo)}}" alt="image">
                                    </td>
                                    {{--                                    optional trả về null nếu data trả về không là object . thay vì trả về error .--}}
                                    {{--                                    optional được chạy khi không tìm thấy category của product tương ứng--}}
{{--                                    <td>{{optional($item->categories)->name}}</td>--}}
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <a href="{{route('trademark.edit',['id' => $item->id])}}" class="btn
                                        btn-default">Sửa</a>
                                        <a href="{{route
                                        ('trademark.delete',
                                        ['id' => $item->id])}}"
                                           class="btn_delete
                                         btn
                                        btn-danger">Xóa</a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <div class="col-md-12">
                            {{ $trademarks->links() }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{asset('admins/trademark/list/list.js')}}"></script>
@endsection
