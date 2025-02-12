<?php

    // sessions
    if(isset($_POST['submit'])){
        session_start();
        $_SESSION['name'] = $_POST['name'];

        // echo $_SESSION['name'];
        header('Location: index.php');
    }


?>

<!DOCTYPE html>
<html>
    <head>
        <title> php tuts</title>
</head>
<body>

    <!-- <form  action="sandbox.php"> -->
    <form action="<?php echo $_SERVER['php_self']?>" method="POST">
        <input type="text" name="name">
        <input type="submit" name= "submit" value="submit">
    </form>

</body>
</html>