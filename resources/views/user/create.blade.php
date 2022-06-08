@extends('admin.layouts.layout')

@section('content')
    <div class="container">
        <h1>{{$title}}</h1>
        <form action="{{route('users.user.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" name="name" placeholder="Nhập Họ và tên">
            </div>
            <div class="mb-3">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Nhập email">
            </div>
            <div class="mb-3">
                <label for="">Password</label>
                <input type="text" class="form-control" name="password" placeholder="Nhập password">
            </div>

            <button type="submit" class="btn btn-primary">Thêm mới</button>
            <a href="{{route('users.user.list')}}" class="btn btn-warning"> Quay lại</a>
        </form>
    </div>

@endsection

