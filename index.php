<?php  
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 //  connect to database
    $conn = mysqli_connect('localhost', 'root', 'admin', 'ninja_pizza');//connect= միացնել
    
 //  check connection
    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }

 // write query fro all pizzas
    // $sql = 'SELECT * FROM pizzas'; // SELECT=գնացեք, *=ստացեք տվյալներ/բոլոր/, pizzas table-ից
    $sql = 'SELECT title, ingredients, id FROM pizzas'; // SELECT=գնացեք, *=ստացեք տվյալները title, ingreadients, id, pizzas table-ից

 // make query & get result
    $result = mysqli_query($conn, $sql);//query=հարցում

 // fetch the resulting rows as an array
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC); //fetch=բերել

 // free result from memory
    mysqli_free_result($result);

 // close connection
    mysqli_close($conn);

    print_r($pizzas);
?>

<!DOCTYPE html>
<html>
    <?php include ('templates/header.php'); ?>
    <?php include ('templates/footer.php'); ?>
    <!-- <body> -->
        
    <!-- </body> -->
</html>