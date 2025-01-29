<?php

//常用内置函数
//字符串处理函数
//strlen 计算字符串长度
$str = "Hello World!";
$length = strlen($str);
echo $length . "<br>";
//计算字节长度而不是字符长度，一个中文字符占三个字节
echo strlen("噜噜噜啦啦啦") . "<br>";
//substr 截取字符串一部分 offset(从第几个字符开始) length(截取长度，不写则显示到字符串结尾)
$sub = substr($str, 1, 4);
echo $sub . "<br>";
//strpos 某个字符首次出现的位置
$pos = strpos($str, "o");
echo $pos . "<br>";
var_dump(strpos($str, "vvv"));
echo "<br>";
$pos = strpos($str, "o", 6);
echo $pos . "<br>";

//可以用于验证码不区分大小写
//strtolower
$country = "JAPAN";
$lower = strtolower($country);
echo $lower . "<br>";
//strtoupper
echo strtoupper("hahahaha") . "<br>";
//str_replace
$str1 = "Hello World! Hello World!";
$replace = str_replace("World", "hahaha", $str1);
echo $replace . "<br>";
//md5 计算字符串的md5散列值，用于给字符串加密，固定32字符，不可逆，无法反推
$str2 = "1234567654321";
$md5str = md5($str2);
echo $md5str . "<br>";
//implode 将数组元素合成一个字符串
$num1 = 1;
$num2 = 2;
$num3 = 3;
$sum = $num1 + $num2 + $num3;
$arr = [$num1, $num2, $num3];
$str3 = implode("+", $arr);
echo $str3 . "=" . $sum . "<br>";
//trim 移除两侧的空白字符
$str4 = "  hahahaha   ";
echo trim($str4) . "<br>";
$str5 = "##hahahaha##";
echo $str5 . "<br>";
$trimStr = trim($str5, "#");
echo $trimStr . "<br>";

//数组处理函数
// count
$arr = array(1, 2, 3, 4, 5);
$count = count($arr);
echo $count . "<br>";
// array_push 将元素插入末尾
$arr1 = array(1, 2, 3);
array_push($arr1, 4, 5, 6);
var_dump($arr1);
echo "<br>";
// array_pop 删除最后一个元素
$popValue = array_pop($arr1);
var_dump($arr1);
echo "<br>";
// array_shift() 删除数组第一个元素
$shiftValue = array_shift($arr1);
var_dump($arr1);
echo "<br>";
// array_unshift() 在开头插入一个或多个元素
$unshiftValue = array_unshift($arr1, 0);
var_dump($arr1);
echo "<br>";
// array_merge 合并一个或多个数组
$arr2 = array(1, 2, 3);
$arr3 = array(4, 5, 6);
$mergeValue = array_merge($arr2, $arr3);
var_dump($mergeValue);
echo "<br>";
$student1 = array("nickname" => "Tom", "species" => 20);
$student2 = array("name" => "Jerry", "age" => 10);
$mergeArr = array_merge($student1, $student2);
var_dump($mergeArr);
echo "<br>";
// array_unique 去重
$arr4 = array(1, 2, 2, 2, 2, 3, 4, 5, 5, 5, 5);
$uniqueArr = array_unique($arr4);
var_dump($uniqueArr);
echo "<br>";
// array_reverse 倒序返回
$arr5 = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$reverseArr = array_reverse($arr5);
var_dump($reverseArr);
echo "<br>";
// sort对数组升序
// rsort对数组降序
$arr6 = array(4, 5, 6, 2, 8, 7, 1, 9);
sort($arr6);
var_dump($arr6);
echo "<br>";
// shuffle 将数组顺序打乱
$arr7 = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
shuffle($arr7);
var_dump($arr7);
echo "<br>";
// array_key_exists 检查是否存在指定键名
$student = array("name" => "Tom", "age" => 20);
if (array_key_exists("name", $student)) {
    echo $student["name"] . "<br>";
} else {
    echo "no name" . "<br>";
}
// in_array 检查是否存在指定值
$arr8 = array(1, 2, 3, 4, 5);
if (in_array(9, $arr8)) {
    echo "yes" . "<br>";
} else {
    echo "no" . "<br>";
}
// array_search 搜索给定值，成功返回键名，失败返回false
$arr9 = array(1, 2, 3, 4, 5);
$key = array_search(3, $arr9);
echo $key . "<br>";
// array_keys 返回数组中部分或所有键名
$arr10 = array("a" => 1, "b" => 2, "c" => 3, "d" => 4);
$keys = array_keys($arr10);
var_dump($keys);
echo "<br>";
// array_values 返回数组中的所有值
$arr11 = array("a" => 1, "b" => 2, "c" => 3, "d" => 4);
$values = array_values($arr10);
var_dump($values);
echo "<br>";
// array_slice 返回数组中的一段
$arr12 = array("a", "b", "c", "d", "e");
$sliceArr = array_slice($arr12, 2, 3);
var_dump($sliceArr);
echo "<br>";

