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

if(!isset($_SESSION["wins"]) || !isset($_SESSION["losses"])){
    $_SESSION["wins"] = 0;
    $_SESSION["losses"] = 0;

}

if(isset($_GET["isresult"])){
    echo"<script> 

    function Scrolldown() {
        window.scrollTo(0, document.body.scrollHeight);
    }
   
   window.onload = Scrolldown;
    
    </script>";
}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/80d3ebf6b6.js" crossorigin="anonymous"> </script>
    <title> Mention Someone </title>



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

<script>
if (performance.navigation.type == performance.navigation.TYPE_RELOAD) {
    console.info( "This page is reloaded" );
    window.location.replace("main.php?msg=Welcome to Flames");

  } else {
    console.info( "This page is not reloaded");
}


</script>

</head>
<body>






<div style="color: white">
        <h1 style="float: right; font-size: 23px; margin-right: 9px"><i class="fa-solid fa-fire"></i></h1>

    <ul> 
        <li><a  href="main.php">Play Flames</a></li>
        <li><a  href="howtoplay.php">How to Play</a></li>
        <li><a href="logout.php">Log out</a></li>
    </ul>
        <hr style="border: 1px solid white" />          
</div>


<?php

$randomizer = rand(1,6);
$uniquecharacters;
$duplicatecharacters;
$needtomention;



switch($randomizer){
    case 1:
        $someone = "Friend";
        $needtomention= "Mention someone who is your <b> $someone </b> ";
        break;
    case 2:
        $someone = "Lover";
        $needtomention= "Mention someone who is your <b> $someone </b> ";
        break;     
    case 3:
        $someone = "Affection";
        $needtomention= "Mention someone who you have <b> $someone </b> with ";
        break;
    case 4:
        $someone = "Marry";
        $needtomention= "Mention someone who you would <b> $someone </b> ";
        break;
    case 5:
        $someone = "Enemy";
        $needtomention= "Mention someone who is your <b> $someone </b> ";
        break;
    case 6:
        $someone = "Secret Lover";
        $needtomention= "Mention someone who is your <b> $someone </b> ";
        break;
            
}


if(isset($_SESSION["result"])){
           
    $result = $_SESSION["result"];

        if($result === "Friends"){
            $yourResult = "Friend";
        } else if($result === "Lovers"){
            $yourResult = "Lover";
        } else if($result === "Affection"){
            $yourResult = "Affection";
        } else if($result === "Marriage"){
            $yourResult = "Marry";
        }else if($result === "Enemies"){
            $yourResult = "Enemy";
        }else if($result ==="Secret Lover"){
            $yourResult = "Secret Lover";
        }else if($result === "You have no connection"){
            $yourResult = "You have no connection";
        }
 
}


if(isset($_SESSION["wins"]) && isset($_SESSION["losses"]) && isset($_GET["condition"]) && isset($yourResult)){
   
    $condition = $_GET["condition"];


    if($yourResult === $condition){

        $_SESSION["wins"] = $_SESSION["wins"] + 1;
       
        $result = "";
        $yourResult="";

    } else{

        $_SESSION["losses"] = $_SESSION["losses"] + 1;
       
        $result = "";
        $yourResult="";

    }
}

//checking if player has won or lost
if($_SESSION["wins"] > 2){
    $_SESSION["wins"] = 0;
    $_SESSION["losses"]= 0;
    echo"<script> alert('You Win!') </script> ";
    

} else if($_SESSION["losses"] > 2){
    $_SESSION["wins"] = 0;
    $_SESSION["losses"]= 0;
    echo"<script> alert('You Lose!') </script> ";

}



?>

<center>
    <div class="container">
        <h1 style = "color: white"> <i class="fa-solid fa-heart-circle-bolt"></i> F L A M E S </h1> <hr> <br/>
        <h1 style = "color: white"> <?php echo $needtomention; ?>  </h1> 
                <div class="card">
                <form action=" mentionsomeoneprocess.php" method="post">
                    <input type="hidden" value="<?php echo $someone?>" name="someone">

                    <label> NAME </label> <BR>
                    <input name="myname" type="text" placeholder = "Enter your name..." Required/><BR> <br>
                    <label> PARTNER'S NAME </label> <BR>
                    <input name = "partnername" type="text"  placeholder = "Enter your partner's name..." Required/> <BR>
                    
                    <br>
                    <input class = "button" type="submit"/> 
                    <input class = "button" type="reset"/> 
                    </form>
                </div>
    </div>
</center>

<center> 
<div class="container" >
<div class="card" style = "height:300px" id="card">
<h3> Result </h3>

<?php




// checking if it matches & gives score
if(isset($_SESSION["wins"]) && isset($_SESSION["losses"]) && isset($_GET["condition"]) && isset($yourResult)){
    

// displaying results

    if(isset($_GET["myname"]) && isset($_GET["partnername"])){

        echo "Your Name: <b>".$_GET['myname']." </b> <br/>";
        echo "Your Partner's Name: <b>".$_GET['partnername']."</b> <br/>";
    
    }

    if(isset($_GET["uniq"])){
        echo"unique characters: ";
        echo"<b>";
        echo ($_GET["uniq"]);
        echo"</b>";
        echo"<br/>";

    }

    if(isset($_GET["dup"])){
        echo"similar characters: ";
        echo"<b>";
        print_r($_GET["dup"]);
        echo"</b>";
        echo"<br/>";
    }

    if(isset($_GET["cnt"])){
        echo"count: ";
        echo"<b>";
        print_r($_GET["cnt"]);
        echo"</b>";
        echo"<br/>";
    }


    if(isset($_GET["result"])){
        echo"result: ";
        echo"<b>";
        print_r($_GET["result"]);
        echo"</b>";
        echo"<br/>";
    }


// displaying the current scores 

    $wins = $_SESSION["wins"];
    $losses = $_SESSION["losses"];
    echo "Need to mention: <b> $condition <b/> <br/>";
    echo "WINS: <b> $wins <b/> /3 &nbsp &nbsp";
    echo "LOSSES: <b> $losses </b> /3 <br/>";

    $_SESSION["condition"] = "";




}

?>
</div>
</div>
</center>
</body>
</html>


