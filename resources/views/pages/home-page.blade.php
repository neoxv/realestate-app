<x-common.client.container>
    <!-- Banner start -->
    <div class="banner" id="banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

                <x-home-page.banner-carousel-item :header="__('Discover Modern Villa')" :subheader="__('The Best Real Estate Deals')" :image="asset('storage/img/banners/img-3.jpg')" :link="'#featuredProperties'" class='t-right' :button-title="__('Get Started')" :active="true"/>
                <x-home-page.banner-carousel-item :header="__('Best Place For Sell Properties')" :subheader="__('The Best Real Estate Deals')" :image="asset('storage/img/banners/img-2.jpg')" :link="'#featuredProperties'" class='t-right' :button-title="__('Get Started')"/>
                <x-home-page.banner-carousel-item :header="__('Discover Modern Villa')" :subheader="__('The Best Real Estate Deals')" :image="asset('storage/img/banners/img-4.jpg')" :link="'#featuredProperties'" class='t-left' :button-title="__('Get Started')"/>
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
                <div class="search-contents">
                    <div class="d-flex   justify-content-center " >
                        <div class="" >
                            <form action="{{route('user.property.filter')}}" method="get">
                                @csrf
                               <input type="hidden" name="is_rental" value="0">
                                    <button class="btn btn-4 btn-block " style="background-color:#47A8BD">Properties For Sale</i></button>
                            </form>
                        </div>
                        <div class="" style=" margin:0 10px 0">
                            <form action="{{route('user.property.filter')}}"  method="get">
                                    @csrf
                                <input type="hidden"  name="is_rental" value="1">
                                    <button class="btn btn-4 btn-block " style="background-color:#937666">Properties For Rental</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Search area end -->

    <!-- Featured properties start -->
    <div class="featured-properties content-area-2 mb-2" id="featuredProperties">
        <div class="container">
            <div class="main-title">
                <h1>Featured Properties</h1>

            </div>
            <div class="row filter-portfolio wow fadeInUp delay-04s">
                <div class="cards">
                    @foreach ($featured as $item)
                        <x-home-page.featured-card :property='$item'/>
                    @endforeach
                    @if (count($recent) > 0)
                        @foreach ($recent as $item)
                            <x-home-page.featured-card :property='$item'/>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- Featured properties end -->

    <!-- Services 2 start -->
    <div class="services-2 overview-bgi" style="background-image: url({{asset('storage/img/banners/img-6.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 align-self-center wow fadeInLeft delay-04s">
                    <x-home-page.title class="main-title-2" :title="__('Work With Us')" :subtitle="__('Stopping advertising to save money is like stopping your watch to save time.')" :show="true" :buttontitle="__('Contact Us')" :buttonurl="__('contact')" />
                </div>
                <div class="col-lg-7 offset-lg-1 wow fadeInRight delay-04s">
                    <div class="row">
                    @foreach ($ads as $ad )
                        <x-home-page.advertisement-card :ad='$ad'/>
                    @endforeach
                    @for ($i = 0; $i < (2- count($ads)); $i++)
                        <x-home-page.advertisement-card/>
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
            <x-home-page.title :title="__('Sale Properties')" :subtitle="__('')" />
            <div class="row">
                @foreach ($sale as $item )
                    <x-home-page.featured-card :property='$item'/>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Recent Properties end -->

    <!-- Most popular places start -->
    <div class="most-popular-places content-area-23 bg-white">
        <div class="container">
            <x-home-page.title :title="__('Rental Properties')" :subtitle="__('')" />
            <div class="container">
                <div class="row">
                    @foreach ($rent as $item )
                        <x-home-page.featured-card :property='$item'/>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Most popular places end -->

    <!-- Agent start -->
    <div class="agent content-area-2">
        <div class="container">

            <x-home-page.title :title="__('Meet Your Broker')" :subtitle="__('We wil be with you every step of the way.')" />

            <div class="row">
                <x-home-page.agent-card/>
            </div>
        </div>
    </div >
    <!-- Agent end -->

    <!-- Testimonial 3 start -->
    <x-home-page.testimonial/>
    <!-- Testimonial 3 end -->

    <x-home-page.footer/>
</x-common.client.container>
