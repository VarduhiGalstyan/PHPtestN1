<?php  
    // if(isset($_GET['submit'])){
    //     echo $_GET['email'];
    //     echo $_GET['title'];
    //     echo $_GET['ingredients'];
    // }

    if(isset($_POST['submit'])){
        // echo htmlspecialchars ($_POST['email']);
        // echo htmlspecialchars ($_POST['title']);
        // echo htmlspecialchars ($_POST['ingredients']);

     //check email
        if(empty($_POST['email'])){
            echo 'An email is required <br/>';
        } else {
            echo htmlspecialchars($_POST['email']);
        }

     //check title
        if(empty($_POST['title'])){
            echo 'A title is required <br/>';
        } else {
            echo htmlspecialchars($_POST['title']);
        }

     //check ingredients
        if(empty($_POST['ingredients'])){
            echo 'At least one ingredient is required <br/>';
        } else {
            echo htmlspecialchars($_POST['ingredients']);
        }

    } // end of POST check
    
?>

<!DOCTYPE html>
<html>

    <?php include ('templates/header.php'); ?>

    <section class="container grey-text">
        <h4 class="center">Add a Pizza</h4>
        <!-- <form action="add.php" class="white" method="GET"> -->
        <form action="add.php" class="white" method="POST">
            <label >Your Email:</label>
            <input type="text" name ="email">
            <label >Your Title:</label>
            <input type="text" name ="title">
            <label >Ingredients (comma separted):</label>
            <input type="text" name ="ingerdients">
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>

    <?php include ('templates/footer.php'); ?>
    <!-- <body> -->
        
    <!-- </body> -->
</html>