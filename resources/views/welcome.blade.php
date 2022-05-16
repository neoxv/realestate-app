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
<x-guest-layout>
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

@include('includes.client.footer')
</x-guest-layout>
