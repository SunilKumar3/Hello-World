<?php 
$host ="host=127.0.0.1";
$port ="port=5432";
$dbname = "dbname=mydb";
$credentials ="user=postgres password=dubbaka123";

$db = pg_connect("$host $port $dbname $credentials");
if(!$db){
	echo "Error: Unable to open database\n";
}else {
	echo "Opened database successfully\n";
}

$sql =<<<EOF
Create TABLE COMPANY
(ID INT PRIMARY KEY NOT NULL,
NAME TEXT NOT NULL,
AGE INT NOT NULL,
ADDRESS CHAR(50),
SALARY REAL);
EOF;
$ret = pg_query($db,$sql);
if(!$ret){
	echo pg_last_error($db);
}else {
	echo "Table created successfully\n";
}
pg_close($db);
?>
