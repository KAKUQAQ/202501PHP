<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>商品列表</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
<h1 style="text-align: center">商品列表</h1>
<table>
    <thead>
    <tr>
        <th>商品名称</th>
        <th>价格</th>
        <th>描述</th>
        <th>图片</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
        <?php if(count($products) > 0): ?>
            <?php foreach($products as $product): ?>
                <tr>
                    <td><?php echo htmlspecialchars($product['name']); ?></td>
                    <td><?php echo (float)$product['price']; ?></td>
                    <td><?php echo htmlspecialchars($product['description']); ?></td>
                    <td><img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>" style="max-width: 100px"></td>
                    <td>
                        <a href="http://localhost/202501PHP/product/index.php?controller=Product&action=detail&id=<?php echo $product['id']; ?>">查看</a>
                        <a href="http://localhost/202501PHP/product/index.php?controller=Product&action=update&id=<?php echo $product['id']; ?>">更新</a>
                        <a href="http://localhost/202501PHP/product/index.php?controller=Product&action=delete&id=<?php echo $product['id']; ?>">删除</a>
                        <a href="http://localhost/202501PHP/product/index.php?controller=Product&action=purchase&id=<?php echo $product['id']; ?>">购买</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">没有商品</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
<div style="text-align: center; margin-top: 20px">
    <a href="http://127.0.0.1/202501PHP/product/index.php?controller=Product&action=add">添加商品</a>
</div>
</html>