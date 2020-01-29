<?php


function valid($password){
    if (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $password )){
echo "Your password is strong.";
} else {
echo "Your password is not safe.";
}
}

function valid_email($name) {
return (!preg_match("/^[a-zA-Z ]*$/",$name)) 
  $nameErr = "Only letters and white space allowed";
}
$m=valid_email('shaimaa@gghjjh.coppji');
    echo $m->$nameErr;



/**class validation{
    $email='';
    $password='';
    $name='';
    
    
    function __construct($mail,$pass,$name){
        $this->email=$mail;
         $this->password=$pass;
         $this->name=$name;**/
      
/**function valid($password){
        if( strlen($password ) < 8 ) {
$error = "Password too short!";
}
if( strlen($password ) > 20 ) {
$error .= "Password too long!";
}
if( strlen($password ) < 8 ) {
$error = "Password too short!";
}
if( !preg_match("#[0-9]+#", $password ) ) {
$error = "Password must include at least one number!";
}
if( !preg_match("#[a-z]+#", $password ) ) {
$error = "Password must include at least one letter!";
}
if( !preg_match("#[A-Z]+#", $password ) ) {
$error = "Password must include at least one CAPS!";
}
if( !preg_match("#\W+#", $password ) ) {
$error = "Password must include at least one symbol!";
}
if($error){
echo "Password validation failure(your choise is weak): $error";
} else {
echo "Your password is strong.";
}
        
        }*/
    



$v= valid('1123567');
//$pwd = $_POST['password '];
