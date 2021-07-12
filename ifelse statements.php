<?php
//the if statement
$marks=80;
if ($marks<=60){
    echo"you have passed";
}
echo"<br>";
//if else statement
$grades=45;
if ($grades>=80&&$grades<=45){
    echo"you have passed";
}else{
    echo"you have failed";
}
echo"<br>";
//if else if else statement
$alama=55;
if ($alama<=50){
    echo "you have failed";
}elseif ($alama>=55){
    echo"you have passed";
}else{
    echo"have a resit";
}
echo"<br>";
// the switch statement
$favcar="mercedes";
switch ($favcar){
    case"mercedes":
        echo"i love mercedes";
        break;

    case "bmw":
        echo"i love bmw";
        break;
    case"rolls royce":
        echo"i love rolls royce";
        break;
    default:
        echo"the above is not in our radar";
}














?>
