<?php 
// variable scope


// local vars
    function myFunc(){
        $price = 10;
        echo $price;
    }
    // myFunc();;
    // echo $price;

    function myFuncTwo($age){
        echo $age;
    }
    // myFuncTwo(25);
    // echo $age;


// global variables
    $name = 'mario';

    // function sayHello(){
    //     // $name = 'shaun';// եթե ուզում ենք global հաըտարարվածը տպի name-ում՝ $name = 'mario', ապա տակի տողը պետք է անի սրա փոխարեն։
    //     global $name;
    //     $name = 'yoshi'; // global $name փոխում է yoshi
    //     echo "hello $name ";
    // }
    // sayHello();
    // echo $name;

    function sayBye($name){
        $name= 'wario';
        echo "bye $name";
    }
    sayBye($name);
    echo $name;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Tutorials</title>
    </head>
    <body>
        
    </body>
</html>