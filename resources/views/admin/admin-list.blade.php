@extends('admin.layouts.layout')


@section('content')

    <div class="admin-list">
        <h1>Danh sách quản trị viên</h1>
        <a class="btn btn-primary" href=" {{route('admin.create')}} ">Thêm người dùng</a>
        <hr>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th width="5%">STT</th>
                    <th>Họ và Tên</th>
                    <th>Email</th>
                    <th width="5%">Sửa</th>
                    <th width="5%">xóa</th>
                </tr>
                <tbody>
                    @if (!empty($adminsList))
                        @foreach ($adminsList as $id => $admin)
                            <tr>
                                <td> {{$admin->id}} </td>
                                <td> {{$admin->name}} </td>
                                <td> {{$admin->email}} </td>
                                <td>
                                    <a href="{{route('admin.edit', ['id'=>$admin->id])}}" class="btn btn-warning btn-sm">Sửa</a>
                                </td>
                                <td>
                                    <a href="{{route('admin.edit', ['id'=>$admin->id])}}" class="btn btn-danger btn-sm">Xóa</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                            <tr>
                                <td colspan="4">Không có sản phẩm</td>
                            </tr>
                    @endif

                </tbody>
            </thead>
        </table>
    </div>

@endsection
