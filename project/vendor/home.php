
<?php

include "authguard.php";
include "menu.html" ;

?>



<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
       
    <div class ="d-flex justify-content-center align-items-center vh-100">
        <form action="upload.php" method ="post" class ="w-50 bg-secondary p-4" enctype = "multipart/form-data">
        <h4 class ="text-center text-white">Upload Products</h4>

        <input class="form-control mt-3" type="text" name="name" placeholder="Product Name" >
        <input class="form-control mt-3" type="text"  name="price" placeholder="Product Price">
        <textarea class="form-control mt-3" name="details" cols="30" rows="5" placeholder="Product Desciption "></textarea>

        <input  class="form-control mt-3" type="file" name="pdtimg">

        <div class ="text-center mt-3">
            <button class = "btn btn-success">Upload</button>
        </div>

        </form>
    </div>

</body>
</html>