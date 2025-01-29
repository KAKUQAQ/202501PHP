<?php

////global
//$a = 1;
//// 超出当前脚本中的当前变量的作用域
//function test(): void
//{
//    global $a;
//    echo $a;
//}
//test();
//echo "<br>";
//// PHP超全局变量
////无需global可以在PHP脚本中的任何地方访问
////通过URL传递参数
//var_dump($_GET);
//echo "<br>";
//// 通过表单提交参数
//var_dump($_POST);
//echo "<br>";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (
        isset($_POST['username'])&&
        $_POST['username'] === 'admin'&&
        isset($_POST['password'])&&
        $_POST['password'] === '123456'
    ) {
        header('Location: http://127.0.0.1/202501PHP/backend/week2/code/global_var_form.php?isLogin=true',true,302);
        exit;
    } else {
        header('Location: http://127.0.0.1/202501PHP/backend/week2/code/global_var_form.php?isLogin=false',true,302);
        exit;
    }
}
echo "<br>";
// 通过cookie传递参数
$_COOKIE['is_admin'] = true;
var_dump($_COOKIE);
echo "<br>";
// 设置cookie有效时间
// setcookie('username', 'Tom', time() + 3600,'/');
// 访问cookie数据
// if (isset($_COOKIE['username'])) {
//     echo "用户名：" . $_COOKIE['username'];
// }
// 通过session传递参数，访问$session时要先启动session_start
session_start();
$_SESSION['is_login'] = true;
var_dump($_SESSION);
echo "<br>";
var_dump($_REQUEST);
echo "<br>";
// 通过文件传递参数
var_dump($_FILES);
echo "<br>";
var_dump($_SERVER);
echo "<br>";
// 环境变量
var_dump($_ENV);
echo "<br>";
// 全局变量都是数组，通过键值对储存数据，通过键名访问
//$_SESSION和$_COOKIE主要用来储存用户的登录状态，以及用户的一些信息
//$_COOKIE 时存储在客户端的，通过这只过期时间，可以时间长时间储存
