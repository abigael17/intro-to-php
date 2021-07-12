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
}


$data="CREATE DATABASE  classroom";
if ($connection->query($data)===TRUE){
    echo "Database successfully created";
}else{
    echo"Database not created" .$connection->error;
}
$connection->close();
