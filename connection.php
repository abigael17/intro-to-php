<?php
//This is an object oriented way
$servername="Localhost";
$username="root";
$password="";

//creating a connection
$connection=new mysqli($servername,$username,$password);

//checking the connection to the database
if ($connection->connect_error){
    die("it didnt connect to the database" .$connection->connect_error);
} echo "Successfully connected to the database";















?>
