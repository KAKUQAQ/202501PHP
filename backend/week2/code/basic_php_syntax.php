<?php
//要时刻直到数据流走到哪里了 (前段请求的数据是否收到，是否从数据库中拿到数据，数据处理结束后是否返回前段)
//整个请求流程是怎样的
/** 声明变量 */
$name = '张三';
$age = 25;

echo $name . "今年 $age 岁了";
echo "<br>";
/** 数据类型 */
$height = 20;//浮点数
$isLogin = true;//布尔值
$scores = [80, 90, 100];//数组，索引数组
$person = ['name' => '张三', 'age' => 25];//关联数组
$obj = new stdClass();//对象

class Student {
    // 类的属性
    // publc 修饰的属性可以在类的内部，子类和外部访问
    public string $name;
    public int $age;
    // protected 修饰的属性只能在类的内部访问，子类和外部无法访问
    protected string $gender;
    // private 修饰的属性只能在类内部访问，子类和外部都无法访问
    private array $scores = [];
    /** __construct 构造函数，在创建对象时自动调用 */
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    /**
     * 类的方法，方法同样可以使用 public, private 修饰符
     * @param int $score
     * @return void
     */
    public function addScore(int $score): void
    {
//        验证是否执行到这里(初学）
//        echo 111111;die();
//        如果已经用echo测试程序执行到此，但$this->scores 还是空的可以使用var_dump()查看score或者$this->score的值
//        var_dump($score);
        $this->scores[] = $score;
    }
    //获取成绩
    public function getScore(): array
    {
        //隐私信息只能内部访问
        //设置权限
//        if ($this ->role === 'teacher') {
//            return $this->scores;
//        }
        return $this->scores;
    }
}

$student = new Student('张三', 18);//对象
//访问对象的属性，->符号
echo $student->name;
echo "<br>";
$student->addScore(80);
$student->addScore(90);
# !!! echo $student->scores;
var_dump($student -> getScore());

$scoresTest = [80, 90, 100];
echo "<br>";
echo "<h3>this is a title</h3>";
var_dump($scoresTest);
echo "<br>";
echo "这是用 print_r()输出的数组";
echo "<br>";
print_r($scoresTest);
echo "<br>";
//php运算符
//算数运算符
$numA = 10;
$numB = 3;
$sum = $numA + $numB;
$diff = $sum - $numB;
$quotient = $sum / $numB;
$product = $numA * $numB;
$renainder = $numA % $numB;
var_dump(
    "这是加法：" . $sum, "这是减法：" . $diff, "这是乘法：" . $product, "这是除法：" . $quotient,
);

//比较运算符
//(10 == 10);
//(5 === "5");
//(10 != 10);
//(10 !== 10);
//(10 > 10);
//(10 < 10);
//(10 <= 10);
//(10 >= 10);

//逻辑运算符
//($numA > 5 && $numB > 5);
//($numA > 5 || $numB > 5);
//!($numA > 5);
echo "<br>";
//三元运算符
$b = 10;
$a = $b > 5 ? '大于5' : '小于等于5';
$studentAge = $student->age ?? 0;
print_r($a);
echo "<br>";
print_r($studentAge);
echo "<br>";
//流程控制
//if else
if ($numA > 5) {
    echo "大于5";
} elseif ($numA === 5) {
    echo "等于5";
} else {
    echo "小于5";
}
echo "<br>";
//for
for ($i = 1; $i <= 5; $i++) {
    echo $i . "<br>";
}
//while
echo "<hr>";
$count = 0;
while ($count < 5) {
    echo $count . "<br>";
    $count++;
}
//foreach
echo "<hr>";
$students = [
    ['name' => '张三', 'age' => 25],
    ['name' => '李四', 'age' => 22],
    ['name' => '王五', 'age' => 19],
];
foreach ($students as $student) {
    echo '这是$student';
    var_dump($student);
    echo "<br>";
    echo $student['name'] . '今年' . $student['age'] . '岁了';
    echo "<br>";
}

$studentA = ['name' => '张三', 'age' => 25, 'scores' => ["语文：80","数学：90","英语：100"]];
foreach ($studentA as $value) {
    echo '这是key';
    var_dump($value);
    echo "<br>";
    echo '这是$value';
    echo "<br>";
}
//is_array()函数用于检查变量是否是数组
//count()用于返回数组长度
//strlen()用于返回字符串长度
//循环展示学生成绩
echo "姓名：" . $studentA['name'];
echo "<br>";
echo "年龄：" . $studentA['age'];
echo "<br>";
echo "<ul>";
foreach ($studentA as $key => $value) {
    if ($key === 'scores' && is_array($value) && count($value) > 0) {
        echo "<br>";
        foreach ($value as $score) {
            echo "<li>成绩：$score</li>";
            echo "<br>";
        }
    }
}
echo "</ul>";
