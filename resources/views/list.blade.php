<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">

    <title>Homepage</title>
    <link rel="icon" href="favicon.png" type="image/png">
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

    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/wow.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/classie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.1.8.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-scrolltofixed.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.isotope.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/magnific-popup.js') }}"></script>
    <script src="contactform/contactform.js"></script>

    <!-- =======================================================
    Theme Name: Knight
    Theme URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
    ======================================================= -->
    <style>
    body {
      font-family: 'Lato', sans-serif;
    }

    .overlay {
      height: 100%;
      width: 0;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: rgb(0,0,0);
      background-color: rgba(0,0,0, 0.9);
      overflow-x: hidden;
      transition: 0.5s;
    }

    .overlay-content {
      position: relative;
      top: 25%;
      width: 100%;
      text-align: center;
      margin-top: 30px;
    }

    .overlay a {
      padding: 15px;
      text-decoration: none;
      font-size: 30px;
      color: #818181;
      display: block;
      transition: 0.3s;
    }

    .overlay a:hover, .overlay a:focus {
      color: #f1f1f1;
    }

    .overlay .closebtn {
      position: absolute;
      top: 20px;
      right: 45px;
      font-size: 60px;
    }

    @media screen and (max-height: 450px) {
      .overlay a {font-size: 20px}
      .overlay .closebtn {
      font-size: 40px;
      top: 15px;
      right: 35px;
      }
    }
    </style>
</head>

