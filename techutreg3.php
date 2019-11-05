<?php

$link=mysqli_connect("localhost","techut1","","techut");
if(mysqli_error($link)){
	echo "ERROR";
}
session_start();
if(isset($_POST['submit'])){
	$firstName=mysqli_real_escape_string($link,$_POST['FName']);
	$lastName=mysqli_real_escape_string($link,$_POST['LName']);
	$email=mysqli_real_escape_string($link,$_POST['email']);
	$telephone=mysqli_real_escape_string($link,$_POST['telephone']);
	$userName=mysqli_real_escape_string($link,$_POST['username']);
	$password=mysqli_real_escape_string($link,$_POST['password']);
	$dob=mysqli_real_escape_string($link,$_POST['dob']);
	$occupation=mysqli_real_escape_string($link,$_POST['occupation']);
    $allergies=mysqli_real_escape_string($link,$_POST['allergies']);
	$migraines=mysqli_real_escape_string($link,$_POST['migraines']);
	$fitness=mysqli_real_escape_string($link,$_POST['fitness']);
	$diet=mysqli_real_escape_string($link,$_POST['diet']);

$sql="INSERT INTO techut1(FName,LName,email,telephone,username,password,dob,occupation,allergies,migraines,fitness,diet) VALUES ('$firstName','$lastName','$email','$telephone','$userName','$password','$dob','$occupation','$allergies','$migraines','$fitness','$diet')";

if(mysqli_query($link,$sql)){
	echo"";

}else{
	echo "Please try again";
	  
}
mysqli_close($link);

$_SESSION['FName']=$firstName;
$_SESSION['LName']=$lastName;
$_SESSION['email']=$email;
$_SESSION['telephone']=$telephone;
$_SESSION['userName']=$username;
$_SESSION['dob']= $dob;
$_SESSION['occupation']=$occupation;
$_SESSION['allergies']=$allergies;
$_SESSION['migraines']=$migraines;
$_SESSION['fitness']=$fitness;
$_SESSION['diet']=$diet;

header('Location: profile.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Medical</title>

	<style type="">
		form{
			text-align:center;

		}

		body{
			text-align:center;
		}
	</style>
</head>
<body>
	<form id="form" method="POST">
		<!--first name text field-->
	<div>
		<label name="FirstName" value="FirstName">First Name</label>
		<input type="text" name="Fname" placeholder="John/Jane" required=true>
	</div>
	<div>
		<!--last name text field-->
		<label name="LastName" value="LastName">Last Name</label>
		<input name="LName" type="text" placeholder="Doe" required=true>
	</div>
	<div>
		<!--email-->
		<label name="email" value="email">Email</label>
		<input name="email"  type="email" placeholder="janedoe@gmail.com" required="true">
	</div>

	<div>
		<!--telephone-->
		<label name="telephone" value="telephone">Telephone</label>
		<input name="telephone" type="telephone" placeholder="+254700000000" required="true">
	</div>

	<div>
		<!--username text field-->
		<label name="username" value="usernme">Username</label>
		<input name="username" type="text"  placeholder="Cool Name" required=true>

	</div>

	<div>
		<!--Date of birth-->

		<label name="dob"value="dob">Date Of Birth</label>
		<input name="dob" type="date" >
	</div>

	<div>
		<!--occupation-->
		<label name="occupation" value="occupation">Occupation</label>
		<input name="occupation"type="occupation">
</div>

<h4> Medical uestions</h4>

<div>
		<!--username text field-->
		<label name="allergies" value="allergies">Allergies</label>
		<input name="allergies" type="text"  placeholder="Yes or No" required=true>

	</div>

	<div>
		<!--username text field-->
		<label name="migraines" value="migraines">Migraines</label>
		<input name="migraines" type="text"  placeholder="Yes or No" required=true>

	</div>

	<div>
		<!--username text field-->
		<label name="fitness" value="fitness">Fitness</label>
		<input name="fitness" type="text"  placeholder="Yes or No" required=true>

	</div>

	<div>
		<!--username text field-->
		<label name="diet" value="diet">Diet</label>
		<input name="diet" type="text"  placeholder="Yes or No" required=true>

	</div>

		<!--input button-->
		<button name="submit" value="submit">Submit</button>
	</form>
</body>
</html>
