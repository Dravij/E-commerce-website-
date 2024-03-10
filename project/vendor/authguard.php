<!-- Authguard -->
<?php

session_start();
// isset : Determine if a variable is declared and is different than NULL
if(!isset($_SESSION['login status']) || !isset( $_SESSION['usertype'])){
    echo "Login Skipped , Please Login Again";
    die;
}

if($_SESSION['login status'] = false ){
    echo "Forbideen Access";
    die;
}


if($_SESSION['usertype'] != 'vendor'){
    echo "<h1>Unauthorised Access</h1>";
    die;
}

echo " <div style = 'display:flex ; justify-content : space-around ; background-color : bisque '>
        <div>$_SESSION[usertype]</div>
        <div> $_SESSION[userid]:$_SESSION[username]</div>
        <div>
        <a href = '../shared/logout.php'>LOGOUT</a>
        </div>
 
</div>" ;

?>
