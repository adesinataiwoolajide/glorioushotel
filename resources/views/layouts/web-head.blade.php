<?php 
    $web_name = "Glorious Empire Hotels";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Citytours - Premium site template for city tours agencies, transfers and tickets.">
    <meta name="author" content="Ansonika">
    <title>{{$web_name}}</title>
    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset('website/img/apple-touch-icon-72x72-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset('website/img/apple-touch-icon-114x114-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset('website/img/apple-touch-icon-144x144-precomposed.png')}}">
    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Lato:300,400|Montserrat:400,700" rel="stylesheet">
    <!-- COMMON CSS -->
	<link href="{{asset('website/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('website/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('website/css/vendors.css')}}" rel="stylesheet">
    <link href="{{asset('website/css/shop.css')}}" rel="stylesheet">
	
	<!-- ALTERNATIVE COLORS CSS -->
	<link href="#" id="colors" rel="stylesheet">
	
	<!-- CUSTOM CSS -->
	<link href="{{asset('website/css/custom.css')}}" rel="stylesheet">

	<!-- REVOLUTION SLIDER CSS -->
	<link href="{{asset('website/layerslider/css/layerslider.css')}}" rel="stylesheet">	

    <link href="../../maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('website/css/finaltilesgallery.css')}}" rel="stylesheet">
    <link href="{{asset('website/css/lightbox2.css')}}" rel="stylesheet">

</head>

