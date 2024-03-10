<html>
    <head>
        <style>
            .parent{
                width:200px;
                margin:10px;
                background-color:bisque;
                display:inline-block;
            }
            img{
                width:100%;
                height:200px;
            }
        </style>
    </head>
    <body>
        
    </body>
</html>



<?php

include "authguard.php";
include "menu.html" ;
include "../shared/connection.php" ;

$sql_result = mysqli_query($conn,"select * from product  where owner = $_SESSION[userid] ");



while($dbrow = mysqli_fetch_assoc($sql_result))
{
       

    echo "<div class='parent'>
    <div>$dbrow[name]</div>
    <div>$dbrow[price]</div>
    <img src='$dbrow[impath]'>
    <div>$dbrow[details]</div>
    <div class ='action'>
        <button>EDIT</button>
        <a href='deletepdt.php?pid=$dbrow[pid]'>
             <button>DELETE</button>
        </a>


    </div>


</div>";

}

?>
  