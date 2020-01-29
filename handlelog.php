<?php
include("connect.php");


$email=$_POST["mail"];
$password=$_POST["password"];
 echo"----*******************<br>";
$mail="SELECT  `email` FROM `users` WHERE  email ='$email' AND password='$password'";
 $result1=$con->query($mail);
$m=$result1->fetch_assoc();
$pass="SELECT   `password` FROM `users` WHERE  email ='$email' AND password='$password'";
    $result2=$con->query($pass);
$p=$result2->fetch_assoc();
 echo"-----****************----<br>";
    //if($email==$m && $p==$password){

$query="SELECT long_url, short_url  FROM url JOIN users ON  url.user_id=users.user_id";
    $result=$con->query($query);
         
       
        if($result->num_rows>0){
            while($row=$result->fetch_assoc())
                echo $row["long_url"]."<br>".$row["short_url"]."<br> ---------------------<br>";
            
        }
//}
?>
<a href="new_url.php" >Shorten Link</a>