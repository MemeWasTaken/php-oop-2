<?php

    require_once __DIR__ . '/classes/Product.php';
    require_once __DIR__ . '/classes/User.php';

    try {

        $newProduct = new Product('Oppo', 'Reno 6 5G', 450, 'Triple Camera', 'Mobile Phones');
        var_dump($newProduct);

        $newUser = new User('Emanuele', 'Lazzari', 'memelazzari02@gmail.com', 3456789123, 'Hype', new Card('4564456446544564', '0925', '123'));
        var_dump($newUser);
        
    } catch (Exception $error) {
        echo $error->getMessage();
    }

?>