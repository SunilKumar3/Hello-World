<html>
<head>
<?php
$cookie_name="user";
$cookie_value = "John Doe";
setcookie($cookie_name,$cookie_value, time()+(86400 * 30), "/"); //86400 = 1 day

if(!isset($_COOKIE[$cookie_name])){
	echo "Cookie named '".$cookie_name ."'is not set!";
}else{
	echo "Cookie '" .$cookie_name."' is set!<br>";
	echo "Value is: " .$_COOKIE[$cookie_name];
}
echo "<br>";

$cookie_name ="user";
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time()+(86400 * 30),"/");

if(!isset($_COOKIE[$cookie_name])) {
	echo "Cookie named '" .$cookie_name ."' is not set!";

}else {
	echo "Cookie '" .$cookie_name."' is set!<br>";
	echo "Value is: ".$_COOKIE['cookie_name'];
}

echo "<br>";
setcookie("test_cookie","test", time() + 3600, '/');

if(count($_COOKIE)>0){
	echo "Cookies are enabled.";
	
}else {
	echo "Cookies are disabled.";
}


?>
<p><strong>Note:</strong> You might have to reload the page to see the cookie.</p>
</body>
</html>


