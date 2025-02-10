<?php 
//multi-dimensional arrays
    // $blogs = [
    //     ['mario party', 'mario', 'lorem', 30],
    //     ['mario kart cheats', 'toad', 'lorem', 25],
    //     ['zelda hidden chests', 'link', 'lorem', 50],
    // ];
    // print_r($blogs);
    // print_r($blogs[1]);
    // print_r($blogs[1][1]);

    $blogs = [
        ['title' => 'mario party','author' => 'mario','content' => 'lorem', 'likes' => 30],
        ['title' => 'mario kart cheats','author' =>  'toad','content' => 'lorem', 'likes' => 25],
        ['title' => 'zelda hidden chests','author' =>  'link','content' => 'lorem','likes' => 50],
    ];
    // print_r($blo/gs[2]['author']);
    // echo $blogs[2]['author'];
    // echo count($blogs);

    $blogs[] = ['title' => 'castle party', 'author' => 'peach', 'content' => 'lorem', 'likes' => 100];
    // print_r($blogs);

    $popped = array_pop($blogs);
    print_r($popped);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Tutorials</title>
    </head>
    <body>
        
    </body>
</html>