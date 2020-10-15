<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="new_css.css">
	<title>Art & Craft</title>
</head>
<style>.error{color:red;}</style>
<body>
<?php
$uidErr = $passErr = "";
$userid = $password = "";

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
	<form class="box" style="z-index: -1;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <h2>LOGIN</h2>
        <div class="userid1">
            <input type="text" name="userid" placeholder="Username" value="<?php echo $userid; ?>">
            <span class="error">* <?php echo $uidErr;?></span>
        </div>

        <div class="pass">
            <input type="text" name="pass" placeholder="Password" value="<?php echo $password;?>"> 
            <span class="error">* <?php echo $passErr;?></span>
        </div>
        <br>
		<label><a href="#" style="text-decoration:none;">Forgot Password?</a></label><br><br>

		<input type="checkbox" name="remember"><font color=white>Remember Me</font><br><br>

		<label style="color:white;">Don't have an Account?</label>
		<label><a href="signup_valid.php" style="text-decoration:none;">Sign Up</a></label><br><br>

    <input type="submit" name="submit" value="Login">

  </form>

  <?php
  
    if(isset($_POST['submit']) && $uidErr == "" && $passErr == "") {

        session_start();

        $cookie_name = $userid;
        $cookie_value = $password;
        setcookie("user", $cookie_name, time() + (86400 * 30), "/"); // 86400 = 1 day
        setcookie("password", $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

        $_SESSION['user'] = $userid;

    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && $uidErr == "" && $passErr == "") {  
    
      $name=$_POST["userid"];
      $pass=$_POST["pass"];
      
      $db = mysqli_connect('localhost','root','','users') or 
      die('Error connecting to MySQL server.');
      
      $query = "SELECT * FROM login WHERE Name='$name' AND Password='$pass' LIMIT 1";
      $results = mysqli_query($db, $query);
      
          if (mysqli_num_rows($results) == 1){
                  echo("<div style='color: green; margin-top: 600px; margin-left: 735px;'><b>Login Successful</b></div>");
              }else{
                  echo("<div style='color: #ff4444; margin-top: 600px; margin-left: 680px;'><b>Invalid Username or Password<br>If you are new user please <a href='signup_valid.php'>Register</a></b></div>");  
              }
      }

  ?>

</div>

</body>
</html>
