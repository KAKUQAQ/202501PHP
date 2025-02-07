@extends('layouts/app')

@section('title', '删除商品')

@section('content')

    <div class="delete-container">
        <h1>删除商品</h1>
        <p>您确定要删除此商品吗？</p>
        <p><strong>名称：</strong>{{ $product->name }}</p>
        <p><strong>价格：</strong>{{ number_format($product->price, 2) }}</p>
        <p><strong>描述：</strong>{{ $product->description }}</p>
        <form action="{{ route('products.destroy', $product->id) }}" method="post">
            @csrf
            @method('DELETE')
            <div style="margin-top: 20px;">
                <button type="submit">确认删除</button>
                <a href="{{ route('products.index') }}">取消</a>
            </div>
        </form>

@endsection
