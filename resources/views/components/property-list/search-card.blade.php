@props(['property'=>null])
<div class="property-box-5">
    <div class="row">
        <div class="col-lg-5 col-md-5 col-pad">
            <div class="property-thumbnail">
                <a href="{{route('detail')}}" class="property-img">
                    <div class="listing-badges">
                        <span class="featured">Featured</span>
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
                    <img src="{{asset( $property != null && count($property->documents) > 0 ?'client-assets/img/property/'. $property->documents->first()->filename:'default.png')}}" alt="property-box-7" class="img-fluid" style="width: 100%; height: 10vw; object-fit: cover;">

                </a>
                <div class="property-overlay">
                    <a href="properties-details.html" class="overlay-link">
                        <i class="fa fa-link"></i>
                    </a>
                    <a class="overlay-link property-video" title="Test Title">
                        <i class="fa fa-video-camera"></i>
                    </a>
                    <div class="property-magnify-gallery">
                        <a href="assets/img/property/img-1.jpg" class="overlay-link">
                            <i class="fa fa-expand"></i>
                        </a>
                        <a href="assets/img/property/img-2.jpg" class="hidden"></a>
                        <a href="assets/img/property/img-3.jpg" class="hidden"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7 col-md-7 align-self-center col-pad">
            <div class="detail">
                <!-- title -->
                <h1 class="title">
                    <a href="properties-details.html">Modern Family Home</a>
                </h1>
                <!-- Location -->
                <div class="location">
                    <a href="properties-details.html">
                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                    </a>
                </div>
                <!-- Paragraph -->
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy<span class="d-none-1200">nibh euismod…</span></p>
                <!--  Facilities list -->
                <ul class="facilities-list clearfix">
                    <li>
                        <i class="flaticon-bed"></i> 3 Beds
                    </li>
                    <li>
                        <i class="flaticon-bath"></i> 2 Baths
                    </li>
                    <li>
                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                    </li>
                    <li>
                        <i class="flaticon-car-repair"></i> 1 Garage
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
