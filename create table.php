<?php
//This is an object oriented way
$servername = "Localhost";
$username = "root";
$password = "";
$MIT_db="classroom";
//creating a connection
$connection = new mysqli($servername, $username, $password,$MIT_db);

//checking the connection to the database
if ($connection->connect_error) {
    die("it didnt connect to the database" . $connection->connect_error);
}
//creating a table using an objectoriented way
$hifadhidata="CREATE TABLE majina(
    no INT (8) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
    Fullname VARCHAR (50) NOT NULL,
    Email VARCHAR (40),
    Phone_no INT ,
    Registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
if($connection->query($hifadhidata)===TRUE){
    echo"Successfully Created a table";
}else{
    echo"Imekataa kucreate table".$connection->error;
}
$connection->close();


