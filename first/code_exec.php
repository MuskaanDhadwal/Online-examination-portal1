<!Doctype html>

<html>
<head>
</head>
<body>
<style>
body {
background-image: url('https://static.brusheezy.com/system/resources/previews/000/050/626/non_2x/flat-education-psd-icons-pack-photoshop-psds.jpg');
background-repeat: repeat;
scroll-behavior: 0 0;
}
</style>
<br>
<br>


<?php




include('connection3.php');


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$username=$_POST['username'];
$password=$_POST['password'];


mysqli_query($connect,"INSERT INTO `student` (`S.no`, `First_name`, `Last_name`, `Gender`, `Adderess`, `Contact`, `Username`, `Password`)
VALUES (NULL, '$fname', '$lname', '$gender', '$address', '$contact', '$username', '$password')");

if(mysqli_affected_rows($connect)>0)
{
	echo '<p style="background-color:orange;text-align:center;font-size:200%;" >Registration Successful !!!!!!</p>';

	echo '<p style="background-color:orange;text-align:center;font-size:200%;" ><a href="index2.php">GO BACK</a></p>';
}
else
{
	echo 'Employee NOT added.';
	echo 'mysqli_error($connect)';
}

?>


</body>





</html>
