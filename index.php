<?php
session_start();
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fin-Tech</title>
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


</head>

<body>
    <div id="preloader"></div>

    <!--==========================
Hero Section
============================-->
    <!-- <section id="hero">
        <div class="hero-container">
            <div class="wow fadeIn">
                <div class="hero-logo">
                    <img class="" src="img/visudha.png" alt="Fin-Tech">
                </div>

                <h1>All finances at one place.</h1>
                <h2>We provide <span class="rotating"> P2P Lending, Crowd Funding, Financial Advisory, Wealth Management, Asset Management</span></h2>

    </section> -->

    <!--==========================
Header Section
============================-->

    <?php include('header.php'); ?>

    <!-- #header -->


    <!--==========================
Services Section
============================-->
    <?php
    if (isset($_SESSION['log']) == "") {
        ?>
        <section id="services">
            <div class="container wow fadeInUp"
                style="visibility: visible;/* animation-name: fadeInUp; */display: flex;flex-direction: column;gap: 12px;">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="section-title">Our Services</h3>
                        <div class="section-title-divider"></div>
                        <p class="section-description">What all do we provide at Fin-Tech.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 service-item card" onclick="myfunction()">
                        <div class="service-icon"><i class="fa fa-desktop"></i></div>
                        <h4 class="service-title"><a href="#">Peer2Peer Lending</a></h4>
                        <p class="service-description">Peer-to-peer (P2P) money lending and borrowing is a financial model that allows individuals to lend and borrow money directly from one another.</p>
                    </div>
                    <div class="col-md-4 service-item card" onclick="myfunction()">
                        <div class="service-icon"><i class="fa fa-bar-chart"></i></div>
                        <h4 class="service-title"><a href="#">Crowd-Funding</a></h4>
                        <p class="service-description">Crowd-Funding is a financial model that allows individuals to pitch their idea to the crowd for investment.</p>
                    </div>
                    <div class="col-md-4 service-item card" onclick="myfunction()">
                        <div class="service-icon"><i class="fa fa-paper-plane"></i></div>
                        <h4 class="service-title"><a href="#">Financial Advisory</a></h4>
                        <p class="service-description">It refers to the process of providing professional guidance and advice on financial matters such as investments, insurance, and retirement planning.</p>
                    </div>
                    <div class="col-md-4 service-item card" onclick="myfunction()">
                        <div class="service-icon"><i class="fa fa-photo"></i></div>
                        <h4 class="service-title"><a href="#">Wealth Managment</a></h4>
                        <p class="service-description">Wealth management refers to the process of managing an individual's financial assets and investments to achieve their financial goals.</p>
                    </div>
                    <div class="col-md-4 service-item card" onclick="myfunction()">
                        <div class="service-icon"><i class="fa fa-road"></i></div>
                        <h4 class="service-title"><a href="#">Alternative Asset-Management</a></h4>
                        <p class="service-description">It involves investing in non-traditional assets for higher returns. Providing tools and resources helps investors understand risks and rewards.</p>
                    </div>
                </div>
            </div>
        </section>
        <?php
    } else if ($_SESSION['log1'] == "user") {
        ?>
            <section id="services">
                <div class="container wow fadeInUp"
                    style="visibility: visible;/* animation-name: fadeInUp; */display: flex;flex-direction: column;gap: 12px;">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="section-title">Our Services</h3>
                            <div class="section-title-divider"></div>
                            <p class="section-description">What all do we provide at Fin-Tech.</p>
                        </div>
                    </div>

                    <div class="row">
                        <a href="P2P.php">
                            <div class="col-md-4 service-item card">
                                <div class="service-icon"><i class="fa fa-desktop"></i></div>
                                <h4 class="service-title"><a>Peer2Peer Lending</a></h4>
                                <p class="service-description">Peer-to-peer (P2P) money lending and borrowing is a financial model that allows individuals to lend and borrow money directly from one another.</p>
                            </div>
                        </a>
                        <a href="Crowdfunding.php">
                            <div class="col-md-4 service-item card">
                                <div class="service-icon"><i class="fa fa-bar-chart"></i></div>
                                <h4 class="service-title"><a href="Crowdfunding.php">Crowd-Funding</a></h4>
                                <p class="service-description">Crowd-Funding is a financial model that allows individuals to pitch their idea to the crowd for investment.</p>
                            </div>
                        </a>
                        <a href="">
                            <div class="col-md-4 service-item card">
                                <div class="service-icon"><i class="fa fa-paper-plane"></i></div>
                                <h4 class="service-title"><a href="">Financial Advisory</a></h4>
                                <p class="service-description">It refers to the process of providing professional guidance and advice on financial matters such as investments, insurance, and retirement planning.</p>
                            </div>
                        </a>
                        <a href="mortage.php">
                            <div class="col-md-4 service-item card">
                                <div class="service-icon"><i class="fa fa-photo"></i></div>
                                <h4 class="service-title"><a href="mortage.php">Wealth Managment</a></h4>
                                <p class="service-description">Wealth management refers to the process of managing an individual's financial assets and investments to achieve their financial goals.</p>
                            </div>
                        </a>
                        <a href="">
                            <div class="col-md-4 service-item card">
                                <div class="service-icon"><i class="fa fa-road"></i></div>
                                <h4 class="service-title"><a href="">Alternative Asset-Management</a></h4>
                                <p class="service-description">It involves investing in non-traditional assets for higher returns. Providing tools and resources helps investors understand risks and rewards.</p>
                            </div>
                        </a>

                    </div>
                </div>
            </section>
    <?php } else { ?>
            <section id="services">
                <div class="container wow fadeInUp"
                    style="visibility: visible;/* animation-name: fadeInUp; */display: flex;flex-direction: column;gap: 12px;">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="section-title">Our Services</h3>
                            <div class="section-title-divider"></div>
                            <p class="section-description">What all do we provide at Fin-Tech.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 service-item card">
                            <div class="service-icon"><i class="fa fa-desktop"></i></div>
                            <h4 class="service-title"><a href="#" onclick="myfunction()">Peer2Peer Lending</a></h4>
                            <p class="service-description">Peer-to-peer (P2P) money lending and borrowing is a financial model that allows individuals to lend and borrow money directly from one another.</p>
                        </div>
                        <div class="col-md-4 service-item card">
                            <div class="service-icon"><i class="fa fa-bar-chart"></i></div>
                            <h4 class="service-title"><a href="#" onclick="myfunction()">Crowd-Funding</a></h4>
                            <p class="service-description">Crowd-Funding is a financial model that allows individuals to pitch their idea to the crowd for investment.</p>
                        </div>
                        <div class="col-md-4 service-item card">
                            <div class="service-icon"><i class="fa fa-paper-plane"></i></div>
                            <h4 class="service-title">
                                <<a href="#" onclick="myfunction()">Financial Advisory</a>
                            </h4>
                            <p class="service-description">It refers to the process of providing professional guidance and advice on financial matters such as investments, insurance, and retirement planning.</p>
                        </div>
                        <div class="col-md-4 service-item card">
                            <div class="service-icon"><i class="fa fa-photo"></i></div>
                            <h4 class="service-title"><a href="#" onclick="myfunction()">Wealth Managment</a></h4>
                            <p class="service-description">Wealth management refers to the process of managing an individual's financial assets and investments to achieve their financial goals.</p>
                        </div>
                        <div class="col-md-4 service-item card">
                            <div class="service-icon"><i class="fa fa-road"></i></div>
                            <h4 class="service-title"><a href="#" onclick="myfunction()">Alternative Asset-Management</a></h4>
                            <p class="service-description">It involves investing in non-traditional assets for higher returns. Providing tools and resources helps investors understand risks and rewards.</p>
                        </div>
                    </div>
                </div>
            </section>
    <?php } ?>
    <!--==========================
