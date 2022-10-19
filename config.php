<?php
    $conn = mysqli_connect('localhost', 'root', '', 'user_db');

    if(!$conn){
        echo "Connection Failed Bro Try Again";
    }
?>