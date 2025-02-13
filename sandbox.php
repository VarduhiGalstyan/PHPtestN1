<!-- <?php

    $file = 'readme.txt';

    if(file_exists($file)){
        // read file
        echo readfile($file) . '<p/>';

     // copy file
        // copy($file, 'quotes.txt');
        copy($file, '/home/varduhi/Desktop/quotes.txt');

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

?> -->

<?php 
    $file = 'quotes.txt';

    // opening a file for reading
    // $handle = fopen($file, 'r');
    // $handle = fopen($file, 'r+');

    // read the file
    // echo fread($handle, filesize($file));
    // echo fread($handle, 112);

    // read a single line
    // echo fgets($handle);
    // echo fgets($handle);

    //  read a single character
    // echo fgetc($handle);
    // echo fgetc($handle);


    // opening a file for reading
    $handle = fopen($file, 'a+');

//  eriting to a file
    // fwrite ($handle, "\nEverything popular is wrong");

    fclose($handle);


?>