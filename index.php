<?php 
    // function sayHello(){
    //     echo "good morning yoshi";
    // }
    // sayHello();

    // function sayHello($name){
    //     echo "good morning $name";
    // }
    // sayHello('Mario');

    // function sayHello($name = 'Shaun'){
    //     echo "good morning $name";
    // }
    // sayHello();

    // function sayHello($name = 'Shaun'){
    //     echo "good morning $name";
    // }
    // sayHello('Mario');

    function sayHello($name = 'Shaun', $time = 'morning'){
        echo "good $time $name <p/>";
    }
    sayHello('Mario', 'night');


    // function formatProduct($product){
    //     echo "{$product['name']} costs $ {$product['price']} to buy <br />";
    // }
    // formatProduct(['name' => 'gold star', 'price' => 20]);

    function formatProduct($product){
        return "{$product['name']} costs $ {$product['price']} to buy <br />";
    }
    $formatted = formatProduct(['name' => 'gold star', 'price' => 20]);
    echo $formatted;


    

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Tutorials</title>
    </head>
    <body>
        
    </body>
</html>