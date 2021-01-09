
@extends('admin.layouts.admin')
@section('title')
    <title>Trang config settings</title>
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{asset('admins/setting/list/list.js')}}"></script>

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
                        <div class="btn-group float-right mb-2 mr-5">
                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                Thêm mới
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('setting.add').'?type=text'}}">Text</a>
                                <a class="dropdown-item" href="{{route('setting.add').'?type=textarea'}}">Textarea</a>
                            </div>
                        </div>
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">config_key</th>
                                <th scope="col">config_value</th>
                                <th scope="col">Ngày tạo</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($settings as $item)
                                <tr>
                                    <th scope="row">{{$item->id}}</th>
                                    <td>{{ $item->config_key }}</td>
                                    <td>{{ $item->config_value }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <a href="{{route('setting.edit',['id' => $item->id])}}" class="btn
                                        btn-default">Sửa</a>
                                        <a href="{{route('setting.delete',['id' => $item->id])}}" class="btn_delete btn
                                        btn-danger">Xóa</a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <div class="col-md-12">
                            {{ $settings->links() }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

