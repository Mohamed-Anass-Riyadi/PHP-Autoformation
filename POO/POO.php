<?php
class AppleDevice
{
    // Propreties

    public $ram= '2GB'; //default
    public $inch= '5 INCH' ; //default
    public $space= '32GB' ; //default
    public $color= 'SILVER' ; //default

    // Methods
    public function DisplaySpecifics() {
        echo 'This iphone have: '.$this->ram ;
    }
}
// First object
// add a new object
$iphone6plus = new AppleDevice();
// change values of propreties
$iphone6plus->ram = '2GB' ;
$iphone6plus->inch = '5 INCH' ;
$iphone6plus->space = '32GB' ;
$iphone6plus->color = 'GOLD' ;
// Call a function
$iphone6plus->DisplaySpecifics();

echo '<pre>';
var_dump($iphone6plus);
echo '</pre>';

// 2nd Object 
// add a new object
$iphone7plus = new AppleDevice();
// change values of propreties

$iphone7plus->ram = '4GB' ;
$iphone7plus->inch = '5,5 INCH' ;
$iphone7plus->space = '265GB' ;
$iphone7plus->color = 'SILVER' ;

echo '<pre>';
var_dump($iphone7plus);
echo '</pre>';

// 3rd Object in case we don't have propreties to change

$iphone = new AppleDevice();

echo '<pre>';
var_dump($iphone);
echo '</pre>';




?>