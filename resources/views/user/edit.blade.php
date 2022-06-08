@extends('admin.layouts.layout')

@section('content')
    <h1>{{$title}}</h1>
        <form action="{{route('users.user.update',['id'=> $user->id])}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" name="name" placeholder="Nhập Họ và tên" value="{{ $user->name }}">
            </div>
            <div class="mb-3">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Nhập email" value="{{ $user->email }}">
            </div>
            <div class="mb-3">
                <label for="">Password</label>
                <input type="text" class="form-control" name="password" placeholder="Nhập mô tả sản phẩm">
            </div>

            <button type="submit" class="btn btn-primary">Cập nhật sản phẩm</button>
            <a href="{{route('users.user.list')}}" class="btn btn-warning"> Quay lại</a>
        </form>

@endsection

