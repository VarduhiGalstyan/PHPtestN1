<?php 
    define('NAME', 'Eva');
    $name = "Yoshi";
    $age = 30;
    echo $name;

    $name = 'Mario';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Tutorials</title>
    </head>
    <body>
        <h1>User Profile Page</h1>
        <div><?php echo NAME; ?></div>
        <div><?php echo $name; ?></div>
        <div><?php echo $age;?></div>
    </body>
</html>