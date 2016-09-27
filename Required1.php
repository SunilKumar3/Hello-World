<?php 

if($_POST)
{
//not empty
// atleast 6 characters long2ip

$errors = array();

//start validation
if(empty($_POST['firstName']))
{
	$errors['firstName1'] = "Your first name cannot be empty";
}
if(strlen($_POST['firstName'])<2)
{
	$errors['firsName2'] = "Your firstName must be atleast 2 characters long";
}
if(empty($_POST['lastName']))
{
	$errors['lastName1'] = "Your last name cannot be empty";
}
if(strlen($_POST['lastName']<3))
{
	$errors['lastName2'] = "Your lastName must be atleast 3 characters long";
}
if(empty($_POST['email']))
{
	$errors['email1'] = "Your email cannot be empty";
}
if(strlen($_POST['email'])<6)
{
	$errors['email2'] = "Your email must be atleast 6 characters long";
}
if(empty($_POST['passward']))
{
	$errors['passward1']= "Your passward cannot be empty";
}
if(strlen($_POST['passward'])<8)
{
	$errors['passward2'] = "Password cannot be less than 8 digits";
}

//check errors

if(count($errors) == 0)
{
	//redirect to success page
	header("Location: success.php");
	exit();
}
}
?>
<html lang="en">
<head>
<title></title>
</head>
<body>

<form method ="post" target="">
<p>
<label for="firstName">FirstName</label>
<input type = "text" name = "firstName" id="firstName" value = "<?php if(isset($_POST['firstName'])) echo $_POST['firstName'];?>"/>
</p>
<p><?php if(isset($errors['firstName1'])) echo $errors['firstName1']; ?></p>
<p><?php if(isset($errors['firstName2'])) echo $errors['firstName2']; ?></p>

<p>
<label for="lastName">LastName</label>
<input type = "text" name="lastName" id="lastName" value = "<?php if(isset($_POST['lastName'])) echo $_POST['lastName'];?>"/>
</p>
<p><?php if(isset($errors['lastName1'])) echo $errors['lastName1']; ?></p>
<p><?php if(isset($errors['lastName2'])) echo $errors['lastName2']; ?></p>

<p>
<label for="email">Email</label>
<input type ="text" name = "email" id="email"value = "<?php if(isset($_POST['email'])) echo $_POST['email'];?>"/>
</p>
<p><?php if(isset($errors['email1'])) echo $errors['email1']; ?></p>
<p><?php if(isset($errors['email2'])) echo $errors['email2']; ?></p>

<p>
<label for="passward">Password</label>
<input type = "passward" name="passward" id="passward" />
</p>
<p><?php if(isset($errors['passward1'])) echo $errors['passward1']; ?></p>
<p><?php if(isset($errors['passward2'])) echo $errors['passward2']; ?></p>

<input type ="submit" value ="submit" />
</form>
</body>
</html>