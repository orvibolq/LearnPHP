<?php
/**
 * Created by PhpStorm.
 * User: liqiang
 * Date: 16/1/21
 * Time: 09:46
 */

$string = "             "." liqiang               ";
echo $string."<br>";
// 去掉字符串前后的空格
echo trim($string)."<br>";
// 去掉字符串座边的空格
ltrim($string);

// 去掉字符串右边的空格及其他的字符
rtrim($string);

$total = "12.0";
echo "total amount is $total"."<br>";
printf("total amount is %s"."<br>",$total);
printf("total amount is %.2f"."<br>",$total);

$total_shoping = "56";
printf("total amount is %2\$.2f(with shopping %1\$.2f)"."<br>",$total_shoping,$total);

$subject = "\"Feed\" back from web site";
echo strtoupper($subject)."<br>";
echo strtolower($subject)."<br>";
echo ucfirst($subject)."<br>";
echo ucwords($subject)."<br>";

//自动添加转义字符
echo addslashes($subject)."<br>";
//自动移去转义字符
echo stripslashes($subject)."<br>";

$myEmail = "liqiang@163.com";

$emailArray = explode('@',$myEmail);

echo json_encode($emailArray)."<br>";

$newEmail = join("@",$emailArray);
echo $newEmail."<br>";
$otherNewEmail = implode("@",$emailArray);
echo $otherNewEmail."<br>";

$test = "Your custom service is excellent";

echo substr($test,3)."<br>";

//负数表示倒数
echo substr($test,-9)."<br>";

echo substr($test,5,-13)."<br>";

echo strcmp("a","A")."<br>";
echo strcasecmp("a","A")."<br>";

echo strlen("eeeeeeeeeee")."<br>";

echo strstr("hello  rtdd liqiang","liqiang")."<br>";

// 不区分大小写
echo stristr("hello liqiAng ","LIQiang")."<br>";

echo strpos("hello word",'o')."<br>";

echo strpos("hello word",'o',5)."<br>";

if(strpos("liqiang",'u') === false) {

    echo "Not found "."<br>";

}
require('reusable.php');
myFunction();
$value = 10;
increament($value,2);
echo $value."<br>";
increament2($value, 4);
echo $value."<br>";

$a = 1;
$b = 4;
$c = 3;
$d = 5;
echo larger($a,$b)."<br>";
echo larger($c,$a)."<br>";
echo larger($d,$a)."<br>";