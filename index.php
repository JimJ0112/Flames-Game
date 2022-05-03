<?php
session_start();

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
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- font src -->
    
    <script src="https://kit.fontawesome.com/80d3ebf6b6.js" crossorigin="anonymous">

    </script>

    <title> Log In </title>
</head>
<body>


    <div class="container">
    
        <div class="banner">
        <img src="images/bg.jpg" id="bannerimg">
        </div>


        <div class="form-content">

            <i class="fa-solid fa-fire-flame-curved"></i> <h1 style = "color: #800080"> Welcome Back</h1>
            <br/> <br/>
                <form action="verification.php" method="post" class="loginform">
        
       
                    <p style= "font-size: 20px"> <i class="fa-regular fa-envelope"></i><input type="text" name="username" class="inputbox" placeholder=" Enter a username"/>  <br/><br/>  </p>
                    <p> <i class="fa-solid fa-lock"></i><input type="password"   name="password"  class="inputbox" placeholder=" Enter a password"/>  <br/> </p>

                    <br/>

                    <br/>
        
                        <div class = "iconsubmit">
                            <input type="submit" value="Log in" class="button"/> <i class="fa-solid fa-arrow-right-to-bracket"></i></div>  <br/>

                            <input type="reset" class="button"/> 
                            <br/><br/>

                </form>
    
        </div>



    </div>


</body>
</html>