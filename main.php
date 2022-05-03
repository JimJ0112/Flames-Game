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

if(isset($_GET["isresult"])){
    echo"<script> 
    function Scrolldown() {
        window.scroll(0,300); 
   }
   
   window.onload = Scrolldown;
    
    </script>";
}

if(isset($_SESSION["wins"])|| isset($_SESSION["losses"])){

    $_SESSION["wins"] = 0;
    $_SESSION["losses"] =0;

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
        .fa-heart-circle-bolt{
            color: #B589D6;
        }
        .fa-fire{
            color: #B589D6; 
        }
    </style>

    
</head>
<body>

<div style="color: white">
        <h1 style="float: right; font-size: 23px; margin-right: 9px"><i class="fa-solid fa-fire"></i></h1>

    <ul> 
    <li><a  href="howtoplay.php">How to Play</a></li>
        <li><a href="mentionsomeone.php">Play Mention Someone</a></li>
        <li><a href="logout.php">Log out</a></li>
    </ul>
        <hr style="border: 1px solid white" />          
</div>


<center>
    <div class="container">
        <h1 style = "color: white"> <i class="fa-solid fa-heart-circle-bolt"></i> F L A M E S </h1> <hr>
                <div class="card">
                <form action="flamesprocess.php" method="post">
                    
                    <label> NAME </label> <BR>
                    <input name="myname" type="text" placeholder = "Enter your name..."/><BR> <br>
                    <label> PARTNER'S NAME </label> <BR>
                    <input name = "partnername" type="text"  placeholder = "Enter your partner's name..."/> <BR>
                    
                    <br>
                    <input class = "button" type="submit"/> 
                    <input class = "button" type="reset"/> 
                    </form>
                </div>
    </div>
</center>




<center> 
<div class="container" >
<div class="card" style = "height:250px" id="card">
<h3> Result </h3>
<?php


if(isset($_GET["myname"]) && isset($_GET["partnername"])){

echo "Your Name: <b>".$_GET['myname']." </b> <br/>";
echo "Your Partner's Name: <b>".$_GET['partnername']."</b> <br/> <br/>";

} /** hi jim hahahah */
/*hello hahahaha */
/** go kaya mo yan hahahahahah */
/*XD */

if(isset($_GET["uniq"])){
    echo"Unique Characters: ";
    echo "<b>";
    echo ($_GET["uniq"]);
    echo "</b>";
    echo"<br/>";

}
if(isset($_GET["dup"])){
    echo"Similar Characters: ";
    echo "<b>";
    print_r($_GET["dup"]);
    echo "</b>";
    echo"<br/>";
}
if(isset($_GET["cnt"])){
    echo"Count: ";
    echo "<b>";
    print_r($_GET["cnt"]);
    echo "</b>";
    echo"<br/>";
}

if(isset($_GET["result"])){
    echo"Flame Result: ";
    echo "<b>";
    print_r($_GET["result"]);
    echo "</b>";
    echo"<br/>";
}




?>
</div>
</div>
</center>

</body>
</html>


