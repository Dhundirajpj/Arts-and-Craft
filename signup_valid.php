<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="new_css.css">
	<title>Art & Craft</title>
</head>
<style>.error{color:red;}</style>
<body>
<?php
$nameErr = $emailErr = $uidErr = $passErr = "";
$name = $email = $userid = $password = "";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
        }
        else{
          $nameErr = "";
        }
    }
      
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
        }
        else{
          $emailErr = "";
        }
    }
    
    if (empty($_POST["userid"])) {
        $uidErr = "Username is required";
    } 
    else {
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
	<form class="box" autocomplete="off" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <h2>SIGNUP</h2>
        <div class="Name">
            <input type="text" name="name" placeholder="Name" value="<?php echo $name; ?>">
            <span class="error">* <?php echo $nameErr;?></span>
        </div>

        <div class="Email">
            <input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>">
            <span class="error">* <?php echo $emailErr;?></span>
        </div>

        <div class="userid1">
            <input type="text" name="userid" placeholder="Username" value="<?php echo $userid; ?>">
            <span class="error">* <?php echo $uidErr;?></span>
        </div>

        <div class="pass">
            <input type="text" name="pass" placeholder="Password" value="<?php echo $password;?>"> 
            <span class="error">* <?php echo $passErr;?></span>
        </div>
        <br>

		<label style="color:white;">Already a user?</label>
		<label><a href="login_valid.php">Login</a></label><br><br>

    <input type="submit" name="submit" value="Submit">

  </form>
</div>

</body>
</html>
