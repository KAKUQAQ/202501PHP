@extends('layouts/app')

@section('title', '更新商品')

@section('content')

    <!-- 更新商品 -->
    <div class="container d-flex justify-content-center">
        <div class="update-container">
            <h2 class="text-center">更新商品</h2>
            @include('layouts._form_errors')
            <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
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
                    <a href="javascript:void(0);" class="btn btn-primary px-4" data-bs-toggle="modal" data-bs-target="#exampleModal">删除</a>
                    <a href="{{ route('products.index') }}" class="btn btn-secondary px-4">返回</a>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">删除商品确认</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    数据删除后无法恢复, 你确定要删除吗?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
                    <form action="{{ route('products.destroy', $product->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">删除</button>
                    </form>
                </div>
            </div>
        </div>

@endsection
