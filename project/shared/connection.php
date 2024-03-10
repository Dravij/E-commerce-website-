<?php

$conn =  new mysqli("localhost" , "root" , "" ,"coding" , 3306 );

if($conn -> connect_error){
    echo "Connection Failed";
    die;

}

?>