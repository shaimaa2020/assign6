<?php
include("connect.php");
session_start();

$name=$_POST["user_name"];
$mail=$_POST["mail"];
$password=$_POST["password"];
$Confirm_password=$_POST["Confirm_password"];
$_SESSION["name"]=$name;
$_SESSION["mail"]=$mail;
 
if($password==$Confirm_password){
    $query="INSERT INTO users( email, password) VALUES ('$mail','$password')";
    $result=$con->query($query);
    echo "Hello ".$name."<br>";
    
    }
?>
<form action="creatShortLink.php"method="post">
    <input type="text" name="long_url" placeholder="Enter URL">
    <br> 
    <input type="submit" value="Creat">
    <br>   
</form>
<?php


   