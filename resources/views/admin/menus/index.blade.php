
@extends('admin.layouts.admin')
@section('title')
    <title>Trang quản trị</title>
@endsection
@section('content')
    <div class="content-wrapper">
        @include('admin.partials.content_header',['name'=>'menu','key'=>'list'])
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
                        <a href="{{route('menus.add')}}" class="btn btn-success float-right m-2">Add</a>
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên menu</th>
                                <th scope="col">Ngày tạo</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($menus as $item)
                                <tr>
                                    <th scope="row">{{$item->id}}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <a href="{{route('menus.edit',['id' => $item->id])}}" class="btn btn-default">Sửa</a>
                                        <a href="{{route('menus.delete',['id' => $item->id])}}" class="btn btn-danger">Xóa</a>
                                    </td>
                                     </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <div class="col-md-12">
                            {{ $menus->links() }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
