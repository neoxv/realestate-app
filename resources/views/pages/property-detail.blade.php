

<x-common.client.container>
<!-- Sub banner start -->
<x-common.client.sub-banner :title="'Property Detail'"/>
<!-- Sub banner end -->

<!-- Properties details page start -->
<div class="properties-details-page content-area-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="propertiesDetailsSlider" class="carousel properties-details-sliders slide mb-60">
                    <div class="heading-properties-2">
                       <div class="row">
                           <div class="col-lg-12">
                               <div class="informeson">
                                   <h1>{{$property->name}}<span>{{number_format($property->price)}} Birr</span></h1>
                                   <div>
                                       <div class="float-left">
                                           <ul class="clearfix">
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
                                            <li>
                                                 <p><i class="fa fa-home"></i> {{ucfirst($property->type)}}</p>
                                            </li>
                                            @if($property->type == 'house' || $property->type == 'apartment')
                                                <li>
                                                    <i class="flaticon-bed"></i> {{$property->bedroom??0}} Beds
                                                </li>
                                                <li>
                                                    <i class="flaticon-bath"></i> {{$property->bathroom??0}} Baths
                                                </li>
                                            @endif
                                               <li><i class="flaticon-square-layouting-with-black-square-in-east-area"></i>{{number_format($property->area)}} sqm</li>
                                           </ul>
                                       </div>
                                       <div class="float-right">
                                           <p>{{$property->address}}</p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                    </div>
                    <!-- main slider carousel items -->
                    <div class="carousel-inner">
                        @if (count($property->documents) > 0)
                            @foreach ($property->documents as $document )
                                <div class="{{$loop->first?'active item carousel-item': 'item carousel-item'}}item carousel-item" data-slide-number="{{$loop->index}}">
                                        <img src="{{asset( 'storage/img/properties/'. $document->filename)}}"  alt="properties-photo" style="width:100%; height:60vh;object-fit:cover">
                                </div>
                            @endforeach
                        @else
                            <div class="active item carousel-item" data-slide-number="0">
                                <img src="{{asset( 'storage/img/default.png')}}"  alt="properties-photo"  style="width:100%; height:60vh;object-fit:cover" >
                            </div>
                        @endif
                    </div>
                    <!-- main slider carousel nav controls -->
                    <ul class="carousel-indicators sp-2 smail-properties list-inline nav nav-justified ">
                        @if (count($property->documents) > 0)
                            @foreach ($property->documents as $document )
                                <li class="{{$loop->first?'list-inline-item active':'list-inline-item'}}">
                                    <a id="carousel-selector-0" class="{{$loop->first?'selected':''}}" data-slide-to="{{$loop->index}}" data-target="#propertiesDetailsSlider">
                                        <img src="{{asset( 'storage/img/properties/'. $document->filename)}}"  alt="properties-photo-smale" style="height: 90px; object-fit:cover">
                                    </a>
                                </li>
                            @endforeach
                        @else
                            <li class="list-inline-item active">
                                    <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#propertiesDetailsSlider">
                                        <img src="{{asset('storage/img/default.png')}}" class="img-fluid" alt="properties-photo-smale"  style="height: 90px; object-fit:cover">
                                    </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-12 slider">
                <!-- Property description start -->
                <div class="property-description mb-60">
                    <h3 class="heading-3">Property Description</h3>
                    <p>{{$property->description}}</p>
                </div>
                <!-- Property details start -->
                <div class="property-details mb-45">
                    <h3 class="heading-3">Property Details</h3>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li>
                                    <strong>Property Id:</strong>{{$property->number}}
                                </li>
                                <li>
                                    <strong>Price:</strong>{{$property->price}} Birr
                                </li>
                                <li>
                                    <strong>Property Type:</strong>{{ucfirst($property->type)}}
                                </li>
                                @if($property->type == 'house' || $property->type == 'apartment')
                                    <li>
                                        <strong>Bathrooms:</strong>{{$property->bathroom}}
                                    </li>
                                    <li>
                                        <strong>Bathrooms:</strong>{{$property->bedroom}}
                                    </li>
                                @endif
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li>
                                    <strong>Property Area:</strong>{{$property->area}}
                                </li>
                                <li>
                                    <strong>City:</strong>{{ucfirst($property->city)}}
                                </li>
                                <li>
                                    <strong>Type:</strong>{{ucfirst($property->type)}}
                                </li>
                                @if ($property->city == 'addis ababa')
                                <li>
                                    <strong>Subcity:</strong>{{ucfirst($property->subcity)}}
                                </li>
                                <li>
                                    <strong>Adress:</strong>{{$property->address}}
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Features opions start -->
                <div class="features-opions af mb-45">
                    <h3 class="heading-3">Features</h3>
                    <div class="row">
                        <ul class="d-flex flex-wrap">
                            @foreach (explode(",",$property->amenities) as $amenity )
                            @if ($amenity)
                                    <li class="col-md-4 col-sm-6">
                                    <i class="flaticon-draw-check-mark"></i>
                                       {{$amenity}}
                                    </li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- Property vedio start -->
                @if ($property->video != null || $property->video != '')
                    <div class="property-video mb-60">
                        <h3 class="heading-3">Property Video</h3>
                        <iframe src="{{$property->video}}" allowfullscreen></iframe>
                    </div>
                @endif

                <!-- Section Location start -->
                {{-- <div class="section-location mb-60">
                    <h3 class="heading-3">Property Location</h3>
                    <div class="map">
                        <div id="contactMap" class="contact-map"></div>
                    </div>
                </div> --}}
                <!-- Related properties start -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="sidebar mbl">
                    <!-- Recent posts start -->
                    <div class="widget recent-posts">
                        <h5 class="sidebar-title">Recent Properties</h5>
                        @foreach ($recents as $recent)
                            @if ($recent->id != $property->id)
                                <div class="media mb-4">
                                    <a href="{{route('detail',['property'=>$recent->id])}}">
                                        <img src="{{asset(count($recent->documents) > 0 ?'storage/img/properties/'. $recent->documents->first()->filename:'storage/img/default.png')}}" alt="sub-property">
                                    </a>
                                    <div class="media-body align-self-center">
                                        <h5>
                                            <a href="{{route('detail',['property'=>$recent->id])}}">{{$recent->name}} </a>
                                        </h5>
                                        <p>{{$recent->created_at}}| {{$recent->price}} Birr</p>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <!-- Social list start -->
                    <div class="social-list widget clearfix">
                        <h5 class="sidebar-title">Follow Us</h5>
                        <ul>
                            <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="rss-bg"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <!-- Sell Your Property -->
                    <div class="sell-your-properties">
                        <h3>Sell Your Property</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tortor dui, scelerisque ac nisi</p>
                        <p></p>
                        <a href="{{route('contact')}}" class="btn btn-md btn-color">Contact Us Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="related-properties hedin-mb-30">
            <h3 class="heading-3">Related Properties</h3>
            <div class="container">
                <div class="row filter-portfolio wow fadeInUp delay-04s">
                    <div class="cards d-flex ">
                        @foreach ($related as $item)
                            @if ($item->id != $property->id)
                                    <x-home-page.featured-card :property='$item'/>
                            @elseif (count($related) < 2 )
                                <p>Not Found.</p>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Properties details page start -->

<x-user-profile.footer/>

</x-common.client.container>
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
                let route = window.location.href
                if(route.includes('/property/favourite/')){
                    location.reload()
                }
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
