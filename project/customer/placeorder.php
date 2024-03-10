<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
</html>


<?php


include "authguard.php";
include "../shared/connection.php";

$address = $_GET['address'];
$total = $_GET['total'];

// read all items from cart and join it in order table 

$username = $_SESSION['username'];
$userid = $_SESSION['userid'];

 $status = mysqli_query($conn , "insert into orders_parent(username , userid , total_amount , address ) values('$username' , $userid , $total , '$address') ");

if($status)
{
    $orderid = $conn->insert_id;
    // echo $orderid ;//show order id 

    echo "<br><br><div class = 'd-flex justify-content-center  '>
    <h4> ORDER PLACED , THANK YOU </h4>
    </div>";

    $sql_result = mysqli_query($conn, "select * from cart join product on cart.pid=product.pid where userid = $_SESSION[userid] " );

    while($dbrow = mysqli_fetch_assoc($sql_result))
    {
        mysqli_query($conn ,"insert into orders(orderid , pid , amount) values($orderid , $dbrow[pid],$dbrow[price])");
    }
}




?>