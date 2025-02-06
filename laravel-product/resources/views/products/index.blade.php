@extends('layouts/app')

@section('title', '商品列表')

@section('content')
    <div class="row">
        <?php if(count($products) > 0): ?>
            <?php foreach($products as $product): ?>
        <div class="col-md-4 mb-4">
            <div class="card product-card shadow-sm">
                <img src="<?php echo htmlspecialchars($product['image']); ?>" class="card-img-top product-img" alt="<?php echo htmlspecialchars($product['name']); ?>">
                <div class="card-body text-center">
                    <h5 class="card-title"><?php echo htmlspecialchars($product['name']); ?></h5>
                    <p class="card-text text-danger">¥<?php echo (float)$product['price']; ?></p>
                    <div class="d-flex justify-content-center gap-2">
                        <a href="index.php?controller=Product&action=detail&id=<?php echo $product['id']; ?>" class="btn btn-sm btn-outline-primary">查看</a>
                        <a href="index.php?controller=Product&action=purchase&id=<?php echo $product['id']; ?>" class="btn btn-sm btn-primary">购买</a>
                        <a href="index.php?controller=Product&action=update&id=<?php echo $product['id']; ?>" class="btn btn-sm btn-outline-primary">更新</a>
                        <a href="index.php?controller=Product&action=delete&id=<?php echo $product['id']; ?>" class="btn btn-sm btn-primary">删除</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        <?php else: ?>
        <p class="text-center fs-4 text-muted">没有商品</p>
        <?php endif; ?>
    </div>
    <div style="text-align: center; margin-top: 20px;">
        <a href="index.php?controller=Product&action=add" style="text-decoration: none; color: #595ca8">添加商品</a>
    </div>
@endsection
