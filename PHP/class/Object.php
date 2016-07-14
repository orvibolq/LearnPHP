<?php
/**
 * Created by PhpStorm.
 * User: liqiang
 * Date: 16/5/13
 * Time: 09:50
 */

interface Disable
{
    function display();
}


class A {

    function  B() {

        echo 'A'.'<br>';

    }

    public static function who() {
        echo __CLASS__."<br>";
    }

    public static function test() {

        static::who();

    }

}

class webPage extends A  implements Disable {

    function display()
    {
        echo 'hello'.'<br>';
    }

    function  B() {
        parent::B();
        echo 'B'.'<br>';

    }

    public static function test() {
        echo __CLASS__."<br>";
    }

}

$b = new webPage();
$b ->display();
$b -> B();

class math {

    const pi = 3.1415;

    static function squared ($input) {

        return $input * $input;

    }

}

echo math::pi - math::pi.'<br>';
echo math::squared(5).'<br>';

echo $b instanceof webPage.'<br>';

webPage::test();

class Hello {
    public $a = "5";
    public $b = "6";
    public $c = "7";
}
$x = new Hello;
foreach($x as $value) {
    echo $value."<br/>";
}

class Printable {
    public $testOne;
    public $testTwo;
    public function __toString()
    {
        return (var_export($this,true));
    }
}

//require_once("myphp.php");
$class = new ReflectionClass("webPage");
echo '<pre>'.$class.'</pre>>';


try {
    throw new Exception('A terrible error has occured',42);
}
catch (Exception $e) {
    echo "Excepton".$e->getCode().":".$e->getMessage()."<br>"."in".$e->getFile()."on line".$e->getLine()."<br>";
}