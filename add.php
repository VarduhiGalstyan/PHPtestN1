<?php  
    $title = $email = $ingredients = '';
    $errpr = array('email' => '', 'title' => '', 'ingredients' => '');

    if(isset($_POST['submit'])){ //եթե սեխմված է

     //check email
        if(empty($_POST['email'])){ //եթե դատարկ է
            // echo 'An email is required <br/>';
            $errors['email'] =  'An email is required <br/>';
        } else {
            // echo htmlspecialchars($_POST['email']);
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = 'email must be a valid email address';
            }
        }

     //check title
        if(empty($_POST['title'])){
            // echo 'A title is required <br/>';
            $errors['title'] = 'A title is required <br/>';
        } else {
            // echo htmlspecialchars($_POST['title']);
            $title = $_POST['title'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
                $errors['title'] =  'TITLE MUST BE LETTERS AND SPACES ONLY.';
            }
        }

     //check ingredients
        if(empty($_POST['ingredients'])){
            // echo 'At least one ingredient is required <br/>';
            $errors['ingredients'] = 'At least one ingredient is required <br/>';
        } else {
            // echo htmlspecialchars($_POST['ingredients']);
            $ingredients= $_POST['ingredients'];
            if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
                $errors['ingredients'] = 'Ingredients must be a comma separated list';
            }
        }

        if(array_filter($errors)){
            echo 'errors in the from';
        }else{
            // echo 'from is valid';
            header('Location: index.php');
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
            <input type="text" name ="email" value="<?php echo htmlspecialchars ($email) ; ?>">
            <div class="red-text"><?php echo $errors['email'] ;?> </div>
            <label >Your Title:</label>
            <input type="text" name ="title" value="<?php echo htmlspecialchars ($title) ; ?>">
            <div class="red-text"><?php echo $errors['title'] ;?> </div>
            <label >Ingredients (comma separted):</label>
            <input type="text" name ="ingredients" value="<?php echo htmlspecialchars ($ingredients) ; ?>">
            <div class="red-text"><?php echo $errors['ingredients'] ;?> </div>
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>

    <?php include ('templates/footer.php'); ?>
    <!-- <body> -->
        
    <!-- </body> -->
</html>