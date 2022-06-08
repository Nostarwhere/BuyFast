@extends('admin.layouts.layout')

@section('content')
    <h1>{{$title}}</h1>
        <form action="{{route('admin.edit',['id'=> $admin->id])}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" name="name" placeholder="Nhập Họ và tên" value="{{ $admin->name }}">
            </div>
            <div class="mb-3">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Nhập email" value="{{ $admin->email }}">
            </div>
            <div class="mb-3">
                <label for="">Password</label>
                <input type="text" class="form-control" name="password" placeholder="Nhập mô tả sản phẩm">
            </div>

            <button type="submit" class="btn btn-primary">Cập nhật</button>
            <a href="{{route('admin.list')}}" class="btn btn-warning"> Quay lại</a>
        </form>

@endsection

