<html>
<body>

<?php 
$x =20;
$x += 100;

echo $x;

echo "<br>";

$x =50;
$x -=30;

echo $x;
echo "<br>";

$x =10;
$y *=6;

echo $x*$y;
echo "<br>";

$x= 100;
$y = "100";

var_dump($x == $y); //returns true because values are equal

$x =100;
$y ="100";
var_dump($x !=$y); //returns false because values are equal

echo "<br>";
$x = 100;
$y = 50;

var_dump($x>$y);

$x =100;
echo ++$x;
echo "<br>";
$x =100;
$y=50;

if($x == 100 and $y == 50){
	echo "Hello world!";
}
echo "<br>";

$x = array("a" => "red", "b"=>"green");
$y = array("c"=>"blue", "d"=>"yellow");

print_r($x+$y);

?>

</body>
</html>
