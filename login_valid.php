<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
	<title>Art & Craft</title>
</head>
<style>.error{color:red;}</style>
<body class="formBody">
<?php
$uidErr = $passErr = "";
$userid = $password = "";
$var=1;

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["userid"])) {
    $uidErr = "Username is required";
  } else {
    $userid = test_input($_POST["userid"]);
    if (!preg_match("/^[a-zA-Z0-9_]*$/",$userid)) {
    $uidErr = "Only alphanumeric characters and underscore allowed";
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
        <div class="userid1">
            <input type="text" name="userid" placeholder="Username" value="<?php echo $userid; ?>">
            <span class="error">* <?php echo $uidErr;?></span>
        </div>

        <div class="pass">
            <input type="text" name="pass" placeholder="Password" value="<?php echo $password;?>"> 
            <span class="error">* <?php echo $passErr;?></span>
        </div>
        <br>
		<label><a href="login_valid_email.php" style="text-decoration:none; color: #e2e743;">Login With Email</a></label><br><br>

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


    if(isset($_POST['submit']) && $uidErr == "" && $passErr == "") {

      session_start();



$_SESSION['userid'] = $userid;

$_SESSION['password'] = $password;
$_SESSION['var']=$var;

  }


    if ($_SERVER["REQUEST_METHOD"] == "POST" && $uidErr == "" && $passErr == "") {  
    
      $name=$_POST["userid"];
      $pass=$_POST["pass"];
      
      $con = mysqli_connect('localhost','root');
      mysqli_select_db($con,'user_info');
      $query = "SELECT * FROM signin WHERE username='$name' AND password='$pass'";
      $results = mysqli_query($con, $query);
      
          if (mysqli_num_rows($results) == 1){
            if (!empty($_POST["rememberme"])) 
            { 
              $cookie_name = $userid;
              $cookie_value = $password;
              setcookie("userid", $cookie_name, time() + (86400 * 365*20), "/"); // 86400 = 1 day
              setcookie("password", $cookie_value, time() + (86400 * 365*20), "/"); //20 years
              $name=$_POST["userid"];
              $pass=$_POST["pass"];// 86400 = 1 day
            } 







                  // echo("<div style='color: green; margin-top: 620px; margin-left: 735px;'><b>Login Successful</b></div>");
                  header('Location:./index.php');
              }else{
                  echo("<div style='color: #ff4444; margin-top: 120px; margin-left: 660px;'><b>Invalid Username or Password</b></div>");  
              }
      }

  ?>

</div>

</body>
</html>
