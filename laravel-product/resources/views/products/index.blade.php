@extends('layouts/app')

@section('title', '商品列表')

@section('content')
    <div class="row">
        @if($products->count() > 0)
            @foreach($products as $product)
        <div class="col-md-4 mb-4">
            <div class="card product-card shadow-sm">
                <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top product-img" alt="{{ $product->name }}">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text text-danger">¥{{ number_format($product->price,2) }}</p>
                    <div class="d-flex justify-content-center gap-2">
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-outline-primary">查看</a>
                        <a href="{{ route('orders.index') }}" class="btn btn-sm btn-primary">购买</a>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-outline-primary">更新</a>

                    </div>
                </div>
            </div>
        </div>
            @endforeach
        @else
        <p class="text-center fs-4 text-muted">没有商品</p>
        @endif
    </div>
    <div style="text-align: center; margin-top: 20px;">
        <a href="{{ route('products.create') }}" style="text-decoration: none; color: #595ca8">添加商品</a>
    </div>
@endsection
