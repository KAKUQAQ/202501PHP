<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>添加商品</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            max-width: 500px;
            margin: auto;
            padding: 1em;
            border: 1px solid #ccc;
            border-radius: 1em;
        }
        div + div {
            margin-top: 1em;
        }
    </style>
</head>
<body>
<h1>添加商品</h1>
<form action="../index.php?controller=Product&action=add" method="post" enctype="multipart/form-data">
    <div>
        <label for="name">商品名称：</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="price">价格：</label>
        <input type="number" name="price" id="price" required>
    </div>
    <div>
    <label for="description">商品描述：</label>
    <textarea name="description" id="description" required></textarea>
    </div>
    <div>
        <label for="image">图片：</label>
        <input type="file" name="image" id="image" required>
    </div>
    <div>
        <button type="submit">提交</button>
    </div>
</form>
</body>
</html>