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
$row = mysqli_query($con, "SELECT * FROM wallet WHERE useruid=$useruid ") or die(mysqli_error($con));
$row1 = mysqli_fetch_array($row);
$balance = $row1['balance'];
$row2 = mysqli_query($con, "SELECT * FROM wallet WHERE useruid=$takeuid ") or die(mysqli_error($con));
$row3 = mysqli_fetch_array($row2);
$balance = $row3['balance'];
$row4 = mysqli_query($con, "SELECT * FROM invest WHERE useruid=$takeuid ");
$row5 = mysqli_fetch_array($row4);
$collect = $row5['collect'];
$amount2 = $row5['amount'];
if($amount > ($amount2 - $collect)){
    ?>
    <script>
        alert("You are Investing More Than Required!");
        window.location.href = "P2P.php";
    </script>
    <?php
}
else if ($amount <= $balance) {
    $qry5 = mysqli_query($con, "INSERT INTO transaction (useruid, amount, type, transuid, balance) VALUES ($useruid, $amount, 'debit', $transuid, $balance) ") or die(mysqli_error($con));
    $balance -= $amount;
    $qry6 = mysqli_query($con, "UPDATE wallet SET balance=$balance WHERE useruid=$useruid ");
    
    $qry7 = mysqli_query($con, "INSERT INTO transaction (useruid, amount, type, transuid, balance) VALUES ($takeuid, $amount, 'credit', $transuid1, $balance1) ") or die(mysqli_error($con));
    $balance1 += $amount;
    $qry8 = mysqli_query($con, "UPDATE wallet SET balance=$balance1 WHERE useruid=$takeuid ");
    
    $qry = mysqli_query($con, "INSERT INTO investcrowd (amount, useruid, borrowuid, investuid) VALUES ($amount, $useruid, $borrowuid, $uid) ") or die(mysqli_error($con));
    $qry1 = mysqli_query($con, "UPDATE borrowcrowd SET collect=$amount WHERE borrowuid=$borrowuid ") or die(mysqli_error($con));
    if ($qry) {
?>
        <script>
            alert("Investment Successful.");
            window.location.href = "index.php";
        </script>
    <?php
    } else {
    ?>
        ?>
        <script>
            alert("Investment Unsuccessful.");
            window.location.href = "crowdfunding_lending.php";
        </script>
    <?php
    }
} else {
    ?>
    <script>
        alert("Balance Low. Please Add Money!");
        window.location.href = "dashboard.php";
    </script>
<?php
}
?>
