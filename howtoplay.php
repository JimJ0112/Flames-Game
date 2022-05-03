<?php
session_start();

if(isset($_SESSION["username"])){

} else {
    header("location:index.php?msg=please login first");
}



if(isset($_GET["msg"])){
    $msg = $_GET["msg"];  
    echo"<script> window.alert('$msg') </script>";
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/80d3ebf6b6.js" crossorigin="anonymous"> </script>
    <title> Flames Main </title>

    <style>
        body{
            background-image: url('images/bg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            font-family: courier;
            }	
        .container{
            border-radius: 9px;
            background-color: #0000006b;
            box-shadow: rgba(0, 0, 0, 0.658) 5pt 5pt 5pt;
            padding: 20px;
            width: 70%;
            margin: 0;
            
            margin-top: 60px; 
            font-size: 20px;
            font-family: courier;
            
        }
        .card{
            background-color: ;
            color: white;
            border-radius: 9px;
        }

        li a{
            font-size: 20px;
            display: block;
            color: white; 
            text-align: center;
            padding: 14px 16px;
            text-decoration: none; 
        }

        li a:hover:not(.active) {
            color: #CBC3E3;
            font-style: italic;
        }
        
        ul{
            list-style: none;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }
        li{
            float: left;    
        }

        input{                
            background-color:#F8F1AE;
            width: 80%;
            height: 50px;
            border-radius: 10px;
            font-size: 20px;
        
        }
        .button{
            border-radius: 10px;
            width: 40%;
            background-color:#CBC3E3;
        }
        
        form{
            padding: 20px;
        }
        input.button[type="submit"]:hover
        {
            color: white;
            font-style: italic;
        }
        input.button[type="reset"]:hover
        {
            color: white;
            font-style: italic;
        }
    </style>

    
</head>
<body>

<div style="color: white">
        <h1 style="float: right; font-size: 23px; margin-right: 9px"><i class="fa-solid fa-fire"></i></h1>

    <ul> 
        <li><a  href="main.php">Play Flames</a></li>
        <li><a  href="mentionsomeone.php">Play Mention Someone</a></li>
        <li><a href="logout.php">Log out</a></li>
    </ul>
        <hr style="border: 1px solid white" />          
  </div>


<center>
    <div class="container">
        <h1 style = " color: white"> <i class="fa-solid fa-heart-circle-bolt"></i> How To Play</h1> <hr>
                <div class="card">
                  <p> 1. Enter your name in the text field, as well as your partner's name.  </p>
                  <img src = "images/f1.jpg" style = "height: 400px; width: 80%">
                </div>
    </div>






<div class="container" >
<div class="card">
                  <p> 2. Press submit once you fill all in the textfield.  </p>
                  <img src = "images/f2.jpg" style = "height: 400px; width: 80%">
                </div>
</div>

<div class="container" >
<div class="card">
                  <p> 3. Once you press the submit button. It will generate result.   </p>
                  <img src = "images/f3.jpg" style = "height: 400px; width: 80%">
                </div>
</div>
</center>

</body>
</html>