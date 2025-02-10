<?php 
// Conditional Statements
    $price = 20;
    if ($price < 10) {
        echo 'the condition is met';
    } else if ($prri < 20){
        echo 'elseif condition met';
    } else{
        echo 'condition not met';
    }

    $products = [
        ['name' => 'shiny star', 'price' => 20],
        ['name' => 'green shell', 'price' => 10],
        ['name' => 'red stell', 'price' => 15],
        ['name' => 'gold coin', 'price' => 5],
        ['name' => 'lightning bolt', 'price' => 40],
        ['name' => 'banana skin', 'price' => 2]
    ];
    $products[] = ['name'=> 'vila', 'price'=>51];
    foreach($products as $product){
        if($product['name'] === 'lightning bolt'){
            break;//եթե այդպես չէ դուռս արի ցիկլից
        }
        if($product['price'] > 15){
            continue;
        }
        echo $product['name'].'<br/>';
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Tutorials</title>
    </head>
    <body>
        <div>
            <ul>
                <?php foreach($products as $product){ ?>
                    <?php if($product['price'] > 15){ ?>
                        <li><?php echo $product['name']; ?></li>
                    <?php }?>
                <?php }?>
            </ul>
        </div>
    </body>
</html>