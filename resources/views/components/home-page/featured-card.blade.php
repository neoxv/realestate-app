@props(['property'])

<div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="3, 2">
    <div class="property-box-7">
        <div class="property-thumbnail">
            <a href="properties-details.html" class="property-img">
                <div class="tag-2">{{$property->is_rental?'For Rent':'For Sale'}}</div>
                <div class="price-box"><span>{{number_format($property->price)}} Birr </span>{{$property->is_negotiable?'Negotioable':'Fixed'}} </div>
                <img src="{{asset(count($property->documents) > 0 ?'storage/img/properties/'. $property->documents->first()->filename:'storage/img/default.png')}}" alt="property-box-7" class="img-fluid" style="width: 100%; height: 15vw; object-fit: cover;">
            </a>
        </div>
        <div class="detail">
            <h1 class="title">
                <a href="properties-details.html">{{$property->name}}</a>
            </h1>
            <div class="location">
                <a href="properties-details.html">
                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>{{$property->address}},
                </a>
            </div>
        </div>
        <ul class="facilities-list clearfix">
            <li>
                <span>Area</span>{{$property->area}} Sqm
            </li>
            <li>
                <span>Beds</span> {{$property->bedroom}}
            </li>
            <li>
                <span>Baths</span> {{$property->bathroom}}
            </li>
            <li>
                <span>Garage</span> 1
            </li>
        </ul>
        <div class="footer clearfix">
            <div class="pull-left days">
                <p><i class="fa fa-home"></i> {{ucfirst($property->type)}}</p>
            </div>
            <ul class="pull-right">
                <li><a href="#"><i class="flaticon-heart-shape-outline"></i></a></li>
                <li><a href="#"><i class="flaticon-calendar"></i></a></li>
            </ul>
        </div>
    </div>
</div>
