{{-- <x-guest-layout>
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Realestate App
                </div>
            </div>
        </div>
    </div>
</x-guest-layout> --}}
<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites/xero-2-html/HTML/main/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 May 2022 07:14:58 GMT -->
<head>

    <title>XERO - Real Estate HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="{{asset('client-assets/css/bootstrap.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('client-assets/css/magnific-popup.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('client-assets/css/jquery.selectBox.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('client-assets/css/dropzone.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('client-assets/css/rangeslider.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('client-assets/css/animate.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('client-assets/css/leaflet.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('client-assets/css/slick.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('client-assets/css/slick-theme.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('client-assets/css/map.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('client-assets/css/jquery.mCustomScrollbar.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('client-assets/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('client-assets/fonts/flaticon/font/flaticon.css')}}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{asset('client-assets/img/favicon.ico')}}" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('client-assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{asset('client-assets/css/skins/default.css')}}">

</head>
<body id="top" class="index-body">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PDTWJ3Z"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page_loader"></div>

<!-- Top header start -->
<header class="top-header th-bg" id="top-header-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-7">
                <div class="list-inline">
                    <a href="tel:1-7X0-555-8X22"><i class="fa fa-phone"></i>+0477 85X6 552</a>
                    <a href="tel:info@themevessel.com"><i class="fa fa-envelope"></i>info@themevessel.com</a>
                    <a href="#" class="mr-0 d-none-992"><i class="fa fa-clock-o"></i>Mon - Sun: 8:00am - 6:00pm</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-5">
                <ul class="top-social-media pull-right">
                    <li>
                        <a href="login.html" class="sign-in"><i class="fa fa-sign-in"></i> Login </a>
                    </li>
                    <li>
                        <a href="login.html" class="sign-in"><i class="fa fa-user"></i> Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- Top header end -->

<!-- main header start -->
<header class="main-header sticky-header" id="main-header-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light rounded">
                    <a class="navbar-brand logo" href="index.html">
                        <img src="{{asset('client-assets/img/logos/black-logo.png')}}" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" id="drawer">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav justify-content-end ml-auto">
                            <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Index
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="index.html">Index 1</a></li>
                                    <li><a class="dropdown-item" href="index-2.html">Index 2</a></li>
                                    <li><a class="dropdown-item" href="index-3.html">Index 3</a></li>
                                    <li><a class="dropdown-item" href="index-4.html">Index 4</a></li>
                                    <li><a class="dropdown-item" href="index-5.html">Index 5</a></li>
                                    <li><a class="dropdown-item" href="index-6.html">Index 6</a></li>
                                    <li><a class="dropdown-item" href="index-7.html">Index 7</a></li>
                                    <li><a class="dropdown-item" href="index-8.html">Index 8 (Map)</a></li>
                                    <li><a class="dropdown-item" href="index-9.html">Index 9 (Video)</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Properties
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">List
                                            Layout</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="properties-list-rightside.html">Right
                                                    Sidebar</a></li>
                                            <li><a class="dropdown-item" href="properties-list-leftside.html">Left
                                                    Sidebar</a></li>
                                            <li><a class="dropdown-item"
                                                    href="properties-list-fullwidth.html">Fullwidth</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Grid
                                            Layout</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="properties-grid-rightside.html">Right
                                                    Sidebar</a></li>
                                            <li><a class="dropdown-item" href="properties-grid-leftside.html">Left
                                                    Sidebar</a></li>
                                            <li><a class="dropdown-item"
                                                    href="properties-grid-fullwidth.html">Fullwidth</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Map
                                            View</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="properties-map-rightside-list.html">Map
                                                    List Right Sidebar</a></li>
                                            <li><a class="dropdown-item" href="properties-map-leftside-list.html">Map
                                                    List Left Sidebar</a></li>
                                            <li><a class="dropdown-item" href="properties-map-rightside-grid.html">Map
                                                    Grid Right Sidebar</a></li>
                                            <li><a class="dropdown-item" href="properties-map-leftside-grid.html">Map
                                                    Grid Left Sidebar</a></li>
                                            <li><a class="dropdown-item" href="properties-map-full.html">Map
                                                    FullWidth</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"
                                            href="#">Property Detail</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="properties-details.html">Property Detail
                                                    1</a></li>
                                            <li><a class="dropdown-item" href="properties-details-2.html">Property
                                                    Detail 2</a></li>
                                            <li><a class="dropdown-item" href="properties-details-3.html">Property
                                                    Detail 3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink7"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pages
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">My
                                            Account</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="user-profile.html">User profile</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="my-properties.html">My Properties</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="favorited-properties.html">Favorited
                                                    Properties</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="submit-property.html">Submit Property</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"
                                            href="#">About</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="about.html">About Us</a></li>
                                            <li><a class="dropdown-item" href="about-me.html">About Me</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"
                                            href="#">Services</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="services.html">Services 1</a></li>
                                            <li><a class="dropdown-item" href="services-2.html">Services 2</a></li>
                                            <li><a class="dropdown-item" href="services-details.html">Services
                                                    Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"
                                            href="#">Pricing Tables</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="pricing-tables-1.html">Pricing Tables
                                                    1</a></li>
                                            <li><a class="dropdown-item" href="pricing-tables-2.html">Pricing Tables
                                                    2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"
                                            href="#">Gallery</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="gallery-1.html">Gallery 1</a></li>
                                            <li><a class="dropdown-item" href="gallery-2.html">Gallery 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"
                                            href="#">Faq</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="faq-1.html">Faq 1</a></li>
                                            <li><a class="dropdown-item" href="faq-2.html">Faq 2</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"
                                            href="#">Typography</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="typography.html">Typography 1</a></li>
                                            <li><a class="dropdown-item" href="typography-2.html">Typography 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">404
                                            Error</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="pages-404.html">404 Error 1</a></li>
                                            <li><a class="dropdown-item" href="pages-404-2.html">404 Error 2</a></li>
                                        </ul>
                                    </li>

                                    <li><a class="dropdown-item" href="properties-comparison.html">Properties
                                            Comparison</a></li>
                                    <li><a class="dropdown-item" href="search-brand.html">Search Brand</a></li>
                                    <li><a class="dropdown-item" href="elements.html">Elements</a></li>
                                    <li><a class="dropdown-item" href="coming-soon.html">Coming Soon</a></li>
                                    <li><a class="dropdown-item" href="login.html">Login/Register</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink6"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Agents
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Agent
                                            List</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="agent-list.html">Agent List 1</a></li>
                                            <li><a class="dropdown-item" href="agent-list-2.html">Agent List 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Agent
                                            Grid</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="agent-grid.html">Agent Grid 1</a></li>
                                            <li><a class="dropdown-item" href="agent-grid-2.html">Agent Grid 2</a></li>
                                            <li><a class="dropdown-item" href="agent-grid-3.html">Agent Grid 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="agent-detail.html">Agent Detail</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink5"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Blog
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"
                                            href="#">Columns</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="blog-columns-2col.html">2 Columns</a>
                                            </li>
                                            <li><a class="dropdown-item" href="blog-columns-3col.html">3 Columns</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"
                                            href="#">Classic</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="blog-classic-sidebar-right.html">Right
                                                    Sidebar</a></li>
                                            <li><a class="dropdown-item" href="blog-classic-sidebar-left.html">Left
                                                    Sidebar</a></li>
                                            <li><a class="dropdown-item"
                                                    href="blog-classic-fullwidth.html">FullWidth</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Blog
                                            Details</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="blog-single-sidebar-right.html">Right
                                                    Sidebar</a></li>
                                            <li><a class="dropdown-item" href="blog-single-sidebar-left.html">Left
                                                    Sidebar</a></li>
                                            <li><a class="dropdown-item" href="blog-single-fullwidth.html">Fullwidth</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Shop
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                    <a class="dropdown-item" href="shop-list.html">Shop List</a>
                                    <a class="dropdown-item" href="shop-cart.html">Shop Cart</a>
                                    <a class="dropdown-item" href="shop-checkout.html">Shop Checkout</a>
                                    <a class="dropdown-item" href="shop-single.html">Shop Details</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Contact
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                    <a class="dropdown-item" href="contact-1.html">Contact 1</a>
                                    <a class="dropdown-item" href="contact-2.html">Contact 2</a>
                                    <a class="dropdown-item" href="contact-3.html">Contact 3</a>
                                </div>
                            </li>
                            <li class="nav-item sb2">
                                <a href="submit-property.html" class="submit-btn">
                                    Submit Property
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- main header end -->

<!-- Sidenav start -->
<nav id="sidebar" class="nav-sidebar">
    <!-- Close btn-->
    <div id="dismiss">
        <i class="fa fa-close"></i>
    </div>
    <div class="sidebar-inner">
        <div class="sidebar-logo">
            <img src="{{asset('client-assets/img/logos/black-logo.png')}}" alt="sidebarlogo">
        </div>
        <div class="sidebar-navigation">
            <h3 class="heading">Pages</h3>
            <ul class="menu-list">
                <li><a href="#" class="active pt0">Index <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li><a href="index.html">Index 1</a></li>
                        <li><a href="index-2.html">Index 2</a></li>
                        <li><a href="index-3.html">Index 3</a></li>
                        <li><a href="index-4.html">Index 4</a></li>
                        <li><a href="index-5.html">Index 5</a></li>
                        <li><a href="index-6.html">Index 6</a></li>
                        <li><a href="index-7.html">Index 7</a></li>
                        <li><a href="index-8.html">Index 8</a></li>
                        <li><a href="index-9.html">Index 9</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Properties <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li>
                            <a href="#">List Layout <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="properties-list-rightside.html">Right Sidebar</a></li>
                                <li><a href="properties-list-leftside.html">Left Sidebar</a></li>
                                <li><a href="properties-list-fullwidth.html">Fullwidth</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Grid Layout <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="properties-grid-rightside.html">Right Sidebar</a></li>
                                <li><a href="properties-grid-leftside.html">Left Sidebar</a></li>
                                <li><a href="properties-grid-fullwidth.html">Fullwidth</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Map View <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="properties-map-rightside-list.html">Map List Right Sidebar</a></li>
                                <li><a href="properties-map-leftside-list.html">Map List Left Sidebar</a></li>
                                <li><a href="properties-map-rightside-grid.html">Map Grid Right Sidebar</a></li>
                                <li><a href="properties-map-leftside-grid.html">Map Grid Left Sidebar</a></li>
                                <li><a href="properties-map-full.html">Map FullWidth</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Property Detail <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="properties-details.html">Property Detail 1</a></li>
                                <li><a href="properties-details-2.html">Property Detail 2</a></li>
                                <li><a href="properties-details-3.html">Property Detail 3</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pages <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li>
                            <a href="#">My Account <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="user-profile.html">User profile</a></li>
                                <li><a href="my-properties.html">My Properties</a></li>
                                <li><a href="favorited-properties.html">Favorited Properties</a></li>
                                <li><a href="submit-property.html">Submit Property</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">About <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="about-me.html">About Me</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Services <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="services.html">Services 1</a></li>
                                <li><a href="services-2.html">Services 2</a></li>
                                <li><a href="services-details.html">Services Details</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Pricing Tables <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="pricing-tables-1.html">Pricing Tables 1</a></li>
                                <li><a href="pricing-tables-2.html">Pricing Tables 2</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Gallery <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="gallery-1.html">Gallery 1</a></li>
                                <li><a href="gallery-2.html">Gallery 2</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Faq <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="faq-1.html">Faq 1</a></li>
                                <li><a href="faq-2.html">Faq 2</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Typography <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="typography.html">Typography 1</a></li>
                                <li><a href="typography-2.html">Typography 2</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">404 Error <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="pages-404.html">404 Error 1</a></li>
                                <li><a href="pages-404-2.html">404 Error 2</a></li>
                            </ul>
                        </li>
                        <li><a href="properties-comparison.html">Properties Comparison</a></li>
                        <li><a href="search-brand.html">Search Brand</a></li>
                        <li><a href="elements.html">Elements</a></li>
                        <li><a href="coming-soon.html">Coming Soon</a></li>
                        <li><a href="login.html">Login/Register</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"> Agents <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li>
                            <a href="#">Agent List <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="agent-list.html">Agent List 1</a></li>
                                <li><a href="agent-list-2.html">Agent List 2</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Agent Grid <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="agent-grid.html">Agent Grid 1</a></li>
                                <li><a href="agent-grid-2.html">Agent Grid 2</a></li>
                                <li><a href="agent-grid-3.html">Agent Grid 3</a></li>
                            </ul>
                        </li>
                        <li><a href="agent-detail.html">Agent Detail</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Blog <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li>
                            <a href="#">Columns<em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="blog-columns-2col.html">2 Columns</a></li>
                                <li><a href="blog-columns-3col.html">3 Columns</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Classic <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="blog-classic-sidebar-right.html">Right Sidebar</a></li>
                                <li><a href="blog-classic-sidebar-left.html">Left Sidebar</a></li>
                                <li><a href="blog-classic-fullwidth.html">FullWidth</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Blog Details <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="blog-single-sidebar-right.html">Right Sidebar</a></li>
                                <li><a href="blog-single-sidebar-left.html">Left Sidebar</a></li>
                                <li><a href="blog-single-fullwidth.html">Fullwidth</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Shop <em class="fa fa-chevron-down"></em></a>
                    <ul>

                        <li><a class="dropdown-item" href="shop-list.html">Shop List</a></li>
                        <li><a class="dropdown-item" href="shop-cart.html">Shop Cart</a></li>
                        <li> <a class="dropdown-item" href="shop-checkout.html">Shop Checkout</a></li>
                        <li><a class="dropdown-item" href="shop-single.html">Shop Details</a></li>
                    </ul>
                </li>
                <li><a href="#">Contact <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li><a class="dropdown-item" href="contact-1.html">Contact 1</a></li>
                        <li><a class="dropdown-item" href="contact-2.html">Contact 2</a></li>
                        <li><a class="dropdown-item" href="contact-3.html">Contact 3</a></li>
                    </ul>
                </li>
                <li>
                    <a href="submit-property.html">Submit Property</a>
                </li>
            </ul>
        </div>
        <div class="get-in-touch">
            <h3 class="heading">Get in Touch</h3>
            <div class="media">
                <i class="fa fa-phone"></i>
                <div class="media-body">
                    <a href="tel:0477-0477-8556-552">0477 8556 552</a>
                </div>
            </div>
            <div class="media">
                <i class="fa fa-envelope"></i>
                <div class="media-body">
                    <a href="#">info@themevessel.com</a>
                </div>
            </div>
            <div class="media mb-0">
                <i class="fa fa-fax"></i>
                <div class="media-body">
                    <a href="#">info@themevessel.com</a>
                </div>
            </div>
        </div>
        <div class="get-social">
            <h3 class="heading">Get Social</h3>
            <a href="#" class="facebook-bg">
                <i class="fa fa-facebook"></i>
            </a>
            <a href="#" class="twitter-bg">
                <i class="fa fa-twitter"></i>
            </a>
            <a href="#" class="google-bg">
                <i class="fa fa-google"></i>
            </a>
            <a href="#" class="linkedin-bg">
                <i class="fa fa-linkedin"></i>
            </a>
        </div>
    </div>
</nav>
<!-- Sidenav end -->

<!-- Banner start -->
<div class="banner" id="banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active item-bg">
                <img class="d-block w-100 h-100" src="{{asset('client-assets/img/banner/img-3.jpg')}}" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container b1-inner-2">
                        <div class="t-center">
                            <h5 data-animation="animated fadeInDown delay-05s">The Best Real Estate Deals</h5>
                            <h1 data-animation="animated fadeInDown delay-05s">Discover Modern Villa</h1>
                            <a data-animation="animated fadeInUp delay-10s" href="#" class="btn btn-2 btn-theme"><span>More Details</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item item-bg">
                <img class="d-block w-100 h-100" src="{{asset('client-assets/img/banner/img-2.jpg')}}" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container b1-inner-2">
                        <div class="t-right">
                            <h5 data-animation="animated fadeInDown delay-05s">The Best Real Estate Deals</h5>
                            <h1 data-animation="animated fadeInDown delay-05s">Best Place For Sell Properties</h1>
                            <a data-animation="animated fadeInUp delay-10s" href="#" class="btn btn-2 btn-theme"><span>More Details</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item item-bg">
                <img class="d-block w-100 h-100" src="{{asset('client-assets/img/banner/img-4.jpg')}}" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container b1-inner-2">
                        <div class="t-left">
                            <h5 data-animation="animated fadeInDown delay-05s">The Best Real Estate Deals</h5>
                            <h1 data-animation="animated fadeInDown delay-05s">Best Place For Sell Properties</h1>
                            <a data-animation="animated fadeInUp delay-10s" href="#" class="btn btn-2 btn-theme"><span>More Details</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-secton">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
        </div>
    </div>
</div>
<!-- banner end -->

<!-- Search area start -->
<div class="search-area" id="search-area-1">
    <div class="container">
        <div class="search-area-inner">
            <div class="search-contents ">
                <form action="https://storage.googleapis.com/theme-vessel-items/checking-sites/xero-2-html/HTML/main/index.html" method="GET">
                    <div class="row">
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="area">
                                    <option>Area From</option>
                                    <option>1500</option>
                                    <option>1200</option>
                                    <option>900</option>
                                    <option>600</option>
                                    <option>300</option>
                                    <option>100</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="property-status">
                                    <option>Property Status</option>
                                    <option>For Sale</option>
                                    <option>For Rent</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="location">
                                    <option>Location</option>
                                    <option>United Kingdom</option>
                                    <option>American Samoa</option>
                                    <option>Belgium</option>
                                    <option>Canada</option>
                                    <option>Delaware</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="category">
                                    <option>Property Types</option>
                                    <option>Residential</option>
                                    <option>Commercial</option>
                                    <option>Land</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="bedrooms">
                                    <option>Bedrooms</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="bathrooms">
                                    <option>Bathrooms</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="form-group">
                                <div class="range-slider">
                                    <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="form-group">
                                <button class="btn btn-4 btn-block" type="submit">Search</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Search area end -->

<!-- Featured properties start -->
<div class="featured-properties content-area-2">
    <div class="container">
        <div class="main-title">
            <h1>Featured Properties</h1>
            <ul class="list-inline-listing filters filteriz-navigation">
                <li class="active btn filtr-button filtr" data-filter="all">All</li>
                <li data-filter="1" class="btn btn-inline filtr-button filtr">Apartment</li>
                <li data-filter="2" class="btn btn-inline filtr-button filtr">House</li>
                <li data-filter="3" class="btn btn-inline filtr-button filtr">Office</li>
            </ul>
        </div>
        <div class="row filter-portfolio wow fadeInUp delay-04s">
            <div class="cars">
                <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="3, 2">
                    <div class="property-box-7">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="tag-2">For Sale</div>
                                <div class="price-box"><span>$850.00</span> Per night</div>
                                <img src="{{asset('client-assets/img/property/img-4.jpg')}}" alt="property-box-7" class="img-fluid">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">Real Luxury Villa</a>
                            </h1>
                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Area</span>3600 Sqft
                            </li>
                            <li>
                                <span>Beds</span> 3
                            </li>
                            <li>
                                <span>Baths</span> 2
                            </li>
                            <li>
                                <span>Garage</span> 1
                            </li>
                        </ul>
                        <div class="footer clearfix">
                            <div class="pull-left days">
                                <p><i class="fa fa-user"></i> Jhon Doe</p>
                            </div>
                            <ul class="pull-right">
                                <li><a href="#"><i class="flaticon-heart-shape-outline"></i></a></li>
                                <li><a href="#"><i class="flaticon-calendar"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="2, 1">
                    <div class="property-box-7">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="tag-2">For Rent</div>
                                <div class="price-box"><span>$850.00</span> Per night</div>
                                <img src="{{asset('client-assets/img/property/img-5.jpg')}}" alt="property-box-7" class="img-fluid">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">Beautiful Single Home</a>
                            </h1>
                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Area</span>3600 Sqft
                            </li>
                            <li>
                                <span>Beds</span> 3
                            </li>
                            <li>
                                <span>Baths</span> 2
                            </li>
                            <li>
                                <span>Garage</span> 1
                            </li>
                        </ul>
                        <div class="footer clearfix">
                            <div class="pull-left days">
                                <p><i class="fa fa-user"></i> Jhon Doe</p>
                            </div>
                            <ul class="pull-right">
                                <li><a href="#"><i class="flaticon-heart-shape-outline"></i></a></li>
                                <li><a href="#"><i class="flaticon-calendar"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="3, 1, 2">
                    <div class="property-box-7">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="tag-2">For Sale</div>
                                <div class="price-box"><span>$850.00</span> Per night</div>
                                <img src="{{asset('client-assets/img/property/img-6.jpg')}}" alt="property-box-7" class="img-fluid">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">Sweet Family Home</a>
                            </h1>
                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Area</span>3600 Sqft
                            </li>
                            <li>
                                <span>Beds</span> 3
                            </li>
                            <li>
                                <span>Baths</span> 2
                            </li>
                            <li>
                                <span>Garage</span> 1
                            </li>
                        </ul>
                        <div class="footer clearfix">
                            <div class="pull-left days">
                                <p><i class="fa fa-user"></i> Jhon Doe</p>
                            </div>
                            <ul class="pull-right">
                                <li><a href="#"><i class="flaticon-heart-shape-outline"></i></a></li>
                                <li><a href="#"><i class="flaticon-calendar"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="3">
                    <div class="property-box-7">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="tag-2">For Rent</div>
                                <div class="price-box"><span>$850.00</span> Per night</div>
                                <img src="{{asset('client-assets/img/property/img-1.jpg')}}" alt="property-box-7" class="img-fluid">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">Modern Family Home</a>
                            </h1>
                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Area</span>3600 Sqft
                            </li>
                            <li>
                                <span>Beds</span> 3
                            </li>
                            <li>
                                <span>Baths</span> 2
                            </li>
                            <li>
                                <span>Garage</span> 1
                            </li>
                        </ul>
                        <div class="footer clearfix">
                            <div class="pull-left days">
                                <p><i class="fa fa-user"></i> Jhon Doe</p>
                            </div>
                            <ul class="pull-right">
                                <li><a href="#"><i class="flaticon-heart-shape-outline"></i></a></li>
                                <li><a href="#"><i class="flaticon-calendar"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="3, 2, 1">
                    <div class="property-box-7">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="tag-2">For Sale</div>
                                <div class="price-box"><span>$850.00</span> Per night</div>
                                <img src="{{asset('client-assets/img/property/img-2.jpg')}}" alt="property-box-7" class="img-fluid">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">Relaxing Apartment</a>
                            </h1>
                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Area</span>3600 Sqft
                            </li>
                            <li>
                                <span>Beds</span> 3
                            </li>
                            <li>
                                <span>Baths</span> 2
                            </li>
                            <li>
                                <span>Garage</span> 1
                            </li>
                        </ul>
                        <div class="footer clearfix">
                            <div class="pull-left days">
                                <p><i class="fa fa-user"></i> Jhon Doe</p>
                            </div>
                            <ul class="pull-right">
                                <li><a href="#"><i class="flaticon-heart-shape-outline"></i></a></li>
                                <li><a href="#"><i class="flaticon-calendar"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="1, 2">
                    <div class="property-box-7">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="tag-2">For Rent</div>
                                <div class="price-box"><span>$850.00</span> Per night</div>
                                <img src="{{asset('client-assets/img/property/img-3.jpg')}}" alt="property-box-7" class="img-fluid">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">Masons Villas</a>
                            </h1>
                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Area</span>3600 Sqft
                            </li>
                            <li>
                                <span>Beds</span> 3
                            </li>
                            <li>
                                <span>Baths</span> 2
                            </li>
                            <li>
                                <span>Garage</span> 1
                            </li>
                        </ul>
                        <div class="footer clearfix">
                            <div class="pull-left days">
                                <p><i class="fa fa-user"></i> Jhon Doe</p>
                            </div>
                            <ul class="pull-right">
                                <li><a href="#"><i class="flaticon-heart-shape-outline"></i></a></li>
                                <li><a href="#"><i class="flaticon-calendar"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Featured properties end -->

<!-- Services 2 start -->
<div class="services-2 overview-bgi">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 align-self-center wow fadeInLeft delay-04s">
                <div class="main-title main-title-2">
                    <h1>Why Choose Us</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                    <a href="services.html" class="important-btn btn-5">More Details</a>
                </div>
            </div>
            <div class="col-lg-7 offset-lg-1 wow fadeInRight delay-04s">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="services-info">
                            <div class="number">1</div>
                            <div class="icon">
                                <i class="flaticon-hotel-building"></i>
                            </div>
                            <div class="detail">
                                <h3>
                                    <a href="services.html">Apartments</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. typesetting industry. Lorem Ipsum has been the</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="services-info">
                            <div class="number">2</div>
                            <div class="icon">
                                <i class="flaticon-house"></i>
                            </div>
                            <div class="detail">
                                <h3>
                                    <a href="services.html">Houses</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. typesetting industry. Lorem Ipsum has been the</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="services-info">
                            <div class="number">3</div>
                            <div class="icon">
                                <i class="flaticon-call-center-agent"></i>
                            </div>
                            <div class="detail">
                                <h3>
                                    <a href="services.html">Support 24/7</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. typesetting industry. Lorem Ipsum has been the</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="services-info">
                            <div class="number">4</div>
                            <div class="icon">
                                <i class="flaticon-office-block"></i>
                            </div>
                            <div class="detail">
                                <h3>
                                    <a href="services.html">Commercial</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. typesetting industry. Lorem Ipsum has been the</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services 2 end -->

<!-- Recent Properties start -->
<div class="recent-properties content-area-2">
    <div class="container">
        <div class="main-title">
            <h1>Recent Properties</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInLeft delay-04s">
                <div class="property-box-8">
                    <div class="photo-thumbnail">
                        <div class="photo">
                            <img src="{{asset('client-assets/img/property/img-12.jpg')}}" alt="property-box-8" class="img-fluid">
                            <a href="properties-details.html">
                                <span class="blog-one__plus"></span>
                            </a>
                        </div>
                        <div class="tag-for">For Rent</div>
                        <div class="price-ratings-box">
                            <p class="price">
                                $178,000
                            </p>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="heading">
                            <h3>
                                <a href="properties-details.html">Real Luxury Villa</a>
                            </h3>
                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <div class="properties-listing">
                            <span>3 Beds</span>
                            <span>2 Baths</span>
                            <span>980 sqft</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp delay-04s">
                <div class="property-box-8">
                    <div class="photo-thumbnail">
                        <div class="photo">
                            <img src="{{asset('client-assets/img/property/img-13.jpg')}}" alt="property-box-8" class="img-fluid">
                            <a href="properties-details.html">
                                <span class="blog-one__plus"></span>
                            </a>
                        </div>
                        <div class="tag-for">For Sale</div>
                        <div class="price-ratings-box">
                            <p class="price">
                                $178,000
                            </p>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="heading">
                            <h3>
                                <a href="properties-details.html">Masons Villas</a>
                            </h3>
                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <div class="properties-listing">
                            <span>3 Beds</span>
                            <span>2 Baths</span>
                            <span>980 sqft</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp delay-04s">
                <div class="property-box-8">
                    <div class="photo-thumbnail">
                        <div class="photo">
                            <img src="{{asset('client-assets/img/property/img-14.jpg')}}" alt="property-box-8" class="img-fluid">
                            <a href="properties-details.html">
                                <span class="blog-one__plus"></span>
                            </a>
                        </div>
                        <div class="tag-for">For Rent</div>
                        <div class="price-ratings-box">
                            <p class="price">
                                $178,000
                            </p>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="heading">
                            <h3>
                                <a href="properties-details.html">Luxury Villa</a>
                            </h3>
                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <div class="properties-listing">
                            <span>3 Beds</span>
                            <span>2 Baths</span>
                            <span>980 sqft</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInRight delay-04s">
                <div class="property-box-8">
                    <div class="photo-thumbnail">
                        <div class="photo">
                            <img src="{{asset('client-assets/img/property/img-15.jpg')}}" alt="property-box-8" class="img-fluid">
                            <a href="properties-details.html">
                                <span class="blog-one__plus"></span>
                            </a>
                        </div>
                        <div class="tag-for">For Sale</div>
                        <div class="price-ratings-box">
                            <p class="price">
                                $178,000
                            </p>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="heading">
                            <h3>
                                <a href="properties-details.html">Park avenue</a>
                            </h3>
                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <div class="properties-listing">
                            <span>3 Beds</span>
                            <span>2 Baths</span>
                            <span>980 sqft</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Recent Properties end -->

<!-- Most popular places start -->
<div class="most-popular-places content-area-23 bg-white">
    <div class="container">
        <div class="main-title">
            <h1>Most Popular Places</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-pad cp-3 wow fadeInLeft delay-04s d-none-992">
                    <div class="most-popular-box-2">
                        <div class="photo">
                            <img src="{{asset('client-assets/img/popular-places/img-3.jpg')}}" alt="img" class="img-fluid">
                            <div class="most-overlay">
                                <div class="job">
                                    <p>256 Properties</p>
                                    <h6><a href="properties-details.html">Tokyo City</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-pad wow fadeInUp delay-04s">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-12 cp-2">
                            <div class="most-popular-box-2">
                                <div class="photo">
                                    <img src="{{asset('client-assets/img/popular-places/img-2.jpg')}}" alt="img" class="img-fluid">
                                    <div class="most-overlay">
                                        <div class="job">
                                            <p>27 Properties</p>
                                            <h6><a href="properties-details.html">Rome City</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-sm-12 cp-2">
                            <div class="most-popular-box-2">
                                <div class="photo">
                                    <img src="{{asset('client-assets/img/popular-places/img-4.jpg')}}" alt="img" class="img-fluid">
                                    <div class="most-overlay">
                                        <div class="job">
                                            <p>42 Properties</p>
                                            <h6><a href="properties-details.html">California City</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-pad wow fadeInRight delay-04s">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-12 cp-2">
                            <div class="most-popular-box-2">
                                <div class="photo">
                                    <img src="{{asset('client-assets/img/popular-places/img-6.jpg')}}" alt="img" class="img-fluid">
                                    <div class="most-overlay">
                                        <div class="job">
                                            <p>78 Properties</p>
                                            <h6><a href="properties-details.html">Paris City</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-sm-12 cp-2">
                            <div class="most-popular-box-2">
                                <div class="photo">
                                    <img src="{{asset('client-assets/img/popular-places/img-5.jpg')}}" alt="img" class="img-fluid">
                                    <div class="most-overlay">
                                        <div class="job">
                                            <p>82 Properties</p>
                                            <h6><a href="properties-details.html">London City</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Most popular places end -->

<!-- Agent start -->
<div class="agent content-area-2">
    <div class="container">
        <div class="main-title">
            <h1>Meet Our Agents</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 wow fadeInLeft delay-04s">
                <div class="row agent-4">
                    <div class="col-lg-5 col-md-12 col-pad">
                        <div class="photo">
                            <img src="{{asset('client-assets/img/avatar/avatar-5.jpg')}}" alt="avatar-4" class="img-fluid">
                            <div class="overlay">
                                <div class="border">
                                    <div class="icon-holder">
                                        <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                                    </div>
                                    <div class="icon-holder">
                                        <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                    </div>
                                    <div class="icon-holder">
                                        <a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-pad align-self-center">
                        <div class="details">
                            <h3><a href="agent-detail.html">Brandon Miller</a></h3>
                            <h6>Office Manager</h6>
                            <div class="contact">
                                <p>
                                    <a href="mailto:info@themevessel.com"><i class="fa fa-envelope-o"></i>info@themevessel.com</a>
                                </p>
                                <p>
                                    <a href="tel:+554XX-634-7071"> <i class="fa fa-phone"></i>+55 4XX-634-7071</a>
                                </p>
                                <p>
                                    <a href="#"><i class="fa fa-skype"></i>sales.carshop</a>
                                </p>
                                <p>
                                    <a href="tel:+554XX-634-7071"><i class="fa fa-fax"></i>+00 417 634 7X22</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 wow fadeInRight delay-04s">
                <div class="row agent-4">
                    <div class="col-lg-5 col-md-12 col-pad">
                        <div class="photo">
                            <img src="{{asset('client-assets/img/avatar/avatar-6.jpg')}}" alt="avatar-4" class="img-fluid">
                            <div class="overlay">
                                <div class="border">
                                    <div class="icon-holder">
                                        <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                                    </div>
                                    <div class="icon-holder">
                                        <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                    </div>
                                    <div class="icon-holder">
                                        <a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-pad align-self-center">
                        <div class="details">
                            <h3><a href="agent-detail.html">Emma Connor</a></h3>
                            <h6>Creative Director</h6>
                            <div class="contact">
                                <p>
                                    <a href="mailto:info@themevessel.com"><i class="fa fa-envelope-o"></i>info@themevessel.com</a>
                                </p>
                                <p>
                                    <a href="tel:+554XX-634-7071"> <i class="fa fa-phone"></i>+55 4XX-634-7071</a>
                                </p>
                                <p>
                                    <a href="#"><i class="fa fa-skype"></i>sales.carshop</a>
                                </p>
                                <p>
                                    <a href="tel:+554XX-634-7071"><i class="fa fa-fax"></i>+00 417 634 7X22</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div >
<!-- Agent end -->

<!-- Testimonial 3 start -->
<div class="testimonial-3 content-area-20 bg-white">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Our Testimonial</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 wow fadeInUp delay-04s">
                <div class="row testimonial-info">
                    <div class="col-lg-6 col-md-12 col-pad none-992">
                        <div class="photo">
                            <img src="{{asset('client-assets/img/img-7.jpg')}}" alt="testimonia3" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-pad align-self-center">
                        <div class="detail">
                            <div class="testimonial-inner">
                                <div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators4" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators4" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators4" data-slide-to="2"></li>
                                        <li data-target="#carouselExampleIndicators4" data-slide-to="3"></li>
                                        <li data-target="#carouselExampleIndicators4" data-slide-to="4"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text everLorem<span class="none-1200"> industry's standard dummy text everLorem Ipsum Lorem Ipsum is simply dummy text of the printing.</span></p>
                                            <div class="avatar">
                                                <img src="{{asset('client-assets/img/avatar/avatar.jpg')}}" alt="testimonial-user">
                                            </div>
                                            <h4>Antony Roky</h4>
                                            <P class="job">CEO, Brick Consulting</P>
                                        </div>
                                        <div class="carousel-item">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text everLorem<span class="none-1200"> industry's standard dummy text everLorem Ipsum Lorem Ipsum is simply dummy text of the printing.</span></p>
                                            <div class="avatar">
                                                <img src="{{asset('client-assets/img/avatar/avatar-2.jpg')}}" alt="testimonial-user">
                                            </div>
                                            <h4>John Mery</h4>
                                            <P class="job">Creative Director</P>
                                        </div>
                                        <div class="carousel-item">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text everLorem<span class="none-1200"> industry's standard dummy text everLorem Ipsum Lorem Ipsum is simply dummy text of the printing.</span></p>
                                            <div class="avatar">
                                                <img src="{{asset('client-assets/img/avatar/avatar-3.jpg')}}" alt="testimonial-user">
                                            </div>
                                            <h4>Karen Paran</h4>
                                            <P class="job">Web Developer</P>
                                        </div>
                                        <div class="carousel-item">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text everLorem<span class="none-1200"> industry's standard dummy text everLorem Ipsum Lorem Ipsum is simply dummy text of the printing.</span></p>
                                            <div class="avatar">
                                                <img src="{{asset('client-assets/img/avatar/avatar-4.jpg')}}" alt="testimonial-user">
                                            </div>
                                            <h4>John Mery</h4>
                                            <P class="job">CEO, Brick Consulting</P>
                                        </div>
                                        <div class="carousel-item">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text everLorem<span class="none-1200"> industry's standard dummy text everLorem Ipsum Lorem Ipsum is simply dummy text of the printing.</span></p>
                                            <div class="avatar">
                                                <img src="{{asset('client-assets/img/avatar/avatar-2.jpg')}}" alt="testimonial-user">
                                            </div>
                                            <h4>Karen Paran</h4>
                                            <P class="job">Support Manager</P>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial 3 end -->

<!-- Blog start -->
<div class="blog content-area-2">
    <div class="container">
        <div class="main-title">
            <h1>Latest Blog</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
        </div>
        <div class="slick-slider-area">
            <div class="row slick-carousel wow fadeInUp delay-04s" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="slick-slide-item">
                    <div class="blog-2">
                        <div class="blog-photo">
                            <img src="{{asset('client-assets/img/blog/blog-3.jpg')}}" alt="blog-2" class="img-fluid">
                            <div class="overlay-icon">
                                <a href="blog-single-sidebar-right.html"><span><i class="flaticon-add"></i></span></a>
                            </div>
                        </div>
                        <div class="blog-one__single-text-box detail">
                            <h3 class="title">
                                <a href="blog-single-sidebar-right.html">Buying a Best House</a>
                            </h3>
                            <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                            <ul class="post-meta">
                                <li><i class="fa fa-calendar" aria-hidden="true"></i>25 June 2021</li>
                                <li><i class="fa fa-comments" aria-hidden="true"></i><a href="#">Com (05)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item wow">
                    <div class="blog-2">
                        <div class="blog-photo">
                            <img src="{{asset('client-assets/img/blog/blog.jpg')}}" alt="blog-2" class="img-fluid">
                            <div class="overlay-icon">
                                <a href="blog-single-sidebar-right.html"><span><i class="flaticon-add"></i></span></a>
                            </div>
                        </div>
                        <div class="blog-one__single-text-box detail">
                            <h3 class="title">
                                <a href="blog-single-sidebar-right.html">Buying a Best House</a>
                            </h3>
                            <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                            <ul class="post-meta">
                                <li><i class="fa fa-calendar" aria-hidden="true"></i>25 June 2021</li>
                                <li><i class="fa fa-comments" aria-hidden="true"></i><a href="#">Com (05)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="blog-2">
                        <div class="blog-photo">
                            <img src="{{asset('client-assets/img/blog/blog-2.jpg')}}" alt="blog-2" class="img-fluid">
                            <div class="overlay-icon">
                                <a href="blog-single-sidebar-right.html"><span><i class="flaticon-add"></i></span></a>
                            </div>
                        </div>
                        <div class="blog-one__single-text-box detail">
                            <h3 class="title">
                                <a href="blog-single-sidebar-right.html">Find Your Dream Real Estate</a>
                            </h3>
                            <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                            <ul class="post-meta">
                                <li><i class="fa fa-calendar" aria-hidden="true"></i>25 June 2021</li>
                                <li><i class="fa fa-comments" aria-hidden="true"></i><a href="#">Com (05)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="blog-2">
                        <div class="blog-photo">
                            <img src="{{asset('client-assets/img/blog/blog-2.jpg')}}" alt="blog-2" class="img-fluid">
                            <div class="overlay-icon">
                                <a href="blog-single-sidebar-right.html"><span><i class="flaticon-add"></i></span></a>
                            </div>
                        </div>
                        <div class="blog-one__single-text-box detail">
                            <h3 class="title">
                                <a href="blog-single-sidebar-right.html">Find Your Dream Real Estate</a>
                            </h3>
                            <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                            <ul class="post-meta">
                                <li><i class="fa fa-calendar" aria-hidden="true"></i>25 June 2021</li>
                                <li><i class="fa fa-comments" aria-hidden="true"></i><a href="#">Com (05)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog end -->

<!-- Footer 2 start -->
<footer class="footer-2">
    <div class="footer-wrapper">
        <div class="row align-items-end">
            <div class="col-lg-6 col-pad">
                <div class="footer-left">
                    <div class="inner">
                        <span>Ready To Do This</span>
                        <h2>Let's get <br> to work</h2>
                        <a href="contact-1.html" class="btn btn-lg btn-white-lg-outline">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-pad">
                <div class="footer-right">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="footer-link">
                                <h4>Useful Links</h4>
                                <ul class="links">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="blog-columns-2col.html">Blog Post</a></li>
                                    <li><a href="contact-1.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12 mt_mobile--30">
                            <div class="footer-link"><h4>Say Hello</h4>
                                <ul class="links mb-30">
                                    <li>
                                        <a href="mailto:info@example.com">info@themevessel.com</a>
                                    </li>
                                    <li>
                                        <a href="mailto:info@example.com">info@green.com</a>
                                    </li>
                                </ul>
                                <ul class="social-share d-flex">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="copyright-text">
                                <P>© 2022 <a href="https://themevessel.com/">Themevessel</a>  All Rights Reserved.</P>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer 2 end -->

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="#" class="search">
        <input type="search" value="" placeholder="type keyword(s) here"/>
        <button type="button" class="btn btn-sm btn-color">Search</button>
    </form>
</div>

<!-- Property Video Modal -->
<div class="modal property-modal fade" id="propertyModal" tabindex="-1" role="dialog" aria-labelledby="propertyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="propertyModalLabel">
                    Find Your Dream Properties
                </h5>
                <p>
                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i> 123 Kathal St. Tampa City,
                </p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 modal-left">
                        <div class="modal-left-content">
                            <div id="modalCarousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <iframe class="modalIframe" src="https://www.youtube.com/embed/V7IrnC9MISU" allowfullscreen></iframe>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('client-assets/img/img-8.jpg')}}" alt="Test ALT">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('client-assets/img/img-9.jpg')}}" alt="Test ALT">
                                    </div>
                                </div>
                                <a class="control control-prev" href="#modalCarousel" role="button" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="control control-next" href="#modalCarousel" role="button" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 modal-right">
                        <div class="modal-right-content">
                            <section>
                                <h3>Features</h3>
                                <ul class="bullets">
                                    <li><i class="flaticon-bed"></i> Double Bed</li>
                                    <li><i class="flaticon-swimmer"></i> Swimming Pool</li>
                                    <li><i class="flaticon-bath"></i> 2 Bathroom</li>
                                    <li><i class="flaticon-car-repair"></i> Garage</li>
                                    <li><i class="flaticon-parking"></i> Parking</li>
                                    <li><i class="flaticon-theatre-masks"></i> Home Theater</li>
                                    <li><i class="flaticon-old-typical-phone"></i> Telephone</li>
                                    <li><i class="flaticon-green-park-city-space"></i> Private space</li>
                                </ul>
                            </section>
                            <section>
                                <h3>Overview</h3>
                                <ul class="bullets bullets2">
                                    <li> Area</li>
                                    <li>Condition</li>
                                    <li>2 Year</li>
                                    <li>Price</li>
                                    <li>2500 Sq Ft:3400</li>
                                    <li>New</li>
                                    <li>2018</li>
                                    <li>$178,000</li>
                                </ul>
                            </section>
                            <div class="ratings-2">
                                <span class="ratings-box">4.5/5</span>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <span>( 7 Reviews )</span>
                            </div>
                            <a href="properties-details.html" class="btn btn-show btn-theme">Show Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Off-canvas sidebar -->
<div class="off-canvas-sidebar">
    <div class="off-canvas-sidebar-wrapper">
        <div class="off-canvas-header">
            <a class="close-offcanvas" href="#"><span class="fa fa-times"></span></a>
        </div>
        <div class="off-canvas-content">
            <aside class="canvas-widget">
                <div class="logo-sitebar text-center">
                    <img src="{{asset('client-assets/img/logos/logo.png')}}" alt="logo">
                </div>
            </aside>
            <aside class="canvas-widget">
                <ul class="menu">
                    <li class="menu-item menu-item-has-children"><a href="index.html">Home</a></li>
                    <li class="menu-item"><a href="properties-grid-leftside.html">Properties List</a></li>
                    <li class="menu-item"><a href="properties-details.html">Property Detail</a></li>
                    <li class="menu-item"><a href="blog-single-sidebar-right.html">Blog</a></li>
                    <li class="menu-item"><a href="about.html">About  US</a></li>
                    <li class="menu-item"><a href="contact-3.html">Contact US</a></li>
                </ul>
            </aside>
            <aside class="canvas-widget">
                <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-vk"></i></a></li>
                </ul>
            </aside>
        </div>
    </div>
</div>

<!-- External JS libraries -->
<script src="{{asset('client-assets/js/jquery-2.2.0.min.js')}}"></script>
<script src="{{asset('client-assets/js/popper.min.js')}}"></script>
<script src="{{asset('client-assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('client-assets/js/jquery.selectBox.js')}}"></script>
<script src="{{asset('client-assets/js/rangeslider.js')}}"></script>
<script src="{{asset('client-assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('client-assets/js/jquery.filterizr.js')}}"></script>
<script src="{{asset('client-assets/js/wow.min.js')}}"></script>
<script src="{{asset('client-assets/js/backstretch.js')}}"></script>
<script src="{{asset('client-assets/js/jquery.countdown.js')}}"></script>
<script src="{{asset('client-assets/js/jquery.scrollUp.js')}}"></script>
<script src="{{asset('client-assets/js/particles.min.js')}}"></script>
<script src="{{asset('client-assets/js/typed.min.js')}}"></script>
<script src="{{asset('client-assets/js/dropzone.js')}}"></script>
<script src="{{asset('client-assets/js/jquery.mb.YTPlayer.js')}}"></script>
<script src="{{asset('client-assets/js/leaflet.js')}}"></script>
<script src="{{asset('client-assets/js/leaflet-providers.js')}}"></script>
<script src="{{asset('client-assets/js/leaflet.markercluster.js')}}"></script>
<script src="{{asset('client-assets/js/slick.min.js')}}"></script>
<script src="{{asset('client-assets/js/maps.js')}}"></script>
<script src="{{asset('client-assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4omYJlOaP814WDcCG8eubXcbhB-44Uac"></script>
<script src="{{asset('client-assets/js/ie-emulation-modes-warning.js')}}"></script>
<!-- Custom JS Script -->
<script  src="{{asset('client-assets/js/app.js')}}"></script>
</body>

<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites/xero-2-html/HTML/main/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 May 2022 07:15:00 GMT -->
</html>
