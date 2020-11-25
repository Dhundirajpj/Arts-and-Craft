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
// $email=$_SESSION['email'];
// echo $email;


$catErr = $projErr = "";
$category = $projectName = "";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["category"])) {
        $catErr = "Category is required";
    } else {
        $category = test_input($_POST["category"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$category)) {
        $catErr = "Only letters and white space allowed";
        }
        else{
          $catErr = "";
        }
    }
      
    if (empty($_POST["project"])) {
        $projErr = "Project name is required";
    } else {
        $projectName = test_input($_POST["project"]);
        if (!preg_match("/^[a-zA-Z0-9' ]*$/",$projectName)) {
        $projErr = "Only letters, numbers white space allowed";
        }
        else{
          $projErr = "";
        }
    }
}

?>

<div>
	<form class="box" autocomplete="off" id="contributeForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <h2 id="title">Share Your Ideas</h2>
        <div class="category">
            <input type="text" name="category" placeholder="Category" value="<?php echo $category; ?>">
            <span class="error">* <?php echo $catErr;?></span>
        </div>

        <div class="projectName">
            <input type="text" name="project" placeholder="Project Name" value="<?php echo $projectName; ?>"> 
            <span class="error">* <?php echo $projErr;?></span>
        </div>

        <div class="difficulty">
            <select id="diff" name="diff">
                <option hidden value="">Difficulty</option>
                <option value="easy">Easy</option>
                <option value="medium">Medium</option>
                <option value="hard">Hard</option>
            </select>
        </div>

        <div class="time">
            <select id="time" name="time">
                <option hidden value="">Time</option>
                <option value="1">less than 1 hour</option>
                <option value="2">1-2 hours</option>
                <option value="4">2-4 hours</option>
                <option value="5">greater than 5 hours</option>
            </select>
        </div>

        <div class="cost">
            <select id="cost" name="cost">
                <option hidden value="">Cost</option>
                <option value="200">Less than 200 rupees</option>
                <option value="400">200-400 rupees</option>
                <option value="600">400-600 rupees</option>
                <option value="1000">More than 600 rupees</option>
            </select>
        </div>
        
        <input type="submit" name="submit" value="Next">

  </form>

  <?php

    if(isset($_POST['submit']) && $catErr == "" && $projErr == "") {

        header('Location: ./contributeForm2.php');

    }

  ?>

</div>

</body>
</html>