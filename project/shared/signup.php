<?php

$uname = $_POST['username'];
$upass1 = $_POST['pass1'];
$upass2 = $_POST['pass2'];
$usertype = $_POST['usertype'];

if($pass1 != $pass2){
    echo "Password Mismatched";
    die;
}

// md5 is used for encryption of data 
$cipher = md5($upass1);  // here passor is encrypted and not show in data base  and can't be acccessed by any

include_once "connection.php";
 
try{
    mysqli_query($conn  , "insert into user(username , password ,usertype) values('$uname' ,'$cipher' , '$usertype') ");
    
    echo "CONNECTION SUCCESSFUL";
}
catch(Exception $ex){
    echo $ex;
}

?>