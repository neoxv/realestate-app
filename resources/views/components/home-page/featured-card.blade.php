@props(['property'])

<div class="col-lg-4 col-md-4 col-sm-12 filtr-item" data-category="3, 2">
    <div class="property-box-7">
        <div class="property-thumbnail">
            <a href="{{route('detail',['property'=>$property->id])}}" class="property-img">
                <div class="tag-2">{{$property->is_rental?'For Rent':'For Sale'}}</div>
                <div class="price-box"><span>{{number_format($property->price)}} Birr </span>{{$property->is_negotiable?'Negotioable':'Fixed'}} </div>
                <img src="{{asset(count($property->documents) > 0 ?'storage/img/properties/'. $property->documents->first()->filename:'storage/img/default.png')}}" alt="property-box-7" class="img-fluid" style="width: 100%; height: 15vw; object-fit: cover;">
            </a>
        </div>
        <div class="detail">
            <h1 class="title">
                <a href="{{route('detail',['property'=>$property->id])}}">{{$property->name}}</a>
            </h1>
            <div class="location">
                <a href="{{route('detail',['property'=>$property->id])}}">
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
            <li>
                @if(Auth::check())
                <form  id="favouriteForm">
                    @csrf
                    <input type="hidden" name="id" value="{{$property->id}}">
                    @if(count($property->users) > 0)
                        <a onclick="favouriteProperty(event,{{$property->id}})"><i id="{{$property->id . 'icon'}}" class="fa fa-heart" style="color: red" ></i></a></li>
                    @else
                        <a onclick="favouriteProperty(event,{{$property->id}})"><i id="{{$property->id . 'icon'}}" class="fa fa-heart" ></i></a></li>
                    @endif
                </form>
                @else
                 <a href="{{route('login')}}"><i class="fa fa-heart" ></i></a></li>
                @endif
            </li>
                <li><a href="#"><i class="fa fa-phone"></i></a></li>
            </ul>
        </div>
    </div>
</div>

