<?php

require('config.php');

session_start();

require('razorpay-php-master/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
        
$useruid = $_SESSION['log']['uid'];
$file = 'count.txt';
//get the number from the file
$uniq = file_get_contents($file);
//add +1
$uid = $uniq + 1;
// add that new value to text file again for next use
file_put_contents($file, $uid);
$amt = $_POST['amount']/100;
$qry = mysqli_query($con, "SELECT * FROM wallet WHERE useruid='$useruid' ") or die(mysqli_error($con));
$row = mysqli_fetch_array($qry);
$balance = $row['balance'] + $amt;
$sql = mysqli_query($con, "UPDATE wallet SET balance='$balance' WHERE useruid='$useruid' ") or die(mysqli_error($con));
$sql1 = mysqli_query($con, "INSERT INTO transaction (useruid, amount, type, transuid, balance) VALUES ('$useruid', '$amt', 'credit', '$uid', '$balance') ") or die(mysqli_error($con));
if ($sql) {
?>
    <script>
        alert("Money Added Successfully!");
        window.location.href = "Dashboard.php";
    </script>
<?php
} else {
?>
    <script>
        alert("Money unable to add!");
        window.location.href = "Dashboard.php";
    </script>
<?php
}
}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
    echo $html;
}


