<?php 
    $server = 'localhost';
    $username = 'root';
    $password = 'mysql';
    $db = 'db_clientaddressbook';

    $conn = mysqli_connect($server,$username,$password,$db);
    // check connection

    if(!$conn){
        die("Connection failed: ". mysqli_connect_error());
    }
?>