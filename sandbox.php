<?php

    // file system - part 1

    // $quotes = readfile('readme.txt');
    // echo $quotes;

    $file = 'readme.txt';

    if(file_exists($file)){
        // read file
        echo readfile($file) . '<p/>';

        // copy file
        copy($file, 'quotes.txt');

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

<!-- <!DOCTYPE html>
<html>
    <head>
        <title> php tuts</title>
</head>
<body>

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <input type="text" name="name">
        <select name = "grender">
            <option value ="male"> male</option>
            <option value ="female"> female</option>
        </select>
        <input type="submit" name= "submit" value="submit">
    </form>

</body>
</html> -->