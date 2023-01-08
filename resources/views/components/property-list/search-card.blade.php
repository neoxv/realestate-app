@props(['property'=>null])
<div class="property-box-5">
    <div class="row" style="background-color: {{$property->is_rental?'#937666':'#47A8BD'}};">
        <div class="col-lg-5 col-md-5 col-pad" >
            <div class="">
                <a href="{{route('detail',['property'=>$property->id])}}" class="property-img">
                    @if ($property->is_featured && !$property->is_brokered)
                        <div class="listing-badges">
                            <span class="featured">Featured</span>
                        </div>
                    @elseif ($property->is_brokered)
                        <div class="listing-badges">
                            <span class="featured brokered" style="background: #C81011"> {{$property->is_rental?'RENTED':'SOLD'}}</span>
                        </div>
                    @endif
                    <div class="tag-for"  style="background-color: {{$property->is_rental?'#937666':'#47A8BD'}};">{{$property->is_rental?'For Rent':'For Sale'}}</div>
                    <div class="price-ratings-box">
                        <p class="price " style="background-color: {{$property->is_rental?'#937666':'#47A8BD'}};padding:5px 10px 3px 10px;border-radius:2px;">
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
                    <img src="{{asset( $property != null && count($property->documents) > 0 ?'storage/img/properties/'. $property->documents->first()->filename:'storage/img/default.png')}}" alt="property-box-7" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">

                </a>
            </div>
        </div>
        <div class="col-lg-7 col-md-7 align-self-center col-pad"  >
            <div class="detail">
                <a href="{{route('detail',['property'=>$property->id])}}" class="property-img">
                <h1 class="title" style="color:white !important">
                    {{$property->name}}
                </h1>
                <div class="location" style="color:white !important">
                        <i class="fa fa-map-marker" style="color:white !important"></i> {{$property->subcity == "none"?ucfirst($property->address).', '.ucfirst($property->city):ucfirst($property->subcity).", ".ucfirst($property->address)}}
                </div>
                <p style="color:white !important">{{$property->description}}</p>
                <ul class="facilities-list clearfix" style="color:white !important">
                    <li>
                        @if(Auth::check())
                            <form  id="favouriteForm">
                                @csrf
                                <input type="hidden" name="id" value="{{$property->id}}">
                                @if(count($property->users) > 0)
                                    <a onclick="favouriteProperty(event,{{$property->id}})"><i id="{{$property->id . 'icon'}}" class="fa fa-heart" style="color: red" ></i></a></li>
                                @else
                                    <a onclick="favouriteProperty(event,{{$property->id}})"><i id="{{$property->id . 'icon'}}" class="fa fa-heart" style="color:white !important"></i></a></li>
                                @endif
                            </form>
                            @else
                            <a href="{{route('login')}}"><i class="fa fa-heart" style="color:white !important"></i></a></li>
                        @endif
                    </li>
                    <li>
                        <i class="fa fa-home" style="color:white !important"></i> {{ucfirst($property->type)}}
                    </li>
                    <li>
                        <i class="flaticon-square-layouting-with-black-square-in-east-area" style="color:white !important"></i> Sqm:{{$property->area}}
                    </li>
                    @if($property->type == 'house' || $property->type == 'apartment')
                        <li>
                            <i class="flaticon-bed" style="color:white !important"></i> {{$property->bedroom??0}} Beds
                        </li>
                        <li>
                            <i class="flaticon-bath" style="color:white !important"></i> {{$property->bathroom??0}} Baths
                        </li>
                    @endif
                    {{-- <li>
                        <i class="flaticon-car-repair"></i> 1 Garage
                    </li> --}}
                </ul>
            </a>
            </div>
        </div>
    </div>
</div>
<script>

  function favouriteProperty(event,property){
      event.preventDefault();
      let _token = $("input[name=_token]").val();
         $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': _token
                  }
              });
      $.ajax({
        url: "{{route('favourite')}}",
        type:"POST",
        data:{
          id:property,
          user: "{{Auth::user()?Auth::user()->id:''}}"
        },
        success:function(response){
            // console.log(response);
          if(response.success) {
            let icon = document.getElementById(response.icon)
            if(!response.favourite){
                icon.style.color = '#535353'
            }else{
                icon.style.color = 'red';
            }
          }
        },
        error:function(response){
            // console.log(response)
        }
       });
}
</script>
