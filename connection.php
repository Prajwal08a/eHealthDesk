<?php

$database= new mysqli("localhost","root","","SQL_Database_eHealthDesk");
if ($database->connect_error){
    die("Connection failed:  ".$database->connect_error);
}


?>