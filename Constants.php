<html>
<body>


<?php
//case - sensitive constant name
define("GREETING", "Welcome to PHP learning.com");
echo GREETING;

define("GREETING" , "Welcome to Learning PHP.com", true);
echo greeting;

define ("GREETING", "Welcome to PHP learning.com");

function myTest(){
	echo GREETING;
}
myTest();
?>

</body>
</html>