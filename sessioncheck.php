<?php
// The isset function in PHP is used to determine whether a variable is set or not.
if(isset($_SESSION['log'])=="") {
    header("location:index.php");
}
