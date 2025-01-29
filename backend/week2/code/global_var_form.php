<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>测试</title>
</head>
<body>
<?php if (!isset($_GET['isLogin'])): ?>
    <form action="http://127.0.0.1/202501PHP/backend/week2/code/global_var.php?location=Japan&lang=ja" method="post" enctype="multipart/form-data">
        <div>
            <label for="username">用户名:</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">密码:</label>
            <input type="password" name="password" id="password">
        </div>
    <!--    <div>-->
    <!--        <label for="photo"></label>-->
    <!--        <input type="file" name="photo" id="photo">-->
    <!--    </div>-->
        <input type="submit" value="登录">
    </form>
<?php elseif ($_GET['isLogin'] == "true"): ?>
    <h1>登陆成功</h1>
<?php else: ?>
    <h1>登录失败</h1>
<?php endif; ?>
</body>
</html>