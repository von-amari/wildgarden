<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Wildland Gardens</title>
    <meta content="" name="descriptison" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon1.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
    <script src="https://use.fontawesome.com/208b249ce5.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Mentor - v2.1.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <!-- <h1 class="logo mr-auto"><a href="indextest.php">Wildland Gardens</a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.html" class="logo mr-auto"><img src="assets/img/samplelogo.png" alt="" class="img-fluid" /></a>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="stayatthegardens.html">Stay At The Gardens</a></li>
                    <!-- <li><a href="#">Courses</a></li> -->
                    <li><a href="services.html">Services</a></li>
                    <li><a href="landscaping.html">Landscaping</a></li>

                    <li><a href="nativeplants.html">Native Plants</a></li>
                    <!-- <li class="drop-down"><a href="">Drop Down</a>
                      <ul>
                          <li><a href="#">Drop Down 1</a></li>
                          <li class="drop-down"><a href="#">Deep Drop Down</a>
                              <ul>
                                  <li><a href="#">Deep Drop Down 1</a></li>
                                  <li><a href="#">Deep Drop Down 2</a></li>
                                  <li><a href="#">Deep Drop Down 3</a></li>
                                  <li><a href="#">Deep Drop Down 4</a></li>
                                  <li><a href="#">Deep Drop Down 5</a></li>
                              </ul>
                          </li> -->
                    <!-- <li><a href="#">Drop Down 2</a></li>
                  <li><a href="#">Drop Down 3</a></li>
                  <li><a href="#">Drop Down 4</a></li>
              </ul>
              </li> -->
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
            <!-- .nav-menu -->

            <!-- <a
          href="https://www.airbnb.com/rooms/33250576?source_impression_id=p3_1602119794_MGPlIrCy9nRllVzZ"
          class="get-started-btn"
          >Stay With Us</a
        > -->
        </div>
    </header>
    <!-- End Header -->

    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2>Contact Us</h2>
                <p>
                    Questions? We’re here to serve you!
                </p>
            </div>
        </div>
        <!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div data-aos="fade-up">
                <iframe style="border: 0; width: 100%; height: 350px" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12466.495850230232!2d-112.209022!3d38.634531!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1570e416374cb368!2sWildland%20Gardens!5e0!3m2!1sen!2sus!4v1603325644391!5m2!1sen!2sus" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="container" data-aos="fade-up">
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">

                                <i class="icofont-google-map"></i>
                                <h4>Location:</h4>
                                <p>370 E 600 N, Joseph, UT 84739</p>
                            </div>

                            <div class="email">
                                <i class="icofont-envelope"></i>
                                <h4>Email:</h4>
                                <p>wildlandgardens2018@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="icofont-phone"></i>
                                <h4>Phone:</h4>
                                <p>+1 (435) 562-5928</p>
                            </div>
                        </div>
                    </div>

                    <?php
                    if (isset($_POST['submit'])) {
                        $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
                        $subject = htmlspecialchars(stripslashes(trim($_POST['subject'])));
                        $email = htmlspecialchars(stripslashes(trim($_POST['email'])));
                        // $headers = htmlspecialchars(stripslashes(trim($_POST['email'])));
                        $message = htmlspecialchars(stripslashes(trim($_POST['message'])));
                        if (!preg_match("/^[A-Za-z .'-]+$/", $name)) {
                            $name_error = 'Invalid name';
                        }
                        if (!preg_match("/^[A-Za-z .'-]+$/", $subject)) {
                            $subject_error = 'Invalid subject';
                        }
                        if (!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)) {
                            $email_error = 'Invalid email';
                        }
                        if (strlen($message) === 0) {
                            $message_error = 'Your message should not be empty';
                        }
                    }
                    ?>
                    <div class="col-lg-8 mt-5 mt-lg-0">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

                            <div class="form-row">
                                <div class="col-md-6 form-group">

                                    <input type="text" name="name" class="form-control" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                    <p><?php if (isset($name_error)) echo $name_error; ?></p>
                                </div>
                                <div class="col-md-6 form-group">

                                    <input type="text" name="email" class="form-control" placeholder="Your Email">
                                    <p><?php if (isset($email_error)) echo $email_error; ?></p>

                                </div>
                            </div>

                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                            <p><?php if (isset($subject_error)) echo $subject_error; ?></p>


                            <textarea name="message" class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                            <p><?php if (isset($message_error)) echo $message_error; ?></p>



                            <!-- <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">
                                    Your message has been sent. Thank you!
                                </div>
                            </div> -->
                            <div class="text-center">
                                <!-- <input type="submit" name="submit" value="Submit" class="button"> -->
                                <button type="submit" name="submit" value="Submit">Send Message</button>
                            </div>
                            <?php
                            if (isset($_POST['submit']) && !isset($name_error) && !isset($subject_error) && !isset($email_error) && !isset($message_error)) {
                                $to = 'wildlandgardens2018@gmail.com'; // edit here
                                $body = " Name: $name\n E-mail: $email\n Message:\n $message";
                                // $headers = "From: " . $email;
                                if (mail($to, $subject, $body)) {
                                    echo '<p style="color: green">Message sent</p>';
                                } else {
                                    echo '<p>Error occurred, please try again later</p>';
                                }
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-6 footer-links"></div>

                        <div class="col-lg-4 col-md-6 footer-contact">
                            <h3>Wildland Gardens</h3>
                            <p>
                                370 E 600 N <br />
                                Joseph, UT 84739 <br />
                                United States <br /><br />
                                <strong>Phone:</strong> (435) 562-5928 <br />
                                <strong>Email:</strong> wildlandgardens2018@gmail.com <br />
                            </p>
                        </div>

                        <div class="col-lg-2 col-md-6 footer-links">
                            <h4>Useful Links</h4>
                            <ul>
                                <li>
                                    <i class="bx bx-chevron-right"></i>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <i class="bx bx-chevron-right"></i>
                                    <a href="about.html">About us</a>
                                </li>
                                <li>
                                    <i class="bx bx-chevron-right"></i>
                                    <a href="services.html">Services</a>
                                </li>
                                <!-- <li>
                <i class="bx bx-chevron-right"></i>
                <a href="terms.html">Terms of service</a>
              </li> -->
                                <li>
                                    <i class="bx bx-chevron-right"></i>
                                    <a href="privacy.html">Privacy policy</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-2 col-md-6 footer-links">
                            <h4>Our Services</h4>
                            <ul>
                                <li>
                                    <i class="bx bx-chevron-right"></i>
                                    <a href="landscaping.html">Landscaping Services</a>
                                </li>
                                <li>
                                    <i class="bx bx-chevron-right"></i>
                                    <a href="https://www.airbnb.com/rooms/33250576">Stay with Us</a>
                                </li>
                                <li>
                                    <i class="bx bx-chevron-right"></i>
                                    <a href="nativeplants.html">Native Plants</a>
                                </li>
                                <li>
                                    <i class="bx bx-chevron-right"></i>
                                    <a href="services.html">Farmers Market</a>
                                </li>
                                <li>
                                    <i class="bx bx-chevron-right"></i>
                                    <a href="services.html">Rentals</a>
                                </li>
                            </ul>
                        </div>

                        <!-- <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4>Join Our Newsletter</h4>
          <p>
            Tamen quem nulla quae legam multos aute sint culpa legam noster
            magna
          </p>
          <form action="" method="post">
            <input type="email" name="email" /><input
              type="submit"
              value="Subscribe"
            />
          </form>
        </div> -->
                    </div>
                </div>
            </div>

            <div class="container d-md-flex py-4">
                <div class="mr-md-auto text-center text-md-left">
                    <div class="copyright">
                        &copy; Copyright <strong><span>Wildland Gardens</span></strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
                <div class="social-links text-center text-md-right pt-3 pt-md-0">
                    <a href="https://www.facebook.com/WildlandGardens.org" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="https://www.instagram.com/wildland_gardens/" class="instagram"><i class="bx bxl-instagram"></i></a>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

        <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
        <script src="assets/vendor/counterup/counterup.min.js"></script>
        <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>
</body>

</html>