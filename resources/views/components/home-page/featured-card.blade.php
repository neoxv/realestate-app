@props(['property'])
<div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="3, 2">
    <div class="property-box-7">
        <div class="property-thumbnail">
            <a href="properties-details.html" class="property-img">
                <div class="tag-2">{{$property->is_rental?'For Rent':'For Sale'}}</div>
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
