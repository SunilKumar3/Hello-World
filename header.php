<html>
<body>
<?php
//This results in an error.
//The output above is before the header() call
header('Location: http://www.example.com/');

//Date in the past
header("Expires: Mon, 26 Jul 2016 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");

header("Content-type:application/pdf");

//It will be called downloaded.pdf
header("Content-Disposition:attachment;filename='downladed.pdf'");

//The PDF source is in original.pdf
readfile("original.pdf");
?>