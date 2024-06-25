<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sign Up</title>
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
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
        rel="stylesheet">

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

        .modal_t {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            z-index: 1000;
            border-radius: 15px;
            width:70%;

        }

        /* Close button */
        .close {
            position: absolute;
            top: 10px;
            right: 25px;
            font-size: 35px;
            cursor: pointer;
            color:black;
        }

        /* Terms and conditions */
        .terms {
            max-height: 400px;
            overflow-y: scroll;
            margin : 20px;
        }

        li {
            padding: 0.6rem;
        }
        .txt1 button{
            color: red;
        }
    </style>
</head>

<body>
    <div id="preloader"></div>

    <?php include('header.php') ?>
    <!-- #header -->

    <div class="limiter">
        <div class="container-login100">
            <div class="login100-more">
                <!-- <img src="img/money.jpg" alt=""> -->
            </div>

            <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
			  
                
                <form action="upload.php" method="post" enctype="multipart/form-data"id="sav">
		</form>

                
                
                <form class="login100-form validate-form" method="post" action="register.php">
                    <span class="login100-form-title p-b-59">
                        Sign Up
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Name is required">
                        <span class="label-input100">Full Name</span>
                        <input class="input100" type="text" name="name" placeholder="Name...">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="email" name="email" placeholder="Email addess...">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Contact is required">
                        <span class="label-input100">Contact</span>
                        <input class="input100" type="text" name="contact" placeholder="Mobile no....">
                        <span class="focus-input100"></span>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate="Image is required">
                        <span class="label-input100">Select image to upload(Image Name Should be same as profile Name):</span>
                        
		<input type="file" name="fileToUpload" id="fileToUpload" form='sav'>
		<input type="submit" value="Upload Image" name="submit" form='sav'>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="pass" placeholder="*************">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Repeat Password is required">
                        <span class="label-input100">Repeat Password</span>
                        <input class="input100" type="password" name="repass" placeholder="*************">
                        <span class="focus-input100"></span>
                    </div>
                      
                    <div class="flex-m w-full p-b-33">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                <span class="txt1">
                                    I agree to the
                                    <button  type="button" onclick="openModal(); return false;" class="txt2 hov1">
                                        Terms of User
    </button>
                                </span>
                            </label>
                        </div>


                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" >
                                Sign Up
                            </button>
                        </div>

                        <a href="login.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                            Sign in
                            <i class="fa fa-long-arrow-right m-l-5"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="overlay" id="overlay">
        <div class="modal_t" id="modal_t">
            <span class="close" onclick="closeModal()">&times;</span>
            <div style='background-color:#38d39f;color:white;border-radius:15px 15px 0  0;padding:8px'><h1  >Terms and Conditions</h1></div>
            <div class="terms">
                <p><b>Welcome to P2P Money Lending website. By using our website, you agree to the following terms and
                    conditions:</b></p>
                <ul>
                    <li>Eligibility: To use our website, you must be at least 18 years old and meet any other
                        eligibility requirements set forth by P2P Money Lending.</li>
                    <li>Application process: You must complete the application process accurately and truthfully, and
                        provide all required information and documentation.</li>
                    <li>Credit check: We may conduct a credit check or obtain credit reports on you to assess your
                        creditworthiness.</li>
                    <li>Loan terms: We will provide you with a loan agreement detailing the terms of the loan, including
                        the interest rate, fees, and repayment schedule. You must review and agree to the loan terms
                        before accepting the loan.</li>
                    <li>Repayment: You must repay the loan according to the repayment schedule outlined in the loan
                        agreement. Failure to do so may result in additional fees, charges, or legal action.</li>
                    <li>Late payments: If you are unable to make a payment on time, you must notify us as soon as
                        possible to discuss alternative arrangements. Late payments may result in additional fees and
                        charges.</li>
                    <li>Fees and charges: You will be responsible for paying any fees and charges associated with the
                        loan, including origination fees, late fees, and prepayment fees.</li>
                    <li>Default: If you fail to repay the loan or violate any of the terms and conditions of the loan
                        agreement, we may take legal action to recover the debt.</li>
                    <li>Privacy: We will protect your personal and financial information in accordance with applicable
                        laws and regulations.</li>
                    <li>Amendments: We may amend the terms and conditions of the loan agreement at any time by providing
                        notice to you. You will have the opportunity to review and accept the amended terms before they
                        take effect.</li>
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
