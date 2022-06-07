@extends('admin.layouts.layout')

@section('content')
    <div class="container">
        <h1>{{$title}}</h1>
        <form action="{{route('products.product.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="">Tên sản phẩm</label>
                <input type="text" class="form-control" name="product_name" placeholder="Nhập tên sản phẩm">
            </div>
            <div class="mb-3">
                <label for="">Mã sản phẩm</label>
                <input type="text" class="form-control" name="product_model" placeholder="Nhập mã sản phẩm">
            </div>
            <div class="mb-3">
                <label for="">Mô tả sản phẩm</label>
                <input type="text" class="form-control" name="product_description" placeholder="Nhập mô tả sản phẩm">
            </div>
            <div class="mb-3">
                <label for="">Giá</label>
                <input type="number" class="form-control" name="price" placeholder="Giá sản phẩm">
            </div>

            <button type="submit" class="btn btn-primary">Thêm mới</button>
            <a href="{{route('products.product.list')}}" class="btn btn-warning"> Quay lại</a>
        </form>
    </div>

@endsection

