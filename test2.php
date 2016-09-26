<?php
echo "<h2>PHP is fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ","string","was","made","with multiple parameters.";


$txt1 = "Learn PHP";
$txt2 = "codeacademy.com";
$x = 5;
$y =4;

echo "<h2> $txt1</h2>";
echo "study PHP at $txt2<br>";
echo $x + $y;

print "<h2>$txt1</h2>";
print "study PHP at $txt2<br>";
print $x + $y;

$a = "Hello world";
$b = "Hello world";

echo $a;
echo "<br>";
echo $b;

$x = 5985;
echo "<br> <br>";
var_dump($x);

$x=10.365;
var_dump($x);

$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

Class Car{
	function Car(){
		$this->model ="VM";
	}
}
//create an object
$herbie = new Car();
//show object properties
echo $herbie->model;
?>

