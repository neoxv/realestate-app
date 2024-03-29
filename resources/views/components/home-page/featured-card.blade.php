@props(['property'])

<div class="col-lg-4 col-md-4 col-sm-12 filtr-item mb-2" data-category="3, 2">
    <div class="property-box-7">


        <div class="property-thumbnail">
                @if ($property->is_brokered)
                        <div class="ribbon ribbon-top-right" style="z-index: 100;"><span>  {{$property->is_rental?'RENTED':'SOLD'}}</span></div>
                @endif
            <a href="{{$property->is_brokered?'#':route('detail',['property'=>$property->id])}}" class="property-img">


                <div class="tag-2" style="background-color: {{$property->is_rental?'#937666':'#47A8BD'}};">
                    {{$property->is_rental?'For Rent':'For Sale'}}</div>
                <div class="price-box"><span>{{number_format($property->price)}} Birr </span>{{$property->is_negotiable?'Negotioable':'Fixed'}} </div>
                <img src="{{asset(count($property->documents) > 0 ?'storage/img/properties/'. $property->documents->first()->filename:'storage/img/default.png')}}" alt="property-box-7" class="img-fluid" style="width: 100%; height: 288px; object-fit: cover;">
            </a>
        </div>
        <div class="detail" >
            <h1 class="title">
                <a href="{{$property->is_brokered?'#':route('detail',['property'=>$property->id])}}">{{$property->name}}</a>
            </h1>
            <div class="location">
                <a href="{{$property->is_brokered?'#':route('detail',['property'=>$property->id])}}">
                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>{{$property->subcity == "none"?ucfirst($property->address).', '.ucfirst($property->city):ucfirst($property->subcity).", ".ucfirst($property->address)}}
                </a>
            </div>
        </div>
        <ul class="facilities-list clearfix" >
            <li>
                {{$property->area}} Sqm
            </li>
            <li>
                 {{$property->bedroom??0}} Beds
            </li>
            <li>
               {{$property->bathroom??0}} Bathrooms
            </li>
            <li>
                 <i class="fa fa-calendar" aria-hidden="true"></i> {{ (new \Carbon\Carbon($property->created_at))->format('M d Y')}}
            </li>
        </ul>
        <div class="footer clearfix" style="background-color: {{$property->is_rental?'#937666':'#47A8BD'}};">
            <div class="pull-left days">
                <p style="color: white"><i class="fa fa-home" style="color:white"></i> {{ucfirst($property->type)}}</p>
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
                        <a onclick="favouriteProperty(event,{{$property->id}})"><i id="{{$property->id . 'icon'}}" class="fa fa-heart " style="color: white" ></i></a></li>
                    @endif
                </form>
                @else
                 <a href="{{route('login')}}"><i class="fa fa-heart" style="color: white" ></i></a></li>
                @endif
            </li>
                <li><a href="tel:{{isset($property->agent_phonenumber)? $property->agent_phonenumber != ""? $property->agent_phonenumber:config('app.phone'):null}}"><i class="fa fa-phone" style="color: white"></i></a></li>
            </ul>
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
