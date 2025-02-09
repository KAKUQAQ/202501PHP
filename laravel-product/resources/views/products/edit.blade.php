@extends('layouts/app')

@section('title', '更新商品')

@section('content')

    <!-- 更新商品 -->
    <div class="container d-flex justify-content-center">
        <div class="update-container">
            <h2 class="text-center">更新商品</h2>
            @include('layouts._form_errors')
            <form action="{{ route('products.edit', $product->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">商品名称：</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $product->name }}" required>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">价格：</label>
                    <input type="number" class="form-control" name="price" id="price" value="{{ $product->price }}" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">商品描述：</label>
                    <textarea class="form-control" name="description" id="description" rows="3" required>{{ $product->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">上传新图片：</label>
                    <input type="file" class="form-control" name="image" id="image">
                    <p class="mt-2">当前图片：</p>
                    <img src="{{ asset('storage/' . $product->image) }}" class="update-product-img" alt="当前图片">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary px-4">提交更新</button>
                </div>
            </form>
            <form action="{{ route('products.destroy', $product->id) }}" method="post" style="margin-top: 10px">
                @csrf
                @method('DELETE')
                <div class="text-center">
                    <button type="submit" class="btn btn-primary px-4">删除</button>
                    <a href="{{ route('products.index') }}" class="btn btn-secondary px-4">返回</a>
                </div>
            </form>
        </div>
    </div>

@endsection
