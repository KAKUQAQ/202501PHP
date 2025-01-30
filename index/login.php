<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim(htmlspecialchars($_POST['username']));
    $password = trim(htmlspecialchars($_POST['password']));

    // 预设的用户名和密码
    $valid_users = [
        "admin" => "123456",
        "user" => "password"
    ];

    // 检查变量是否为空
    if ($username === "" || $password === "") {
        echo "<script>alert('用户名或密码不能为空'); window.location.href='login.html';</script>";
        exit;
    }

    // 验证用户名和密码
    if (!isset($valid_users[$username])) {
        echo "<script>alert('用户名不存在'); window.location.href='login.html';</script>";
        exit;
    }

    if ($valid_users[$username] !== $password) {
        echo "<script>alert('用户名或密码错误'); window.location.href='login.html';</script>";
        exit;
    }

    // 登录成功
    echo "<script>window.location.href='test1.html?username=$username';</script>";
}
?>

