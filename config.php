<?php

$keyId = 'rzp_test_p8uzeHlDc4eIhJ';
$keySecret = 'd4EdpGRJ5RGiqSRZeb6XJram';
$displayCurrency = 'INR';

//These should be commented out in production
// This is for error reporting
// Add it to config.php to report any errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

$con = mysqli_connect("localhost:8111", "root", "", "project") or die(mysqli_error($con));


