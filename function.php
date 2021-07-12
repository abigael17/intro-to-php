<?php
//this is a user defined function
function calculate(){
    $num1=16;
    $num2=27;
    echo"The sum is .$num1+$num2";

}
calculate();// i have called the function
echo"<br>";
function emobilid(){
    echo "This is emobilis institution";

}emobilid();
echo"<br>";
//argument ones, always call function outside so that it actually prints
function cars($carmodel,$caryear){
    echo"$carmodel .$caryear vehicles<br>";
}
cars("Mercedes","2010");
cars("Bmw","2015");
cars("Rolls royce","2019");
cars("Range rover","2020");



















?>
