
@extends('admin.layouts.admin')
@section('title')
    <title>Danh sách users</title>
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{asset('admins/user/list/list.js')}}"></script>

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
                        <a href="{{ route('user.add') }}" class="btn btn-success float-right m-2">Add</a>
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên</th>
                                <th scope="col">Email</th>
                                <th scope="col">Ngày tạo</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $item)
                                <tr>
                                    <th scope="row">{{$item->id}}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <a href="{{route('user.edit',['id' => $item->id])}}" class="btn
                                        btn-default">Sửa</a>
                                        <a href="{{route('user.delete',['id' => $item->id])}}" class="btn_delete btn
                                        btn-danger">Xóa</a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <div class="col-md-12">
                            {{ $users->links() }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

