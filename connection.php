<?php
    $conn= mysqli_connect("localhost","root","1234","login_db");
    if(!($conn)){
        echo "Connection not established";
    }
?>