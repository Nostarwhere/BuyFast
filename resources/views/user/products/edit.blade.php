@extends('admin.layouts.layout')

@section('content')
    <h1>{{$title}}</h1>
        <form action="{{route('products.product.update', ['id'=> $product->id])}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="">Tên sản phẩm</label>
                <input type="text" class="form-control" name="product_name" placeholder="Nhập tên sản phẩm" value="{{$product->product_name}}">
            </div>
            <div class="mb-3">
                <label for="">Mã sản phẩm</label>
                <input type="text" class="form-control" name="product_model" placeholder="Nhập mã sản phẩm" value="{{$product->product_model}}">
            </div>
            <div class="mb-3">
                <label for="">Mô tả sản phẩm</label>
                <input type="text" class="form-control" name="product_description" placeholder="Nhập mô tả sản phẩm" value="{{$product->product_description}}">
            </div>
            <div class="mb-3">
                <label for="">Giá</label>
                <input type="number" class="form-control" name="price" placeholder="Giá sản phẩm" value="{{$product->price}}">
            </div>

            <button type="submit" class="btn btn-primary">Cập nhật sản phẩm</button>
            <a href="{{route('products.product.list')}}" class="btn btn-warning"> Quay lại</a>
        </form>

@endsection

