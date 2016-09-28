<html>
<body>

<?php 
echo readfile("web.txt");

echo "<br>";

$path="/xampp/htdocs/php/com.FileHandling/read.php";

//Show filename with file extension 
echo basename($path)."<br/>";
echo "<br>";


?>

</body>
</html>