<body>
    <!--header-start-->
   <!--  <header class="header" id="header">
        <div class="container">
            <figure class="logo animated fadeInDown delay-07s">
                <a href="#"><img src="img/logo/logo-subaga.png" alt=""></a>
            </figure>
            <h1 class="animated fadeInDown delay-07s">Subaga Group</h1>
            <ul class="we-create animated fadeInUp delay-1s">
                <li>Membangun kepercayaan serta inovasi teknologi dengan prinsip profesional, solusional, pendampingan, kepercayaan dan
                pelayanan terbaik</li>
            </ul>
            <a class="link animated fadeInUp delay-1s servicelink" href="#service">Get Started</a>
        </div>
    </header> -->
    <!--header-end-->

    <nav class="main-nav-outer" id="test">
        <!--main-nav-start-->
        <div class="container" style="width: 100%">
            <ul class="main-nav">
                <li><a href="#company" onclick="openNav()">Pt. Subaga Inti Milenia &nbsp; <i class="fa fa-angle-right"></i></a></li>
                <li class="small-logo"><a class="btn"><img src="img/logo/subaga-milenia/logo-subaga-milenia.png" width="150" height="80" alt=""></a></li>
                <li><a href="#service">Profil</a></li>
                <li><a href="#anak">Anak Perusahaan</a></li>
                <li><a href="#team">Layanan</a></li>
                <li><a href="#Portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <a class="res-nav_click" href="#"><i class="fa fa-bars"></i></a>
        </div>
    </nav>
    <!--main-nav-end-->

    <div id="myNav" class="overlay" style="z-index:9999999">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="overlay-content">
        <a href="{{url('/')}}"><i>Subaga Group</i></a>
        <a href="#"><i>Subaga Mitra Solusi</i></a>
        <a href="{{url('list')}}">Subaga Inti Milenia</a>
        <a href="#">Pendaerahan Pajak</a>
        <a href="#">Adora Solusi</a>
        <a href="#">Hexadata Primakom</a>
      </div>
    </div>

    <!-- Use any element to open/show the overlay navigation menu -->
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
                            <h3>Tagline</h3>
                            <p><b><i>“Kami memiliki kompetensi dalam Big Data, IoT dan Virtual Reality”</i></b></p>
                        </div>
                    </div>
                    <div class="service-list">
                        <div class="service-list-col1">
                            <i class="fa fa-lightbulb-o"></i>
                        </div>
                        <div class="service-list-col2">
                            <h3>Visi</h3>
                            <p>Menjadi perusahaan yang mampu mewujudkan masa depan era digital</p>
                        </div>
                    </div>
                    <div class="service-list">
                        <div class="service-list-col1">
                            <i class="fa fa-check-square-o"></i>
                        </div>
                        <div class="service-list-col2">
                            <h3>Misi</h3>
                                <li>Menjadikan perusahaan yang mewujudkan kompetensi sumber daya manusia melalui  hasil karya digital</li>
                                <!-- <li>Lorem ipsum dolor</li>
                                <li>Lorem ipsum</li> -->
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
                    <img src="img/logo/subaga-milenia/logo-subaga-milenia.png" alt="">
                </figure>

            </div>
        </div>
    </section>
    <!--main-section-end-->

 <!--main-section alabaster-start-->
   <!--  <section class="main-section alabaster" id="anak">
        <div class="container">
            <div class="row">
                <figure class="col-lg-5 col-sm-4 wow fadeInLeft">
                    <img src="img/iphone.png" alt="">
                </figure>
                <div class="col-lg-7 col-sm-8 featured-work">
                    <h2>Anak Perusahaan</h2>
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
    </section> -->
    <!--main-section alabaster-end-->

    <!--main-section client-part-start-->
    <!-- <section class="main-section client-part" id="client" style="display: none;">
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
    </section> -->
    <!--main-section client-part-end-->
     <div class="c-logo-part" style="background: #f7f7f7">
        <!--c-logo-part-start-->
        <div class="container" style="width: 100%">
            <ul>
                <li><a href="#"><img src="img/logo/subaga-milenia/Partner1.jpg" width="122" height="53" alt=""></a></li>
                <li><a href="#"><img src="img/logo/subaga-milenia/Partner2.png" width="122" height="53" alt=""></a></li>
                <li><a href="#"><img src="img/logo/subaga-milenia/Partner3.jpg" width="122" height="53" alt=""></a></li>
                <li><a href="#"><img src="img/logo/subaga-milenia/Partner4.jpg" width="122" height="53" alt=""></a></li>
                <li><a href="#"><img src="img/logo/subaga-milenia/Partner5.jpg" width="122" height="53" alt=""></a></li>
                <li><a href="#"><img src="img/logo/subaga-milenia/Partner6.jpg" width="122" height="53" alt=""></a></li>
            </ul>
        </div>
    </div>
    <!--c-logo-part-end-->

    <!--main-section team-start-->
    <!-- <section class="main-section team" id="team" style="background-color: #fafafa">
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
    </section> -->
    <!--main-section team-end-->

    <section class="main-section paddind" id="Portfolio">
        <!--main-section-start-->
        <div class="container">
            <h2>Portfolio</h2>
            <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. </h6>
            <div class="portfolioFilter">
                <ul class="Portfolio-nav wow fadeIn delay-02s">
                    <!-- <li><a href="#" data-filter="*" class="current">All</a></li> -->
                    <li><a href="#" data-filter=".branding">IoT of a SMART PARKING</a></li>
                    <li><a href="#" data-filter=".webdesign">IoT of a SMALL MEDIUM BUSINESS</a></li>
                    <li><a href="#" data-filter=".printdesign">IoT of a GOVERNMENT TAX</a></li>
                    <li><a href="#" data-filter=".photography">Adora Solusi</a></li>
                    <li><a href="#" data-filter=".webdesign">IoT in CONTROLLING A POWER DISTRIBUTION</a></li>
                </ul>
            </div>

        </div>
        <div class="portfolioContainer wow fadeInUp delay-04s">

        <div class=" Portfolio-box branding">
                <a href="img/logo/subaga-milenia/SmartPark2.PNG"><img src="img/logo/subaga-milenia/SmartPark2.PNG" alt=""></a>
                <h3>IoT of a SMART PARKING</h3>
                <p>Smart parking technologies are enabling a brand new
                    parking experience. Sensor networks that detect vehicle occupancy, embedded pcs, IoT gateways and cloud are providing the basic intelligence behind smart parking systems.
                </p>
            </div>
            <div class=" Portfolio-box printdesign">
                <a href="img/logo/subaga-milenia/GovernmentTax2.png"><img src="img/logo/subaga-milenia/GovernmentTax2.png" alt=""></a>
                <h3> IoT of a GOVERNMENT TAX</h3>
                <p>Lorem Ipsum dolor sit amet</p>
            </div>
            <div class="Portfolio-box webdesign">
                <a href="img/logo/subaga-milenia/SmallMedium2.png"><img src="img/logo/subaga-milenia/SmallMedium2.png" alt=""></a>
                <h3>IoT of a SMALL MEDIUM BUSINESS</h3>
                <p>Lorem Ipsum dolor sit amet</p>
            </div>
            <div class=" Portfolio-box branding">
                <a href="img/logo/subaga-milenia/Tappingbox.png"><img src="img/logo/subaga-milenia/Tappingbox.png" alt=""></a>
                <h3>IoT in CONTROLLING A POWER DISTRIBUTION</h3>
                <p>Lorem Ipsum dolor sit amet</p>
            </div>
            <div class=" Portfolio-box photography">
                <a href="img/logo/subaga-milenia/Tappingbox2.png"><img src="img/logo/subaga-milenia/Tappingbox2.png" alt=""></a>
                <h3>IoT in CONTROLLING A POWER DISTRIBUTION 2</h3>
                <p>Lorem Ipsum dolor sit amet</p>
            </div>
            
            <!-- <div class=" Portfolio-box photography">
                <a href="img/Portfolio-pic6.jpg"><img src="img/Portfolio-pic6.jpg" alt=""></a>
                <h3>Windmills</h3>
                <p>Photography</p>
            </div> -->

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

    <script>
    function openNav() {
      document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }
    </script>
    
    <script type="text/javascript">
        $(document).ready(function(e) {

			$('#test').scrollToFixed();
			$('.res-nav_click').click(function() {
				$('.main-nav').slideToggle();
				return false

			});

      $('.Portfolio-box').magnificPopup({
        delegate: 'a',
        type: 'image'
      });

		});
    </script>

    <script>
        wow = new WOW({
			animateClass: 'animated',
			offset: 100
		});
		wow.init();
    </script>


    <script type="text/javascript">
        $(window).load(function() {

			$('.main-nav li a, .servicelink').bind('click', function(event) {
				var $anchor = $(this);

				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top - 102
				}, 1500, 'easeInOutExpo');
				/*
				if you don't want to use the easing effects:
				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top
				}, 1000);
				*/
				if ($(window).width() < 768) {
					$('.main-nav').hide();
				}
				event.preventDefault();
			});
		})
    </script>

    <script type="text/javascript">
        $(window).load(function() {


			var $container = $('.portfolioContainer'),
				$body = $('body'),
				colW = 375,
				columns = null;


			$container.isotope({
				// disable window resizing
				resizable: true,
				masonry: {
					columnWidth: colW
				}
			});

			$(window).smartresize(function() {
				// check if columns has changed
				var currentColumns = Math.floor(($body.width() - 30) / colW);
				if (currentColumns !== columns) {
					// set new column count
					columns = currentColumns;
					// apply width to container manually, then trigger relayout
					$container.width(columns * colW)
						.isotope('reLayout');
				}

			}).smartresize(); // trigger resize to set container width
			$('.portfolioFilter a').click(function() {
				$('.portfolioFilter .current').removeClass('current');
				$(this).addClass('current');

				var selector = $(this).attr('data-filter');
				$container.isotope({

					filter: selector,
				});
				return false;
			});

		});
    </script>

</body>

</html>