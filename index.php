<?php 
//indexed arrays
    $peopleOne = ['shaun', 'crystal', 'ryu'];
    // echo $peopleOne[1];

    $peopleTwo = array('ken', 'chun-li');
    // echo $peopleTwo[1];

    $ages = [20, 30, 40, 50];
    // echo $ages[2];
    // print_r($ages); // բոլոր  տարրերը ըստ համապատասխան դիրքի տպել

    $ages[1] = 25; 
    // print_r($ages);

    $ages[] =60; //վերջից ավելացրա 60֊ը
    // print_r($ages);

    array_push($ages, 70, 90); //$ages զանգվածին  ավելացրա այս արժեքը 70֊ը և 90֊ը
    // print_r($ages);

    // echo count($ages); //զանգվածի երկարություն

    $peopleThree = array_merge($peopleOne, $peopleTwo); //զանգվածները միավորում ենք մի զանգվածի մեջ
    // print_r($peopleThree);


// associative arrays (key(բանալի) & value(արժեք) pairs)
    $ninjasOne = ['shaun'=> 'black', 'mario' => 'orange', 'luigi' => 'brown'];
    // echo $ninjasOne['mario'];
    // print_r ($ninjasOne);

    $ninjasTwo = array('bowser'=>'green', 'peach'=> 'yellow');
    // print_r($ninjasTwo);

    $ninjasTwo['toad'] = 'pink'; //$ninjasTwo զանգվածում ավելացվում է
    $ninjasTwo['peach'] = 'red'; //$ninjasTwo զանգվածի peach տարիի yellowի փոխարեն վերագրում է red
    // print_r($ninjasTwo);
    
    // echo count($ninjasOne); //զանգվածի երկարություն
     
    $ninjasThree = array_merge($ninjasOne, $ninjasTwo);
    print_r($ninjasThree);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Tutorials</title>
    </head>
    <body>
        
    </body>
</html>