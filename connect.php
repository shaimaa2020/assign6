<?php
$serverName="localhost";
$dbuser="root";
$dbpassword="";
$dbName="short_url";

$con=new mysqli($serverName,$dbuser,$dbpassword,$dbName);

if($con->connect_error){
    die($con->connect_error);
}