Subscrbe Section
============================-->
    <!-- <section id="subscribe">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="subscribe-title">Subscribe For Updates</h3>
                    <p class="subscribe-text">Join our 1000+ subscribers and get access to the latest tools, freebies, product announcements and much more!</p>
                </div>
                <div class="col-md-4 subscribe-btn-container">
                    <a class="subscribe-btn" href="#">Subscribe Now</a>
                </div>
            </div>
        </div>
    </section> -->

    <!--==========================
Team Section
============================-->
    <section id="team">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Our Team</h3>
                    <div class="section-title-divider"></div>
                    <p class="section-description"> </p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="member">
                        <div class="pic"><img src="img/ritika.jpeg" alt=""></div>
                        <h4>Ritika Pandey</h4>
                        <!-- <span>Chief Executive Officer</span> -->
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-google-plus"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="member">
                        <div class="pic"><img src="img/abhi.jpeg" alt=""></div>
                        <h4>Abhijit singh</h4>
                        <!-- <span>Product Manager</span> -->
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-google-plus"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="member">
                        <div class="pic"><img src="img/tanush.jpeg" alt=""></div>
                        <h4>C Tanush</h4>
                        <!-- <span>CTO</span> -->
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-google-plus"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>

    <!--==========================
Contact Section
============================-->
    <section id="contact">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Contact Us</h3>
                    <div class="section-title-divider"></div>
                    <p class="section-description">We'd love to hear from you! Please fill out the form below and we'll
                        get back to you as soon as possible. Contact us for support, inquiries, or anything else you
                        need.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-md-push-2">
                    <div class="info">
                        <div>
                            <i class="fa fa-map-marker"></i>
                            <p>Army Institute of Technology <br>Pune, IN 411015</p>
                        </div>

                        <div>
                            <i class="fa fa-envelope"></i>
                            <p>2001.abhijitsingh@gmail.com</p>
                        </div>

                        <div>
                            <i class="fa fa-phone"></i>
                            <p>+91 9983574628</p>
                        </div>

                    </div>
                </div>

                <div class="col-md-5 col-md-push-2">
                    <div class="form">
                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        <form action="" method="post" role="form" class="contactForm">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" data-rule="minlen:4"
                                    data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required"
                                    data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
                            </div>
                            <div class="text-center"><button type="submit" onclick="myfunction1()">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--==========================
Footer
============================-->
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

    <script>
        function myfunction() {
            alert("Please! Login First.");
        }

        function myfunction1() {
            alert("Thankyou! your feedback has been sent.");
        }
    </script>
</body>

</html>



<!-- light #d8f1ed -->
<!-- #38d39f -->
<!-- #32bd8f dark -->
