<?php

require('config.php');
require('razorpay-php-master/Razorpay.php');
session_start();



use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);


$orderData = [
    'amount'          => $_POST['amount'] * 100,
    'currency'        => 'INR',
    'payment_capture' => 1
];

$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}

$checkout = 'automatic';

if (isset($_GET['checkout']) and in_array($_GET['checkout'], ['automatic', 'manual'], true))
{
    $checkout = $_GET['checkout'];
}


$useruid = $_SESSION['log']['uid'];
$row = mysqli_query($con, "SELECT * FROM user WHERE uid='$useruid' ");
$row1 = mysqli_fetch_array($row);


$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => "P2P Money Lending",
    "description"       => "Fintech",
    "image"             => "img/back.png",
    "prefill"           => [
    "name"              => $row1['name'],
    "email"             => $row1['email'],
    "contact"           => $row1['contact'],
    ],
    "notes"             => [
    "address"           => "Hello World",
    "merchant_order_id" => "12312321",
    ],
    "theme"             => [
    "color"             => "#38d39f"
    ],
    "order_id"          => $razorpayOrderId,
];

if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);

require('checkout.php');


