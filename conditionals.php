<?php

$age = 60;

if($age <=12){
    echo "You are a kid" . "<br>";
}
else if($age <= 18){
    echo "You are a teenager" . "<br>" ;
}
else{
    echo "You are an adult" . "<br>";
}

//switch

$day = 6;

switch($day){
    case 1:
        echo "Monday";
        break;
    case 2:
            echo "Tuesday";
            break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    case 7:
        echo "Sunday";
        default: echo " Invaid";
}