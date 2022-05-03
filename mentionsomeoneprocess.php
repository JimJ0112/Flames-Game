<?php
session_start();

if(isset($_SESSION["username"])){
    echo $_SESSION["username"]."<br/>";
} else {
    header("location:index.php?msg=please login first");
}



if(isset($_POST["myname"]) && isset($_POST["partnername"]) && isset($_POST["someone"])){

        $myname = $_POST["myname"];
        $partnername = $_POST["partnername"];

        $myname = strtoupper($myname);
        $partnername = strtoupper($partnername);
    
        if(is_numeric($myname) or is_numeric($partnername)){
            header("location:main.php?msg=Please enter a name not numbers");

            } else {


                require("classes/Flame.php");
    
                $Flame = new Flame($myname,$partnername);
    
                $nameArray = $Flame->convertToArray($myname);
                $nameArray1 = $Flame->convertToArray($partnername);
    
                $unique = $Flame -> getUnique();
    
                $mergednames = array_merge($nameArray,$nameArray1);
    
                $duplicate = $Flame -> getDuplicates($mergednames);

    
  
                $result = $Flame-> getFlames($unique);
                $count = count($unique);
                // implode con
                $unique = implode($unique);
                $duplicate = implode($duplicate);

                $condition  = $_POST["someone"];
                $_SESSION["result"] = $result;
    
    header("location: mentionsomeone.php?uniq=$unique&dup=$duplicate&cnt=$count&result=$result&myname=$myname&partnername=$partnername&condition=$condition&isresult=true");

    }// end of is numeric if


}






