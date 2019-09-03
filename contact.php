<?php
//if (isset($_POST["SubmitBtn"])) {
//
//    $to = "tobainocycle@gmail.com";
//    $subject = "Contact mail";
//    $from = $_POST["email"];
//    $msg = $_POST["msg"];
//    $headers = "From: $from";
//
//    mail($to, $subject, $msg, $headers);
//    echo "Email successfully sent.";
//    header("Location: thankyou.html");
//}
//?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="images/lasulogo.PNG">
    <title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Conference project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>

<div class="super_container">

    <!-- Menu -->

    <!--<div class="menu trans_500">-->
    <!--<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">-->
    <!--<div class="menu_close_container"><div class="menu_close"></div></div>-->
    <!--<div class="logo menu_logo">-->
    <!--<a href="#">-->
    <!--<div class="logo_container d-flex flex-row align-items-start justify-content-start">-->
    <!--<div class="logo_image"><div><img src="images/logo.png" alt=""></div></div>-->
    <!--<div class="logo_content">-->
    <!--<div class="logo_text logo_text_not_ie">The Conference</div>-->
    <!--<div class="logo_sub">August 25, 2018 - Miami Marina Bay</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</a>-->
    <!--</div>-->
    <!--<ul>-->
    <!--<li class="menu_item"><a href="index.html">Home</a></li>-->
    <!--<li class="menu_item"><a href="#">About us</a></li>-->
    <!--<li class="menu_item"><a href="#">Speakers</a></li>-->
    <!--<li class="menu_item"><a href="#">Tickets</a></li>-->
    <!--<li class="menu_item"><a href="conference.html">News</a></li>-->
    <!--<li class="menu_item"><a href="contact.php">Contact</a></li>-->
    <!--</ul>-->
    <!--</div>-->
    <!--<div class="menu_social">-->
    <!--<div class="menu_social_title">Follow uf on Social Media</div>-->
    <!--<ul>-->
    <!--<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>-->
    <!--<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
    <!--<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
    <!--<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>-->
    <!--<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>-->
    <!--<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
    <!--</ul>-->
    <!--</div>-->
    <!--</div>-->

    <!-- Home -->

    <div class="home">
        <!-- <div class="home_background" style="background-image: url(images/index.jpg)"></div> -->
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/pricing.jpg" data-speed="0.8"></div>

        <!-- Header -->

        <header class="header" id="header">
            <div>
                <div class="header_top">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="header_top_content d-flex flex-row align-items-center justify-content-start">
                                    <div>
                                        <a href="#">
                                            <div class="logo_container d-flex flex-row align-items-start justify-content-start">
                                                <div class="logo_image">
                                                    <div><img src="images/lasulogo.PNG" alt=""></div>
                                                </div>
                                                <div class="logo_content">
                                                    <div id="logo_text"><h3>Lagos State University, Ojo lagos.</h3>
                                                    </div>
                                                    <div id="logo_text"><h3>2019 Annual Faculty of Social Sciences
                                                            Conference</h3></div>
                                                    <!--<div class="logo_sub" style="color: green"><strong><h4>14-17 | 11 | 2019 Lagos, Nigeria</h4>  </strong></div>-->
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="header_social ml-auto">
                                        <ul>
                                            <li><a href="https://www.instagram.com/lasufossconfer1/"><i
                                                            class="fa fa-instagram" aria-hidden="true"
                                                            style="color: #2b88cb"></i></a></li>
                                            <!--<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true" style="color: #2b88cb"></i></a></li>-->
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"
                                                               style="color: #2b88cb"></i></a></li>
                                            <li><a href="https://twitter.com/lasufossconfer1"><i class="fa fa-twitter"
                                                                                                 aria-hidden="true"
                                                                                                 style="color: #2b88cb"></i></a>
                                            </li>
                                            <!--<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true" style="color: #2b88cb"></i></a></li>-->
                                            <!--<li><a href="#"><i class="fa fa-behance" aria-hidden="true" style="color: #2b88cb"></i></a></li>-->
                                            <!--<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true" style="color: #2b88cb"></i></a></li>-->
                                        </ul>
                                    </div>
                                    <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                                    -
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header_nav" id="header_nav_pin">
                    <div class="header_nav_inner">
                        <div class="header_nav_container">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <!--<div class="header_nav_content d-flex flex-row align-items-center justify-content-start">-->
                                        <!--<nav class="main_nav">-->
                                        <!--<ul>-->
                                        <!--<li class="active"><a href="index.html">Home</a></li>-->
                                        <!--<li><a href="about.html">About </a></li>-->
                                        <!--<li><a href="conference.html">Program</a></li>-->
                                        <!--<li><a href="registration.html">Registration</a></li>-->
                                        <!--<li><a href="general_info.html">Destination</a></li>-->
                                        <!--<li><a href="sponsor.html">Sponsors & Exhibition</a></li>-->
                                        <!--<li><a href="contact.php">Contact</a></li>-->

                                        <!--</ul>-->
                                        <!--</nav>-->
                                        <!--<div class="header_extra ml-auto">-->
                                        <!--<div class="header_search"><i class="fa fa-search" aria-hidden="true"></i></div>-->
                                        <!--<div class="button header_button"><a href="#">Register Now!</a></div>-->
                                        <!--</div>-->
                                        <!--</div>-->
                                        <!DOCTYPE html>
                                        <html>
                                        <head>
                                            <style>
                                                .dropbtn {
                                                    background-color: cornflowerblue;
                                                    color: whitesmoke;
                                                    padding: 16px;
                                                    font-size: 16px;
                                                    border: none;
                                                    cursor: pointer;
                                                }

                                                .drophomereg {
                                                    background-color: lawngreen;
                                                    color: white;
                                                    padding: 16px;
                                                    font-size: 16px;
                                                    border: none;
                                                    cursor: pointer;
                                                }

                                                .dropdown {
                                                    position: relative;
                                                    display: inline-block;
                                                }

                                                .dropdown-content {
                                                    display: none;
                                                    position: absolute;
                                                    background-color: #f9f9f9;
                                                    min-width: 160px;
                                                    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                                                    z-index: 1;
                                                }

                                                .dropdown-content a {
                                                    color: black;
                                                    padding: 12px 16px;
                                                    text-decoration: none;
                                                    display: block;
                                                }

                                                .dropdown-content a:hover {
                                                    background-color: #f1f1f1
                                                }

                                                .dropdown:hover .dropdown-content {
                                                    display: block;
                                                }

                                                .dropdown:hover .dropbtn {
                                                    background-color: dodgerblue;
                                                }
                                            </style>
                                        </head>
                                        <div class="dropdown">
                                            <button class="drophomereg"><a href="index.html">Home</a></button>
                                            <!--<div class="dropdown-content">-->
                                            <!--<a href="about.html">Welcome</a>-->
                                            <!--</div>-->
                                        </div>

                                        <div class="dropdown">
                                            <button class="dropbtn">About</button>
                                            <div class="dropdown-content">
                                                <a href="about.html">Welcome</a>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <button class="dropbtn">Program</button>
                                            <div class="dropdown-content">
                                                <a href="conference.html">Conference Theme</a>
                                                <a href="abstract_proposal.html"> Abstracts & Proposals (Sub themes)</a>
                                                <a href="fullpaper.html"> Submit Full Paper</a>
                                                <a href="guidelines.html">Guidelines for participation</a>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <button class="dropbtn">Registration</button>
                                            <div class="dropdown-content">
                                                <a href="registration.html">Registration details</a>

                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <button class="dropbtn">Destination</button>
                                            <div class="dropdown-content">
                                                <a href="general_info.html">General Information</a>
                                                <a href="getting_around.html">Getting Around</a>
                                            </div>
                                        </div>

                                        <div class="dropdown">
                                            <button class="dropbtn">Sponsors & Exhibition</button>
                                            <div class="dropdown-content">
                                                <a href="sponsor.html">Sponsors</a>
                                                <a href="exhibition.html">Exhibition</a>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <button class="dropbtn">Contact Us</button>
                                            <div class="dropdown-content">
                                                <a href="contact.php">Contact us</a>
                                            </div>
                                        </div>
                                        </html>

                                    </div>
                                    <div class="drophomereg"><a href="payment_reg.php">Register Now!</a></div>
                                </div>
                            </div>
                        </div>
                        <!--						<div class="search_container">-->
                        <!--							<div class="container">-->
                        <!--								<div class="row">-->
                        <!--									<div class="col">-->
                        <!--										<div class="search_content d-flex flex-row align-items-center justify-content-end">-->
                        <!--											<form action="#" id="search_container_form" class="search_container_form">-->
                        <!--												<input type="text" class="search_container_input" placeholder="Search" required="required">-->
                        <!--												<button class="search_container_button"><i class="fa fa-search" aria-hidden="true"></i></button>-->
                        <!--											</form>-->
                        <!--										</div>-->
                        <!--									</div>-->
                        <!--								</div>-->
                        <!--							</div>-->
                        <!--						</div>-->
                    </div>
                </div>
            </div>
        </header>


        <div class="home_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content d-flex flex-row align-items-end justify-content-start">
                            <div class="current_page">Contact</div>
                            <div class="breadcrumbs ml-auto">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li>Contact</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact -->

    <div class="contact">
        <div class="contact_map_background">

            <!-- Contact Map -->
            <div class="contact_map">

                <!-- Google Map -->
                <div class="map">
                    <div id="google_map" class="google_map">
                        <div class="map_container">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact_form_container">
                        <div class="contact_form_title">Get in touch by sending us a feedback</div>
                        <form id="emailForm" name="emailForm" method="post" action="contact_mail.php">
                            <table width="100%" border="0" align="center" cellpadding="4" cellspacing="1">
                                <tr>
                                    <td>Name :</td>
                                    <td><input name="first_name" type="text" id="first_name" size="45"></td>
                                </tr>
                                <td>&nbsp;</td>
                                <tr>
                                    <td>E-mail :</td>
                                    <td><input name="email_address" type="text" id="email_address" size="45"></td>
                                </tr>
                                <td>&nbsp;</td>
                                <tr>
                                    <td>Message :</td>
                                    <td>
                                        <textarea name="comments" cols="45" rows="8" id="comments"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td><input name="SubmitBtn" type="submit" id="SubmitBtn" value="Submit">
                                        <button type="reset">Reset</button>
                                    </td>
                                </tr>

                            </table>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="contact_info_container">
                        <div>
                            <a href="#">
                                <div class="logo_container d-flex flex-row align-items-start justify-content-start">
                                    <div class="logo_image"><div><img src="images/logo.png" alt=""></div></div>
                                    <div class="logo_content">
                                        <div id="logo_text" class="logo_text logo_text_not_ie">2019 Annual Faculty of Social Sciences Conference</div>
                                        <div class="logo_sub">November 17th - 20th, 2019</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="contact_info_list_container">
                            <ul class="contact_info_list">
                                <li class="d-flex flex-row align-items-start justify-content-start">
                                    <div><div class="contact_info_icon text-center"><img src="images/contact_1.png" alt=""></div></div>
                                    <div class="contact_info_text">Lagos State University, Lagos Nigeria.</div>
                                </li>
                                <li class="d-flex flex-row align-items-start justify-content-start">
                                    <div><div class="contact_info_icon text-center"><img src="images/contact_2.png" alt=""></div></div>
                                    <div class="contact_info_text">08023046011</div>
                                    <div class="contact_info_text">07045999193</div>

                                </li>
                                <li class="d-flex flex-row align-items-start justify-content-start">
                                    <div><div class="contact_info_icon text-center"><img src="images/contact_3.png" alt=""></div></div>
                                    <div class="contact_info_text">fossconference@lasu.edu.ng</div>
                                </li>
                            </ul>
                        </div>
                        <div class="contact_info_pin"><div></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <footer class="footer">
        <div class="footer_content">
            <div class="container">
                <div class="row">

                    <!-- Footer Column -->
                    <div class="col-lg-4 footer_col">
                        <div class="footer_about">
                            <div>
                                <a href="#">
                                    <div class="logo_container d-flex flex-row align-items-start justify-content-start">
                                        <div class="logo_image"><div><img src="images/logo.png" alt=""></div></div>
                                        <div class="logo_content">
                                            <div><h4> 2019 Annual Faculty of Social Sciences Conference</h4> </div>
                                            <div class="logo_sub">17-20 | 11 | 2019 Lagos, Nigeria</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="footer_about_text">
                                <p>Theme: '' Africa in the 21st Century: Towards an Agenda for Urgent Repositioning ''</p>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Column -->
                    <div class="col-lg-3 footer_col">
                        <!--<div class="footer_links">-->
                        <!--<ul>-->
                        <!--<li><a href="#">About Us</a></li>-->
                        <!--<li><a href="#">Services</a></li>-->
                        <!--<li><a href="#">Speakers</a></li>-->
                        <!--<li><a href="#">Event Dates</a></li>-->
                        <!--<li><a href="#">Information</a></li>-->
                        <!--<li><a href="#">Calendar</a></li>-->
                        <!--</ul>-->
                        <!--</div>-->
                    </div>

                    <!-- Footer Column -->
                    <div class="col-lg-3 footer_col">
                        <!--<div class="footer_links">-->
                        <!--<ul>-->
                        <!--<li><a href="#">Logistics</a></li>-->
                        <!--<li><a href="#">Our Partners</a></li>-->
                        <!--<li><a href="#">Testimonials</a></li>-->
                        <!--<li><a href="#">Price Plans</a></li>-->
                        <!--<li><a href="#">News</a></li>-->
                        <!--<li><a href="#">Contact</a></li>-->
                        <!--</ul>-->
                        <!--</div>-->
                    </div>

                    <!-- Footer Column -->
                    <div class="col-lg-2 footer_col">
                        <div class="footer_links">
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Speakers</a></li>
                                <li><a href="#">Event Dates</a></li>
                                <li><a href="#">Information</a></li>
                                <li><a href="#">Calendar</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer_extra">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="footer_extra_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-start justify-content-center">
                            <div class="footer_social">
                                <div class="footer_social_title">
                                    <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        <h4>Copyright &copy; 2019
                                            <!--<script>document.write(new Date().getFullYear());</script> -->
                                            All rights reserved | Faculty of Social Sciences, Lagos State University. </h4>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                                </div>
                                <div class="footer_extra_right ml-lg-auto text-lg-right">
                                    <div class="footer_extra_links">
                                        <!--<ul>-->
                                        <!--<li><a href="contact.php">Contact us</a></li>-->
                                        <!--<li><a href="#">Sitemap</a></li>-->
                                        <!--<li><a href="#">Privacy</a></li>-->
                                        <!--</ul>-->
                                        <!--<i class="fa fa-heart-o" aria-hidden="true"></i>-->

                                        <!--by <a href="https://sparklegrid.com" target="_blank">Tobaino (sparklegrid)</a>-->
                                        <!--</div>-->

                                    </div>
                                </div>
                            </div>
                            <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                ||||||||||||||||||||||||||||||||||||||||||||||||||   design<i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://Twitter.com/@tobainocycle" target="_blank">Tobaino</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<!--<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>-->
<script src="js/contact.js"></script>
</body>
</html>