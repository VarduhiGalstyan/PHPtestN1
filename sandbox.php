<?php

    $file = 'readme.txt';

    if(file_exists($file)){
        // read file
        echo readfile($file) . '<p/>';

     // copy file
        // copy($file, 'quotes.txt');
        copy('/var/www/html/PHPtust/'.$file, '/var/www/html/PHPtust/quotes.txt');

        // absolute patg
        echo realpath($file);

        // file size
        echo filesize($file) . '<br/>';

     // rename file    
       rename($file, 'test.txt');

    } else{
        echo 'file does not exist';
    }

     // make directory
    mkdir('quotes');

?>

