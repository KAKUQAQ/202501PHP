<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>更新商品</title>
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
        .update-container {
            max-width: 500px;
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        .update-product-img {
            max-width: 100px;
            border-radius: 5px;
            display: block;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<!-- 顶部导航栏 -->
<nav class="navbar navbar-expand-lg navbar-dark gradient-bg px-3">
    <a class="navbar-brand fw-bold" href="#">猫猫商店</a>
</nav>

<!-- 更新商品 -->
<div class="container d-flex justify-content-center">
    <div class="update-container">
        <h2 class="text-center">更新商品</h2>
        <form action="index.php?controller=Product&action=update&id=<?php echo $product['id']; ?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">商品名称：</label>
                <input type="text" class="form-control" name="name" id="name" value="<?php echo htmlspecialchars($product['name']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">价格：</label>
                <input type="number" class="form-control" name="price" id="price" value="<?php echo (float)$product['price']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">商品描述：</label>
                <textarea class="form-control" name="description" id="description" rows="3" required><?php echo htmlspecialchars($product['description']) ; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">上传新图片：</label>
                <input type="file" class="form-control" name="image" id="image">
                <p class="mt-2">当前图片：</p>
                <img src="<?php echo htmlspecialchars($product['image']); ?>" class="update-product-img" alt="当前图片">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary px-4">提交更新</button>
                <a href="index.php?controller=Product&action=list" class="btn btn-secondary px-4">返回</a>
            </div>
        </form>
    </div>
</div>

<!-- 底部导航 -->
<footer class="text-center text-light py-3 mt-4 gradient-bg">
    <p>© 2025 猫猫商店 | <a href="#" class="text-light">联系我们</a></p>
</footer>

</body>
</html>
