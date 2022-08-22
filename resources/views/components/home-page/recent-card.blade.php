@props(['property'])
<div class="col-lg-3 col-md-6 col-sm-12 wow fadeInLeft delay-04s">
    <div class="property-box-8">
        <div class="photo-thumbnail">
            <div class="photo">
                <img src="{{asset(count($property->documents) > 0 ?'storage/img/properties/'. $property->documents->first()->filename:'storage/img/default.png')}}" alt="property-box-8" class="img-fluid" style="width: 100%; height: 10vw; object-fit: cover;">
                <a href="properties-details.html">
                    <span class="blog-one__plus"></span>
                </a>
            </div>
            <div class="tag-for">{{$property->is_rental?'For Rent':'For Sale'}}</div>
            <div class="price-ratings-box">
                <p class="price">
                    {{number_format($property->price)}} Birr
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
                    <a href="properties-details.html">{{$property->name}}</a>
                </h3>
                <div class="location">
                    <a href="properties-details.html">
                        <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>{{$property->address}},
                    </a>
                </div>
            </div>
            <div class="properties-listing">
                <span>{{$property->bedroom??0}} Beds</span>
                <span>{{$property->bathroom??0}} Baths</span>
                <span>{{$property->area}} sqmt</span>
            </div>
        </div>
    </div>
</div>
