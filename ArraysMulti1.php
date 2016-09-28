<html>
<body>

<?php
$cars = array
(
array("Volvo", 22, 18),
array("BMW", 15,13),
array("Saab", 5, 2),
array("Land Rover", 17,15)
);

for($row = 0; $row <4; $row++){
	echo "<p><b>Row Number $row</b></p>";
	echo "<ul>";
	for($col =0; $col <3; $col++){
		echo "<li>".$cars[$row][$col]."<li>";
	}
	echo "</ul>";
}
echo "<br>";
echo "Today is:" .date("y/m/d");
echo "<br>";
echo "Today is " .date("l");

echo "<br>";
$d=strtotime("Tomorrow");
echo date("Y-m-d h:i:sa", $d). "<br>";
$d=strtotime("next saturday");
echo date("Y-m-d h:i:sa", $d)."<br>";
$d=strtotime("next 3 months");
echo date("Y-m-d h:i:sa", $d)."<br>";

echo "<br>";
$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);

while($startdate < $enddate){
	echo date("M d", $startdate). "<br>";
	$startdate = strtotime("+1 week", $startdate);
	
}

?>
</body>
</html>
