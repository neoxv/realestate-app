<x-common.client.container>
    <!-- Banner start -->
    <div class="banner" id="banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

                <x-home-page.banner-carousel-item :header="__('Discover Modern Villa')" :subheader="__('The Best Real Estate Deals')" :image="asset('client-assets/img/banner/img-3.jpg')" :link="'#featuredProperties'" class='t-right' :button-title="__('Get Started')" :active="true"/>
                <x-home-page.banner-carousel-item :header="__('Best Place For Sell Properties')" :subheader="__('The Best Real Estate Deals')" :image="asset('client-assets/img/banner/img-2.jpg')" :link="'#featuredProperties'" class='t-right' :button-title="__('Get Started')"/>
                <x-home-page.banner-carousel-item :header="__('Discover Modern Villa')" :subheader="__('The Best Real Estate Deals')" :image="asset('client-assets/img/banner/img-4.jpg')" :link="'#featuredProperties'" class='t-left' :button-title="__('Get Started')"/>
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
                    <form action="{{route('user.property.filter')}}" method="post">
                        @csrf
                        <div class="row">
                            <x-home-page.filter-container :label="'Type | ዓይነት'">
                                    <x-common.client.select class="search-fields" :name="'is_rental'" :options="[['value'=>'1','name'=>'For Rent|ኪራይ'],['value'=>'2','name'=>'For Sale|ሽያጭ']]" />
                            </x-home-page.filter-container >

                            <x-home-page.filter-container :label="'Category | ምድብ'">
                                    <x-common.client.select class="search-fields" :name="'type'" :options="[['value'=>'house','name'=>'House|ቤት'],['value'=>'land','name'=>'Land|
መሬት'],['value'=>'apartment','name'=>'Apartment|አፓርታማ'],['value'=>'warehouse','name'=>'Warehouse|መጋዘን'],['value'=>'building','name'=>'Building|ህንፃ'],['value'=>'shop','name'=>'Shop|ሱቅ']]" />
                            </x-home-page.filter-container >

                            <x-home-page.filter-container :label="'Location | አካባቢ'" >
                                    <x-common.client.select class="search-fields" :name="'city'" :options="[['value'=>'addis ababa','name'=>'Addis Ababa|አዲስ አበባ']]" />
                            </x-home-page.filter-container >

                            <x-home-page.filter-container :label="'Sub City | ክፍለ ከተማ'" >
                                @php
                                    $subcity_list = array_map(function ($a) { return ['value'=>strtolower((explode('|',$a))[0]),'name'=>$a]; },['All|ሁሉም','Addis Ketema|አዲስ ከተማ ','Akaky Kaliti|አቃቂ ቃሊቲ','Arada|አራዳ', 'Bole|ቦሌ', 'Gullele|ጉሌሌ','Kirkos|ቂርቆስ','Kolfe Keranio|ኮልፌ ቀራንዮ', 'Lideta|ልደታ','Nifas Silk-Lafto|ንፋስ ስልክ ላፍቶ','Yeka|የካ']);
                                @endphp
                                    <x-common.client.select class="search-fields" :name="'subcity'" :options="$subcity_list" />
                            </x-home-page.filter-container >

                        </div>
                        <div class="row">
                            <x-home-page.filter-container  :label="'Bedroom | መኝታ ቤት'">
                                    <x-common.client.select class="search-fields" :name="'bedroom'" :options="[['value'=>'1','name'=>'1'],['value'=>'2','name'=>'2'],['value'=>'3','name'=>'3'],['value'=>'4','name'=>'4']]" />
                            </x-home-page.filter-container >
                            <x-home-page.filter-container :label="'Area | ስፋት'">
                                <x-common.client.range-slider  :max="100000" :minname="'min_area'" :maxname="'max_area'" :unit="'sqm'"/>
                            </x-home-page.filter-container >

                            <x-home-page.filter-container :label="'Price | ዋጋ'">
                                <x-common.client.range-slider  :max="50000000" :minname="'min_price'" :maxname="'max_price'" :unit="'birr'"/>
                            </x-home-page.filter-container >

                            <x-home-page.filter-container >
                                <button class="btn btn-4 btn-block" type="submit">Filter</button>
                            </x-home-page.filter-container >
                        </div>
                    </form>
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
    <div class="services-2 overview-bgi">
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
                    @for ($i = 0; $i < (4- count($ads)); $i++)
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
</x-common.client.container>
