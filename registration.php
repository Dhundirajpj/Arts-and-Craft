<?php



echo "Hii";

echo "<br>";

session_start();

$con=mysqli_connect('localhost','root');
if($con){
	// echo "Connection Success!";
	echo "\n";
}

else{
	echo "Connection Failed!";
}

mysqli_select_db($con,'user_info');

$email=$_SESSION['email'];
$pass=$_SESSION['password'];
$user=$_SESSION['userid'];
$name=$_SESSION['name'];
$var=$_SESSION['var'];

$q="select email from signin where email='$email'";

$result=mysqli_query($con,$q);

if  (!$result ) {
	echo "Something Went Wrong!\n";

}

else if(mysqli_num_rows($result) >0) {
	echo 'The Username is already taken!';
}
else{
	$q_input="insert into signin(email,name,username,password,total_reviews,contribution) values('$email','$name','$user','$pass',0,0)";
	
		echo "<br>";
 mysqli_query($con,$q_input);

 header('Location:index.php');

}

?>





