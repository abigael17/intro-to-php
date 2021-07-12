<?php
//This is an object oriented way
$servername = "Localhost";
$username = "root";
$password = "";
$MIT_db = "classroom";
//creating a connection
$connection = new mysqli($servername, $username, $password, $MIT_db);

//checking the connection to the database
if ($connection->connect_error) {
    die("it didnt connect to the database" . $connection->connect_error);
}
$sql="INSERT INTO majina(Fullname,Email,Phone_no)VALUE ('Abigael Wangechi','abby27wangechi@gmail.com','0702829057')";

if ($connection->query($sql)===TRUE){

    echo "Successfully created a record";

}else{
    echo"imekataa".$sql."<br>".$connection->error;
}
