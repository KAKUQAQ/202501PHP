<?php
//index.php 项目入口文件，负责加载控制器和模型，并分发请求

//自动加载控制器和模型
spl_autoload_register (function ($classname){
    if (file_exists('controllers/' . $classname . '.php')) {
        include('controllers/' . $classname . '.php');
    } elseif (file_exists('models/' . $classname . '.php')) {
        include('models/' . $classname . '.php');
    }
});

//获取URL参数，确定要调用的方法和控制器
$controller = $_GET['controller'] ?? 'Product';
$action = $_GET['action'] ?? 'list';

//创建控制器实例并调用对应方法
$controller = new $controller() . 'Controller';
$controller->{$action}();