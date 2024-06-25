<?php
session_start();
include('config.php');
include('sessioncheck.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Crowdfunding</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">

    <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
    <link href="favicon.ico" rel="shortcut icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate-css/animate.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/mainSU.css">
    <link rel="stylesheet" type="text/css" href="css/utilSU.css">
    <style>
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: none;
            z-index: 999;
        }

        .modal_p {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            z-index: 1000;
            border-radius: 15px;
            width: 70%;

        }

        /* Close button */
        .close {
            position: absolute;
            top: 10px;
            right: 25px;
            font-size: 35px;
            cursor: pointer;
            color: black;
        }

        /* Terms and conditions */
        .terms {
            max-height: 400px;
            overflow-y: scroll;
            margin: 20px;
        }

        li {
            padding: 0.6rem;
        }

        .txt1 button {
            color: red;
        }
    </style>

</head>

<body>
    <div id="preloader"></div>

    <?php include('header.php'); ?>

    <div class="limiter">
    <div class="container-login101"
            style="background: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), url(./img//moneybgpng.jpg) fixed center center;">

 
            <div class="wrap-login1001 ">
                <form class="login101-form validate-form" method="post" action="borrowcrowd.php">
                    <span class="login101-form-title ">
                        Crowdfunding Application Form
                    </span>

                    <div class="wrap-input101 validate-input" data-validate="Title is required">
                        <span class="label-input100">Title</span>
                        <input class="input100" type="text" name="title" placeholder="Title..." required>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input101 validate-input" data-validate="Category is required">
                        <span class="label-input100">Category</span>
                        <select class="input100" name="category" required>
                            <option>Select</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input101 validate-input" data-validate="Description is required">
                        <span class="label-input100">Description</span>
                        <input class="input100" type="text" name="descrip" placeholder="Description..." required>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input101 validate-input" data-validate="Amount is required">
                        <span class="label-input100">Amount Needed</span>
                        <input class="input100" type="number" name="amount" placeholder="in Indian Currency" required>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input101 validate-input" data-validate="Picture is required">
                        <span class="label-input100">Picture</span>
                        <input class="input100" type="file" name="img" required>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="flex-m w-full p-b-33">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                <span class="txt1">
                                    I agree to the
                                    <button type="button" onclick="openModal(); return false;" class="txt2 hov1">
                                        Terms of User
                                    </button>
                                </span>
                            </label>
                        </div>


                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Submit form
                                <i class="fa fa-long-arrow-right m-l-5"></i>
                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="overlay" id="overlay">
        <div class="modal_p" id="modal_p">
            <span class="close" onclick="closeModal()">&times;</span>
            <div style='background-color:#38d39f;color:white;border-radius:15px 15px 0  0;padding:8px'>
                <h1>Terms and Conditions</h1>
            </div>
            <div class="terms">
                <p><b>Welcome to P2P Money Lending website. By using our website, you agree to the following terms and
                        conditions:</b></p>
                <ul>
                    <li>The borrower acknowledges and confirms that the information mentioned in Online Drawdown Request
                        are the most important terms and conditions in the application for the Facility.</li>
                    <li>The lender has adopted risk-based pricing based on the borrower's financial and credit profile,
                        and applicable interest rates are determined by prevailing market rates at the time of
                        sanctioning.</li>
                    <li>The borrower has received a copy of each Transaction Document and agrees that this letter is a
                        Transaction Document.</li>
                    <li>If any EMI repayment is delayed by more than 30 days, the loan is considered in "Default."</li>
                    <li>Collection agents will reach out to remind the borrower of overdue payments after the due date.
                    </li>
                    <li>If the borrower is not reachable for more than 15 days, the lender reserves the right to reach
                        out via the reference numbers provided in the loan application.</li>
                    <li>After 45 days of overdue loan EMI, the NBFC reserves the right to send a legal notice to the
                        customer indicating the overall loan recall and to pay the dues immediately.</li>
                    <li>If the borrower is not contactable or deliberately not making the payment, the NBFC reserves the
                        right to report the loan as a "Wilful default" to credit bureaus.</li>
                    <li>The borrower can apply for a loan by submitting an application form.</li>
                    <li>The lender may agree to grant the loan subject to the standard terms and conditions.</li>
                    <li>The standard terms include the application form, drawdown request, and MITC as exchanged between
                        the parties.</li>
                    <li>The acceptance of the application does not obligate the lender to approve the loan.</li>
                    <li>Definitions include terms such as account, application form, availability period, drawdown
                        request, drawing power, due date, increased costs, loan, tax, access codes, business day,
                        facility, sanctioning authority, credit limit, and prepayment charges.</li>
                    <li>Credit limit refers to the maximum drawdown limit granted by the lender to the borrower.</li>
                    <li>Prepayment charges apply if the borrower pays an installment or part of the loan before the due
                        date.</li>
                    <li>Outstanding balance refers to the principal, interest, compound interest, default
                        charges/interest, any other charges, dues and monies payable, costs and expenses that are
                        outstanding from time to time and whether any of them are due or not in relation to the loan.
                    </li>
                </ul>
                <p>By using our website, you acknowledge that you have read, understood, and agreed to these terms and
                    conditions.</p>
            </div>
        </div>
    </div>


    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

    <?php include('footer.php'); ?>
    <!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- Required JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/morphext/morphext.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/stickyjs/sticky.js"></script>
    <script src="lib/easing/easing.js"></script>

    <!-- Template Specisifc Custom Javascript File -->
    <script src="js/custom.js"></script>

    <script src="contactform/contactform.js"></script>


</body>
<script>

    function openModal() {
        console.log("hello")
        document.getElementById("overlay").style.display = "block";
        document.body.style.overflow = "hidden";
    }

    function closeModal() {
        document.getElementById("overlay").style.display = "none";
        document.body.style.overflow = "auto";
    }

    window.onclick = function (event) {
        if (event.target == document.getElementById("overlay")) {
            closeModal();
        }
    };

</script>
</html>
