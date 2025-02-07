@extends('layouts/app')

@section('title', '添加商品')

@section('content')

    <!-- 添加商品表单 -->
    <div class="container d-flex justify-content-center">
        <div class="form-container">
            <h2 class="text-center">添加商品</h2>
            @include('layouts._form_errors')
            <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">商品名称：</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">价格：</label>
                    <input type="number" class="form-control" name="price" id="price" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">商品描述：</label>
                    <textarea class="form-control" name="description" id="description" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">图片：</label>
                    <input type="file" class="form-control" name="image" id="image" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary px-4">提交</button>
                </div>
            </form>
        </div>
    </div>


@endsection
