<?php
$username = filter_input(INPUT_POST, 'uname');
$password = filter_input(INPUT_POST, 'psw');

// Create connection
$con=mysqli_connect("localhost","root","","mwl");//mysqli("localhost","username of database","password of database","database name")
$result=mysqli_query($con,"SELECT * FROM `login` WHERE `uname`='$username' && `password`='$password'");
$count=mysqli_num_rows($result);
if($count==1)
{
	echo "Login success";
	$_SESSION['log']=1;
	header('refresh:2;http://' . $_SERVER['HTTP_HOST']. '/final/adminlanding.php');

}
else
{
	echo "please fill proper details";
	header('refresh:2;http://' . $_SERVER['HTTP_HOST']. '/final/dashboard.php');// it takes 2 sec to go index page
}

?>
