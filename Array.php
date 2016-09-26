<html>
<body>

<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like" .$cars[0].",".$cars[1]."and".$cars[2].".";

$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);

$cars = array("BMW", "Benz","Maruthi");
$arrlength = count($cars);

for($x =0; $x < $arrlength; $x++){
	echo $cars[$x];
	echo "<br>";
}

$age = array("Peter" =>"35", "Ben"=>"37", "Joe" =>"43");
echo "Peter is " .$age['Peter']."years old.";
echo "Ben is " .$age['Ben']."years old.";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value){
	echo "name =".$x.",Value=" .$x_value;
	echo "<br>";
}

$cars = array("Volvo", "BMW","Toyota");
sort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++){
	echo $cars[$x];
	echo "<br>";
}

$numbers = array(4,6,2,22,11);
rsort($numbers);

$arrlength = count($numbers);
for($x =0; $x <$arrlength; $x++){
	echo $numbers[$x];
	echo "<br>";
}

$age = array("Peter" => "35", "Ben"=>"37","Joe"=>"43");
krsort($age);

foreach($age as $x => $x_value){
	echo "key=" .$x. ",Value=".$x_value;
	echo "<br>";
	
}

?>
</body>
</html>

