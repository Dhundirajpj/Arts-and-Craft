<?php

echo "Hii";

echo "<br>";

session_start();

$con=mysqli_connect('localhost','root');
if($con){
	echo "Connection Success!";
	echo "<br>";
}

else{
	echo "Connection Failed!";
	echo "<br>";
}

mysqli_select_db($con,'user_info');

$email=$_POST['email'];
$pass=$_POST['pass'];




$q="select email from signin where email='$email' && password='$pass'";

$result=mysqli_query($con,$q);

// $num=mysqli_num_rows($result);

if  (!$result || mysqli_num_rows($result) ==1) {
	
	echo "<br>";
	
	echo "Successfully logged in!";
    header('location: index.html');

}

else{
	
	echo "<br>Login Failed!<br><br>";
	
echo "<a href='login_new.php'><button type=button>Try Again</button></a>";
}







if (isset($_POST['email']) && (!$result || mysqli_num_rows($result) ==1))
{
	// echo "check1";
	// $email=$_POST['email'];
	// $url='lost.php?email='. $email;
	// header('Location: '.$url);
	// exit();

header('Location:load_form.php');
}


?>












