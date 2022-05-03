<?php

class Flame{

// properties
private $myname;
private $partnername;


// constructor
function __construct($myname,$partnername){

    $this->myname = strtoupper($myname);
    $this->partnername = strtoupper($partnername);
}
// desctructor
function __destruct(){


}

// methods

public function convertToArray($name){

    $name = $name;
    $mynamearray = array();

    if(is_string($name)){

        $arraylength = strlen($name);
    
            for($i = 0; $i<=$arraylength-1;$i++){
    
                if($name[$i] != ' ' && !is_numeric($name[$i])){
                    $mynamearray[$i] = $name[$i];
                }
            } // end of for loop
    } else {
        $notstring = "not a string";
        return $notstring; 
    }

    return $mynamearray;
}// end of convertToArray()


// get similar characters in one array 
public function getDuplicates($namearray){

   $namearray = $namearray;
   $arraylength = count($namearray);
   $seentwice = array();
   sort($namearray);



for($i = 0; $i <$arraylength; $i++){

    $j = $i+1;

    if($j < $arraylength){

        if($namearray[$i] === $namearray[$j]){
            $seentwice[] = $namearray[$i];
        } else {} 
    }

}

$seentwice = array_unique($seentwice);

return $seentwice;


} // end of getDuplicates()


// remove duplicates from array
public function removeDuplicates($namearray){
    $namearray = $namearray;
    $duplicates = $this->getDuplicates($namearray);
    $arraylength = count($namearray);
    $duplicateslength = count($duplicates);
    sort($namearray);
    sort($duplicates);

   
        
    for ($i = 0; $i < $arraylength ; $i++) {

        for ($j = 0; $j < $duplicateslength; $j++)

            if ($namearray[$i] == $duplicates[$j]) {
                $namearray[$i] =null;
                           
               

            }
    }
    
return $namearray;

}// end of removeDuplicates


public function getFlames($stringarray){
    $namearray = $stringarray;
    $arraylength = count($namearray);
    $result;

    $count = 0;

    for($i = 0; $i<$arraylength; $i++){
        if($count >= 6){
            $count = 0;
        }
        $count++;
    }


    switch($count){
        case 1:
            $result = "Friends";
            break;
        case 2:
            $result = "Lovers";
            break;     
        case 3:
            $result = "Affection";
            break;
        case 4:
            $result = "Marriage";
            break;
        case 5:
            $result = "Enemies";
            break;
        case 6:
            $result = "Secret Lover";
            break;
        default:
            $result = "You have no connection";
            break;

    }

    return $result;
}


// show unique characters given in obj parameters
public function getUnique(){

    $myname = $this -> myname;
    $partnername = $this-> partnername;

    $mynamearray = $this-> convertToArray($myname);
    $partnernamearray= $this-> convertToArray($partnername);

    $mynamelength = count($mynamearray);
    $mypartnernamelength = count($partnernamearray);

    sort($mynamearray);
    sort($partnernamearray);


    
    $result = array_merge($mynamearray,$partnernamearray);

    
    $result = $this-> removeDuplicates($result);

    $result = array_filter($result);


    return $result;

}



}// end of class