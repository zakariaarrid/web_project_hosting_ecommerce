<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta description -->
    <meta name="description"
          content="Hostlar hosting template designed for all web hosting, business, multi purpose, domain sale websites, online business, personal blogs and similar sites and many more.">
    <meta name="author" content="ThemeTags">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content=""/> <!-- website name -->
    <meta property="og:site" content=""/> <!-- website link -->
    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content=""/> <!-- description shown in the actual shared post -->
    <meta property="og:image" content=""/> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content=""/> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article"/>

    <!--title-->
    <title>Hostlar Hosting Provider with WHMCS Template</title>

    <!--favicon icon-->
    <link rel="icon" href="img/favicon.png')}}" type="image/png" sizes="16x16">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans:400,600&display=swap"
          rel="stylesheet">


    <link href="{{ asset('css/libs_fr.css') }}" rel="stylesheet">
    <style>
        .error_password {
           border-color: #ed0e0e;
        }
    </style>


</head>
    <body>


    <!--loader start-->
    <div id="preloader">
        <div class="loader1">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!--loader end-->

    <!--header section start-->
    <header id="header" class="header-main position-absolute w-100">
        <!--main header menu start-->
        <div id="logoAndNav" class="main-header-menu-wrap bg-transparent">
            <div class="container">
                <nav class="js-mega-menu navbar navbar-expand-md header-nav">

                    <!--logo start-->
                    <a class="navbar-brand" href="index.html"><img src="{{url('img/logo-white.png')}}" width="120" alt="logo"
                                                                   class="img-fluid"/></a>
                    <!--logo end-->
                    <!--responsive toggle button start-->
                    <button type="button" class="navbar-toggler btn"
                            aria-expanded="false"
                            aria-controls="navBar"
                            data-toggle="collapse"
                            data-target="#navBar">
                                <span id="hamburgerTrigger">
                                  <span class="ti-menu"></span>
                                </span>
                    </button>
                    <!--responsive toggle button end-->

                    <!--main menu start-->
                    <div id="navBar" class="collapse navbar-collapse">
                        <ul class="navbar-nav ml-auto main-navbar-nav">
                            <!--home start-->
                            <li class="nav-item hs-has-mega-menu custom-nav-item" data-position="left">
                                <a id="homeMegaMenu" class="nav-link custom-nav-link main-link-toggle"
                                   href="javascript:void(0);" aria-haspopup="true" aria-expanded="false">Home</a>

                                <!--home mega menu start-->
                                <div class="hs-mega-menu w-100 main-sub-menu" aria-labelledby="homeMegaMenu">
                                    <div class="row no-gutters">
                                        <div class="col-lg-6">
                                            <!-- Banner Image -->
                                            <div class="menu-banner-wrap d-none d-md-none d-lg-block gradient-overlay"
                                                 style="background-image: url('img/hero-bg-4.jpg');">
                                                <div class="menu-banner-content">
                                                    <div class="mb-4 text-white">
                                                        <h5 class="text-white">Unbeatable WordPress Hosting</h5>
                                                        <ul class="list-unstyled tech-feature-list">
                                                            <li class="py-1"><span class="ti-control-forward mr-2"></span>Flexible, Easy to Use Control Panel</li>
                                                            <li class="py-1"><span class="ti-control-forward mr-2"></span><strong>Unmetered</strong> Bandwidth</li>
                                                            <li class="py-1"><span class="ti-control-forward mr-2"></span><strong>Unmetered</strong> Sub Domains, FTP Accounts</li>
                                                            <li class="py-1"><span class="ti-control-forward mr-2"></span><strong>99%</strong> Uptime Guarantee</li>
                                                            <li class="py-1"><span class="ti-control-forward mr-2"></span><strong>45-Day</strong> Money-Back Guarantee</li>
                                                        </ul>
                                                    </div>
                                                    <a class="btn solid-white-btn" href="#">Learn More <span
                                                            class="fas fa-angle-right ml-2"></span></a>
                                                </div>
                                            </div>
                                            <!-- End Banner Image -->
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="row mega-menu-wrap">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <span class="sub-menu-title">Home Demos</span>
                                                    <ul class="sub-menu-nav-group">
                                                        <li><a class="nav-link sub-menu-nav-link"
                                                               href="index.html">Home Default</a></li>
                                                        <li><a class="nav-link sub-menu-nav-link"
                                                               href="index-image.html">Home Image</a></li>
                                                        <li><a class="nav-link sub-menu-nav-link"
                                                               href="index-domain-search.html">Home Domain Search <span class="badge badge-danger ml-2">Hot</span></a></li>
                                                        <li><a class="nav-link sub-menu-nav-link"
                                                               href="index-domain-search-2.html">Home Domain Search Two</a>
                                                        </li>
                                                        <li><a class="nav-link sub-menu-nav-link"
                                                               href="index-bg-image.html">Home Background Image</a>
                                                        </li>
                                                        <li><a class="nav-link sub-menu-nav-link"
                                                               href="index-bg-video.html">Home Background Video</a></li>

                                                    </ul>
                                                </div>

                                                <div class="col-md-6">
                                                    <ul class="sub-menu-nav-group mb-3">
                                                        <li><a class="nav-link sub-menu-nav-link"
                                                               href="index-offer.html">Home Offer</a></li>
                                                        <li><a class="nav-link sub-menu-nav-link"
                                                               href="index-slider.html">Home Slider</a>
                                                        </li>
                                                        <li><a class="nav-link sub-menu-nav-link"
                                                               href="index-content-slider.html">Home Content Slider</a></li>
                                                        <li><a class="nav-link sub-menu-nav-link"
                                                               href="index-reseller-hosting.html">Reseller Demo <span class="badge badge-success ml-2">New</span></a></li>
                                                    </ul>

                                                    <span class="sub-menu-title">RTL Demo</span>
                                                    <ul class="sub-menu-nav-group mb-3">
                                                        <li><a class="nav-link sub-menu-nav-link"
                                                               href="http://hostlar.themetags.com/template-rtl/index-arabic.html">Home Default Arabic <span class="badge badge-danger ml-2">RTL</span></a></li>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--home mega menu end-->
                            </li>
                            <!--home end-->

                            <!--pages start-->
                            <li class="nav-item hs-has-sub-menu custom-nav-item">
                                <a id="pagesMegaMenu" class="nav-link custom-nav-link main-link-toggle"
                                   href="javascript:void(0);" aria-haspopup="true" aria-expanded="false"
                                   aria-labelledby="pagesSubMenu">Pages</a>

                                <!-- Pages - Submenu -->
                                <ul id="pagesSubMenu" class="hs-sub-menu main-sub-menu" aria-labelledby="pagesMegaMenu"
                                    style="min-width: 230px;">
                                    <li class="nav-item submenu-item">
                                        <a class="nav-link sub-menu-nav-link" href="about-us.html">About Us</a>
                                    </li>
                                    <li class="nav-item submenu-item">
                                        <a class="nav-link sub-menu-nav-link" href="services.html">Our Services</a>
                                    </li>
                                    <li class="nav-item submenu-item">
                                        <a class="nav-link sub-menu-nav-link" href="reviews.html">Client Reviews</a>
                                    </li>
                                    <li class="nav-item submenu-item">
                                        <a class="nav-link sub-menu-nav-link" href="domain-search-result.html">Search Result <span class="badge badge-success ml-2">New</span></a>
                                    </li>
                                    <li class="nav-item submenu-item">
                                        <a class="nav-link sub-menu-nav-link" href="image-gallery.html">Image Gallery <span class="badge badge-success ml-2">New</span></a>
                                    </li>

                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkPagesPricing"
                                           class="nav-link sub-menu-nav-link sub-link-toggle"
                                           href="javascript:void(0);" aria-haspopup="true" aria-expanded="false"
                                           aria-controls="navSubmenuPagesPricing">Pricing</a>

                                        <ul id="navSubmenuPagesPricing" class="hs-sub-menu main-sub-menu"
                                            aria-labelledby="navLinkPagesPricing" style="min-width: 230px;">
                                            <li><a class="nav-link sub-menu-nav-link"
                                                   href="pricing-default.html">Pricing Default</a></li>
                                            <li><a class="nav-link sub-menu-nav-link"
                                                   href="pricing-package.html">Pricing Packages</a></li>
                                            <li><a class="nav-link sub-menu-nav-link"
                                                   href="pricing-comparision.html">Pricing Comparision</a></li>
                                            <li><a class="nav-link sub-menu-nav-link"
                                                   href="vps-pricing.html">VPS Pricing</a></li>
                                            <li><a class="nav-link sub-menu-nav-link"
                                                   href="pricing-new.html">New Pricing <span class="badge badge-success ml-2">New</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkPagesBlog"
                                           class="nav-link sub-menu-nav-link sub-link-toggle"
                                           href="javascript:void(0);" aria-haspopup="true" aria-expanded="false"
                                           aria-controls="navSubmenuPagesBlog">Blog</a>

                                        <ul id="navSubmenuPagesBlog" class="hs-sub-menu main-sub-menu"
                                            aria-labelledby="navLinkPagesBlog" style="min-width: 230px;">
                                            <li><a class="nav-link sub-menu-nav-link"
                                                   href="blog-grid.html">Blog Grid</a></li>
                                            <li><a class="nav-link sub-menu-nav-link"
                                                   href="blog-sidebar.html">Blog With Sidebar</a></li>
                                            <li><a class="nav-link sub-menu-nav-link"
                                                   href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>

                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkPagesLogin"
                                           class="nav-link sub-menu-nav-link sub-link-toggle"
                                           href="javascript:void(0);" aria-haspopup="true" aria-expanded="false"
                                           aria-controls="navSubmenuPagesLogin">Login &amp; Signup</a>

                                        <ul id="navSubmenuPagesLogin" class="hs-sub-menu main-sub-menu"
                                            aria-labelledby="navLinkPagesLogin" style="min-width: 230px;">
                                            <li><a class="nav-link sub-menu-nav-link" href="login.html">Login</a>
                                            </li>
                                            <li><a class="nav-link sub-menu-nav-link" href="signup.html">Signup</a>
                                            </li>
                                            <li><a class="nav-link sub-menu-nav-link"
                                                   href="recover-account.html">Recover Account</a></li>
                                            <li class="dropdown-divider"></li>
                                            <li><a class="nav-link sub-menu-nav-link"
                                                   href="login-simple.html">Login Simple</a></li>
                                            <li><a class="nav-link sub-menu-nav-link"
                                                   href="signup-simple.html">Signup Simple</a></li>
                                            <li><a class="nav-link sub-menu-nav-link"
                                                   href="recover-account-simple.html">Recover Account Simple</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkPagesUtilities"
                                           class="nav-link sub-menu-nav-link sub-link-toggle"
                                           href="javascript:void(0);" aria-haspopup="true" aria-expanded="false"
                                           aria-controls="navSubmenuPagesUtilities">Utilities</a>

                                        <ul id="navSubmenuPagesUtilities" class="hs-sub-menu main-sub-menu"
                                            aria-labelledby="navLinkPagesUtilities" style="min-width: 230px;">
                                            <li><a class="nav-link sub-menu-nav-link" href="help.html">Help</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="faq.html">FAQ</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="status.html">Status</a></li>
                                            <li><a class="nav-link sub-menu-nav-link"
                                                   href="knowledge-base.html">Knowledge Base</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="terms-condition.html">Terms
                                                    &amp; Conditions</a></li>
                                            <li><a class="nav-link sub-menu-nav-link"
                                                   href="privacy-policy.html">Privacy &amp; Policy</a></li>
                                        </ul>
                                    </li>
                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkPagesSpecialty"
                                           class="nav-link sub-menu-nav-link sub-link-toggle"
                                           href="javascript:void(0);" aria-haspopup="true" aria-expanded="false"
                                           aria-controls="navSubmenuPagesSpecialty">Specialty</a>

                                        <ul id="navSubmenuPagesSpecialty" class="hs-sub-menu main-sub-menu"
                                            aria-labelledby="navLinkPagesSpecialty" style="min-width: 230px;">
                                            <li><a class="nav-link sub-menu-nav-link"
                                                   href="cover-page.html">Cover Page</a></li>
                                            <li><a class="nav-link sub-menu-nav-link"
                                                   href="coming-soon.html">Coming Soon</a></li>
                                            <li><a class="nav-link sub-menu-nav-link"
                                                   href="maintenance-mode.html">Maintenance Mode</a></li>
                                            <li><a class="nav-link sub-menu-nav-link"
                                                   href="404.html">Error 404</a></li>
                                        </ul>
                                    </li>
                                    <!-- Specialty -->
                                </ul>
                                <!-- End Pages - Submenu -->
                            </li>
                            <!--pages end-->


                            <!--hosting start-->
                            <li class="nav-item hs-has-mega-menu custom-nav-item"
                                data-max-width="720px"
                                data-position="right">
                                <a id="hostingMegaMenu" class="nav-link custom-nav-link main-link-toggle"
                                   href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">Hosting</a>

                                <!-- Demos - Mega Menu -->
                                <div class="hs-mega-menu w-100 main-sub-menu" aria-labelledby="hostingMegaMenu">
                                    <div class="row no-gutters">
                                        <div class="col-md-6">
                                            <!--menu title with subtitle and icon item start-->
                                            <div class="title-with-icon-item">
                                                <a class="title-with-icon-link" href="shared-hosting.html">
                                                    <div class="media align-items-center">
                                                        <img class="menu-titile-icon" src="{{url('img/shared-hosting.svg')}}"
                                                             alt="SVG">
                                                        <div class="media-body">
                                                            <span class="u-header__promo-title">Shared Hosting</span>
                                                            <small class="u-header__promo-text">Innovate reliable quality
                                                                Starting at <strong>$2.99</strong></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--menu title with subtitle and icon item end-->
                                            <!--menu title with subtitle and icon item start-->
                                            <div class="title-with-icon-item">
                                                <a class="title-with-icon-link" href="vps-hosting.html">
                                                    <div class="media align-items-center">
                                                        <img class="menu-titile-icon" src="{{url('img/vps-hosting.svg')}}"
                                                             alt="SVG">
                                                        <div class="media-body">
                                                                    <span class="u-header__promo-title">VPS Hosting <span
                                                                            class="badge badge-success ml-1">Popular</span></span>
                                                            <small class="u-header__promo-text">Pefficiently maintain
                                                                Starting at <strong>$11.99</strong></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--menu title with subtitle and icon item end-->
                                            <!--menu title with subtitle and icon item start-->
                                            <div class="title-with-icon-item">
                                                <a class="title-with-icon-link" href="dedicated-server-hosting.html">
                                                    <div class="media align-items-center">
                                                        <img class="menu-titile-icon" src="{{url('img/dadicate-web-hosting.svg')}}"
                                                             alt="SVG">
                                                        <div class="media-body">
                                                            <span class="u-header__promo-title">Dedicated Hosting</span>
                                                            <small class="u-header__promo-text">Quickly build Starting at
                                                                <strong>$150.99/mo</strong></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--menu title with subtitle and icon item end-->
                                            <!--menu title with subtitle and icon item start-->
                                            <div class="title-with-icon-item">
                                                <a class="title-with-icon-link" href="cloud-hosting.html">
                                                    <div class="media align-items-center">
                                                        <img class="menu-titile-icon" src="{{url('img/cloud-hosting.svg')}}"
                                                             alt="SVG">
                                                        <div class="media-body">
                                                                    <span class="u-header__promo-title">Cloud Hosting <span
                                                                            class="badge badge-danger ml-1">Hot</span></span>
                                                            <small class="u-header__promo-text">Conveniently cloud Starting
                                                                at <strong>$5.99/mo</strong></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--menu title with subtitle and icon item end-->
                                        </div>

                                        <div class="col-md-6">
                                            <!--menu title with subtitle and icon item start-->
                                            <div class="title-with-icon-item">
                                                <a class="title-with-icon-link" href="email-hosting.html">
                                                    <div class="media align-items-center">
                                                        <img class="menu-titile-icon" src="{{url('img/email-hosting.svg')}}"
                                                             alt="SVG">
                                                        <div class="media-body">
                                                            <span class="u-header__promo-title">Email Hosting</span>
                                                            <small class="u-header__promo-text">First Starting at <strong>$0.99/mo
                                                                    per mailbox</strong></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--menu title with subtitle and icon item end-->
                                            <!--menu title with subtitle and icon item start-->
                                            <div class="title-with-icon-item">
                                                <a class="title-with-icon-link" href="shared-wp-hosting.html">
                                                    <div class="media align-items-center">
                                                        <img class="menu-titile-icon" src="{{url('img/shared-wp-hosting.svg')}}"
                                                             alt="SVG">
                                                        <div class="media-body">
                                                            <span class="u-header__promo-title">Shared Wordpress Hosting</span>
                                                            <small class="u-header__promo-text">Conveniently Starting at
                                                                <strong>$9.99/mo</strong></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--menu title with subtitle and icon item end-->
                                            <!--menu title with subtitle and icon item start-->
                                            <div class="title-with-icon-item">
                                                <a class="title-with-icon-link" href="wp-hosting.html">
                                                    <div class="media align-items-center">
                                                        <img class="menu-titile-icon" src="{{url('img/wordpress-hosting.svg')}}"
                                                             alt="SVG">
                                                        <div class="media-body">
                                                            <span class="u-header__promo-title">Wordpress Hosting</span>
                                                            <small class="u-header__promo-text">Conveniently Starting at
                                                                <strong>$9.99/mo</strong></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--menu title with subtitle and icon item end-->
                                            <!--menu title with subtitle and icon item start-->
                                            <div class="title-with-icon-item">
                                                <a class="title-with-icon-link" href="woocommerce-hosting.html">
                                                    <div class="media align-items-center">
                                                        <img class="menu-titile-icon" src="{{url('img/woocommerce-hosting.svg')}}"
                                                             alt="SVG">
                                                        <div class="media-body">
                                                                    <span class="u-header__promo-title">WooCommerce Hosting <span
                                                                            class="badge badge-primary ml-1">New</span></span>
                                                            <small class="u-header__promo-text">Globally Starting at
                                                                <strong>$9.99/mo</strong></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--menu title with subtitle and icon item end-->
                                        </div>

                                    </div>
                                </div>
                                <!-- End Demos - Mega Menu -->
                            </li>
                            <!--hosting end-->

                            <!--elements start-->
                            <li class="nav-item hs-has-mega-menu custom-nav-item"
                                data-max-width="600px"
                                data-position="right">
                                <a id="elementsMegaMenu" class="nav-link custom-nav-link main-link-toggle"
                                   href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">Elements</a>
                                <!--services mega menu start-->
                                <div class="hs-mega-menu main-sub-menu u-header__mega-menu-position-right-fix--md"
                                     aria-labelledby="elementsMegaMenu">
                                    <div class="mega-menu-wrap">
                                        <span class="sub-menu-title">Individual Elements and Blocks</span>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <ul class="sub-menu-nav-group">
                                                    <li><a class="nav-link sub-menu-nav-link"
                                                           href="accordions.html">Accordions</a></li>
                                                    <li><a class="nav-link sub-menu-nav-link"
                                                           href="breadcrumbs.html">Breadcrumbs</a></li>
                                                    <li><a class="nav-link sub-menu-nav-link"
                                                           href="buttons.html">Buttons</a></li>
                                                    <li><a class="nav-link sub-menu-nav-link"
                                                           href="clients.html">Clients</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-4">
                                                <ul class="sub-menu-nav-group">
                                                    <li><a class="nav-link sub-menu-nav-link"
                                                           href="carousel.html">Carousel</a></li>
                                                    <li><a class="nav-link sub-menu-nav-link"
                                                           href="call-to-action.html">Call to Action</a></li>
                                                    <li><a class="nav-link sub-menu-nav-link"
                                                           href="testimonials.html">Testimonials</a></li>
                                                    <li><a class="nav-link sub-menu-nav-link"
                                                           href="typography.html">Typography</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-4">
                                                <ul class="sub-menu-nav-group">
                                                    <li><a class="nav-link sub-menu-nav-link"
                                                           href="team.html">Team</a>
                                                    </li>
                                                    <li><a class="nav-link sub-menu-nav-link"
                                                           href="tabs.html">Tab</a></li>
                                                    <li><a class="nav-link sub-menu-nav-link"
                                                           href="videos.html">Videos</a></li>
                                                    <li><a class="nav-link sub-menu-nav-link"
                                                           href="forms.html">Form</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Mega Menu Banner -->
                                    <div class="u-header__product-banner gradient-overlay"
                                         style="background: url('img/hero-bg-4.jpg')no-repeat center center / cover">
                                        <div class="u-header__product-banner-content position-relative z-index text-center text-white">
                                            <div class="mb-4">
                                                <h5 class="text-white">Get 25% Discount Start Now</h5>
                                                <div class="clock menu-countdown my-4"></div>
                                            </div>
                                            <a class="btn solid-white-btn"
                                               href="#">Get Started<span class="ti-arrow-right pl-2"></span></a>
                                        </div>
                                    </div>
                                    <!-- End Mega Menu Banner -->
                                </div>
                                <!--services mega menu end-->
                            </li>
                            <!--elements end-->

                            <!--support start-->
                            <li class="nav-item hs-has-mega-menu custom-nav-item"
                                data-max-width="360px"
                                data-position="right">
                                <a id="supportMegaMenu" class="nav-link custom-nav-link main-link-toggle"
                                   href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">Support</a>
                                <!--support submenu start-->
                                <div class="hs-mega-menu main-sub-menu" aria-labelledby="supportMegaMenu"
                                     style="min-width: 330px;">

                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="submit-request.html">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="{{url('img/chat.svg')}}"
                                                     alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Submit a Request </span>
                                                    <small class="u-header__promo-text">Support team quickly response
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->

                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="support.html">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="{{url('img/support.svg')}}"
                                                     alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">24/7/365 Support</span>
                                                    <small class="u-header__promo-text">Support and statement</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->
                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="network.html">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="{{url('img/data-services.svg')}}"
                                                     alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Our Datacenter</span>
                                                    <small class="u-header__promo-text">24 Data center globally</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->
                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="status.html">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="{{url('img/time.svg')}}"
                                                     alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Uptime Commitment</span>
                                                    <small class="u-header__promo-text">Monitoring and secure</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->

                                    <!--submenu footer start-->
                                    <div class="u-header__promo-footer">
                                        <!-- List -->
                                        <div class="row no-gutters">
                                            <div class="col-6">
                                                <div class="u-header__promo-footer-item">
                                                    <small class="text-muted d-block">Check what's new</small>
                                                    <a class="small"
                                                       href="#">
                                                        Changelog
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-6 u-header__promo-footer-ver-divider">
                                                <div class="u-header__promo-footer-item">
                                                    <small class="text-muted d-block">Have a question?</small>
                                                    <a class="small" href="contact-us.html">
                                                        Contact us
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End List -->
                                    </div>
                                    <!--submenu footer end-->
                                </div>
                                <!--support submenu end-->
                            </li>
                            <!--support end-->

                            <!--about start-->
                            <li class="nav-item hs-has-mega-menu custom-nav-item"
                                data-max-width="250px"
                                data-position="right">
                                <a id="aboutMegaMenu" class="nav-link custom-nav-link main-link-toggle"
                                   href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">About</a>

                                <!--about submenu start-->
                                <div class="hs-mega-menu main-sub-menu" aria-labelledby="aboutMegaMenu"
                                     style="min-width: 330px;">

                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="contact-us.html">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="{{url('img/chat-mobile.svg')}}" alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Contact Us</span>
                                                    <small class="u-header__promo-text">Face any problem contact with us
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->

                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="about-us.html">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="{{url('img/community.svg')}}" alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">About Us</span>
                                                    <small class="u-header__promo-text">We are leading hosting company
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->

                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="reviews.html">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="{{url('img/user-behaver.svg')}}" alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Client Testimonial</span>
                                                    <small class="u-header__promo-text">More than 100k lovly customer
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->

                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="partners.html">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="{{url('img/partner.svg')}}" alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Our Partner</span>
                                                    <small class="u-header__promo-text">We have trusted partners globally
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->

                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="network.html">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="{{url('img/network.svg')}}" alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Network</span>
                                                    <small class="u-header__promo-text">Keep your data save and secure
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->

                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="blog-grid.html">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="{{url('img/blog.svg')}}" alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Company Blog</span>
                                                    <small class="u-header__promo-text">Industry latest technology news &
                                                        tips
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->

                                    <!--submenu footer start-->
                                    <div class="u-header__promo-footer pb-0">
                                        <!-- List -->
                                        <div class="row no-gutters align-bottom">
                                            <div class="col-9">
                                                <div class="u-header__promo-footer-item">
                                                    <span class="u-header__promo-title">CEO Video Message</span>
                                                    <p class="small d-inline-flex">Credibly synergize unique... <a
                                                            href="https://www.youtube.com/watch?v=9No-FiEInLA"
                                                            class="popup-youtube video-play-icon"><span
                                                                class="ti-control-play"></span> </a></p>

                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="d-flex align-bottom">
                                                    <img src="{{url('img/ceo.png')}}" width="300" alt="ceo" class="img-fluid"/>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End List -->
                                    </div>
                                    <!--submenu footer end-->
                                </div>
                                <!--about submenu end-->
                            </li>
                            <!--about end-->

                            <!--button start-->
                            <li class="nav-item header-nav-last-item d-flex align-items-center">
                                <a class="btn primary-solid-btn animated-btn" href="#" target="_blank">
                                    Get Started
                                </a>
                            </li>
                            <!--button end-->
                        </ul>
                    </div>
                    <!--main menu end-->
                </nav>
            </div>
        </div>
        <!--main header menu end-->
    </header>
    <!--header section end-->

    <!--body content wrap start-->
    <div class="main main-without-topbar">
        <section class="gradient-overlay ptb-100 height-lg-100vh d-flex align-items-center" style="background: url('img/hero-bg-4.jpg')no-repeat center center / cover">
            <div class="container">
                <div class="row justify-content-center pt-5 pt-sm-5 pt-md-5 pt-lg-0">
                    <div class="col-md-6 col-lg-5">
                        <div class="card login-signup-card shadow-lg mb-0">
                                @foreach(['danger','warning','success','info'] as $msg )
                                    @if(Session::has('alert-'.$msg))
                                        <p class="alert alert-{{$msg}}" style="width: 90%;margin: 0 auto;margin-top: 27px;font-size: 9pt;">{{ Session::get('alert-'.$msg) }}
                                            <!--<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>-->
                                        </p>
                                    @endif
                                @endforeach

                            <div class="card-body px-md-5 py-5">
                                <div class="mb-5">
                                    <h5 class="h3">Login</h5>
                                    <p class="text-muted mb-0">Sign in to your account to continue.</p>
                                </div>

                                <!--login form-->
                                <form class="login-signup-form" method="POST" action="{{ route('register') }}" id="app" @submit="checkForm()">
                                    @csrf
                                    <div class="form-group">
                                        <label class="pb-1">Name</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-icon">
                                                <span class="ti-user color-primary"></span>
                                            </div>
                                            <input id="name" type="text" placeholder="Entrer votre nom" name="name" class="form-control @error('name') is-invalid @enderror" v-model="name" required autocomplete="name" autofocus @input="form_comfirm">

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="pb-1">Email</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-icon">
                                                <span class="ti-email color-primary"></span>
                                            </div>
                                            <input id="email" type="email" name="email" placeholder="Entrer votre email" class="form-control @error('email') is-invalid @enderror" v-model="email" value="{{ old('email') }}" required autocomplete="email" @input="form_comfirm">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>
                                    </div>
                                    <!-- Password -->
                                    <div class="form-group">
                                        <label class="pb-1">Password</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-icon">
                                                <span class="ti-lock color-primary"></span>
                                            </div>
                                            <input id="password" type="password" name="password" placeholder="Entrer votre mots de passe" class="form-control @error('password') is-invalid @enderror" v-model.trim="password" required autocomplete="new-password" @input="form_comfirm">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>
                                    </div>
                                    <!--confirm your Password -->
                                    <div class="form-group">
                                        <label class="pb-1">Confirmer votre mots de passe</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-icon">
                                                <span class="ti-lock color-primary"></span>
                                            </div>
                                            <input id="password-confirm" type="password" class="form-control" @input="form_comfirm" :class="{error_password : is_psw_true}" placeholder="confirmer votre mots de passe" v-model.trim="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
                                    <!-- Submit -->
                                    <button class="btn btn-block primary-solid-btn border-radius mt-4 mb-3" :disabled="if_disabled">
                                        Sign in
                                    </button>

                                </form>
                            </div>
                            <div class="card-footer bg-transparent px-md-5"><small>Not registered?</small>
                                <a href="signup.html" class="small"> Create account</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--body content wrap end-->

        <!--footer section start-->
        <footer class="bg-transparent position-relative d-none d-md-block d-lg-block">

            <!--footer copyright start-->
            <div class="footer-bottom bottom-sticky-footer py-3">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-md-5 col-lg-5">
                            <p class="copyright-text pb-0 mb-0 text-white">Copyrights © 2020. All
                                rights reserved by
                                <a href="https://themeforest.net/user/themetags" target="_blank">ThemeTags</a></p>
                        </div>
                        <div class="col-md-7 col-lg-6">
                            <div class="social-nav text-right">
                                <ul class="list-unstyled social-list mb-0">
                                    <li class="list-inline-item tooltip-hover">
                                        <a href="#" class="rounded"><span
                                                class="ti-facebook"></span></a>
                                        <div class="tooltip-item">Facebook</div>
                                    </li>
                                    <li class="list-inline-item tooltip-hover"><a href="#" class="rounded"><span
                                                class="ti-twitter"></span></a>
                                        <div class="tooltip-item">Twitter</div>
                                    </li>
                                    <li class="list-inline-item tooltip-hover"><a href="#" class="rounded"><span
                                                class="ti-linkedin"></span></a>
                                        <div class="tooltip-item">Linkedin</div>
                                    </li>
                                    <li class="list-inline-item tooltip-hover"><a href="#" class="rounded"><span
                                                class="ti-dribbble"></span></a>
                                        <div class="tooltip-item">Dribbble</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer copyright end-->
        </footer>
    <script src="{{ asset('js/libs_fr.js') }}" defer></script>
   </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

<script>
     new Vue({
         el:'#app',
         data: {
             name:'',
             email:'',
             password:'',
             password_confirmation:'',
             is_psw_true:'',
             if_disabled:true

         },
         methods:{
            form_comfirm() {
                    if(this.password_confirmation !== this.password){
                      this.is_psw_true=true;
                    }else {
                        //this.if_disabled=false
                        this.is_psw_true = false;
                    }
                    if(this.password_confirmation == this.password && this.email !='' && this.name!='' && this.password_confirmation!='' && this.password!='' ){
                        this.if_disabled=false
                    }
                    else if(this.password_confirmation != this.password || this.email =='' || this.name=='' || this.password_confirmation =='' || this.password =='' ){
                        this.if_disabled=true
                    }
            }
            },
            checkForm(){
                if(!is_psw_true || this.name==='' || this.email===''  ) {
                    return false
                }
                else {
                    return true
                }
         }


     })
</script>




</body>
</html>