<body>
	<div class="layer"></div>
	<!-- Mobile menu overlay mask -->

	<!-- Header================================================== -->
    <header id="colored">

        <div id="top_line">
            <div class="container">
                <div class="row">
                    <div class="col-6"><i class="icon-phone"></i><strong>08138139333, 09072281204</strong></div>
                    <div class="col-6">
                        <ul id="top_links">
                            <li><a href="{{route('admin.login')}}" id="access_link">Login</a></li>
                            <li><a href="{{route('guest.registration')}}" id="access_link">Register</a></li>
                            <li><a href="" id="wishlist_link">Wishlist</a></li>
                            <li><a href="{{ route('gallery')}}">Gallery</a></li>
                            <li><a href="{{ route('contactus')}}">Contact Us</a></li>
                            
                        </ul>
                    </div>
                </div><!-- End row -->
            </div><!-- End container-->
        </div><!-- End top line-->
        
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div id="logo_home">
                    	<h1><a href="{{route('index')}}" title="{{$web_name}}">{{$web_name}}</a></h1>
                    </div>
                </div>
                <nav class="col-9">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
                            <img src="{{asset('website/img/logo.jpg')}}" width="50" height="34" alt="{{$web_name}}" data-retina="true">
                        </div>
                        <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                        <ul>
                            <li><a href="{{route('index')}}">Home</a></li>
                            
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Rooms <i class="icon-down-open-mini"></i></a>
                                <ul>
                                    @foreach($room_type as $room_types)
                                        <li><a href="{{route('roomdetails', $room_types->id)}}">{{$room_types->type_name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="{{route('roomcategories')}}">Rooms</a></li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Bookings <i class="icon-down-open-mini"></i></a><ul>
                                    <li><a href="">Make Bookings</a></li>
                                    <li><a href="">Check Status</a></li>
                                    
                                </ul>
                            </li>
                            
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Facilities & Services <i class="icon-down-open-mini"></i></a>
                                <ul><?php
                                    $fac = array("Indoor", "Outdoor", "Indoor And Outdoor"); ?>
                                    @foreach($fac as $facs)
                                        <li><a href="">{{$facs}}</a></li>
                                    @endforeach
                                    <li><a href="{{ route('webfacilities')}}"> View All</a></li>
                                </ul>
                            </li>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Payment <i class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li><a href="">Make Payment</a></li>
                                    <li><a href="">Check Status</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('aboutus')}}">About Us</a></li>
                        </ul>
                    </div><!-- End main-menu -->
                    <ul id="top_tools">
                        <li>
                            <a href="javascript:void(0);" class="search-overlay-menu-btn"><i class="icon_search"></i></a>
                        </li>
                        <li>
                            <div class="dropdown dropdown-cart">
                                <a href="{{route('cart.index')}}" data-toggle="dropdown" class="cart_bt"><i class="icon_bag_alt"></i>
                                    <strong>
                                        @if (Cart::count() > 0)
                                            {{ Cart::count() }}
                                        @else
                                            <p>0</p>

                                        @endif
                                    </strong>
                                </a>
                                <ul class="dropdown-menu" id="cart_items">
                                    @foreach(Cart::content() as $item)
                                        <li>
                                            <div class="image"><img src="img/thumb_cart_1.jpg" alt="image"></div>
                                            <strong><a href="#">Louvre museum</a>1x $36.00 </strong>
                                            <a href="#" class="action"><i class="icon-trash"></i></a>
                                        </li>
                                    @endforeach
                                    <li>
                                        <div>Total: <span></span></div>
                                        <a href="cart.html" class="button_drop">Go to cart</a>
                                        <a href="payment.html" class="button_drop outline">Check out</a>
                                    </li>
                                </ul>
                            </div><!-- End dropdown-cart-->
                        </li>
                </nav>
            </div>
        </div><!-- container -->
    </header><!-- End Header -->

    <div class="">
           @yield('content')  
    </div>

    <footer class="revealed">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <h3>Need help?</h3>
                    <a href="tel://004542344599" id="phone">+234 81 38 139 333</a>
                    <a href="mailto:help@citytours.com" id="email_footer">help@gloriousempirehotels.com</a>
                    <p><img src="{{asset('website/img/payments.png')}}" width="231" height="30" alt="Image" data-retina="true" class="img-fluid"></p>
                </div>
                <div class="col-lg-2 col-md-3 ml-md-auto">
                    <h3>About</h3>
                    <ul>
                        <li><a href="{{route('aboutus')}}">About us</a>
                        </li>
                        <li><a href="#">FAQ</a>
                        </li>
                        <li><a href="{{route('contactus')}}">Contacts</a>
                        </li>
                        <li><a href="#">Login</a>
                        </li>
                        <li><a href="#">Register</a>
                        </li>
                        <li><a href="#">Terms and condition</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3" id="newsletter">
                    <h3>Newsletter</h3>
                    <p>Join our newsletter to keep be informed about offers and news.</p>
                    <div id="message-newsletter_2"></div>
                    <form method="post" action="http://www.ansonika.com/citytours/assets/newsletter.php" name="newsletter_2" id="newsletter_2">
                        <div class="form-group">
                            <input name="email_newsletter_2" id="email_newsletter_2" type="email" value="" placeholder="Your mail" class="form-control">
                        </div>
                        <input type="submit" value="Subscribe" class="btn_1" id="submit-newsletter_2">
                    </form>
                </div>
                <div class="col-lg-3 ml-lg-auto">
                    <h3>Socials</h3>
                    <div id="social_footer">
                        <ul>
                            <li><a href="#"><i class="icon-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="icon-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="icon-google"></i></a>
                            </li>
                            <li><a href="#"><i class="icon-instagram"></i></a>
                            </li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End row -->
            <div class="row">
                <div class="col-lg-12">
                    <div id="social_footer">
                        
                        <p>© {{$web_name}} <?php date("Y") ?> Powered By Glorious Empire Technologies</p>
                    </div>
                </div>
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </footer>
    <!-- End footer -->

    <div id="toTop"></div><!-- Back to top button -->
    
    <!-- Search Menu -->
    <div class="search-overlay-menu">
        <span class="search-overlay-close"><i class="icon_set_1_icon-77"></i></span>
        <form role="search" id="searchform" method="get">
            <input value="" name="q" type="search" placeholder="Search..." />
            <button type="submit"><i class="icon_set_1_icon-78"></i>
            </button>
        </form>
    </div><!-- End Search Menu -->
    
    <!-- Sign In Popup -->
    <div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
        <div class="small-dialog-header">
            <h3>Sign In</h3>
        </div>
        <form>
            <div class="sign-in-wrapper">
                <a href="#0" class="social_bt facebook">Login with Facebook</a>
                <a href="#0" class="social_bt google">Login with Google</a>
                <div class="divider"><span>Or</span></div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                    <i class="icon_mail_alt"></i>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" id="password" value="">
                    <i class="icon_lock_alt"></i>
                </div>
                <div class="clearfix add_bottom_15">
                    <div class="checkboxes float-left">
                        <input id="remember-me" type="checkbox" name="check">
                        <label for="remember-me">Remember Me</label>
                    </div>
                    <div class="float-right"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
                </div>
                <div class="text-center"><input type="submit" value="Log In" class="btn_login"></div>
                <div class="text-center">
                    Don’t have an account? <a href="javascript:void(0);">Sign up</a>
                </div>
                <div id="forgot_pw">
                    <div class="form-group">
                        <label>Please confirm login email below</label>
                        <input type="email" class="form-control" name="email_forgot" id="email_forgot">
                        <i class="icon_mail_alt"></i>
                    </div>
                    <p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
                    <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
                </div>
            </div>
        </form>
        <!--form -->
    </div>
    <!-- /Sign In Popup -->

    <!-- Common scripts -->
    <script src="{{asset('website/js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('website/common_scripts_min.js')}}"></script>
    <script src="{{asset('website/js/functions.js')}}"></script>

    <!-- Specific scripts -->
    <script src="{{asset('website/layerslider/js/greensock.js')}}"></script>
    <script src="{{asset('website/layerslider/js/layerslider.transitions.js')}}"></script>
    <script src="{{asset('website/layerslider/js/layerslider.kreaturamedia.jquery.js')}}"></script>
    <script src="{{asset('website/js/jquery.finaltilesgallery.js')}}"></script>
    <script src="{{asset('website/js/lightbox2.js')}}"></script>
    <script src="{{asset('website/js/switcher.js')}}"></script>
    <script>
        $(function () {
            'use strict';
            //we call Final Tiles Grid Gallery without parameters,
            //see reference for customisations: http://final-tiles-gallery.com/index.html#get-started
            $(".final-tiles-gallery").finalTilesGallery();
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            'use strict';
            $('#layerslider').layerSlider({
                autoStart: true,
                responsive: true,
                responsiveUnder: 1280,
                layersContainer: 1170,
                skinsPath: 'website/layerslider/skins/'
                    // Please make sure that you didn't forget to add a comma to the line endings
                    // except the last line!
            });
        });
    </script>

    <script src="{{asset('website/js/jquery.sliderPro.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function($) {
            $('#Img_carousel').sliderPro({
                width: 960,
                height: 500,
                fade: true,
                arrows: true,
                buttons: false,
                fullScreen: false,
                smallSize: 500,
                startSlide: 0,
                mediumSize: 1000,
                largeSize: 3000,
                thumbnailArrows: true,
                autoplay: false
            });
        });
    </script>
    <!-- Date and time pickers -->
    <script>
        $("#booking_hotel").validate();
        $('input.date-pick').datepicker();
    </script>
    <!-- Map -->

    <script src="{{asset('website/js/infobox.js')}}"></script>
    <!-- Carousel -->
    <script>
        $('.carousel-thumbs-2').owlCarousel({
            loop: false,
            margin: 5,
            responsiveClass: true,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4,
                    nav: false
                }
            }
        });
    </script>
    <!--Review modal validation -->
    <script src="{{asset('website/assets/validate.js')}}"></script>
    
</body>

</html>