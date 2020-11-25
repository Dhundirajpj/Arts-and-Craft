<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
	<title>Art & Craft</title>
</head>
<style>.error{color:red;}</style>
<body class="formBody">
<?php

session_start();
$email=$_SESSION['email'];


$matErr = $stepsErr = "";
$materials = $steps = "";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_POST["materials"])) {
        $matErr = "Materials are required";
    } else {
        $matErr ="";
    }

    if (empty($_POST["steps"])) {
        $stepsErr = "Steps are required";
    } else {
        $stepsErr ="";
    }
}

?>

<div>
	<form class="box" autocomplete="off" id="contributeForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <h2 id="title">Please Fill The Details</h2>
        <div class="image">
            <label for="image">Submit an Image: </label><br><br>
            <input type="file" name="image">
            <span class="error">*</span>
        </div>
        <br><br>
        <div class="video">
            <label for="video">Submit a Video: </label><br><br>
            <input type="file" name="video">
        </div>
        <br><br>
        <div class="materials">
            <label for="materials">Materials Required: </label><br><br>
            <textarea name="materials" form="contributeForm" placeholder="Enter Materials Here eg.Paper, Glue, ..." value="<?php echo $materials; ?>" ></textarea>
            <span class="error">* <?php echo $matErr;?></span>
        </div>
        <br><br>
        <div class="steps">
            <label for="steps">Step wise instructions: </label><br><br>
            <textarea name="steps" form="contributeForm" placeholder="Step 1: .......... Step 2: .......... " value="<?php echo $steps; ?>"></textarea>
            <span class="error">* <?php echo $stepsErr;?></span>
        </div>
        
        <input type="submit" name="submit" value="Submit">

  </form>
  <?php

if(isset($_POST['submit']) && $stepErr == "" && $matErr == "") {

    header('Location: ./contributeForm3.php');

}

?>
</div>

</body>
</html>