<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品详情</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: auto;
            padding: 1em;
            border: 1px solid #ccc;
            border-radius: 1em;
        }
        img {
            max-width: 100%;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>购买商品</h1>
    <p><strong>名称：</strong><?php echo htmlspecialchars($product['name']); ?></p>
    <p><strong>价格：</strong><?php echo (float)$product['price']; ?></p>
    <p><strong>描述：</strong><?php echo htmlspecialchars($product['description']); ?></p>
    <p><strong>图片：</strong></p>
    <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
    <div style="margin-top: 20px;">
        <a href="../index.php?controller=Product&action=purchase&id=<?php echo $product['id']; ?>">购买</a>
        <a href="../index.php?controller=Product&action=update&id=<?php echo $product['id']; ?>">更新</a>
        <a href="../index.php?controller=Product&action=list">返回商品列表</a>
    </div>
</div>
</body>
</html>