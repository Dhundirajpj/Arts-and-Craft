<?php
session_start();

echo "<br>";
// $email=$_POST['email'];

// $email = isset($_POST['email']) ? $_POST['email'] : '';
$email=$_SESSION['email'];
$var=1;
echo "$email";
$con=mysqli_connect('localhost','root');
if($con){

	echo "\n";
}

else{
	header('Location:./signup_message_error.php');
}

mysqli_select_db($con,'user_info');


$q="select email from signin where email='$email'";

$result=mysqli_query($con,$q);

if  (!$result ) {
	header('Location:./signup_message_error.php');


}

else if(mysqli_num_rows($result) >0) {

	echo 'The Username is already taken!';
	echo "Please try again!";
	header('Location:signup21.php');

}

else{
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


$message = '<html><body>';
$message .= '<a href="http://localhost:8080/a/signup_valid.php"><button type=button>Click Here</button></a>';
$message .= '</body></html>';

 
$result=mail($email,"Email Verification", $message, $headers);


if($result){
header("Location:./signup_message.php");
 }

 else{
	echo "<br>Error!";
}

$_SESSION['sendmail'] = $email;
$_SESSION['var'] = $var;

}
?>









