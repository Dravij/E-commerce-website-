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
        <script>
            function popup(cartid){
               res = confirm('Are you sure you want to Delete?')
               if(res){
                location.href=`deletecart.php?cartid=${cartid} `;
               }
            }
        </script>
    </body>
</html>
<?php
include "authguard.php";
include "menu.html" ;
include "../shared/connection.php" ;

$sql_result = mysqli_query($conn,"select * from cart join product on cart.pid = product.pid where userid =$_SESSION[userid]  ");

$total = 0;
while($dbrow = mysqli_fetch_assoc($sql_result))
{
    $total += $dbrow['price'];
    echo "<div class='parent'>
        <div>$dbrow[name]</div>
        <div>$dbrow[price]</div>
        <img src='$dbrow[impath]'>
        <div>$dbrow[details]</div>

        <div class = 'action'>
             <button onclick = 'popup($dbrow[cartid])'> Remove from Cart </button>
        </div>

        

</div>";
}


echo "<form  method = 'get' class='w-50' action='placeorder.php'>

    <textarea class= 'form-control' required name ='address' rows='5' placeholder = 'Enter Delivery Address'></textarea>

    <div class='display-5'>
            Total Amount = $total 
            <input name ='total' hidden value ='$total'>

            <button class = 'btn btn-danger'>Place order</button>
    </div>

</form>";



?>
  