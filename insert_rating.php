<?php
// $email=$_SESSION['email'];

//fetch.php

$connect = new PDO('mysql:host=localhost;dbname=user_info', 'root', '');

if(isset($_POST["index"], $_POST["business_id"]))
{
 $query = "
 INSERT INTO rating(business_id, rating) 
 VALUES (:business_id, :rating)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':business_id'  => $_POST["business_id"],
   ':rating'   => $_POST["index"]
  )
 );
 $result = $statement->fetchAll();
 if(isset($result))
 {
  echo 'done';
//   $query2='set total_reviews=total_reviews+1 where email='.$email;
//   mysqli_query($con,$query2);
 }
}


?>
