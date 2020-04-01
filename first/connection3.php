<?php
//create connection
$connect=mysqli_connect('localhost','root',"",'online_student');

//check connection
if(mysqli_connect_errno($connect))
{
	echo 'failed to connect!';
}
?>
