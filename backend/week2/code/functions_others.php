<?php

// 其他函数
// intval 获取变量的整数值
$strNum = "123.45";
$num = intval($strNum);
var_dump($num);
echo "<br>";
$num = (int)$strNum;
var_dump($num);
echo "<br>";
// floatval 将变量转为浮点数
$num = floatval($strNum);
var_dump($num);
echo "<br>";
// boolval 将变量转为布尔值
$isTrue = 1;
$isfalse = 0;
$bool = boolval($isTrue);
var_dump($bool);
echo "<br>";
// serialize() 将变量序列化为字符串
$user = [
    "name" => "John Doe",
    "age" => 20,
    "isAdmin" => true
];
$userStr = serialize($user);
var_dump($userStr);
echo "<br>";
//unserialize() 将字符串反序列化为变量
$user = unserialize($userStr);
var_dump($user);
echo "<br>";
//urlencode() 对URL字符串进行编码
$url = "http://www.google.com";
$url = urlencode($url);
var_dump($url);
echo "<br>";
//parse_url 用于解析URL返回其组成部分
$url2 = "http://www.google.com";
$urlArr = parse_url($url2, PHP_URL_HOST);
var_dump($urlArr);
echo "<br>";
//http_build_query 生成URL编码后的请求字符串
$data = [
    "text" => "Hello你好",
    "lang" => ["en", "zh"]
];
$queryStr = http_build_query($data);
var_dump($queryStr);
echo "<br>";
// is_array 判断变量是否存在于数组
$arr = [1, 2, 3];
$isArray = is_array($arr);
var_dump($isArray);
echo "<br>";

//判空和检查变量
//empty 检查一个变量是否为空，如果一个变量不存在或值为false，则返回true，常用于表单验证,检查输入是否为空
$var1 = "";
$var2 = "Hello";
$var3 = "0";
var_dump(empty($var1));
echo "<br>";
var_dump(empty($var2));
echo "<br>";
var_dump(empty($var3));
echo "<br>";
//if (!empty($var1)) {
//
//}

//isset 检测变量是否已经设置且为非null，如果变量存在且不为null，则返回true，用于检测表单提交的字段，确保变量存在
$var4 = null;
var_dump(isset($var1));
echo "<br>";
var_dump(isset($var2));
echo "<br>";
var_dump(isset($var3));
echo "<br>";
var_dump(isset($var4));
echo "<br>";
class cat
{
    public string $name;
}
$cat = new cat();
var_dump(isset($cat->name));
echo "<br>";
//is_null 检测变量是否为null，如果变量为null则返回true，用于数据库查询结果验证
var_dump(is_null($var4));
echo "<br>";
