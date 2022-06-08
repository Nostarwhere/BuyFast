@extends('admin.layouts.layout')

@section('content')

<div class="container">
    <hr>
    <h1>{{$title}}</h1>
    <div>
        <a class="btn btn-primary" href=" {{route('products.product.create')}} ">Thêm sản phẩm</a>
        <hr>
    </div>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th width="5%">STT</th>
                <th>Tên sản phẩm</th>
                <th>Mã sản phẩm</th>
                <th>Mô tả sản phẩm</th>
                <th>Giá</th>
                <th width="5%">Sửa</th>
                <th width="5%">xóa</th>
            </tr>
            <tbody>
                @if (!empty($productsList))
                    @foreach ($productsList as $id => $product)
                        <tr>
                            <td> {{$product->id}} </td>
                            <td> {{$product->product_name}} </td>
                            <td> {{$product->product_model}} </td>
                            <td> {{$product->product_description}} </td>
                            <td> {{$product->price}} </td>
                            <td>
                                <a href="{{route('products.product.edit', ['id'=>$product->id])}}" class="btn btn-warning btn-sm">Sửa</a>
                            </td>
                            <td>
                                <a href="{{route('products.product.delete', ['id'=>$product->id])}}" class="btn btn-danger btn-sm">Xóa</a>
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
