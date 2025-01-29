<?php
namespace classes;
// PHP 中的命名空间 namespace 主要是用来区分不同的代码库，避免重名。

class Car
{
    public string $color;
    public int $price;
    public static int $count = 0;
    public function __construct($color, $price) {
        $this->color = $color;
        $this->price = $price;
        self::$count = 1;
    }
    public function getCarInfo():string {
        return "This car is $this->color color. It costs $this->price USD.";
    }

    public function getThisClassFunction():void {
        $car = $this->getCarInfo();
        self::getThisClassFunction();
    }

    public static function thisIsStaticFunction()
    {
    }
}

$car = new Car("white",10000);
$carInfo = $car->getCarInfo();
echo $carInfo;
var_dump($car::$count);
echo "<br>";
$car::thisIsStaticFunction();

class Truck extends Car
{
    public int $weight;

    public function __construct($color, $price, $weight) {
        parent::__construct($color, $price);
        $this->weight = $weight;
    }
    public function getTruckInfo():string {
        return "This truck is $this->weight kg. It costs $this->price USD.";
    }
}

// 接口是一种抽象类型，是一种没有具体实现的类
//他的作用是定义一些规定好的方法，让其他类取实现这些方法
interface Vehicle
{
    public function getVehicleInfo(): string;
}

//如果一个类实现了某个接口，name这个类必须实现接口中定义的所有方法
class Motorcycle extends Car implements Vehicle
{
    public function getVehicleInfo(): string {
        return "this is a motorcycle. It costs $this->price USD.";
    }
}