<html>
<head>
<title>Insert data to PostgreSQL with php - creating a simple web application</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
li{listt-style:none;}
</style>
</head>
<body>
<h2>Enter information regarding book</h2>
<ul>
<form name="insert" action ="book.php" method="POST">
<li>Book ID:</li><li><input type = "text" name="book_id"/></li>
<li>Book Name:</li><li><input type = "text" name="book_name"/></li>
<li>Author:</li><li><input type="text" name="author"/></li>
<li>Publisher:</li><li><input type="text" name="publisher"/></li>
<li>Date of publication:</li><li><input type ="text" name="date_of_publication"/></li>
<li>Price (USD):</li><li><input type="text" name="price"/></li>
<li><input type="submit" /></li>
</form>
</ul>
</body>
</html>
<?php
$host ="host=127.0.0.1";
$port ="port=5432";
$dbname = "dbname=mydb";
$credentials ="user=postgres password=dubbaka123";

$db= pg_connect("$host $port $dbname $credentials");
if(!$db){
	echo "Error: Unable to open database\n";
}else{
	echo "Opened database successfully\n";
} 
 
$query = "INSERT INTO Book VALUES ('$_POST[book_id]','$_POST[book_name]',  
'$_POST[author]','$_POST[publisher]','$_POST[date_of_publication]',  
'$_POST[price]')";  
$result = pg_query($query);   
?>