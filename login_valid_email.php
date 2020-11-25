<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
	<title>Art & Craft</title>
</head>
<style>.error{color:red;}</style>
<body class="formBody">
<?php
$emailErr= $passErr = "";
$email= $password = "";
$var=2;

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
  } else {
      $email = test_input($_POST["email"]);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Invalid Email Format&nbsp;!";
      }

  }
  if (empty($_POST["pass"])) {
    $passErr = "Password is required";
  } 
  else{
    $password = $_POST["pass"];
    if(!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*\W).*$#", $password)){
        $passErr = "It should have 8-20 characters, one uppercase, one lowercase and one special character";
    }
  }
}

?>

<div>
	<form class="box" style="z-index: -1; width: 310px;" method="post" autocomplete="off" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <h2 id="title">LOGIN</h2>
        <div class="Email">
            <input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>">
            <span class="error">* <?php echo $emailErr;?></span>
        </div>

        <div class="pass">
            <input type="text" name="pass" placeholder="Password" value="<?php echo $password;?>"> 
            <span class="error">* <?php echo $passErr;?></span>
        </div>
        <br>
		<label><a href="login_valid.php" style="text-decoration:none; color: #e2e743;">Login With Username</a></label><br><br>

		<input type="checkbox" name="rememberme"><font color=white>Remember Me</font><br><br>

    <input type="submit" name="submit" value="Login">

    <div>
      <label for="register" style="color:white;">Don't have an Account? </label><button name='register' id="register">Register</button>
      <!-- <input type="submit" name="register" value="Register">  -->
    </div>


  </form>

  <?php
    if(isset($_POST['register'])) {
      header('Location: ./signup11.php');

    }

  
  if(isset($_POST['submit']) && $emailErr == "" && $passErr == "") {

    session_start();



$_SESSION['email'] = $email;

$_SESSION['password'] = $password;
$_SESSION['var']=$var;

}
    if($_SERVER["REQUEST_METHOD"] == "POST" && $emailErr == "" && $passErr == "") {

     

      $email=$_SESSION['email'];
      $pass=$_SESSION['password'];
      

      $con=mysqli_connect('localhost','root');
mysqli_select_db($con,'user_info');
$query="SELECT * from signin where email='$email' and password='$pass'";
$results = mysqli_query($con, $query);
if(mysqli_num_rows($results) == 1){
  if (!empty($_POST["rememberme"])) 
  { 
    $cookie_name = $email;
    $cookie_value = $password;
    setcookie("email", $cookie_name, time() + (86400 * 365*20), "/"); // 86400 = 1 day
    setcookie("password", $cookie_value, time() + (86400 * 365*20), "/"); //20 years
    $name=$_POST["email"];
    $pass=$_POST["pass"];// 86400 = 1 day
  } 
  header("Location:./index.php");

    }
    else{
       // Location: login_valid_email2.php

       echo("<div style='color: #ff4444; margin-top: 120px; margin-left: 670px;'><b>Invalid Email or Password</b></div>");  

    }

  }
  ?>

</div>

</body>
</html>
