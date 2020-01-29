<?php
include("connect.php");
session_start();


$short_url=$_POST["short_url"];
$_SESSION["short_url"]=$short_url;
$long_url=$_SESSION["long_url"];


$query="INSERT INTO url( `user_id`, `long_url`, `short_url`) VALUES (1,'$long_url','$short_url')";
    $result=$con->query($query);
    

/**$url="SELECT  `long_url`, `short_url` FROM `url` WHERE short_url= '$short_url'";
$res=con->query($url);*/


header("location:new_url.php" );