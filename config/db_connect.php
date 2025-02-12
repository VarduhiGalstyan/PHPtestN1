<?php 
//  connect to database
    $conn = mysqli_connect('localhost', 'root', 'admin', 'ninja_pizza');//connect= միացնել
    
 //  check connection
    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }

?>