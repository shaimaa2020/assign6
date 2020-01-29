<?php
include("connect.php");
session_start();

$long_url=$_POST["long_url"];
$_SESSION["long_url"]=$long_url;



    function generateRandomString($length = 10) {
  $characters = "hjfvtygbhnj;lkmn12345678asdfrgthujiklzxcvbnm,wertyuiop;xcvbnm,2345678987654323456789;.l,mnbgvfdfgtyh";
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


?>
<form action="insert.php"method="post">
    
    <input type="text"  value="<?php echo "localhost/bit/?id=".generateRandomString();   ?>" name="short_url"  >
    <br>
    <button type="button" name="copy"><a href=" <?php  echo $long_url ?>">Go</a></button>
     <br>
    <input type="submit" value="Save">
    <br>   
</form>
<?php