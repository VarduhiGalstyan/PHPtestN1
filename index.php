<?php  
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    include('config/db_connect.php');

 // write query fro all pizzas
    // $sql = 'SELECT * FROM pizzas'; // SELECT=գնացեք, *=ստացեք տվյալներ/բոլոր/, pizzas table-ից
    $sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at'; // SELECT=գնացեք, *=ստացեք տվյալները title, ingreadients, id, pizzas table-ից

 // make query & get result
    $result = mysqli_query($conn, $sql);//query=հարցում

 // fetch the resulting rows as an array
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC); //fetch=բերել

 // free result from memory
    mysqli_free_result($result);

 // close connection
    mysqli_close($conn);
   
    // print_r (explode(',' , $pizzas[0]['ingredients']));
    
    //explode(',' , $pizzas[0]['ingredients']);


?>

<!DOCTYPE html>
<html>
    <?php include ('templates/header.php'); ?>
    <h4 class="center grey-text">Pizzas!</h4>
    <div class="container">
        <div class="row">
            <?php foreach($pizzas as $pizza){ ?>
                <div class="col s6 md3">
                    <div class="card x-depth-0">
                        <img src="img/pizza.svg" class="pizza ">
                        <div class="card-content center">
                            <h6><?php echo htmlspecialchars($pizza['title']);?></h6>
                            <ul>
                                <?php foreach(explode(',',$pizza['ingredients']) as $ing) { ?>
                                    <li><?php echo htmlspecialchars($ing) ?></li>
                                <?php }?>
                            </ul>
                        </div>
                        <div class="card-action right-align">
                            <a href="details.php?id=<?php echo $pizza['id']?>" class="brand-text">more info</a>
                        </div>
                    </div>
                </div>
            <?php }?>

            <?php if(count($pizzas) >= 3):  ?>
                <p>there are 3 or more pizzas</p>
            <?php  else:  ?>
                <p>there are less than 3 pizzas</p>
            <?php endif; ?>
        </div>
    </div>

    <?php include ('templates/footer.php'); ?>
    <!-- <body> -->
        
    <!-- </body> -->
</html>