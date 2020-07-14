<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>LLIBKATEC LIMITED</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 d-flex justify-content-between">
                        <!-- Logo Area -->
                        <div class="logo">
                            <a href="https://llibkatec.co.ke/"><img src="img/core-img/logo.png" alt=""></a>
                        </div>

                        <!-- Top Contact Info -->
                        <div class="top-contact-info d-flex align-items-center">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Cross House, Along Cross Road, Ngariama Road P.O Box 17674-00100 Nairobi"><img src="img/core-img/placeholder.png" alt=""> <span>Cross House, Along Cross Road, Ngariama Road P.O Box 17674-00100 Nairobi</span></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="info@llibkatec.co.ke"><img src="img/core-img/message.png" alt=""> <span>info@llibkatec.co.ke</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="credit-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="creditNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="https://llibkatec.co.ke/">Home</a></li>
                                    <li><a href="/about">About Us</a></li>
                                    <li><a href="/services">Services</a></li>
                                    <li><a href="/products">Products</a></li>
                                    <li><a href="/contact">Contact</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Contact -->
                        <div class="contact">
                            <a href="#"><img src="img/core-img/call2.png" alt="">+254 723 622 527</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/home-01.png);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>About us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Messaging</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->


    <!-- ##### Featured Properties Area Start ##### -->
    <section class="featured-properties-area section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp">
                        <h2>Student Request</h2>
                        <p>Llibkatec Limited</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <p> <?php 
    if(!isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        
       
        $to = "info@llibkatec.co.ke";
        $subject ="Email from Website. Subjects is: ".$subject;
        $message ="My Name is : ".$name. " of Email: ".$email." The Following is my message: ".$message;
        $headers ="From: ".$email;
         if(mail($to,$subject,$message,$headers)){
            
          echo " <b>Message Sent. Thank You $name  for your Message.<b>";
}

else {
    echo "Not Sent";
    
}

       


    }
    else
    {
        echo "try again";
    }

 ?></p>

                
               
                 
               
            </div>
        </div>
    </section>
    <!-- ##### Featured Properties Area End ##### -->


   

  
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0">
        <div class="container">
            <div class="row">

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-100">
                        <h5 class="widget-title">About Us</h5>
                        <!-- Nav -->
                        <nav>
                        
                                <p style="color: white"> Llibkatec Limited is a solution provider for customers who want to communicate and connect with consumers. We specialize in outdoor advertising, Corporate branding and general printing. We integrate product position and personality.....<a href="/about" style="color: green">Read More</a> </p>
                                
                           
                        </nav>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-100">
                        <h5 class="widget-title">Quick Links</h5>
                        <!-- Nav -->
                        <nav>
                            <ul>
                                <li><a href="https://llibkatec.co.ke/">Home</a></li>
                                <li><a href="/about">About Us</a></li>
                                <li><a href="/services">Services</a></li>
                                <li><a href="/contact">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-100">
                        <h5 class="widget-title">Our Address</h5>
                        <!-- Nav -->
                        <nav>
                            <ul style="color: white">
                            <li><i class="flaticon-032-placeholder"></i>Cross House, Along Cross Road, Ngariama Road P.O Box 17674-00100 Nairobi-Kenya</li>
                             <li><i class="flaticon-025-arroba"></i>info@llibkatec.co.ke</li>
                              <p style="color: white">+254 704 447 775</p>
                            <li><i class="flaticon-038-wall-clock"></i>Everyday: 08:00 -18:00 pm</li>
                        </ul>
                        </nav>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-100">
                        <h5 class="widget-title">Latest News</h5>

                        <!-- Single News Area -->
                        <div class="single-latest-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                                <img src="img/bg-img/h.png" alt="">
                            </div>
                            <div class="news-content">
                                <a href="#">Branding Services</a>
                                <div class="news-meta">
                                    <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Lydia Muthoni</a>
                                    <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> April 26</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single News Area -->
                        <div class="single-latest-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                                <img src="img/bg-img/h1.png" alt="">
                            </div>
                            <div class="news-content">
                                <a href="#">Large Format</a>
                                <div class="news-meta">
                                    <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Lydia Muthoni</a>
                                    <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> April 26</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single News Area -->
                        <div class="single-latest-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                                <img src="img/bg-img/h2.png" alt="">
                            </div>
                            <div class="news-content">
                                <a href="#">Prinring Available</a>
                                <div class="news-meta">
                                    <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt="">Lydia Muthoni</a>
                                    <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> April 26</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="copywrite-content d-flex flex-wrap justify-content-between align-items-center">
                            <!-- Footer Logo -->
                            

                            <!-- Copywrite Text -->
                            <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |Developed </i> By <a href="https://softwaretechn.co.ke" target="_blank">Software Technology Kenya</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>