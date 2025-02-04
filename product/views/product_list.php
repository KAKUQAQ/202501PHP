<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>商品列表</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f4f4f4;
            font-family: 'Arial', sans-serif;
        }
        .gradient-bg {
            background: linear-gradient(90deg, #00a1d6, #ff6699);
        }
        .product-card {
            transition: transform 0.3s ease-in-out;
            border-radius: 10px;
            overflow: hidden;
        }
        .product-card:hover {
            transform: scale(1.05);
        }
        .product-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>

<!-- 顶部导航栏 -->
<nav class="navbar navbar-expand-lg navbar-dark gradient-bg px-3">
    <a class="navbar-brand fw-bold" href="#">猫猫商店</a>
</nav>

<!-- 商品展示 -->
<div class="container mt-4">
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
    <div style="text-align: center; margin-top: 20px">
        <a href="index.php?controller=Product&action=add">添加商品</a>
    </div>
</div>

<!-- 底部导航 -->
<footer class="text-center text-light py-3 mt-4 gradient-bg">
    <p>© 2025 猫猫商店 | <a href="#" class="text-light">联系我们</a></p>
</footer>

</body>
</html>
