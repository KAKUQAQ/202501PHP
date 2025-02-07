@extends('layouts/app')

@section('title', '商品详情')

@section('content')

    <div class="container d-flex justify-content-center">
        <div class="product-container">
            <h2 class="text-center">{{ $product->name }}</h2>
            <img src="{{ $product->image }}" class="detail-product-img" alt="{{ $product->name }}">
            <p><strong>名称：</strong>{{ $product->name }}</p>
            <p><strong>价格：</strong><span class="text-danger">¥{{number_format($product->price,2)}}</span></p>
            <p><strong>描述：</strong>{{ $product->description }}</p>

            <div class="d-flex justify-content-center gap-3 mt-4">
                <a href="index.php?controller=Product&action=purchase&id=<?php echo $product['id']; ?>" class="btn btn-primary">购买</a>
                <a href="{{route('products.edit', $product->id)}}" class="btn btn-warning">更新</a>
                <a href="{{ route('products.index') }}" class="btn btn-secondary">返回</a>
            </div>
        </div>
    </div>

@endsection
