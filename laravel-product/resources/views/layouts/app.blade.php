<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
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
        .form-container {
            max-width: 500px;
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
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

<!-- 商品展示 -->
<div class="container mt-4">
    @yield('content')
</div>

<footer class="text-center text-light py-3 mt-4 gradient-bg">
    <p>© 2025 猫猫商店 | <a href="#" class="text-light">联系我们</a></p>
</footer>

</body>
</html>
