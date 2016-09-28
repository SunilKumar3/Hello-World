<html>
<body>

<?php
$filename = "/xampp/htdocs/php/com.FileHandling/weg.txt";
$file = fopen($filename, "w");

if($file == false){
	echo ("Error in opening new file");
	exit();
}
fwrite($file, "This is a simple test\n");
fclose($file);

$myfile = fopen("web.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);


?>
<html>
<head>
<title>Writing a file using PHP </title>
</head>
<body>
<?php
$filename = "web.txt";
$file = fopen($filename, "r");

if($file == false){
	echo ("Error in opening file");
	exit();
}
$filesize = filesize($filename);
$filetext = fread($file, $filesize);

fclose($file);

echo("File size: $filesize bytes");
echo("$filetext");
echo("file name: $filename");
?>
</body>
</html>