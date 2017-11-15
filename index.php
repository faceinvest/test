<?php
$xmlstr = "<?xml version='1.0' standalone='yes' ?>".
    "<movies><movie>".
    "<title>Notre-Damme Des Paris</title>".
    "</movie></movies>";


//$xml = new SimpleXMLElement($xmlstr);

/*echo $xml->movie[0]->title;*/

$sxe = new SimpleXMLElement($xmlstr);
/*$result = $sxe->xpath('/movies/movie/title'); //Array ( [0] => SimpleXMLElement Object ( [0] => Notre-Damme Des Paris ) )
print_r($result);*/

$movie = $sxe->addChild('movie');
$movie->addChild('title', 'Magic World');
//$movie->title = 'Magic World 2';

echo $sxe->asXML();
?>

<?php
$hosts = gethostbynamel('localhost');
print_r($hosts);
$hosts = gethostbyaddr($hosts);
print_r($hosts);
?>
    <br>


    <br>


<?
header("Content-type: image/png");
$im = imagecreate(100, 100);
$bg = imagecolorallocate($im, 255,255,255);
$red = imagecolorallocate($im, 255,0,0);
imagefilledrectangle($im, 10, 10, 90, 90, $red);
imagepng($im);
?>


    <br>


<?php
$num = 10%4;
$num_pow = pow($num,2);
print $num_pow;

echo '---------------------------';

$num = mt_rand(1,100);
print is_int($num/2) ? "Четное" : "Нечетное";

$num = 34.567;
$real = is_real($num);
$float = is_float($num);
$double = is_double($num);
print $real." ".$float." ".$double;

$num = 5.625874;
for ($i=4;$i>2;$i--) print $i;
for ($i=4;$i>2;--$i) print $i;

?>
<br>
<?php
$var1 = "1value";
$var2 = &$var1;
$var1 = $var1 +12;
print $var2;

?>
<?php
unlink('sample.xsl');
$lines = filesize('sample.xsl');
print $lines;

?>
    <br>
<?php
$im = imagecreate(100, 150);
$bg = imagecolorallocate($im, 255,255,255);
print  imagesx($im)."x".imagesy($im);

$num = mt_rand(1,100);


?>
    <br>
<?php
$str = 'abcdef';
$shuffled = str_shuffle($str);
echo $shuffled;
?>
<br>

<?php

function func(&$var)
{
    $var++; ++$var;
}

 $a =5;
func($a);
print $a;

$var = 'foo';

$bar = $var ? $var : 'false';

echo $bar;




$a = true; $b = true;
if($a xor $b) {print 'kjfhndvbjkhdfs';}

$str_str = "Я+РЕТРАТЕК=УСПЕХ";
$arr = array('+', '=');
$body = str_replace($arr, "=>", $str_str);
echo $body;



function key_compare_func($key1, $key2)
{
    if($key1 > $key2)
        return 0;
    else if ($key1 < $key2)
        return 1;
    else if ($key1 == $key2)
        return -1;

}

$array1 = array('blue' => 1, 'red' => 2, 'green'=>3, 'purple'=>4);
$array2 = array('gren'=> 5, 'blue'=>6, 'yellow'=>7, 'cyan'=>8);

var_dump(array_intersect_ukey($array1, $array2, 'key_compare_func'));


?>
<form action="" method="post">
    Name: <input type="text" name="personal[name]"><br>
    Email: <input type="text" name="personal[email]"><br>
    <input type="submit">

</form>
<?php
print_r($_POST);

function foo()
{
    $numargs = func_get_args();
    return $numargs;
}
print_r(foo(1,2,3));

print (int) (25/7);


const constant = "jkdb";

$x = 1;
for ($i=0; $i<=5; $i++) $x = $i + $x;
$b = & $x;
unset($x);
print $b;

echo $a = 3*3%5;
echo $a = (3 * 3) % 5;

$a=true; $b = false;
if($a and $b) {print "jdfhjhdfjkvhdfjkvbhdfhvbjhdvbjhd";}

$num = acos(1.01);
$type = is_nan($num);
if (is_bool($type)) print 'kjdflkbjndlfkb';
$foo ='';
echo $foo[bar];


?>

<script language="php">
    echo ("некоторые редакторы (например, Акщтезфпу) ")
    print "не любят инструкции обработки"
</script>

<a href="http://www.certifications.ru/resume/212475"> jklgjkhf </a>
