
@extends('admin.layouts.admin')
@section('title')
    <title>Đơn hàng</title>
@endsection
@section('content')
<style>
    #tb-order td:hover{
        background-color: rgb(183, 209, 231);
    }
    .wp-status-done{
        background: #588a5c;
        padding-left: 4px;
        border-radius: 4px;
        color: #fff;
        margin-top: 2px;
    }
    .wp-status{
        background: #793f3f;
        padding-left: 4px;
        border-radius: 4px;
        color: #fff;
        margin-top: 2px;
    }
</style>
    <div class="content-wrapper">
        @include('admin.partials.content_header',['name'=>'ORDER','key'=>'LIST'])
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
                        <a href="" class="btn btn-success float-right m-2">Thêm</a>
                        <table id="tb-order" class="table table-bordered table-sm">
                            <thead>
                              <tr class="" style="background-color: #6f1d54!important;color:#fff;">
                                <th>Mã đơn hàng</th>
                                <th>Tên khách hàng</th>
                                <th>Hình thức vận chuyển</th>
                                <th>Địa chỉ giao hàng</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Ghi chú</th>
                                <th>Số lượng</th>
                                <th>Tổng tiến</th>
                                <th>Ngày đặt</th>
                                <th>Trạng thái</th>
                                <th style="width: 171px;">option</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($order as $item)

                                <tr>
                                    <td>000{{ $item->id }}</td>
                                    <td>{{ $item->customer->fullname }}</td>
                                    <td>{{ $item->payment->payment_method }}</td>
                                    <td>{{ $item->shipping->address }}</td>
                                    <td>{{ $item->shipping->email }}</td>
                                    <td>{{ $item->shipping->phone }}</td>
                                    <td>{{ $item->shipping->note }}</td>
                                    <td>{{ $item->qty }}</td>
                                    <td>{{ $item->amount }}</td>
                                    <td>{{ $item->date_order }}</td>
                                    <td>

                                        @if ($item->status == 1)
                                            {!!  "<div class='wp-status-done'>Đã hoàn tất</div>" !!}
                                        @else
                                             {!!  "<div class='wp-status'>Chưa hoàn tất</div>" !!}
                                        @endif
                                    </td>
                                    <td>
                                        <a href=""><i class="fa fa-eye btn btn-info" aria-hidden="true"></i></a>
                                        <a href=""><i class="fa fa-pencil btn btn-success" aria-hidden="true"></i></a>
                                        <a href=""><i class="fa fa-trash-o btn btn-danger" aria-hidden="true"></i></a>
                                    </td>
                                  </tr>
                                @endforeach


                            </tbody>
                          </table>
                        <div class="col-md-12">
                            {{-- {{ $menus->links() }} --}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
