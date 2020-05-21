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
    <link rel="icon" href="img/favicon.png" type="image/png" sizes="16x16">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans:400,600&display=swap"
          rel="stylesheet">

    <link href="{{ asset('css/libs_fr.css') }}" rel="stylesheet">
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
<header id="header" class="header-main headroom">
    <!--topbar start-->
    <div id="header-top-bar" class="gray-light-bg py-1">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-7 col-lg-7">
                    <div class="topbar-text d-none d-md-block d-lg-block">
                        <ul class="list-inline">
                            <li class="list-inline-item"><span class="ti-headphone-alt mr-2"></span> 24x7 Technical
                                Support
                            </li>
                            <li class="list-inline-item"><a href="tell:(888)1234567"><span
                                        class="ti-mobile mr-2"></span> (888)1234567</a></li>
                            <li class="list-inline-item"><a href="#"><span class="ti-comments mr-2"></span> Live
                                    Chat</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="topbar-text">
                        <ul class="list-inline text-right">
                            <li class="list-inline-item"><a href="{{route('loginfr')}}"><span class="ti-user mr-2"></span> Login</a></li>
                            <li class="list-inline-item"><a href="{{route('registerfr')}}"><span class="ti-lock mr-2"></span> Register</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--topbar end-->

    <!--main header menu start-->
    <div id="logoAndNav" class="main-header-menu-wrap white-bg border-bottom">
        <div class="container">
            <nav class="js-mega-menu navbar navbar-expand-md header-nav">

                <!--logo start-->
                <a class="navbar-brand" href="index.html"><img src="img/logo-color.png" width="120" alt="logo"
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
                                                    <img class="menu-titile-icon" src="img/shared-hosting.svg"
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
                                                    <img class="menu-titile-icon" src="img/vps-hosting.svg"
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
                                                    <img class="menu-titile-icon" src="img/dadicate-web-hosting.svg"
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
                                                    <img class="menu-titile-icon" src="img/cloud-hosting.svg"
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
                                                    <img class="menu-titile-icon" src="img/email-hosting.svg"
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
                                                    <img class="menu-titile-icon" src="img/shared-wp-hosting.svg"
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
                                                    <img class="menu-titile-icon" src="img/wordpress-hosting.svg"
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
                                                    <img class="menu-titile-icon" src="img/woocommerce-hosting.svg"
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
                                            <img class="menu-titile-icon" src="img/chat.svg"
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
                                            <img class="menu-titile-icon" src="img/support.svg"
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
                                            <img class="menu-titile-icon" src="img/data-services.svg"
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
                                            <img class="menu-titile-icon" src="img/time.svg"
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
                                            <img class="menu-titile-icon" src="img/chat-mobile.svg" alt="SVG">
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
                                            <img class="menu-titile-icon" src="img/community.svg" alt="SVG">
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
                                            <img class="menu-titile-icon" src="img/user-behaver.svg" alt="SVG">
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
                                            <img class="menu-titile-icon" src="img/partner.svg" alt="SVG">
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
                                            <img class="menu-titile-icon" src="img/network.svg" alt="SVG">
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
                                            <img class="menu-titile-icon" src="img/blog.svg" alt="SVG">
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
                                                <img src="img/ceo.png" width="300" alt="ceo" class="img-fluid"/>
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
<div class="main main-with-padding">

    <!--hero section start-->
    <section class="hero-equal-height ptb-100 gradient-bg"  style="background: url('img/hero-bg-2.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-12">
                    <div class="hero-content-wrap text-white">
                        <h1 class="text-white">HostLar Best Hosting Provider in World</h1>
                        <p class="lead">If your WordPress website is your personal business, we
                            want you to succeed. We made our Hostlar hosting platform.</p>
                        <form action="domain-search-result.php" class="domain-search-form mt-3">
                            <div class="input-group">
                                <input type="text" name="domain" id="domain" class="form-control" placeholder="example.com" />
                                <div class="input-group-append">
                                    <button class="btn search-btn btn-hover d-flex align-items-center" type="submit">
                                        <span class="ti-search mr-2"></span> Search
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="domain-list-wrap mt-4">
                            <ul class="list-inline domain-search-list text-white">
                                <li class="list-inline-item"><a href="#"><img src="img/com-w.png" alt="com" width="70" class="img-fluid"/> <span>$8.99</span></a></li>
                                <li class="list-inline-item"><a href="#"><img src="img/net-w.png" alt="com" width="70" class="img-fluid"/> <span>$4.99</span></a></li>
                                <li class="list-inline-item"><a href="#"><img src="img/org-w.png" alt="com" width="70" class="img-fluid"/> <span>$2.99</span></a></li>
                                <li class="list-inline-item"><a href="#"><img src="img/store-w.png" alt="com" width="70" class="img-fluid"/> <span>$0.99</span></a></li>
                                <li class="list-inline-item"><a href="#"><img src="img/online-w.png" alt="com" width="70" class="img-fluid"/> <span>$0.99</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-12">
                    <div class="animation-image-wrap">
                        <img src="img/servers.svg" alt="wp hosting" class="img-fluid"/>
                        <img src="img/animated-icon-1.png" alt="wp hosting" class="animation-icon-img animation-icon-1"/>
                        <img src="img/animated-icon-2.png" alt="wp hosting" class="animation-icon-img animation-icon-2"/>
                        <img src="img/animated-icon-3.png" alt="wp hosting" class="animation-icon-img animation-icon-3"/>
                        <img src="img/animated-icon-4.png" alt="wp hosting" class="animation-icon-img animation-icon-4"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->

    <!--promo section start-->
    <section class="promo-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-md-0 mb-lg-5">
                        <h2>HostLar Helps You Succeed</h2>
                        <p class="lead">Grow your website faster by using hostlar as your foundation. Dynamically
                            streamline principle-centered technologies.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <a href="#">
                        <div class="single-promo-2 single-promo-hover rounded text-center white-bg p-5 h-100">
                            <div class="circle-icon">
                                <span class="ti-music-alt text-white"></span>
                            </div>
                            <h5>Super Easy to Use</h5>
                            <p>Increase sales by showing true dynamics of your website.</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-4">
                    <a href="#">
                        <div class="single-promo-2 single-promo-hover rounded text-center white-bg p-5 h-100">
                            <div class="circle-icon">
                                <span class="ti-dashboard text-white"></span>
                            </div>
                            <h5>Fast & Reliable</h5>
                            <p>Build your online store’s trust using Social Proof &amp; Urgency.</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-4">
                    <a href="#">
                        <div class="single-promo-2 single-promo-hover rounded text-center white-bg p-5 h-100">
                            <div class="circle-icon">
                                <span class="ti-headphone-alt text-white"></span>
                            </div>
                            <h5>24/7 Expert Support</h5>
                            <p>Realize importance of social proof in customer’s purchase decision.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--promo section end-->

    <!--services section start-->
    <section class="our-services ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-5 mb-sm-5 mb-md-3 mb-lg-3">
                        <h2>We Have a Hosting Solution For You</h2>
                        <p class="lead">Synergistically architect plug-and-play vortals without next-generation
                            manufactured products. Assertively develop synergistic networks.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                        <img src="img/icon-shared-hosting.svg" alt="shared hosting" class="img-fluid mb-3" width="60"/>
                        <div class="service-plane-content">
                            <h3 class="h5">Shared Hosting</h3>
                            <p>Our most popular product! Shared Web Hosting gives you a free domain name, fast SSD
                                storage hosting.</p>
                        </div>
                        <div class="action-wrap mt-3">
                            <p>Starting at: <strong>$2.59/mo</strong></p>
                            <a href="#" class="btn outline-btn">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                        <img src="img/icon-wordpress-hosting.svg" alt="shared hosting" class="img-fluid mb-3"
                             width="60"/>
                        <div class="service-plane-content">
                            <h3 class="h5">WordPress Hosting</h3>
                            <p>Get up and running fast with WordPress. Optimized for performance for easy
                                maintenance.</p>
                        </div>
                        <div class="action-wrap mt-3">
                            <p>Starting at: <strong>$2.59/mo</strong></p>
                            <a href="#" class="btn outline-btn">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                        <img src="img/icon-vps-hosting.svg" alt="shared hosting" class="img-fluid mb-3" width="60"/>
                        <div class="service-plane-content">
                            <h3 class="h5">VPS Hosting</h3>
                            <p>Virtual Private Servers with ultra-fast SSDs and flexibility with HTTP/2, Ubuntu, IPv6,
                                Nginx and more.</p>
                        </div>
                        <div class="action-wrap mt-3">
                            <p>Starting at: <strong>$12.00/mo</strong></p>
                            <a href="#" class="btn outline-btn">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                        <img src="img/icon-website-builder.svg" alt="shared hosting" class="img-fluid mb-3" width="60"/>
                        <div class="service-plane-content">
                            <h3 class="h5">WP Website Builder</h3>
                            <p>No code required! Build your site confidently with design tools that simplify WordPress
                                website build.</p>
                        </div>
                        <div class="action-wrap mt-3">
                            <p>Starting at: <strong>$2.59/mo</strong></p>
                            <a href="#" class="btn outline-btn">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                        <img src="img/icon-dadicate-hosting.svg" alt="shared hosting" class="img-fluid mb-3"
                             width="60"/>
                        <div class="service-plane-content">
                            <h3 class="h5">Dedicated Hosting</h3>
                            <p>Fast web servers to run your applications with root access and a 100% Uptime Guarantee
                                our hosting.</p>
                        </div>
                        <div class="action-wrap mt-3">
                            <p>Starting at: <strong>$145.59/mo</strong></p>
                            <a href="#" class="btn outline-btn">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                        <img src="img/icon-cloud-hosting.svg" alt="shared hosting" class="img-fluid mb-3" width="60"/>
                        <div class="service-plane-content">
                            <h3 class="h5">Cloud Hosting</h3>
                            <p>Lightning-fast servers with root access, SSD storage and blazing-fast networking powered
                                by open API.</p>
                        </div>
                        <div class="action-wrap mt-3">
                            <p>Starting at: <strong>$0.0059/mo</strong></p>
                            <a href="#" class="btn outline-btn">View Details</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--services section end-->

    <!--call to action section start-->
    <section class="call-to-action ptb-100 gradient-overlay" style="background: url('img/hero-bg-4.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9">
                    <div class="call-to-action-content text-white text-center">
                        <h2 class="text-white">Need Some Help?</h2>
                        <p class="lead mb-0">Whether you’re stuck or just want some tips on where to start, hit up our
                            experts anytime.</p>
                        <p>Sales Chat: <strong> MON-FRI 8AM-4PM PT</strong> | Customer Support Chat: Every Day <strong>
                                5:30AM–9:30PM PT</strong></p>
                        <div class="action-btns">
                            <a href="#" class="btn solid-white-btn mr-3">Chat With Us</a>
                            <a href="#" class="btn outline-white-btn">Send us an Email</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--call to action section end-->

    <!--pricing with switch section start-->
    <section class="pricing-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Managed Our Hosting Price</h2>
                        <p class="lead">
                            Professional hosting at an affordable price. Distinctively recaptiualize principle-centered
                            core competencies through client-centered
                            core competencies.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div class="switch-wrap text-center mb-5">
                        <label class="form-switch">
                            <span class="beforeinput text-success">
                                Monthly
                            </span>
                            <input type="checkbox" id="js-contcheckbox">
                            <span class="switch-icon gray-light-bg"></span>
                            <span class="afterinput">
                                Yearly <span class="badge color-5 color-5-bg text-capitalize">Save up to 25%</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card text-center single-pricing-pack">
                        <div class="pt-5">
                            <h5 class="mb-0">Cloud Starter</h5>
                            <p>Medium traffic personal sites</p>
                        </div>
                        <div class="card-header py-4 border-0 pricing-header">
                            <div class="price text-center mb-0 monthly-price">$19<span>/month</span></div>
                            <div class="price text-center mb-0 yearly-price">$69<span>/yearly</span></div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4 pricing-feature-list">
                                <li><span>10</span> Hosted Domains</li>
                                <li><span>25 GB</span> RAID 10 Storage</li>
                                <li><span>200 GB</span> Bandwidth</li>
                                <li><span>1 Free</span> Domain included</li>
                                <li><span>Super Fast</span> SSD Storage</li>
                                <li><span>Free</span> SSL Certificate</li>
                                <li>99.95% Uptime</li>
                                <li>24/7 Phone Support</li>
                            </ul>
                            <a href="#" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card popular-price text-center single-pricing-pack">
                        <div class="pt-5">
                            <h5 class="mb-0">Cloud Business <span class="badge color-1 color-1-bg">Popular</span></h5>
                            <p>High traffic corporate sites</p>
                        </div>
                        <div class="card-header py-4 border-0 pricing-header">
                            <div class="price text-center mb-0 monthly-price">$49<span>/month</span></div>
                            <div class="price text-center mb-0 yearly-price">$159<span>/yearly</span></div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4 pricing-feature-list">
                                <li><span>30</span> Hosted Domains</li>
                                <li><span>75 GB</span> RAID 10 Storage</li>
                                <li><span>700 GB</span> Bandwidth</li>
                                <li><span>3 Free</span> Domain included</li>
                                <li><span>Super Fast</span> SSD Storage</li>
                                <li><span>Free</span> SSL Certificate</li>
                                <li>99.95% Uptime</li>
                                <li>24/7 Phone Support</li>
                            </ul>
                            <a href="#" class="btn primary-solid-btn mb-3" target="_blank">Purchase now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card text-center single-pricing-pack">
                        <div class="pt-5">
                            <h5 class="mb-0">Cloud Enterprise</h5>
                            <p>Enterprise content management</p>
                        </div>
                        <div class="card-header py-4 border-0 pricing-header">
                            <div class="price text-center mb-0 monthly-price">$69<span>/month</span></div>
                            <div class="price text-center mb-0 yearly-price">$259<span>/yearly</span></div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4 pricing-feature-list">
                                <li><span>60</span> Hosted Domains</li>
                                <li><span>175 GB</span> RAID 10 Storage</li>
                                <li><span>1500 GB</span> Bandwidth</li>
                                <li><span>6 Free</span> Domain included</li>
                                <li><span>Super Fast</span> SSD Storage</li>
                                <li><span>Free</span> SSL Certificate</li>
                                <li>99.95% Uptime</li>
                                <li>24/7 Phone Support</li>
                            </ul>
                            <a href="#" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="support-cta mt-5">
                        <h5 class="mb-1 d-flex align-items-center justify-content-center"><span class="ti-loop color-primary mr-3 icon-sm"></span>Choose Your <a href="pricing-comparision.html" class="ml-2">Compare Hosting Plans</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--pricing with switch section end-->

    <!--feature section start-->
    <section class="feature-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Hosting Features For Your Big Ideas</h2>
                        <p class="lead">These features come standard in all of our hosting plans. Dynamically extend
                            imperatives through open-source quickly niche markets.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="features-box p-4">
                        <div class="features-box-icon">
                            <span class="ti-panel icon-md color-primary"></span>
                        </div>
                        <div class="features-box-content">
                            <h5>Custom Control Panel</h5>
                            <p>Our intuitive control panel gives you admin access to all of your DreamHost products.
                                Easily update domain information, add users, adjust email settings gain access.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="features-box p-4">
                        <div class="features-box-icon">
                            <span class="ti-thumb-up icon-md color-primary"></span>
                        </div>
                        <div class="features-box-content">
                            <h5>Real-Life Human Beings</h5>
                            <p>Tech veterans, geeks, and nerds are all standing by to optimize your experience. Whether
                                you get in touch with our support, read our knowledge base, or start a thread.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="features-box p-4">
                        <div class="features-box-icon">
                            <span class="ti-mouse-alt icon-md color-primary"></span>
                        </div>
                        <div class="features-box-content">
                            <h5>1-Click Installer</h5>
                            <p>No need to dig into a bunch of documentation. Simply install web apps like WordPress,
                                Joomla! and more. Monotonectally administrate economically sound opportunities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="features-box p-4">
                        <div class="features-box-icon">
                            <span class="ti-timer icon-md color-primary"></span>
                        </div>
                        <div class="features-box-content">
                            <h5>100% Uptime Guarantee</h5>
                            <p>With multiple datacenter locations, redundant cooling, emergency generators, and constant
                                monitoring, we are able to offer our 100% Uptime Guarantee.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="features-box p-4">
                        <div class="features-box-icon">
                            <span class="ti-harddrives icon-md color-primary"></span>
                        </div>
                        <div class="features-box-content">
                            <h5>Solid State Drives (SSD)</h5>
                            <p>With SSDs, your website, caching, and database queries are faster by our calculations.
                                Quickly orchestrate worldwide niche markets vis-a-vis end-to-end infomediaries. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="features-box p-4">
                        <div class="features-box-icon">
                            <span class="ti-cup icon-md color-primary"></span>
                        </div>
                        <div class="features-box-content">
                            <h5>Award-Winning Support</h5>
                            <p>No question is too simple, or too complex for our team of experts. Synergistically
                                synergize Our in-house support staff and service team are here for you 24/7, 365.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--feature section end-->

    <!--call to action section start-->
    <section class="call-to-action ptb-100 gradient-overlay"
             style="background: url('img/hero-bg-4.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-12 col-lg-8">
                    <div class="call-to-action-content text-white">
                        <h2 class="text-white">Need Some Help?</h2>
                        <p>Whether you’re stuck or just want some tips on where to start, hit up our experts anytime.
                            <br> Sales Chat: <strong> MON-FRI 8AM-4PM PT</strong> | Customer Support Chat: Every Day
                            <strong> 5:30AM–9:30PM PT</strong></p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="action-btns mt-md-4 text-md-right text-lg-right text-sm-left">
                        <a href="#" class="btn solid-white-btn mr-3">Chat With Us</a>
                        <a href="#" class="btn outline-white-btn">Send us an Email</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--call to action section end-->


    <!--faq section start-->
    <div id="faq" class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading mb-5">
                        <h2>Frequently Asked Queries</h2>
                        <p>Efficiently productivate reliable paradigms before ubiquitous models. Continually utilize
                            frictionless expertise whereas tactical relationships. Still have questions? <a
                                href="#contact" class="page-scroll">Contact us</a></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div id="accordion-one" class="accordion accordion-faq">
                        <div class="card mb-0">
                            <a class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
                                <h6 class="mb-0 d-inline-block">What is Web Hosting?
                                </h6>
                            </a>
                            <div id="collapseOne" class="collapse" data-parent="#accordion-one">
                                <div class="card-body">
                                    <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                        sapiente ea proident.
                                        Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                        farm-to-table, raw denim aesthetic
                                        synth nesciunt you probably haven't heard of them accusamus labore sustainable
                                        VHS.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-0">
                            <a class="card-header collapsed" data-toggle="collapse" href="#collapseTwo">
                                <h6 class="mb-0 d-inline-block">What Are the
                                    Different Types of Web Hosting Products DreamHost Offers?</h6>
                            </a>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion-one">
                                <div class="card-body">
                                    <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                        raw denim aesthetic
                                        synth nesciunt you probably haven't heard of them accusamus labore sustainable
                                        VHS.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-0">
                            <a class="card-header collapsed" data-toggle="collapse" href="#collapseThree">
                                <h6 class="mb-0 d-inline-block">How Do I Buy a Domain
                                    Name?
                                </h6>
                            </a>
                            <div id="collapseThree" class="collapse" data-parent="#accordion-one">
                                <div class="card-body">
                                    <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                        sapiente ea proident.
                                        Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                        farm-to-table, raw denim aesthetic
                                        synth nesciunt you probably haven't heard of them accusamus labore sustainable
                                        VHS.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-0">
                            <a class="card-header collapsed" data-toggle="collapse" href="#collapseFour">
                                <h6 class="mb-0 d-inline-block">Can You Help Me
                                    Understand More About WordPress?
                                </h6>
                            </a>
                            <div id="collapseFour" class="collapse" data-parent="#accordion-one">
                                <div class="card-body">
                                    <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                        sapiente ea proident.
                                        Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                        farm-to-table.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--faq section end-->

    <!--testimonial and review section start-->
    <section class="client-review-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>What Our Customers Say About Us?</h2>
                        <p class="lead">Authoritatively reinvent client-centric e-markets via fully tested process improvements. Objectively restore strategic initiatives through fully researched.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="single-testimonial white-bg shadow-sm rounded p-5">
                        <ul class="list-inline ratting-list mb-2">
                            <li class="list-inline-item"><span class="ti-star"></span></li>
                            <li class="list-inline-item"><span class="ti-star"></span></li>
                            <li class="list-inline-item"><span class="ti-star"></span></li>
                            <li class="list-inline-item"><span class="ti-star"></span></li>
                            <li class="list-inline-item"><span class="ti-star"></span></li>
                        </ul>
                        <div class="ratting-content">
                            <h5>Awesome support from technical</h5>
                            <p>Objectively envisioneer magnetic manufactured products and dynamic models. Progressively maximize 2.0 relationships whereas process-centric methodologies.</p>
                        </div>
                        <div class="ratting-author mt-3">
                            <h6>Alex Khamer</h6>
                            <small class="text-right">6 days ago</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single-testimonial white-bg shadow-sm rounded p-5">
                        <ul class="list-inline ratting-list mb-2">
                            <li class="list-inline-item"><span class="ti-star"></span></li>
                            <li class="list-inline-item"><span class="ti-star"></span></li>
                            <li class="list-inline-item"><span class="ti-star"></span></li>
                            <li class="list-inline-item"><span class="ti-star"></span></li>
                            <li class="list-inline-item"><span class="ti-star"></span></li>
                        </ul>
                        <div class="ratting-content">
                            <h5>Pleasant support experience</h5>
                            <p>Objectively envisioneer magnetic manufactured products and dynamic models. Progressively maximize 2.0 relationships whereas process-centric methodologies.</p>
                        </div>
                        <div class="ratting-author mt-3">
                            <h6>Peter Anderson</h6>
                            <small class="text-right">3 days ago</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single-testimonial white-bg shadow-sm rounded p-5">
                        <ul class="list-inline ratting-list mb-2">
                            <li class="list-inline-item"><span class="ti-star"></span></li>
                            <li class="list-inline-item"><span class="ti-star"></span></li>
                            <li class="list-inline-item"><span class="ti-star"></span></li>
                            <li class="list-inline-item"><span class="ti-star"></span></li>
                            <li class="list-inline-item"><span class="ti-star"></span></li>
                        </ul>
                        <div class="ratting-content">
                            <h5>Contacted support after Midnight</h5>
                            <p>Objectively envisioneer magnetic manufactured products and dynamic models. Progressively maximize 2.0 relationships whereas process-centric methodologies.</p>
                        </div>
                        <div class="ratting-author mt-3">
                            <h6>Jolio Darix</h6>
                            <small class="text-right">8 days ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--testimonial and review section end-->


