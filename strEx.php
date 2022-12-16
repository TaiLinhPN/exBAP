<?php
$text =  'welcome to bap company ';

function characterCount($text){
    $count = 0;
    
    for ($i = 0; $i < strlen($text) - 1; $i++) {
        if ($text[$i] != ' '){
            $count++;
        } 
    }
    return $count;
}

function findEqual($text){
    $equalText=[];

    for($i = 0; $i < strlen($text); $i++) {
        for($j = $i+1; $j < strlen($text); $j++) {
            if ($text[$j] == $text[$i]) {
                $equalText[] = $text[$i];
                break;
            }
        }
    }
  
    return $equalText;
}

function replaceString($search, $replace ,$text){

    return str_replace($search, $replace ,$text);
    }

function getDayOfWeek($num){
    switch ($num) {
        case 1: return "Sunday";
        case 2: return "Monday";
        case 3: return "Tuesday";
        case 4: return "Wednesday";
        case 5: return "Thursday";
        case 6: return "Friday";
        case 7: return "Saturday";
        default: return "Invalid";
    }
}
print_r( getDayOfWeek(10));

?>