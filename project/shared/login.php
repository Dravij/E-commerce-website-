<?php

session_start();
$_SESSION['login status'] = false;

$uname = $_POST['username'];
$pass = $_POST['pass'];
$cipher_text = md5($pass);

include_once "connection.php" ;

$sql_result = mysqli_query($conn , "select * from user where username = '$uname' and password = '$cipher_text' ");

// assocaited array 
$db_row = mysqli_fetch_assoc($sql_result);
// print_r($db_row); // printing associative data 


if( mysqli_num_rows($sql_result) > 0 )
{
    echo "LOGIN SUCCESS" ;
    $_SESSION['login status'] = true ; 
    $_SESSION['usertype'] = $db_row['usertype'];
    $_SESSION['userid'] = $db_row['userid'];
    $_SESSION['username'] = $db_row['username'];

   
    if($db_row['usertype'] == 'vendor'){
       header("location:../vendor/home.php");// this is php passing location 
    //    here "../vendor/home.php" .. represents that vendor is outside shared
    }
    else if($db_row['usertype'] == 'customer'){
        header("location:../customer/view.php");
    }
}
else
{
    echo "<h1> Invalid Credentials </h1>";
    $_SESSION['login status'] = false ; 
}



// notes:
// a= [10 , 20 , 30]
// a =[a =>"apple" , b => "banana"] -----php syntax to make asscoaited array  similarly dictionary in python 
// {
    // a:apple ------js me assocaited array ka syntax
    // b:banana
// }


 // php session : ye transfer data of one php file to another php file by session  




?>