</div>
<!--body content wrap end-->

<!--footer section start-->
<footer class="footer-section">
    <!--footer top start-->
    <div class="footer-top gradient-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="row footer-top-wrap">
                        <div class="col-12">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">SECURED BY</h4>
                                <ul class="list-inline security-icon-list">
                                    <li class="list-inline-item"><img src="img/mcafee-logo.png" width="110" alt="security" class="img-fluid"/></li>
                                    <li class="list-inline-item"><img src="img/norton-logo.png" width="110" alt="security" class="img-fluid"/></li>
                                    <li class="list-inline-item"><img src="img/accredited-logo.png" width="110" alt="security" class="img-fluid"/></li>
                                    <li class="list-inline-item"><img src="img/secured-logo.png" width="110" alt="security" class="img-fluid"/></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row footer-top-wrap">
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">PRODUCTS</h4>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">WordPress Hosting</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Shared Hosting</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Virtual Private Servers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Dedicated Servers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Domain Names</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">COMPANY</h4>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Affiliates</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Careers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Community</a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">LEGAL</h4>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Legal Information</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Privacy Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Report Abuse</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Terms of Service</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">WHOIS Lookup</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">SUPPORT</h4>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Knowledge Base</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Forums</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">System Status</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Support Team</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer top end-->

    <!--footer copyright start-->
    <div class="footer-bottom gray-light-bg py-3">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-5 col-lg-5">
                    <p class="copyright-text pb-0 mb-0">Copyrights © 2020. All
                        rights reserved by
                        <a href="https://themeforest.net/user/themetags" target="_blank">ThemeTags</a></p>
                </div>
                <div class="col-md-7 col-lg-6">
                    <div class="payment-method text-right">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img src="img/mastercard.png" alt="mastercard" class="img-fluid"/>
                            </li>
                            <li class="list-inline-item">
                                <img src="img/discover.png" alt="mastercard" class="img-fluid"/>
                            </li>
                            <li class="list-inline-item">
                                <img src="img/maestro.png" alt="mastercard" class="img-fluid"/>
                            </li>
                            <li class="list-inline-item">
                                <img src="img/bitcoin.png" alt="mastercard" class="img-fluid"/>
                            </li>
                            <li class="list-inline-item">
                                <img src="img/visa.png" alt="mastercard" class="img-fluid"/>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer copyright end-->
</footer>
<!--footer section end-->

<!--bottom to top button start-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="ti-rocket"></span>
</button>
<!--bottom to top button end-->

<script src="{{ asset('js/libs_fr.js') }}" defer></script>

</body>
</html>
