<?php 
// connect to database
$conn = mysqli_connect('localhost', 'capstones', 'Qwertyuiop!123', 'multi_login');

// check connection
if(!$conn){
    echo 'connection error: ' . mysqli_connect_error();
}

?>