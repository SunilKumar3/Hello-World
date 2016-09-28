<?php
setcookie("name","John Watkin", time() + 3600, "/", "", 0);
setcookie("age","36", time()+3600, "/", "", 0);
?>
<html>
<head>
<title>Setting Cookies with PHP</title>
</head>
<body>
<?php echo "Set Cookies"?>

<?php
echo "<br>";
echo $_COOKIE["name"]. "<br/>";
/* is equivalent to */
echo $HTTP_COOKIE_VARS["name"]."<br/>";

echo $_COOKIE["age"]."<br/>";
/* is equivalent to */
echo $HTTP_COOKIE_VARS["name"]."<br/>";
echo "<br>";

if(isset($_COOKIE["name"]))
	echo "Welcome" .$_COOKIE["name"]."<br/>";
else
	echo "Sorry... Not recognized". "<br/>";

echo "<br>";

/*setcookie("name", "", time()- 60, "/", "",0);
setcookie("age","", time()-60,"/","",0);

echo "Deleted Cookies";*/
?>

</body>
</html>

