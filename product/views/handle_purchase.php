<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>购买成功</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <meta http-equiv="refresh" content="5;url=index.php?controller=Product&action=list">
    <style>
        body {
            background-color: #f4f4f4;
            font-family: 'Arial', sans-serif;
        }
        .gradient-bg {
            background: linear-gradient(90deg, #00a1d6, #ff6699);
        }
        .success-container {
            max-width: 800px;
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
            text-align: center;
        }
    </style>
</head>
<body>

<!-- 顶部导航栏 -->
<nav class="navbar navbar-expand-lg navbar-dark gradient-bg px-3">
    <a class="navbar-brand fw-bold" href="#">猫猫商店</a>
</nav>

<!-- 购买成功提示 -->
<div class="container d-flex justify-content-center">
    <div class="success-container">
        <h2 class="text-center text-success">购买成功！</h2>
        <p>您已成功购买 <strong><?php echo htmlspecialchars($quantity); ?></strong> 个商品：<strong><?php echo htmlspecialchars($product['name']); ?></strong>。</p>
        <p class="text-muted">五秒后返回商品页面……</p>
        <a href="index.php?controller=Product&action=list" class="btn btn-primary mt-3">立即返回</a>
    </div>
</div>

<!-- 底部导航 -->
<footer class="text-center text-light py-3 mt-4 gradient-bg">
    <p>© 2025 猫猫商店 | <a href="#" class="text-light">联系我们</a></p>
</footer>

</body>
</html>

