<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">

    <title>Homepage</title>
    {{-- <link rel="icon" href="favicon.png" type="image/png"> --}}
    <link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600'
        rel='stylesheet' type='text/css'>

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" >

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
    {{-- <script type="text/javascript" src="{{ asset('js/jquery.1.8.3.min.js') }}"></script> --}}
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/wow.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/classie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-scrolltofixed.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.isotope.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/magnific-popup.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>

    {{-- <script src="contactform/contactform.js"></script> --}}

    <!-- =======================================================
    Theme Name: Knight
    Theme URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
    <!--header-start-->
    <header class="header" id="header">
        <div class="container">
            <figure class="logo animated fadeInDown delay-07s">
                <a href="#"><img src="img/logo/sbg_group.png" alt=""></a>
            </figure>
            <h1 class="animated fadeInDown delay-07s">Subaga Group</h1>
            <ul class="we-create animated fadeInUp delay-1s">
                <li>Membangun kepercayaan serta inovasi teknologi dengan prinsip profesional, solusional, pendampingan, kepercayaan dan
                pelayanan terbaik</li>
            </ul>
            <a class="btn btn-lg button-hover animated fadeInUp delay-1s servicelink" href="#service">Explore More</a>
        </div>
    </header>
    <!--header-end-->

    <nav class="main-nav-outer" id="navbar">
        <!--main-nav-start-->
        <div class="container" style="width: 100%;">
            <ul class="main-nav">
                <li><a class="btn" onclick="openNav()"><span class="company-name">Subaga Group</span>&nbsp; <i class="fa fa-angle-right"></i></a></li>
                <li class="small-logo"><a class="btn company-logo" style="width:150px; height:80px;"><img src="img/logo/sbg_group.png" alt=""></a></li>
                <span class="dynamic-nav">
                    <li><a href="#service">Profil</a></li>
                    <li><a href="#anak">Anak Perusahaan</a></li>
                    <li><a href="#team">Layanan</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                </span>
            </ul>
            <a class="res-nav_click" href="#"><i class="fa fa-bars"></i></a>
        </div>
    </nav>
    <!--main-nav-end-->

    <div id="myNav" class="overlay" style="z-index:9999999">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="overlay-content switch-menu">
        <a href="{{url('/')}}" data-link='sbg_group'>Subaga Group</a>
        <a href="#">Subaga Mitra Solusi</a>
        <a href="{{url('list')}}" data-link='sbg_im'>Subaga Inti Milenia</a>
        <a href="#">Pendaerahan Pajak</a>
        <a href="#">Adora Solusi</a>
        <a href="#" data-link='sbg_hexa'>Hexadata Primakom</a>
      </div>
    </div>

    <!-- Use any element to open/show the overlay navigation menu -->
    <div class='content-default'>
        <section class="main-section" id="service">
            <!--main-section-start-->
            <div class="container">
                <h2>Profil Perusahaan</h2>            
                <br>
                <br>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
                        <div class="service-list">
                            <div class="service-list-col1">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="service-list-col2">
                                <h3>Latar Belakang</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                        <div class="service-list">
                            <div class="service-list-col1">
                                <i class="fa fa-lightbulb-o"></i>
                            </div>
                            <div class="service-list-col2">
                                <h3>Visi</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. </p>
                            </div>
                        </div>
                        <div class="service-list">
                            <div class="service-list-col1">
                                <i class="fa fa-check-square-o"></i>
                            </div>
                            <div class="service-list-col2">
                                <h3>Misi</h3>
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Lorem ipsum dolor</li>
                                    <li>Lorem ipsum</li>
                            </div>
                        </div>
                     <!--    <div class="service-list">
                            <div class="service-list-col1">
                                <i class="fa fa-apple"></i>
                            </div>
                            <div class="service-list-col2">
                                <h3>Est</h3>
                                <p>2010</p>
                            </div>
                        </div> -->
                        <!-- <div class="service-list">
                            <div class="service-list-col1">
                                <i class="fa fa-medkit"></i>
                            </div>
                            <div class="service-list-col2">
                                <h3>24/7 Support</h3>
                                <p>Proin iaculis purus consequat sem digni ssim. Sem porttitora entum.</p>
                            </div>
                        </div> -->
                    </div>
                    <figure class="col-lg-8 col-sm-6  text-right wow fadeInUp delay-02s">
                        <img src="img/macbook-pro.png" alt="">
                    </figure>

                </div>
            </div>
        </section>
        <!--main-section-end-->

        <section class="main-section alabaster" id="anak">
            <!--main-section alabaster-start-->
            <div class="container">
                <div class="row">
                    <figure class="col-lg-5 col-sm-4 wow fadeInLeft">
                        <img src="img/iphone.png" alt="">
                    </figure>
                    <div class="col-lg-7 col-sm-8 featured-work">
                        <h2>Anak Perusahaan</h2>
                        <!-- <P class="padding-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</P> -->
                        <br>
                        <div class="featured-box">
                            <div class="featured-box-col1 wow fadeInRight delay-02s">
                                <i class="fa fa-circle-o"></i>
                            </div>
                            <div class="featured-box-col2 wow fadeInRight delay-02s">
                                <h3>Subaga Inti Milenia</h3>
                                <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus
                                    posuere odio in tincidunt. </p>
                            </div>
                        </div>
                        <div class="featured-box">
                            <div class="featured-box-col1 wow fadeInRight delay-04s">
                                <i class="fa fa-circle-o"></i>
                            </div>
                            <div class="featured-box-col2 wow fadeInRight delay-04s">
                                <h3>Subaga Mitra Solusi</h3>
                                <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus
                                    posuere odio in tincidunt. </p>
                            </div>
                        </div>
                        <div class="featured-box">
                            <div class="featured-box-col1 wow fadeInRight delay-06s">
                                <i class="fa fa-circle-o"></i>
                            </div>
                            <div class="featured-box-col2 wow fadeInRight delay-06s">
                                <h3>Pendaerahan pajak</h3>
                                <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus
                                    posuere odio in tincidunt. </p>
                            </div>
                        </div>
                        <div class="featured-box">
                            <div class="featured-box-col1 wow fadeInRight delay-06s">
                                <i class="fa fa-circle-o"></i>
                            </div>
                            <div class="featured-box-col2 wow fadeInRight delay-06s">
                                <h3>Adora Solusi </h3>
                                <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus
                                    posuere odio in tincidunt. </p>
                            </div>
                        </div>
                        <div class="featured-box">
                            <div class="featured-box-col1 wow fadeInRight delay-06s">
                                <i class="fa fa-circle-o"></i>
                            </div>
                            <div class="featured-box-col2 wow fadeInRight delay-06s">
                                <h3>Hexadata Primakom</h3>
                                <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus
                                    posuere odio in tincidunt. </p>
                            </div>
                        </div>
                        <a class="Learn-More" href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </section>
        <!--main-section alabaster-end-->
        <section class="main-section client-part" id="client" style="display: none;">
            <!--main-section client-part-start-->
            <div class="container">
                <b class="quote-right wow fadeInDown delay-03"><i class="fa fa-quote-right"></i></b>
                <div class="row">
                    <div class="col-lg-12">
                        <p class="client-part-haead wow fadeInDown delay-05">Layanan</p>
                    </div>
                </div>
                <ul class="client wow fadeIn delay-05s">
                    <li><a href="#">
                    <img src="img/client-pic1.jpg" alt="">
                    <h3>James Bond</h3>
                    <span>License To Drink Inc.</span>
                </a></li>
                </ul>
            </div>
        </section>
        <!--main-section client-part-end-->
        <div class="c-logo-part" style="background: #f7a762">
             <!--c-logo-part-start-->
             <div class="container" style="width: 100%">
                 <ul>
                     <li><a href="#"><img src="img/logo/aws.png" width="122" height="53" alt=""></a></li>
                     <li><a href="#"><img src="img/logo/ruuvi.png" width="122" height="53" alt=""></a></li>
                     <li><a href="#"><img src="img/logo/icon.png" width="122" height="53" alt=""></a></li>
                     <li><a href="#"><img src="img/logo/alibaba.png" width="122" height="53" alt=""></a></li>
                     <li><a href="#"><img src="img/logo/huawei.png" width="122" height="53" alt=""></a></li>
                     <li><a href="#"><img src="img/logo/ssi.png" width="122" height="53" alt=""></a></li>
                 </ul>
             </div>
         </div>
        <!--c-logo-part-end-->

        <section class="main-section team" id="team" style="background-color: #fafafa">
            <!--main-section team-start-->
            <div class="container">
                <h2>Layanan</h2>
                <h6>Take a closer look into our amazing team. We won’t bite.</h6>
                <div class="team-leader-block clearfix">
                    <div class="team-leader-box">
                        <div class="team-leader wow fadeInDown delay-03s">
                            <div class="team-leader-shadow"><a href="#"></a></div>
                            <img src="img/team-leader-pic1.jpg" alt="">
                            <ul>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-pinterest"></a></li>
                                <li><a href="#" class="fa fa-google-plus"></a></li>
                            </ul>
                        </div>
                        <h3 class="wow fadeInDown delay-03s">Walter White</h3>
                        <span class="wow fadeInDown delay-03s">Chief Executive Officer</span>
                        <p class="wow fadeInDown delay-03s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit
                            amet, consectetur adipiscing elit proin consequat.</p>
                    </div>
                    <div class="team-leader-box">
                        <div class="team-leader  wow fadeInDown delay-06s">
                            <div class="team-leader-shadow"><a href="#"></a></div>
                            <img src="img/team-leader-pic2.jpg" alt="">
                            <ul>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-pinterest"></a></li>
                                <li><a href="#" class="fa fa-google-plus"></a></li>
                            </ul>
                        </div>
                        <h3 class="wow fadeInDown delay-06s">Jesse Pinkman</h3>
                        <span class="wow fadeInDown delay-06s">Product Manager</span>
                        <p class="wow fadeInDown delay-06s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit
                            amet, consectetur adipiscing elit proin consequat.</p>
                    </div>
                    <div class="team-leader-box">
                        <div class="team-leader wow fadeInDown delay-09s">
                            <div class="team-leader-shadow"><a href="#"></a></div>
                            <img src="img/team-leader-pic3.jpg" alt="">
                            <ul>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-pinterest"></a></li>
                                <li><a href="#" class="fa fa-google-plus"></a></li>
                            </ul>
                        </div>
                        <h3 class="wow fadeInDown delay-09s">Skyler white</h3>
                        <span class="wow fadeInDown delay-09s">Accountant</span>
                        <p class="wow fadeInDown delay-09s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit
                            amet, consectetur adipiscing elit proin consequat.</p>
                    </div>
                </div>
            </div>
        </section>
        <!--main-section team-end-->

        <section class="main-section paddind" id="portfolio">
            <!--main-section-start-->
            <div class="container">
                <h2>Portfolio</h2>
                <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. </h6>
                <div class="portfolioFilter">
                    <ul class="Portfolio-nav wow fadeIn delay-02s">
                        <li><a href="#" data-filter="*" class="current">Subaga Group</a></li>
                        <li><a href="#" data-filter=".branding">SUBAGA INTI MILENIA</a></li>
                        <li><a href="#" data-filter=".webdesign">SUBAGA MITRA SOLUSI</a></li>
                        <li><a href="#" data-filter=".printdesign">PENDAERAHAN PAJAK</a></li>
                        <li><a href="#" data-filter=".photography">Adora Solusi</a></li>
                        <li><a href="#" data-filter=".webdesign">HEXADATA PRIMAKOM</a></li>
                    </ul>
                </div>

            </div>
            <div class="portfolioContainer wow fadeInUp delay-04s">
                <div class=" Portfolio-box printdesign">
                    <a href="img/Portfolio-pic1.jpg"><img src="img/Portfolio-pic1.jpg" alt=""></a>
                    <h3>Foto Album</h3>
                    <p>Print Design</p>
                </div>
                <div class="Portfolio-box webdesign">
                    <a href="img/Portfolio-pic2.jpg"><img src="img/Portfolio-pic2.jpg" alt=""></a>
                    <h3>Luca Theme</h3>
                    <p>Web Design</p>
                </div>
                <div class=" Portfolio-box branding">
                    <a href="img/Portfolio-pic3.jpg"><img src="img/Portfolio-pic3.jpg" alt=""></a>
                    <h3>Uni Sans</h3>
                    <p>Branding</p>
                </div>
                <div class=" Portfolio-box photography">
                    <a href="img/Portfolio-pic4.jpg"><img src="img/Portfolio-pic4.jpg" alt=""></a>
                    <h3>Vinyl Record</h3>
                    <p>Photography</p>
                </div>
                <div class=" Portfolio-box branding">
                    <a href="img/Portfolio-pic5.jpg"><img src="img/Portfolio-pic5.jpg" alt=""></a>
                    <h3>Hipster</h3>
                    <p>Branding</p>
                </div>
                <div class=" Portfolio-box photography">
                    <a href="img/Portfolio-pic6.jpg"><img src="img/Portfolio-pic6.jpg" alt=""></a>
                    <h3>Windmills</h3>
                    <p>Photography</p>
                </div>
            </div>
        </section>
        <!--main-section-end-->
        <section class="business-talking">
            <!--business-talking-start-->
            <div class="container">
                <h2>Let’s Talk Business.</h2>
            </div>
        </section>
        <!--business-talking-end-->
        <div class="container">
            <section class="main-section contact" id="contact">

                <div class="row">
                    <div class="col-lg-6 col-sm-7 wow fadeInLeft">
                        <div class="contact-info-box address clearfix">
                            <h3><i class=" icon-map-marker"></i>Address:</h3>
                            <span>308 Negra Arroyo Lane<br>Albuquerque, New Mexico, 87111.</span>
                        </div>
                        <div class="contact-info-box phone clearfix">
                            <h3><i class="fa fa-phone"></i>Phone:</h3>
                            <span>1-800-BOO-YAHH</span>
                        </div>
                        <div class="contact-info-box email clearfix">
                            <h3><i class="fa fa-pencil"></i>email:</h3>
                            <span>hello@knightstudios.com</span>
                        </div>
                        <div class="contact-info-box hours clearfix">
                            <h3><i class="fa fa-clock-o"></i>Hours:</h3>
                            <span><strong>Monday - Thursday:</strong> 10am - 6pm<br><strong>Friday:</strong> People work on Fridays now?<br><strong>Saturday - Sunday:</strong> Best not to ask.</span>
                        </div>
                        <ul class="social-link">
                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li class="gplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
                        <div class="form">

                            <div id="sendmessage">Your message has been sent. Thank you!</div>
                            <div id="errormessage"></div>
                            <form action="" method="post" role="form" class="contactForm">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control input-text" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars"
                                    />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control input-text" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email"
                                    />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control input-text" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4"
                                        data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control input-text text-area" name="message" rows="5" data-rule="required" data-msg="Please write something for us"
                                        placeholder="Message"></textarea>
                                    <div class="validation"></div>
                                </div>

                                <div class="text-center"><button type="submit" class="input-btn">Send Message</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="content-dynamic" style="display:none">

    </div>

    <footer class="footer">
        <div class="container">
            <div class="footer-logo"><a href="#"><img src="img/footer-logo.png" alt=""></a></div>
            <span class="copyright">&copy; Knight Theme. All Rights Reserved</span>
            <div class="credits">
                <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Knight
        -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>
</body>

</html>