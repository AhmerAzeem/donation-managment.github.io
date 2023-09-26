<!DOCTYPE html>
<html lang="en"
    class="no-applicationcache cors no-ie8compat history json postmessage strictmode no-devicemotion no-deviceorientation filereader localstorage sessionstorage hashchange cssgradients multiplebgs opacity cssremunit rgba fileinput formattribute placeholder hsla supports fontface generatedcontent cssscrollbar formvalidation textshadow fullscreen filesystem cssanimations backgroundsize borderradius borderimage boxshadow csscolumns csscolumns-width csscolumns-span csscolumns-fill csscolumns-gap csscolumns-rule csscolumns-rulecolor csscolumns-rulestyle csscolumns-rulewidth csscolumns-breakbefore csscolumns-breakafter csscolumns-breakinside flexbox flexboxlegacy no-overflowscrolling cssreflections csstransforms csstransforms3d csstransitions">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="http://xvelopers.com/demo/html/paper/assets/img/basic/favicon.ico" type="image/x-icon">
    <title>Donation Expenses</title>
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="icon" type="image/png"
        href="https://colorlib.com/etc/tb/Table_Fixed_Header/images/icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/select2.min.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/perfect-scrollbar.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/util.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}" />
    <style>
        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
    </style>
</head>

<body cz-shortcut-listen="true">
    <!-- Pre loader -->


    <div id="app" class="paper-loading">

        <div class="nav-absolute nav-border nav-light">
            <!-- Header -->
            <nav class="mainnav navbar navbar-default justify-content-between">
                <div class="container relative">
                    <a class="offcanvas dl-trigger paper-nav-toggle" type="button" data-toggle="offcanvas"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <i></i>
                    </a>
                    <a class="navbar-brand" href="#">
                        <img class="d-inline-block align-top" alt=""
                            src="{{ asset('assets/images/logo-white.png') }}">
                    </a>
                    <div class="paper_menu">
                        <div id="dl-menu" class="xv-menuwrapper responsive-menu">
                            <ul class="dl-menu align-items-center">
                                <li class="parent megamenu"><a href="#">Home</a>
                                    <ul class="lg-submenu lg-submenu-left">
                                        <li class="dl-back"><a href="#">back</a>
                                        </li>
                                        <li><a><i class="icon icon-package s-24 text-red"></i>Multipurpose</a>
                                            <ul class="lg-submenu">
                                                <li class="dl-back"><a href="#">back</a>
                                                </li>
                                                <li><a href="#">Home Page
                                                        - 1</a>
                                                </li>
                                                <li><a href="#">Home Page
                                                        - 2</a>
                                                </li>
                                                <li><a href="#">Home Page
                                                        - 3</a>
                                                </li>
                                                <li><a href="#">Home Page
                                                        - 4</a>
                                                </li>
                                                <li><a href="#">Home Page
                                                        - 5</a>
                                                </li>
                                                <li><a href="#">Home
                                                        Sass - 1</a>
                                                </li>
                                                <li><a href="#">Home
                                                        Sass - 2</a>
                                                </li>
                                                <li><a href="#">Home
                                                        Sass - 3</a>
                                                </li>
                                                <li><a href="#">Home
                                                        - Single 1 </a>
                                                </li>
                                                <li><a href="#">Home
                                                        - Single 2 </a>
                                                </li>
                                                <li><a href="#">Home
                                                        - Agency </a>
                                                </li>
                                                <li><a href="#">Home
                                                        - Agency 2</a>
                                                </li>
                                                <li><a href="#">Marketplace<span
                                                            class="badge badge-primary">Shop</span></a>
                                                </li>
                                                <li><a href="#">Home
                                                        - Architecture</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a><i class="icon icon-package s-24 text-green"></i>Niche</a>
                                            <ul class="lg-submenu">
                                                <li class="dl-back"><a href="#">back</a>
                                                </li>
                                                <li><a href="#">Home
                                                        - Instructor</a>
                                                </li>
                                                <li><a href="#">Events
                                                        Home</a>
                                                </li>
                                                <li><a href="#">Freebies
                                                        Home <span class="badge badge-warning">unique</span></a>
                                                </li>
                                                <li><a href="#">Charity
                                                        Home</a>
                                                </li>
                                                <li><a href="#">Personal
                                                        Resume</a>
                                                </li>
                                                <li><a href="#">Personal
                                                        Resume 2</a>
                                                </li>
                                                <li><a href="#">Personal
                                                        Resume 3</a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/home-knowledgebase1.html">Knowledgebase
                                                        1</a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/home-knowledgebase2.html">Knowledgebase
                                                        2</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/home-masonary.html">Home
                                                        - Masonary Wall</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/home-video.html">You
                                                        Tube Video</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/home-game-app.html">Home
                                                        - Game Landing page</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/home-portfolio.html">Home
                                                        - Portfolio</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/home-realstate.html">Home
                                                        - Real State <span
                                                            class="badge badge-success green"></span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a><i class="icon icon-package s-24 text-blue"></i>Home Hero</a>
                                            <ul class="lg-submenu">
                                                <li class="dl-back"><a
                                                        href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#">back</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/hero-section1.html"><i
                                                            class="icon icon-circle-o text-blue"></i>Hero Section 1</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/hero-section2.html"><i
                                                            class="icon icon-circle-o yellow-text"></i> Hero Section
                                                        2</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/hero-section3.html"><i
                                                            class="icon icon-circle-o red-text"></i> Hero Section 3</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/hero-section4.html"><i
                                                            class="icon icon-circle-o purple-text"></i> Hero Section
                                                        4</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/hero-section5.html"><i
                                                            class="icon icon-circle-o orange-text"></i> Hero Section
                                                        5</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/hero-section6.html"><i
                                                            class="icon icon-circle-o green-text"></i> Hero Section
                                                        6</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/hero-section7.html"><i
                                                            class="icon icon-circle-o red-text"></i> Hero Section 7</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/hero-section8.html"><i
                                                            class="icon icon-circle-o purple-text"></i> Hero Section
                                                        8</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/hero-section9.html"><i
                                                            class="icon icon-circle-o orange-text"></i> Hero Section
                                                        9</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li><i class="icon icon-package text-blue"></i><strong>Version
                                                        1.8</strong> <span
                                                        class="badge badge-danger blink deep-purple darken-2">Bootstrap
                                                        4</span>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/hero-section10.html"><i
                                                            class="icon icon-circle-o red-text"></i> Hero Section
                                                        10</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/hero-section11.html"><i
                                                            class="icon icon-circle-o purple-text"></i> Hero Section
                                                        11</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/hero-section12.html"><i
                                                            class="icon icon-circle-o orange-text"></i> Hero Section
                                                        12</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a><i class="icon icon-package s-24 text-blue"></i>Updates</a>
                                            <ul class="lg-submenu">
                                                <li class="dl-back"><a
                                                        href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#">back</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/dashboard.html"><i
                                                            class="icon icon-dashboard text-red"></i> User DashBoard
                                                    </a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/dashboard2.html"><i
                                                            class="icon icon-dashboard2 text-blue"></i> Admin DashBoard
                                                    </a>
                                                </li>
                                                <li class="divider"></li>
                                                <li><i class="icon icon-package text-blue"></i><strong>Version
                                                        1.9</strong>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/panel-page-dashboard.html"><i
                                                            class="icon icon-dashboard2 text-green"></i> Panel
                                                        Dashboard 1
                                                        <span class="badge badge-danger">HOT</span></a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/panel-page-dashboard2.html"><i
                                                            class="icon icon-dashboard2 text-green"></i> Panel
                                                        Dashboard 2
                                                        <span class="badge badge-danger">HOT</span></a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/panel-page-products.html"><i
                                                            class="icon icon-dashboard2 text-indigo"></i>
                                                        Products
                                                    </a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/panel-page-users.html"><i
                                                            class="icon icon-dashboard2 text-indigo"></i>
                                                        Users
                                                    </a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/panel-page-inbox.html"><i
                                                            class="icon icon-dashboard2 text-indigo"></i>
                                                        Inbox
                                                    </a>
                                                </li>


                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent"><a
                                        href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#">Pages</a>
                                    <ul class="lg-submenu">
                                        <li class="dl-back"><a
                                                href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#">back</a>
                                        </li>
                                        <li class="parent"><a
                                                href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#">Services</a>
                                            <ul class="lg-submenu">
                                                <li class="dl-back"><a
                                                        href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#">back</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/services1.html">Services
                                                        1</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/services2.html">Services
                                                        2</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/services3.html">Services
                                                        3</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="parent"><a
                                                href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#">Team</a>
                                            <ul class="lg-submenu">
                                                <li class="dl-back"><a
                                                        href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#">back</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/team.html">Team
                                                        Layout 1</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/team2.html">Team
                                                        Layout 2 <span class="badge badge-success">Carousel</span></a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/team3.html">Team
                                                        Layout 3</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/team4.html">Team
                                                        Layout 4 <span class="badge">Filter</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="parent"><a
                                                href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#">About
                                                Us</a>
                                            <ul class="lg-submenu">
                                                <li class="dl-back"><a
                                                        href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#">back</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/about-us.html">About
                                                        Us 1</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/about-us2.html">About
                                                        Us 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="parent"><a
                                                href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#">Testimonials</a>
                                            <ul class="lg-submenu">
                                                <li class="dl-back"><a
                                                        href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#">back</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/testimonials.html">Grid
                                                        Testimonials</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/testimonials2.html">Slide
                                                        Testimonials</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/testimonials3.html">Slide
                                                        Gradient <span class="badge badge-danger">Hot</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="parent"><a
                                                href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#">Contact
                                                Pages</a>
                                            <ul class="lg-submenu">
                                                <li class="dl-back"><a
                                                        href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#">back</a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/contact.html">Contact</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/contact2.html">Contact
                                                        2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="parent"><a
                                                href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#">Authentication
                                                Pages</a>
                                            <ul class="lg-submenu">
                                                <li class="dl-back"><a
                                                        href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#">back</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/register.html">Register
                                                    </a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/password-recovery.html">Forgot
                                                        Password </a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/signin.html">Login
                                                        Layout 1</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/login-2.html">Login
                                                        Layout 2</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/login-3.html">Login
                                                        Layout 3</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/login-4.html">Login
                                                        Layout 4 </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="parent"><a
                                                href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#">Portfolio
                                                pages</a>
                                            <ul class="lg-submenu">
                                                <li class="dl-back"><a
                                                        href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#">back</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/portfolio-2col.html">Two
                                                        Column</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/portfolio-3col.html">Three
                                                        Column</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/portfolio-4col.html">Four
                                                        Column</a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/portfolio-single.html">Details
                                                        Page</a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/portfolio-single2.html">Details
                                                        Page2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="parent"><a
                                                href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#">Single
                                                pages</a>
                                            <ul class="lg-submenu">
                                                <li class="dl-back"><a
                                                        href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#">back</a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/portfolio-single.html">Portfolio
                                                        Single</a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/portfolio-single2.html">Portfolio
                                                        Single 2</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/single.html">Blog
                                                        Single</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/single2.html">Blog
                                                        Single2</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/shop-single.html">Shop
                                                        Single <span class="badge badge-danger">hot</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="parent"><a
                                                href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#">Special
                                                pages <span class="badge badge-success">bonus</span></a>
                                            <ul class="lg-submenu">
                                                <li class="dl-back"><a
                                                        href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#">back</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/coming-soon.html">Coming
                                                        soon</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/404.html">404 Layout
                                                        1</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/404-2.html">404
                                                        Layout 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="http://xvelopers.com/demo/html/paper/documentations.html"><i
                                                    class="icon icon-book"></i> Documentations <span
                                                    class="badge badge-danger">A+</span></a>
                                        </li>
                                        <li><a href="http://xvelopers.com/demo/html/paper/dashboard.html"><i
                                                    class="icon icon-dashboard"></i> Dashboard </a>
                                        </li>
                                        <li><a href="http://xvelopers.com/demo/html/paper/demo.html"><i
                                                    class="icon icon-diamond2"></i> Demo Page</a>
                                        </li>
                                        <li><a href="http://xvelopers.com/demo/html/paper/demo1.html"><i
                                                    class="icon icon-diamond2"></i> Demo Page 1.2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent megamenu"><a
                                        href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#">Features <span
                                            class="badge badge-danger">New</span></a>
                                    <ul class="lg-submenu">
                                        <li class="dl-back"><a
                                                href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#">back</a>
                                        </li>
                                        <li><a>Pages With ...</a>
                                            <ul class="lg-submenu">
                                                <li class="dl-back"><a
                                                        href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#">back</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/home2.html"><i
                                                            class="icon icon-circle-o text-yellow"></i>Pre Header
                                                        Nav</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/home-agency.html"><i
                                                            class="icon icon-circle-o text-red"></i>Fixed Main Nav</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/services1.html"><i
                                                            class="icon icon-circle-o text-green"></i>Paper Page
                                                        Title</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/contact.html"><i
                                                            class="icon icon-circle-o text-light-blue"></i>Paper Page
                                                        Title 2</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/team2.html"><i
                                                            class="icon icon-circle-o text-warning"></i>Gradient Page
                                                        Title</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/services2.html"><i
                                                            class="icon icon-circle-o text-info"></i>Simple Page
                                                        Title</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/about-us2.html"><i
                                                            class="icon icon-circle-o text-danger"></i>Overlay Page
                                                        Title</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/portfolio-4col.html"><i
                                                            class="icon icon-circle-o text-light-blue"></i>Overlay
                                                        Centered Title</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/home-resume1.html"><i
                                                            class="icon icon-circle-o text-light-blue"></i>Mini Menu
                                                        <span class="badge badge-success">Updated</span></a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/home-resume2.html"><i
                                                            class="icon icon-circle-o text-light-green "></i>Off Canvas
                                                        Menu <span class="badge badge-danger blink">New</span></a>
                                                </li>

                                                <li><a href="http://xvelopers.com/demo/html/paper/home-single2.html"><i
                                                            class="icon icon-circle-o text-red"></i>Sidebar Menu </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a>Bootstrap Elements</a>
                                            <ul class="lg-submenu">
                                                <li class="dl-back"><a
                                                        href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#">back</a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/element-overlay.html"><i
                                                            class="icon icon-protection"></i>Overlay Vartions</a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/element-footers.html"><i
                                                            class="icon icon-bookmark text-red"></i>Footer
                                                        Variations</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/element-nav.html"><i
                                                            class="icon icon-menu text-red"></i>Menu
                                                        Variations</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/element-pagers.html"><i
                                                            class="icon icon-sort-numeric-asc"></i>Pagers</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/element-panels.html"><i
                                                            class="icon icon-certificate"></i>Panels</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/element-alerts.html"><i
                                                            class="icon icon-compass"></i>Alerts</a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/element-accordian.html"><i
                                                            class="icon icon-magic"></i>Accordian</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/element-tabs.html"><i
                                                            class="icon icon-folder"></i>Tabs</a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/element-progress-bars.html"><i
                                                            class="icon icon-bars"></i>Progress Bars</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/element-forms.html"><i
                                                            class="icon icon-calculator"></i>Forms</a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/element-offcanvas.html"><i
                                                            class="icon icon-hand-grab-o"></i>offcanvas Sidebar</a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/element-divider.html"><i
                                                            class="icon icon-air-sock"></i>Dividers</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a>Paper Elements</a>
                                            <ul class="lg-submenu">
                                                <li class="dl-back"><a
                                                        href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#">back</a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/element-carousel.html"><i
                                                            class="icon icon-sliders"></i>Carousels</a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/element-pricing.html"><i
                                                            class="icon icon-money"></i>Pricing Sections</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/element-team.html"><i
                                                            class="icon icon-organization"></i>Team Sections</a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/element-services.html"><i
                                                            class="icon icon-presentation"></i>Services
                                                        Sections</a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/element-thumbnails.html"><i
                                                            class="icon icon-picture-o"></i>Thumbnails</a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/element-animated-headline.html"><i
                                                            class="icon icon-file-text-o"></i>Text
                                                        Rotators</a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/element-top-slope.html"><i
                                                            class="icon icon-analytics-1"></i>Section Top
                                                        Slope</a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/element-bottom-slope.html"><i
                                                            class="icon icon-analytics-2"></i>Section
                                                        Bottom Slope</a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/element-mokup-slider.html"><i
                                                            class="icon icon-laptop"></i>Mokups
                                                        Slider</a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/element-promotions-bar.html"><i
                                                            class="icon icon-agenda"></i>Promotions Bar</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/element-tabels.html"><i
                                                            class="icon-table"></i>Tables</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/element-modal.html"><i
                                                            class="icon-magnet"></i>Modals</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a>UI Elements <span class="badge badge-danger">Shortcodes</span> </a>
                                            <ul class="lg-submenu">
                                                <li class="dl-back"><a
                                                        href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#">back</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/element-lists.html"><i
                                                            class="icon icon-list"></i>List Group</a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/element-buttons.html"><i
                                                            class="icon icon-target3"></i>Button</a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/element-typography.html"><i
                                                            class="icon icon-pen"></i>Typography</a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/element-media-list.html"><i
                                                            class="icon icon-list-alt"></i>Media List</a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/element-comments-list.html"><i
                                                            class="icon icon-list-alt"></i>Comments List</a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/element-parallax.html"><i
                                                            class="icon icon-laptop"></i>Parallax</a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/element-timeline.html"><i
                                                            class="icon icon-laptop"></i>Time Line</a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/element-counter.html"><i
                                                            class="icon icon-startup"></i>Statistic
                                                        Counter</a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/element-progressbars.html"><i
                                                            class="icon icon-agenda"></i>Circular
                                                        Progressbars</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/element-icons.html"><i
                                                            class="icon icon-agenda"></i>Icons
                                                        <span class="badge badge-warning">2692</span></a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/element-colors.html"><i
                                                            class="icon icon-agenda"></i>Color Palette
                                                        <span class="badge badge-danger">Unlimited</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent megamenu"><a
                                        href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#"><i
                                            class="icon icon-shopping-bag2"></i>Shop</a>
                                    <ul class="lg-submenu">
                                        <li class="dl-back"><a
                                                href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#">back</a>
                                        </li>
                                        <li><a><i class="icon icon-shopping-bag2 s-24"></i>Shop Pages</a>
                                            <ul class="lg-submenu">
                                                <li class="dl-back"><a
                                                        href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#">back</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/home-shop.html">Shop
                                                        Home <span class="badge badge-warning">unique</span></a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/shop.html">Shop
                                                        Simple</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/shop-single.html">Product
                                                        Detail <span class="badge badge-danger">hot</span></a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/shop-left-sidebar.html">Shop
                                                        Left Sidebar</a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/register.html">login/signup</a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/shop-right-sidebar.html">Shop
                                                        Right Sidebar</a>
                                                </li>
                                                <li><a
                                                        href="http://xvelopers.com/demo/html/paper/password-recovery.html">Forgot
                                                        Password</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/cart.html">Cart <span
                                                            class="badge">11 items</span></a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demo/html/paper/checkout.html">Check
                                                        out</a>
                                                </li>
                                            </ul>
                                            <a href="http://xvelopers.com/home10-shop.html" class="btn btn-success">
                                                <i class="icon icon-shopping-bag2 s-24"></i> Shop Now</a>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="text-center">
                                                    <p><strong> Best Sale Offer</strong> <span
                                                            class="badge badge-danger">30% Off Today</span>
                                                    </p>
                                                </div>
                                                <figure>
                                                    <img src="./assets/ipad.png" alt="">
                                                </figure>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent"><a
                                        href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#">Blog</a>
                                    <ul class="lg-submenu" style="width: 300px">
                                        <li class="dl-back"><a
                                                href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#">back</a>
                                        </li>
                                        <li class="p-0">
                                            <div class="p-4">
                                                <div class="my-3">
                                                    <a href="http://xvelopers.com/demo/html/paper/blog.html">
                                                        <div class="media">
                                                            <i class="icon-circle-o w-20 s-36 text-primary"></i>
                                                            <div class="media-body">
                                                                <span class="mt-0 mb-0 font-weight-normal s-12">Paper
                                                                    Blog<br></span>
                                                                <span class="s-12">Simple Blog Layout</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="my-3">
                                                    <a href="http://xvelopers.com/demo/html/paper/blog-masonary.html">
                                                        <div class="media">
                                                            <i class="icon-circle-o w-20 s-36 text-danger"></i>
                                                            <div class="media-body">
                                                                <span class="mt-0 mb-0 font-weight-normal s-12">Blog
                                                                    Masonary<br></span>
                                                                <span class="s-12">Powered By Isotope</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="my-3">
                                                    <a href="http://xvelopers.com/demo/html/paper/single.html">
                                                        <div class="media">
                                                            <i class="icon-circle-o w-20 s-36 text-warning"></i>
                                                            <div class="media-body">
                                                                <span class="mt-0 mb-0 font-weight-normal s-12">Blog
                                                                    Single<br></span>
                                                                <span class="s-12">Blog Details Page</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="my-3">
                                                    <a href="http://xvelopers.com/demo/html/paper/single2.html">
                                                        <div class="media">
                                                            <i class="icon-circle-o w-20 s-36 text-info"></i>
                                                            <div class="media-body">
                                                                <span class="mt-0 mb-0 font-weight-normal s-12">Blog
                                                                    Single 2<br></span>
                                                                <span class="s-12"> A Post Style</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="light p-5">
                                                <h6>Paper Mega Menu</h6>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci
                                                    architecto autem.
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#modalLogin"
                                        data-toggle="modal" data-target="#modalLogin">
                                        Login
                                    </a>
                                </li>
                                <li><a href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#modalSignUp"
                                        class="btn btn-primary nav-btn" data-toggle="modal"
                                        data-target="#modalSignUp">Sign
                                        Up</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Login modal -->
                    </div>
                </div>
            </nav>
        </div>
        <div class="page light">
            <div class="text-white has-overlay p-t-b-100" data-bg-possition="bottom"
                style="background: url(&#39;assets/img/dummy/un2.jpg&#39;)">
                <div class="container">
                    <div class="p-t-b-50">
                        <small class="badge badge-yellow p-2">You may love paper</small>
                        <h1 class="p-t-b-20">Awesome Projects</h1>
                        <ul class="project-filter p-0">
                            <li data-filter="*" class="active">all</li>
                            <li data-filter=".type1">Websites</li>
                            <li data-filter=".type2">Print</li>
                            <li data-filter=".type3">Mobile</li>
                            <li data-filter=".type4">Photography</li>
                            <li data-filter=".type5">Illustrations</li>
                            <li data-filter=".type6">Logo Design</li>
                        </ul>
                    </div>
                </div>
                <div class="overlay" data-start="#5590D6" data-end="#A345C1" data-orientation="toleft"
                    data-opacity=".9"
                    style="background: linear-gradient(to left, rgb(85, 144, 214) 0%, rgb(163, 69, 193) 100%); opacity: 0.9;">
                </div>
            </div>
            <section class="portfolio p-t-b-80">
                <div class="container">
                    <div class="wrap-table100">
                        <div class="table100 ver1 m-b-110">
                            <div class="table100-head">
                                <table>
                                    <thead>
                                        <tr class="row100 head">
                                            <th class="cell100 column1">#</th>
                                            <th class="cell100 column2">Narration</th>
                                            <th class="cell100 column5">Account</th>
                                            <th class="cell100 column3">Date</th>
                                            <th class="cell100 column4">Amount</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="table100-body js-pscroll ps ps--active-y">
                                <table>
                                    <tbody id="expense__body">

                                    </tbody>
                                </table>
                                <div class="ps__rail-x" style="left: 0px; bottom: 0px">
                                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px"></div>
                                </div>
                                <div class="ps__rail-y" style="top: 0px; height: 585px; right: 5px">
                                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 293px"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class=" col-lg-2 col-xl-3 col-12 responsive-phone"><a href="#" class="brand">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="Knowledge">
                            <span class="circle"></span>
                        </a>
                    </div>
                    <div class="col-6  col-md-4 col-lg-2">
                        <h6>Quick Links</h6>
                        <ul class="footer-links">
                            <li><a href="#">Features</a>
                            </li>
                            <li><a href="#">Blog</a>
                            </li>
                            <li><a href="#">Community</a>
                            </li>
                            <li><a href="#">Login</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6  col-md-4 col-lg-2">
                        <h6>Knowledgebase</h6>
                        <ul class="footer-links">
                            <li><a href="#">Features</a>
                            </li>
                            <li><a href="#">Blog</a>
                            </li>
                            <li><a href="#">Community</a>
                            </li>
                            <li><a href="#">Login</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6  col-md-4 col-lg-2">
                        <h6>About Us</h6>
                        <ul class="footer-links">
                            <li><a href="#">Features</a>
                            </li>
                            <li><a href="#">Blog</a>
                            </li>
                            <li><a href="#">Community</a>
                            </li>
                            <li><a href="#">Login</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-12 col-12 col-xl-3 responsive-phone">
                        <h6>Connect via Social</h6>
                        <ul class="social list-inline pt-3 pb-1">
                            <li class="list-inline-item"><a class="facebook" href="#"><i
                                        class="fa-brands fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a class="twitter" href="#"><i
                                        class="fa-brands fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a class="gplus" href="#"><i
                                        class="fa-brands fa-google-plus"></i></a></li>
                        </ul>
                        <div class="copyrights">
                            <p>© 2018 Paper Copyrights</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Login modal -->
        <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLogin">
            <div class="modal-dialog width-400" role="document">
                <div class="modal-content no-r "><a href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#"
                        data-dismiss="modal" aria-label="Close" class="paper-nav-toggle active"><i></i></a>
                    <div class="modal-body no-p">
                        <div class="text-center p-40 p-b-0">
                            <img src="{{ asset('assets/images/u4.png') }}" alt="">
                            <h3>Welcome Back</h3>
                            <p class="p-t-b-20">Hey Soldier welcome back signin now there is lot of new stuff waiting
                                for you</p>
                        </div>
                        <div class="light p-40 b-t-b">
                            <form action="http://xvelopers.com/demo/html/paper/dashboard2.html">
                                <div class="form-group has-icon"><i class="icon-envelope-o"></i>
                                    <input type="text" class="form-control form-control-lg"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group has-icon"><i class="icon-user-secret"></i>
                                    <input type="text" class="form-control form-control-lg"
                                        placeholder="Password">
                                </div>
                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Log In">
                                <small class="forget-pass">Have you forgot your username or password ?</small>
                            </form>
                        </div>
                        <div class="p-40"><a href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#"
                                class="btn btn-lg btn-block btn-social facebook">
                                <i class="icon-facebook"></i> Login with Facebook
                            </a>
                            <a href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#"
                                class="btn btn-lg btn-block btn-social twitter">

                                <i class="icon-twitter"></i> Login with Twitter

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SignUp modal -->
        <div class="modal fade" id="modalSignUp" tabindex="-1" role="dialog" aria-labelledby="modalSignUp">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content no-r "><a href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#"
                        data-dismiss="modal" aria-label="Close" class="paper-nav-toggle active"><i></i></a>
                    <div class="modal-body no-p">
                        <div class="row">
                            <div class="col-lg-5 grid">
                                <div class="p-40">
                                    <h5 class="p-t-40">Sign Up Using Social Account</h5>
                                    <p class="p-t-b-20">Hey Soldier welcome back signin now there is lot of new stuff
                                        waiting
                                        for you</p> <a href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#"
                                        class="btn btn-lg btn-block btn-social facebook">
                                        <i class="icon-facebook"></i> Login with Facebook
                                    </a>
                                    <a href="http://xvelopers.com/demo/html/paper/portfolio-3col.html#"
                                        class="btn btn-lg btn-block btn-social twitter">

                                        <i class="icon-twitter"></i> Login with Twitter

                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="light p-t-b-40">
                                    <div class="p-40">
                                        <h5 class="p-b-20">Create New User Account</h5>
                                        <form action="http://xvelopers.com/demo/html/paper/dashboard2.html">
                                            <div class="form-group has-icon"><i class="icon-user-circle"></i>
                                                <input type="text" class="form-control form-control-lg"
                                                    placeholder="Your Name">
                                            </div>
                                            <div class="form-group has-icon"><i class="icon-envelope-o"></i>
                                                <input type="text" class="form-control form-control-lg"
                                                    placeholder="Email Address">
                                            </div>
                                            <div class="form-group has-icon"><i class="icon-user-secret"></i>
                                                <input type="text" class="form-control form-control-lg"
                                                    placeholder="Password">
                                            </div>
                                            <div class="form-group has-icon"><i class="icon-repeat"></i>
                                                <input type="text" class="form-control form-control-lg"
                                                    placeholder="Confirm Password">
                                            </div>
                                            <input type="submit" class="btn btn-primary btn-lg btn-block"
                                                value="Sign Up Now">
                                            <p class="forget-pass">A verification email wil be sent to you</p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Page page_wrrapper -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>

    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/js/select2.min.js') }}"></script>

    <script src="{{ asset('assets/js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script type="text/javascript" async="" src="{{ asset('assets/js/analytics.js') }}"
        nonce="29a61a0e-81c2-46a0-9d4c-24c2ac207717"></script>
    <script defer="" referrerpolicy="origin" src="{{ asset('assets/js/s.js') }}"></script>
    <script nonce="29a61a0e-81c2-46a0-9d4c-24c2ac207717">
        (function(w, d) {
            !(function(a, b, c, d) {
                a[c] = a[c] || {};
                a[c].executed = [];
                a.zaraz = {
                    deferred: [],
                    listeners: []
                };
                a.zaraz.q = [];
                a.zaraz._f = function(e) {
                    return async function() {
                        var f = Array.prototype.slice.call(arguments);
                        a.zaraz.q.push({
                            m: e,
                            a: f
                        });
                    };
                };
                for (const g of ["track", "set", "debug"]) a.zaraz[g] = a.zaraz._f(g);
                a.zaraz.init = () => {
                    var h = b.getElementsByTagName(d)[0],
                        i = b.createElement(d),
                        j = b.getElementsByTagName("title")[0];
                    j && (a[c].t = b.getElementsByTagName("title")[0].text);
                    a[c].x = Math.random();
                    a[c].w = a.screen.width;
                    a[c].h = a.screen.height;
                    a[c].j = a.innerHeight;
                    a[c].e = a.innerWidth;
                    a[c].l = a.location.href;
                    a[c].r = b.referrer;
                    a[c].k = a.screen.colorDepth;
                    a[c].n = b.characterSet;
                    a[c].o = new Date().getTimezoneOffset();
                    if (a.dataLayer)
                        for (const n of Object.entries(
                                Object.entries(dataLayer).reduce(
                                    (o, p) => ({
                                        ...o[1],
                                        ...p[1]
                                    }), {}
                                )
                            ))
                            zaraz.set(n[0], n[1], {
                                scope: "page"
                            });
                    a[c].q = [];
                    for (; a.zaraz.q.length;) {
                        const q = a.zaraz.q.shift();
                        a[c].q.push(q);
                    }
                    i.defer = !0;
                    for (const r of [localStorage, sessionStorage])
                        Object.keys(r || {})
                        .filter((t) => t.startsWith("_zaraz_"))
                        .forEach((s) => {
                            try {
                                a[c]["z_" + s.slice(7)] = JSON.parse(r.getItem(s));
                            } catch {
                                a[c]["z_" + s.slice(7)] = r.getItem(s);
                            }
                        });
                    i.referrerPolicy = "origin";
                    i.src =
                        "/cdn-cgi/zaraz/s.js?z=" +
                        btoa(encodeURIComponent(JSON.stringify(a[c])));
                    h.parentNode.insertBefore(i, h);
                };
                ["complete", "interactive"].includes(b.readyState) ?
                    zaraz.init() :
                    a.addEventListener("DOMContentLoaded", zaraz.init);
            })(w, d, "zarazData", "script");
        })(window, document);
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "UA-23581568-13");
    </script>
    <script>
        $(".js-pscroll").each(function() {
            var ps = new PerfectScrollbar(this);

            $(window).on("resize", function() {
                ps.update();
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $.ajax({
                url: "{{ route('get.expenses') }}",
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    $("#expense__body").append(response)
                },
                error: function(xhr) {
                    console.log(xhr.responseText)
                }
            });

        })
    </script>
</body>

</html>
