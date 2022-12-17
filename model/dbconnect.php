<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

$conn = mysqli_connect($localhost, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

/*
product upload
INSERT INTO `products` (`id`, `name`, `description`, `amount`, `price`, `isActive`, `image`) VALUES (NULL, 'Black Shirt for Men', 'Premimum quality fabric full sleeve shirt.', '45', '130.50', 'true', '../storage/black-shirt.jpg'); 
product delete
DELETE FROM `products` WHERE `products`.`id` = 1



*/

?>