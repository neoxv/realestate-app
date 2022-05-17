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
                @for ($i = 0; $i < 6; $i++)
                    <x-welcome.featured-card/>
                @endfor
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
                    <h1></h1>
                    <p></p>
                    <a href="services.html" class="important-btn btn-5">More Details</a>
                </div>
                <x-welcome.title :title="__('Why Choose Us')" :subtitle="__('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.')" :show="true" :button-title="__('More Details')" :button-url="__('services.html')" />
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

        <x-welcome.title :title="__('Recent Properties')" :subtitle="__('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.')" />

        <div class="row">
            @for ($i = 0; $i < 4; $i++)

                <x-welcome.recent-card/>

            @endfor
        </div>
    </div>
</div>
<!-- Recent Properties end -->

<!-- Most popular places start -->
<div class="most-popular-places content-area-23 bg-white">
    <div class="container">

        <x-welcome.title :title="__('Most Popular Places')" :subtitle="__('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.')" />

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

                <x-welcome.popular-card-container>
                    <x-welcome.popular-card/>

                    <x-welcome.popular-card/>
                </x-welcome.popular-card-container>

                <x-welcome.popular-card-container>
                    <x-welcome.popular-card/>

                    <x-welcome.popular-card/>
                </x-welcome.popular-card-container>



            </div>
        </div>
    </div>
</div>
<!-- Most popular places end -->

<!-- Agent start -->
<div class="agent content-area-2">
    <div class="container">

        <x-welcome.title :title="__('Meet Our Agents')" :subtitle="__('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.')" />

        <div class="row">
            <x-welcome.agent-card/>

            <x-welcome.agent-card/>
        </div>
    </div>
</div >
<!-- Agent end -->

<!-- Testimonial 3 start -->
<x-welcome.testimonial/>
<!-- Testimonial 3 end -->

<x-welcome.footer/>
</x-guest-layout>
