<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="At Manzelah Group of Companies, We make Cakes for all kinds of ceremonies, be it Weddings, Introductions/kwanjula, Bithday, Cake loaves and more" name="description" />
        <meta content="ashley7520charles@gmail.com" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="{{asset('assets/images/logo.ico')}}">

        <!--// Icons //-->
        <link rel="stylesheet" href="/front/fonts/flat_icons/flaticon.css">
        <link rel="stylesheet" href="/front/fonts/font_awesome/css/all.css">
        <!--// Google Fonts //-->
        <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i&display=swap&subset=latin-ext" rel="stylesheet">
        <!--// FrameWorks //-->
        <link rel="stylesheet" href="/front/css/frameworks.css">
        <!--// Theme Main Js //-->
        <link rel="stylesheet" href="/front/css/style.css">

        <style>
            #home:after{
                background-color: #40c3c9 !important;
                opacity: 100 !important;
            }
           .services-item:hover {
                background: #40c3c9 !important;        
            }

            .tab-content-inner ul li::before {            
                color: #40c3c9 !important;
            }

            .accordion-item .accordion-item-header a i {
                color: #40c3c9 !important;
            }

            .accordion-item .accordion-item-header a:after { 
                color: #40c3c9 !important;     
            }

            .scroll-top-btn {
                background: #40c3c9 !important;
            }

            .header.header-shrink .nav-item .nav-link.active {
                color: #40c3c9 !important;
            }

            header.header-shrink .nav-item .nav-link.active:after {
                background: #40c3c9  !important;
            }

            .footer {
                background: #3c8181 !important;
            }

            .preloader-wrap {
                background: #ffc107 !important;
            }

            .text{
                text-align: justify;
            }
        </style>
</head>

