<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品详情</title>
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
        .product-container {
            max-width: 600px;
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        .detail-product-img {
            max-width: 100%;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<!-- 顶部导航栏 -->
<nav class="navbar navbar-expand-lg navbar-dark gradient-bg px-3">
    <a class="navbar-brand fw-bold" href="#">猫猫商店</a>
</nav>

<!-- 商品详情 -->
<div class="container d-flex justify-content-center">
    <div class="product-container">
        <h2 class="text-center"><?php echo htmlspecialchars($product['name']); ?></h2>
        <img src="<?php echo htmlspecialchars($product['image']); ?>" class="detail-product-img" alt="<?php echo htmlspecialchars($product['name']); ?>">
        <p><strong>名称：</strong><?php echo htmlspecialchars($product['name']); ?></p>
        <p><strong>价格：</strong><span class="text-danger">¥<?php echo (float)$product['price']; ?></span></p>
        <p><strong>描述：</strong><?php echo htmlspecialchars($product['description']); ?></p>

        <div class="d-flex justify-content-center gap-3 mt-4">
            <a href="index.php?controller=Product&action=purchase&id=<?php echo $product['id']; ?>" class="btn btn-primary">购买</a>
            <a href="index.php?controller=Product&action=update&id=<?php echo $product['id']; ?>" class="btn btn-warning">更新</a>
            <a href="index.php?controller=Product&action=list" class="btn btn-secondary">返回</a>
        </div>
    </div>
</div>

<!-- 底部导航 -->
<footer class="text-center text-light py-3 mt-4 gradient-bg">
    <p>© 2025 猫猫商店 | <a href="#" class="text-light">联系我们</a></p>
</footer>

</body>
</html>