// 文件处理函数
// file_get_contents 把整个文件读入一个字符串
//filename处可以读取网页
$content = file_get_contents("test.txt");
echo $content . "<br>";
//$content = file_get_contents("https://www.php.net/docs.php");

//file_put_contents() 把一个字符串写入文件
$data = "Hello World!";
// 如果文件不存在会创建文件
// 如果文件存在会覆盖文件，如果flags是FILE_APPEND会在文件末尾追加
file_put_contents("test.txt", $data, FILE_APPEND);
echo "<br>";

//file_exists()判断文件是否存在
if (file_exists("test.txt")) {
    echo "exist";
} else {
    echo "no exist";
}
echo "<br>";
// touch创建空文件
$filename = "empty.txt";
if (touch($filename)) {
    echo "文件 '$filename' 创建成功。";
} else {
    echo "文件 '$filename' 创建失败。";
}
echo "<br>";
// unlink 删除文件
if (file_exists($filename)) {
    if (unlink($filename)) {
        echo "文件 '$filename' 删除成功。";
    } else {
        echo "文件 '$filename' 删除失败。";
    }
} else {
    echo "文件 '$filename' 不存在。";
}
echo "<br>";
// mkdir 创建目录
$dir = "test";
if (mkdir($dir)) {
    echo "目录 '$dir' 创建成功。";
} else {
    echo "目录 '$dir' 创建失败。";
}
echo "<br>";
// rmdir删除目录
if (rmdir($dir)) {
    echo "目录 '$dir' 删除成功。";
} else {
    echo "目录 '$dir' 删除失败。";
}
echo "<br>";
// chmod变更文件或目录权限
$file = "test.txt";
if (chmod($file, 0644)) {
    echo "文件 '$file' 的权限已成功修改为 0644。";
} else {
    echo "修改文件 '$file' 权限失败。";
}
echo "<br>";
// 日期和时间函数
//date
echo date("Y-m-d H:i:s", 1793572380) . "<br>";
// time 获取Unix时间戳
echo time() . "<br>";
// strtotime 将任何英文文本的时间日期转换为时间戳
$time = strtotime("2025-01-26 14:08:55");
echo $time . "<br>";

// json处理函数
// json_encode 将变量进行json编码
$arr13 = array("name" => "Tom", "age" => 20);
$json = json_encode($arr13);
echo $json . "<br>";
// json_decode 将json格式转为PHP变量
$json1 = '{"name":"Tom", "age": 20}';
$arr14 = json_decode($json1, true);
var_dump($arr14);
echo "<br>";

// 调试函数
// var_dump
// print_r
// debug_backtrace

// 数学函数
// abs 返回一个数的绝对值
echo abs(-6) . "<br>";
//ceil 向上舍入最近的整数
echo ceil(0.60) . "<br>";
//floor 向下舍入
echo floor(0.60) . "<br>";
//max 返回数组中最大值
echo max(0, 140, 30, 118, 204) . "<br>";
//min
echo min(0, 140, 30, 118, 204) . "<br>";
//rand 随机生成
echo rand(1000, 9999) . "<br>";
//round 对浮点四舍五入
echo round(0.68, 1) . "<br>";
//sqrt 返回平方根
echo sqrt(81) . "<br>";