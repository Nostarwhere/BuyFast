@extends('home.layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.login') }}">
                        @csrf
                        <h1>Admin</h1>
                        <input type="text" name="email" placeholder="Nhập địa chỉ email">
                        <input type="password" name="password" placeholder="Nhập mật khẩu">
                        <button type="submit">Đăng nhập</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
