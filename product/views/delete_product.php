<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>删除商品</title>
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
    </style>
</head>
<body>
<div class="container">
    <h1>删除商品</h1>
    <p>您确定要删除此商品吗？</p>
    <p><strong>名称：</strong><?php echo htmlspecialchars($product['name']); ?></p>
    <p><strong>价格：</strong><?php echo (float)$product['price']; ?></p>
    <p><strong>描述：</strong><?php echo htmlspecialchars($product['description']); ?></p>
    <form action=" ../index.php?controller=Product&action=update&id=<?php echo $product['id']; ?>" method="post">
        <div style="margin-top: 20px;">
            <button type="submit">确认删除</button>
            <a href="../index.php?controller=Product&action=list">取消</a>
        </div>
    </form>
</div>
</body>
</html>
