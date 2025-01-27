<?php
// 函数定义
function sum($num1, $num2): int
{
    return $num1 + $num2;
}
$sum = sum(1,2);
echo $sum;
echo "<br>";
// 匿名函数和箭头函数
// 匿名函数
$sum = function (int $num1, int $num2): int {
    return $num1 + $num2;
};
echo $sum(1,2);
echo "<br>";
// 箭头函数
$multiply = fn(int $num1, int $num2): int => $num1 * $num2;
echo $multiply(2,3);
echo "<br>";
// PHP数组
$fruits = array("apple", "banana", "raspberry");
$fruits = ["a", "b", "c"];
$emptyArray = [];
$emptyArray = array();
//关联数组
$person = [
    "name" => "sam",
    "age" => 20,
    "married" => false
];

//数组操作
//访问元素
echo $fruits[0] . "<br>";
//修改数组元素
$fruits[0] = "pineapple";
echo $fruits[0] . "<br>";
//添加元素
$fruits[] = "apple";
var_dump($fruits);
echo $fruits[3] . "<br>";
//删除元素
//unset($array[0];删除数组中的第一个元素，但索引不会重新排序，如果想重新排序可以使用array_values()
unset($fruits[0]);
$fruits = array_values($fruits);
var_dump($fruits);
//数组遍历
//for循环 实际开发中一般不使用
for ($i = 0; $i < count($fruits); $i++) {
    if (isset($fruits[$i])) {
        echo $fruits[$i] . "<br>";
    }
}
echo "<hr>";
//foreach
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
