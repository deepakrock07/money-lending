<?php
include('config.php');
session_start();
$amount = $_POST['amount'];
$useruid = $_SESSION['log']['uid'];
$borrowuid = $_POST['borrowuid'];
$takeuid = $_POST['useruid'];
$file = 'count.txt';
//get the number from the file
$uniq = file_get_contents($file);
//add +2
$uid = $uniq + 1;
$transuid = $uid + 1;
$transuid1 = $uid + 2;

// add that new value to text file again for next use


file_put_contents($file, $transuid1);
$row = mysqli_query($con, "SELECT * FROM wallet WHERE useruid=$useruid ");
$row1 = mysqli_fetch_array($row);
$balance = $row1['balance'];
$row2 = mysqli_query($con, "SELECT * FROM wallet WHERE useruid=$takeuid ");
$row3 = mysqli_fetch_array($row2);
$balance1 = $row3['balance'];
$row4 = mysqli_query($con, "SELECT * FROM invest WHERE useruid=$takeuid ");
$row5 = mysqli_fetch_array($row4);
$collect = $row5['collect'];
$amount2 = $row5['amount'];
if($amount > ($amount2 - $collect)){
    ?>
    <script>
        alert("Your are Investing More Than Required!");
        window.location.href = "P2P.php";
    </script>
    <?php
}
else if ($amount <= $balance) {
    $qry5 = mysqli_query($con, "INSERT INTO transaction (useruid, amount, type, transuid, balance) VALUES ($useruid, $amount, 'debit', $transuid, $balance) ");
    $balance -= $amount;
    $qry6 = mysqli_query($con, "UPDATE wallet SET balance=$balance WHERE useruid=$useruid ");
    
    $qr7 = mysqli_query($con, "INSERT INTO transaction (useruid, amount, type, transuid, balance) VALUES ($takeuid, $amount, 'credit', $transuid1, $balance1) ");
    $balance1 += $amount;
    $qry8 = mysqli_query($con, "UPDATE wallet SET balance=$balance1 WHERE useruid=$takeuid ");
    
    $qry = mysqli_query($con, "INSERT INTO invest (amount, useruid, borrowuid, investuid) VALUES ($amount, $useruid, $borrowuid, $uid) ") or die(mysqli_error($con));
    $sql = mysqli_query($con, "SELECT * FROM borrow WHERE borrowuid=$borrowuid ") or die(mysqli_error($con));
    $sql1 = mysqli_fetch_array($sql);
    $sql2 = $sql1['collect'];
    $collect = $sql2 + $amount;
    $qry1 = mysqli_query($con, "UPDATE borrow SET collect=$collect WHERE borrowuid=$borrowuid ") or die(mysqli_error($con));
    if ($qry) {
        ?>
        <script>
            alert("Investment Successful.");
            window.location.href = "index.php";
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Investment Unsuccessful.");
            window.location.href = "P2P.php";
        </script>
        <?php
    }
} else {
    ?>
    <script>
        alert("Balance Low. Please Add Money!");
        window.location.href = "Dashboard.php";
    </script>
    <?php
}
?>
