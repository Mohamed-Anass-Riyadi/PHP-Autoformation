<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// First methode
$colors = array("Red", "Green", "Blue");

// Printing array structure
print_r($colors);
?> 
<br>
<!-- 2nd methode -->
<?php
<?php
$colors[0] = "Red"; 
$colors[1] = "Green"; 
$colors[2] = "Blue";

// Printing array structure
print_r($colors); 
?>
?>
</body>
</html>