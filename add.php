<?php  
    if(isset($_POST['submit'])){ //եթե սեխմված է

     //check email
        if(empty($_POST['email'])){ //եթե դատարկ է
            echo 'An email is required <br/>';
        } else {
            // echo htmlspecialchars($_POST['email']);
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo 'email must be a valid email address';
            }
        }

     //check title
        if(empty($_POST['title'])){
            echo 'A title is required <br/>';
        } else {
            // echo htmlspecialchars($_POST['title']);
            $title = $_POST['title'];
            if(preg_match('/^[a-zA-Z\s]+$/', $title)){
                echo 'TITLE MUST BE LETTERS AND SPACES ONLY.';
            }
        }

     //check ingredients
        if(empty($_POST['ingredients'])){
            echo 'At least one ingredient is required <br/>';
        } else {
            // echo htmlspecialchars($_POST['ingredients']);
            $ingredients= $_POST['ingredients'];
            if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
                echo 'Ingredients must be a comma separated list';
            }
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