<?php
session_start();
$user=$_SESSION['userid'];
?>

 
 <!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel='stylesheet' href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="css/styles.css">
   <style>
       a:link {
  text-decoration: none;
  
        
}
a:hover 
{
     color:#00A0C6; 
     text-decoration:none; 
     cursor:pointer;  
}
   </style>
    <title>Arts & Craft</title>
</head>
<body>
<nav class="navbar navbar-dark navbar-expand-sm  fixed-top">
        <div class="container">
            <a href="ideas.php" class="idealink">
                <button class="navbar-toggler" type="button" data-toggle="collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </a>
            <!-- <a class="navbar-brand mr-auto" href="#"><img src="img/logo.png" height="30" width="41"></a>   -->
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                    
                        <div class="col-12 col-sm-3 align-self-center">
                            <li class="nav-item active"><a class="nav-link" href="./index.php"> <span class="fa fa-home fa-lg"></span> Home</a></li>
                        </div>
                        <div class="col-12 col-sm-3 align-self-center">
                            &nbsp;&nbsp;
                            &nbsp;&nbsp;
                            &nbsp;&nbsp;
                            &nbsp;&nbsp;
                            &nbsp;&nbsp;
                            &nbsp;&nbsp;
                            &nbsp;&nbsp;
                            &nbsp;&nbsp;
                            &nbsp;&nbsp;
                            &nbsp;&nbsp;
                            &nbsp;&nbsp;
                            &nbsp;&nbsp;
                            &nbsp;&nbsp;
                            &nbsp;&nbsp;
                        </div>

                        <div class="col-12 col-sm-3  align-self-center">
                        <li class="nav-item"><a class="nav-link" href="index_rate.php"><span class="fa fa-list fa-lg"></span> Rate</a></li>
                    </div> 
 
                        <div class="col-12 col-sm-3 align-self-center">
                            <li class="nav-item"><a class="nav-link" href="./aboutus.php"><span class="fa fa-info fa-lg"></span> About</a></li>
                        </div>    
                        <div class="col-12 col-sm-3 align-self-center">
                        <li class="nav-item active"><a class="nav-link" href="./logout.php"> <span class="fa fa-sign-in fa-lg"></span> LogOut</a></li>

                            <!-- <li class="nav-item"><a class="nav-link" href="#"><span class="fa fa-list fa-lg"></span> Menu</a></li> -->
                        </div> 
                        <div class="col-12 col-sm-3 align-self-center">
                            <li class="nav-item"><a class="nav-link" href="./profile.php"><span class="fa fa-user fa-lg"></span>  <?php echo $user; ?></a></li>
                        </div> 
   
                    </div>
                    
                    </div>
                </ul>
            </div>
        </div>
    </nav>  

            <br><br><br>
            <div class="d-flex" id="table">
                
                    <div class='container'>
                        <table>
                        <tr>
                            <th>Project Name</th>
                            <th>Difficulty</th>
                            <th>Cost</th>
                        </tr>
                            <?php
                            $con=mysqli_connect('localhost','root','','');
                            // if($con){
                            //     echo "Connection Success!";
                            //     echo "<br>";
                            //         }
                            mysqli_select_db($con,'user_info');
                            $a=$_POST['inlineRadioOption1'];
                            $b=$_POST['inlineRadioOption2'];
                            
                            if($a=='option1' && $b=='option1'){
                                $c1=0; 
                                $c2=200;
                                $d='Easy';
                            
                            }
                            else if($a=='option1' && $b=='option2'){
                                $c1=0; 
                                $c2=200;
                                $d='Medium';
                            }
                            else if($a=='option1' && $b=='option3'){
                                $c1=0; 
                                $c2=200;
                                $d='Hard';
                            }
                            else if($a=='option2' && $b=='option1'){
                                $c1=200; 
                                $c2=400;
                                $d='Easy';
                            }
                            else if($a=='option2' && $b=='option2'){
                                $c1=200; 
                                $c2=400;
                                $d='Medium';
                            }
                            else if($a=='option2' && $b=='option3'){
                                $c1=200; 
                                $c2=400;
                                $d='Hard';
                            }
                            else if($a=='option3' && $b=='option1'){
                                $c1=400; 
                                $c2=600;
                                $d='Easy';
                            }
                            else if($a=='option3' && $b=='option2'){
                                $c1=400; 
                                $c2=600;
                                $d='Medium';
                            }
                            else if($a=='option3' && $b=='option3'){
                                $c1=400; 
                                $c2=600;
                                $d='Hard';
                            }
                            else if($a=='option4' && $b=='option1'){
                                $c1=600; 
                                $c2=10000;
                                $d='easy';
                            }
                            else if($a=='option4' && $b=='option2'){
                                $c1=600; 
                                $c2=10000;
                                $d='Medium';
                            }

                            else{
                                $c1=600; 
                                $c2=10000;
                                $d='Hard';
                            }

                            echo "<div style='color:white; padding:10px; background: linear-gradient(to bottom, #190053, #6438c8); box-shadow: -15px -15px 20px rgba(255,255,255,0.05), -15px -15px 25px rgba(0,0,0,0.5);'>";
                            echo "<h2>Filters Applied</h2>";
                            echo "<hr style='border: 1px solid white;'>";
                            echo "<h4>Cost&nbsp;:</h4>";
                            echo "<b><span style='color:lightblue;'>$c1-$c2</span><b>";
                            echo "<br><br>";
                            echo "<h4>Difficulty&nbsp;:</h4>";
                            echo "<span style='color:lightblue;'>$d</span>";
                            echo "<br><br>";
                            echo "</div><br><br>";

                            // $sql= 'SELECT pro_name,difficulty,cost from project where difficulty=="$d" and (cost<$c2 and cost>=$c1)';
                            // $sql= 'SELECT pro_name,difficulty,cost from project where difficulty=="Easy" and (cost<'.$c2 .' and cost>= '. $c1 .')';
                            // $sql= 'SELECT pro_name,difficulty,cost from project where difficulty=="Easy" and cost<200 ';
                            // $sql= 'SELECT pro_name,difficulty,cost from project where difficulty="Easy" and cost<300 ';
                            $sql= 'SELECT pro_name,difficulty,cost from project where difficulty="'.$d.'"'.'and (cost< '.$c2.' and cost>='.$c1. ')'  ;
                
                            $r=$con-> query($sql);
                            if($r-> num_rows >0){
                                while($row=$r-> fetch_assoc()){
                                    echo "<tr><td><a href='ideas.php'>". $row['pro_name'] . "</a></td><td>". $row['difficulty']. "</td><td>" .$row[ 'cost']. "</td><tr>";
                                }
                            }
                            ?>
                        </table>
                        <br><br>
                        <a href="filter.php"><button class="btn" id='buttontop'>Change Filters</button></a>

                    </div>
                
            </div>








