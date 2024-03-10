<?php

include "authguard.php";
include "../shared/connection.php";

$pid = $_GET['pid'] ;
$status = mysqli_query($conn , "delete from product where pid = $pid");

if($status){
    echo "removal of product successfully ";
    header("location:view.php");
}
else{
    echo "error in sql";
    echo mysqli_error($conn);
}

?>
