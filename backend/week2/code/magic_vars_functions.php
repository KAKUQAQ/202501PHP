<?php

//魔术方法
//__construct

//__destruct
class MagicMethods
{
    public static string $staticProperty = "静态属性";
    private string $privateProperty = "私有属性，不可外部访问";
    public string $publicProperty;
    // __construct 在创建对象时调用
    public function __construct($publicProperty) {
        $this->publicProperty = $publicProperty;
        echo "构造方法<hr>";
    }
    // destruct 在对象销毁时调用
    public function __destruct() {
        echo "析构方法<hr>";
    }
    private function privateMethod(): void {
        echo "不可访问的方法<hr>";
    }
    // __call 在对象调用一个不可访问方法时调用
    public function __call($name, $arguments)
    {
        echo "不可访问的方法<hr>";
    }
//     __callStatic 在静态上下文中调用一个不可访问方法时调用
    public function __callsStatic($name, $arguments): void {
        echo "调用一个不可访问的静态方法 $name <hr>";
    }
    public static function privateStaticMethod(): void
    {
     echo "调用一个不可访问的静态方法";
    }
    // __get 在获取一个类成员变量时调用，当调用一个不可访问成员变量时调用
    public function __get($name) {
        echo "获得一个不可访问的属性 $name <hr>";
    }
    // __set
    public function __set($name, $value) {
        echo "设置一个不可访问的属性 $name <hr>";
    }
    public function __isset($name) {
        echo "对不可访问的属性调用了 isset()或empty() $name <hr>";
    }
    public function __unset($name) {
        echo "对不可访问的属性调用了unset()$name<hr>";
    }
    public function __sleep() {
        echo "对象被序列化之前调用<hr>";
    }
    public function __wakeup() {
        echo "对象被序列化之后调用<hr>";
    }
    public function __toString() {
        return "类被当场字符串时的回应方法<hr>";
    }
    public function __debugInfo() {
        echo "打印所需调试信息<hr>";
    }
    public function __invoke() {
        echo "调用一个对象时的回应方法<hr>";
    }
    public function __clone() {
        echo "对象复制完成时调用<hr>";
    }
    public function __autoload()
    {
        echo "尝试加载未定义的类<hr>";
    }
}
echo MagicMethods::$staticProperty . "<br>";
MagicMethods::privateStaticMethod();
$magic = new MagicMethods('公有属性');
$magic->privateMethods();
echo $magic->privatePorperty;
var_dump($magic->publicProperty);
echo "<hr>";
class user
{
    public function __get(string $name)
    {
        echo "这是通过__CLASS__打印出的" . __CLASS__;
        return '张三';
    }
}
$user = new user();
var_dump($user->name);
echo "<hr>";

//魔术变量
echo __LINE__ . "<hr>";
echo __FILE__ . "<hr>";
echo __DIR__ . "<hr>";
echo __FUNCTION__ . "<hr>";
echo __CLASS__ . "<hr>";
echo __TRAIT__ . "<hr>";

function thisNameWillBeEcho() :void
{
    echo __FUNCTION__ . "<hr>";
}
thisNameWillBeEcho();
echo __NAMESPACE__ . "<hr>";