<body data-spy="scroll" data-target="#fixedNavbar" data-offset="70">
    <header class="header fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg p-0">
                <a class="navbar-brand" href="/">
                    <img src="{{asset('assets/images/logo.png')}}" alt="Logo" class="img-fluid logo-transparent" width="200" style="border-radius: 5px;">
                    <img src="{{asset('assets/images/logo.png')}}" alt="Logo" class="img-fluid logo-normal" width="200" style="border-radius: 5px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fixedNavbar" aria-controls="fixedNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="togler-icon-inner">
                        <span class="line-1"></span>
                        <span class="line-2"></span>
                        <span class="line-3"></span>
                    </span>
                </button>
                <div class="collapse navbar-collapse main-menu justify-content-end" id="fixedNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-scroll-nav="1">HOME</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-scroll-nav="2">Products</a>
                        </li>                       
                        
                        <li class="nav-item active">
                            @if(Auth::guest())
                            <a class="nav-link" href="/login">Admin Login</a>
                            @else 
                            <a class="nav-link" href="/home">Home</a>
                            @endif
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
   
    <section id="home" class="jarallax" data-scroll-index="1" data-jarallax="" data-speed="0.6s" style="background-image: url(img/bg/hero-bg.png);">
        <div class="banner-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-12">
                        <div class="banner-content">
                            <h1 class="wow fadeInUp" data-wow-delay="0.1s">We make Cakes for all kinds of ceremonies.</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">We make Cakes for all kinds of ceremonies, be it Weddings, Introductions/kwanjula, Bithday, Cake loaves and more</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 banner-right text-right wow fadeInUp" data-wow-delay="0.3s">
                        <div class="img-jump">
                            <img src="{{asset('assets/images/front.gif')}}" alt="App image" class="img-fluid" style="border-radius: 5px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="scroll-down-btn" data-scroll-nav="2">
            <i class="fa fa-arrow-down"></i>
        </a>
    </section>

 
   
    <section class="section pb-minus-70" id="services" data-scroll-index="2">

        <div class="container">      
            <div class="tab-content-wrap">
                <div class="tab-content-item wow active">
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="tab-content-inner text">
                                <br> <br>
                                <p>Manzelah Group of COmpanies Limited was established in 2018 by a passionate Baker, Acio Hope Mystica Ogwal. Our focus in on Service the market with the best quality Cakes</p>
                                <p>We cater for personal cravings of our customers and bring warmth and Joy while staying true to our roots as we envolve with trends. </p>
                                <p>We produce and sell affordable pastries and create Joyful and happy moments in peoples lives.</p>
                            </div>
                        </div>

                        <div class="col-lg-6 features-tab-image">
                            <center>
                            <img class="img-fluid" src="{{asset('assets/images/person.jpg')}}" width="50%" alt="Features tab image">
                            </center>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>



       

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-sm-12">
                    <div class="section-heading">
                        <h2 class="section-title">We Make the Best Cakes</h2>
                        <p> We make Different cake flavours like, Vanilla cake, French vanilla cake, Traditional fruit cake, Orange cake, Pinnaple  cake, Tutifruity cake, Chocolate cake, Black forest, White forest, Chocolate fudge,Carrot cake, Lemon cake, Coconut cake, Red velvet cake and more.</p>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="services-item">
                         <img src="/assets/images/cake1.jpg" alt="" width="100%">
                         <div class="services-body">
                            <h5>Wedding cakes</h5>
                            <p>We make cakes for all kinds of wedding ceremonies</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-lg-4 col-sm-12 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="services-item">
                        <img src="/assets/images/cake2.jpg" alt="" width="100%">
                        <div class="services-body">
                            <h5>Presentation</h5>
                            <p>We bring our products to the <br> venue</p>
                        </div>
                    </div>
                </div>  

                <div class="col-md-4 col-lg-4 col-sm-12 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="services-item">
                        <img src="/assets/images/cake5.jpg" alt="" width="100%">
                        <div class="services-body">
                            <h5>Birth day cakes</h5>
                            <p>We make your children happy with customised bithday cakes</p>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </section>  
   
    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">                   
                    <div class="col-md-6 col-lg-6 footer-widget-resp">
                        <div class="footer-widget">
                            <h6 class="footer-title">Manzelah Group of Companies</h6>
                            <div class="footer-contact-info-wrap">

                                <ul class="footer-contact-info-list">
                                    <li>
                                        <i class="fa fa-map-marker-alt"></i>
                                        <span>Bugolobi Spring valley appartments</span>
                                    </li>

                                    <li>
                                        <i class="fa fa-phone"></i>
                                        <span>0701854289 | 0775664822</span>
                                    </li>

                                    <li>
                                        <i class="fa fa-envelope"></i>
                                        <span>mysticahope2013@gmail.com</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 footer-widget-resp">
                        <center>
                        <img src="/assets/images/cake1.jpg" alt="" width="30%">
                        </center>                   
                       
                    </div>
                </div>

                <hr style="background-color: #ffc107;">
                     
                            
                     <a href="https://manzelahcakes.com/"> <img src="/assets/images/world-wide-web.png" alt="" width="2%"> </a>
                     <a href="http://www.tiktok.com/@maselahfoodsandevents"><img src="/assets/images/tik-tok.png" alt="" width="2%"></a>
                     <a href="http://instagram.com/maselah_foods_and_events_"><img src="/assets/images/instagram.png" alt="" width="2%"></a> 
                     <a href="https://www.facebook.com/profile.php?id=100064034141979"><img src="/assets/images/facebook.png" alt="" width="2%"></a>  
                     
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <p class="copyright-text">© 2018 - <span id="fullYearCopyright"></span> {{env("APP_NAME")}}</p>

            </div>
        </div>
    </footer>
   
    <a href="#" data-scroll-goto="1" class="scroll-top-btn"><i class="fa fa-arrow-up"></i></a>

    <div class="preloader-wrap">
        <div class="preloader-inner">
            <div id="loader"></div>
        </div>
    </div>

    <script src="/front/js/jquery.js"></script>
    <script src="/front/js/plugins.js"></script>
    <script src="/front/js/main.js"></script>
</body>

</html>