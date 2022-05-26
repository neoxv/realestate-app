<x-common.page-container>
    <!-- Banner start -->
    <div class="banner" id="banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

                <x-home-page.banner-carousel-item :header="__('Discover Modern Villa')" :subheader="__('The Best Real Estate Deals')" :image="asset('client-assets/img/banner/img-3.jpg')" :link="'#'" class='t-right' :button-title="__('Get Started')" :active="true"/>
                <x-home-page.banner-carousel-item :header="__('Best Place For Sell Properties')" :subheader="__('The Best Real Estate Deals')" :image="asset('client-assets/img/banner/img-2.jpg')" :link="'#'" class='t-right' :button-title="__('Get Started')"/>
                <x-home-page.banner-carousel-item :header="__('Discover Modern Villa')" :subheader="__('The Best Real Estate Deals')" :image="asset('client-assets/img/banner/img-4.jpg')" :link="'#'" class='t-left' :button-title="__('Get Started')"/>
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
                            {{-- change these components in to for loop --}}
                                     @php
                                        $list =[['id'=>'1','name'=>'option 1'],['id'=>'2','name'=>'option 2']];
                                    @endphp
                            <x-home-page.filter-container >
                                    <x-common.select class="search-fields" name="area" :options="$list" />
                            </x-home-page.filter-container >

                            <x-home-page.filter-container >
                                    <x-common.select class="search-fields" name="property-status" :options="$list" />
                            </x-home-page.filter-container >

                            <x-home-page.filter-container >
                                    <x-common.select class="search-fields" name="location" :options="$list" />
                            </x-home-page.filter-container >

                            <x-home-page.filter-container >
                                    <x-common.select class="search-fields" name="category" :options="$list" />
                            </x-home-page.filter-container >

                        </div>
                        <div class="row">
                            <x-home-page.filter-container >
                                    <x-common.select class="search-fields" name="bedrooms" :options="$list" />
                            </x-home-page.filter-container >

                            <x-home-page.filter-container >
                                    <x-common.select class="search-fields" name="bathrooms" :options="$list" />
                            </x-home-page.filter-container >

                            <x-home-page.filter-container >
                                <x-common.range-slider />
                            </x-home-page.filter-container >

                            <x-home-page.filter-container >
                                <button class="btn btn-4 btn-block" type="submit">Search</button>
                            </x-home-page.filter-container >
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

            </div>
            <div class="row filter-portfolio wow fadeInUp delay-04s">
                <div class="cars">
                    @foreach ($featured as $item)
                        <x-home-page.featured-card :property='$item'/>
                    @endforeach
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
                    <x-home-page.title class="main-title-2" :title="__('Why Choose Us')" :subtitle="__('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.')" :show="true" :buttontitle="__('More Details')" :buttonurl="__('services.html')" />
                </div>
                <div class="col-lg-7 offset-lg-1 wow fadeInRight delay-04s">
                    <div class="row">

                    @for ($i = 0; $i < 4; $i++)
                        <x-home-page.service-card/>
                    @endfor

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services 2 end -->

    <!-- Recent Properties start -->
    <div class="recent-properties content-area-2">
        <div class="container">
            <x-home-page.title :title="__('Recent Properties')" :subtitle="__('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.')" />
            <div class="row">
                @foreach ($recent as $item )
                    <x-home-page.recent-card :property='$item'/>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Recent Properties end -->

    <!-- Most popular places start -->
    <div class="most-popular-places content-area-23 bg-white">
        <div class="container">

            <x-home-page.title :title="__('Most Popular Places')" :subtitle="__('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.')" />

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

                    <x-home-page.popular-card-container>
                        <x-home-page.popular-card/>

                        <x-home-page.popular-card/>
                    </x-home-page.popular-card-container>

                    <x-home-page.popular-card-container>
                        <x-home-page.popular-card/>

                        <x-home-page.popular-card/>
                    </x-home-page.popular-card-container>

                </div>
            </div>
        </div>
    </div>
    <!-- Most popular places end -->

    <!-- Agent start -->
    <div class="agent content-area-2">
        <div class="container">

            <x-home-page.title :title="__('Meet Our Agents')" :subtitle="__('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.')" />

            <div class="row">
                <x-home-page.agent-card/>

                <x-home-page.agent-card/>
            </div>
        </div>
    </div >
    <!-- Agent end -->

    <!-- Testimonial 3 start -->
    <x-home-page.testimonial/>
    <!-- Testimonial 3 end -->

    <x-home-page.footer/>
</x-common.page-container>
