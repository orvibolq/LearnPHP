<?php

echo('hello php').'<br>';

echo 'nihao'.'<br>';

print 'print'.'<br>';


$a = 'today';
$b = 10;
// ????????
printf('%s buy %u books <br>',$a,$b);

echo printf('%s buy %u books <br>',$a,$b).'<br>';

// ???????
echo sprintf('%s buy %u books <br>',$a,$b);

$a = 33;
$b = &$a;

$b = 44;

echo $a.'<br>';

function local() {
    $c = 'i';
    echo 'nei bu bian liang '.$c.'<br>';

}
local();

$a = 'hello';
$$a = 'world';

echo $a.'<br>';
echo $$a.'<br>';
echo $hello.'<br>';
echo "$a {$$a}"."<br>";
echo "$a $hello"."<br>";

$network = array(2=>"are",1=>"how","three"=>"you");
echo $network[1];
echo $network["three"]."<br>";

class Boook {
    function getBookName($bookName) {

        return $bookName;
    }
}
$book1 = new Boook();
echo $book1->getBookName("php")."<br>";

$book2 = new Boook();
echo $book2->getBookName("js")."<br>";

$b = NULL;
echo $b."<br>";

$c = 1;
echo $c."<br>";
unset($c);
echo ">>>>>>>>>>>>>>>>>>"."<br>";
echo isset($a)."<br>";
$d = "liqiang"."<br>";
echo isset($d)."<br>";
echo ">>>>>>>>>>>>>>>>>>"."<br>";

echo empty($a)."<br>";
echo empty($d)."<br>";

echo "---------------"."<br>";
echo is_string($d)."<br>";

echo gettype($network)."<br>";

echo var_dump($network)."<br>";
echo var_dump($a)."<br>";
echo var_export($network)."<br>";
echo "---------------------"."<br>";
define("CONSTANT","nihao");
echo CONSTANT."<br>";

echo __FILE__."<br>";
echo __LINE__."<br>";
echo __CLASS__."<br>";
echo __FUNCTION__."<br>";
echo __METHOD__."<br>";
echo PHP_VERSION."<br>";
echo PHP_OS."<br>";

echo "---------------------+++++++++"."<br>";

$h = array("1"=>3,"2"=>5);
$k = array("color"=>"red","shape"=>"round");
$j = array("1"=>"3","2"=>"5");

echo json_encode($h+$k)."<br>";

echo var_dump($h == $j)."<br>";

$document_root = $_SERVER["DOCUMENT_ROOT"];

echo $document_root."<br>";
$fp = fopen("../orders/order.txt",'w+');
if(!$fp) {

    echo "open file fail"."<br>";
    exit;
}else {

    echo "open file success"."<br>";

}
$outputstring = "this is the first order\n";
fwrite($fp,$outputstring);

$outputstring = "this is the sencond order\n";
fwrite($fp,$outputstring,strlen($outputstring));

for($i = 0;$i<10; $i++) {
    $outputstring = "this is the sencond order{$i}\n";
    fwrite($fp,$outputstring,strlen($outputstring));

}
//关闭文件
fclose($fp);

$fp = fopen("../orders/order.txt",'rb');

$order = fgets($fp,999);

echo $order."<br>";

while(!feof($fp)) {
    $order = fgets($fp,999);
    echo $order."<br>";
}
fclose($fp);
echo "hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh"."<br>";

$fp = fopen("../orders/order.txt",'rb');
$order = fgetcsv($fp,100,' ');
echo json_encode($order)."<br>";
fclose($fp);

echo readfile("../orders/order.txt")."<br>";

$filePath = "../orders/order.txt";
$fp = fopen($filePath,"rb");
fpassthru($fp);
fclose($fp);

$orderArray = file($filePath);
echo json_encode($orderArray)."<br>";

echo "ffffffffffffffffffffffffff"."<br>";

$allOrder = file_get_contents($filePath);

echo $allOrder."<br>";

$fp = fopen($filePath,'rb');

echo fread($fp,1000)."<br>";
fclose($fp);
echo "nnnnnnnnnnnnnnnnnnnnnnn"."<br>";

if(file_exists($filePath)) {
    echo $filePath."   file has exists"."<br>";
}else {
    echo $filePath."   file has not exists"."<br>";
}

echo $filePath." file size is ".filesize($filePath)."<br>";

//unlink($filePath);

//phpinfo();
?>


