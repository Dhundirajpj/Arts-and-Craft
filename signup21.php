<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
	<title>Art & Craft</title>
</head>
<style>.error{color:red;}</style>
<body class="formBody">
<?php
$emailErr = "";
$email = "";

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
          $emailErr = "Invalid email format";
        }
        else{
          $emailErr = "OK";
        }
    }
}

?>

<div>
	<form class="box"   name="myForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <h2 id="title"> SIGNUP</h2>
        <div class="Email">
            <input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>">
            <span class="error">* <?php echo $emailErr;?></span>
        </div>
        <br>

		<label style="color:red;">User Already Exists!! </label>
    <label><a href="login_valid.php" style="color: #e2e743;">Login</a></label><br><br>
    <label style="color:white;">OR</label><br><br>
    <label style="color:white;">Create Another Account</label>
    <!-- <label><a href="signup1.php" style="color: #e2e743;">Signup</a></label><br> -->

    <input type="submit" name="submit" value="Submit">

  </form>
</div>

</body>
</html>

<?php
if($emailErr=='OK'){

  session_start();
  $email= $_POST["email"];
  
//This Code Will extract Email ID Given Username
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'user_info');
$sql_email="select email from signin where email='$email'";
$r=$con-> query($sql_email);
if($r-> num_rows >0){
  header("Location:signup21.php");

    }
    else{
      $_SESSION['email']=$email;
      header("Location:signupvalidation_random.php");

    }

}
?>
