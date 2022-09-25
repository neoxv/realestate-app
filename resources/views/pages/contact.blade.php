<x-common.client.container>
<!-- Sub banner start -->
<x-common.client.sub-banner :title="'Contact'"/>
<!-- Sub banner end -->
<!-- Contact 3 start -->
<div class="contact-3 content-area-2">
    <div class="container">
        <div class="main-title">
            <h1>Contact Us</h1>
            <p>Lets have a talk.</p>
        </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 ">
                    <div class="contact-info text-center " >
                        <h3 class="m-0">Contact Info</h3>
                    </div>
                        <div class="mb-40 d-flex justify-content-around">
                            <div class="ci-box d-flex flex-column justify-content-center">
                                <div class="icon text-center">
                                    <i class="fa fa-map-marker fa-4x " style="color:#007bff"></i>
                                </div>
                                <div class="detail text-center mt-2">
                                    <h5>Address</h5>
                                    <p>{{$setting->address??"Addis Ababa"}}</p>
                                </div>
                            </div>
                            <div class="ci-box d-flex flex-column justify-content-center">
                                <div class="icon text-center">
                                    <i class="fa fa-phone fa-4x" style="color:#007bff"></i>
                                </div>
                                <div class="detail text-center mt-2">
                                    <h5>Phone</h5>
                                    <p><a href="{{'tel:'.$setting->primary_phone}}">{{$setting->primary_phone}}</a> </p>
                                </div>
                            </div>
                            <div class="ci-box d-flex flex-column justify-content-center">
                                <div class="icon text-center mt-2">
                                    <i class="fa fa-envelope fa-4x" style="color:#007bff"></i>
                                </div>
                                <div class="detail text-center">
                                    <h5>Email</h5>
                                    <p><a href="{{'mailto:'.$setting->email}}">{{$setting->email}}</a></p>
                                </div>
                            </div>
                        </div>
                    <div class="contact-info mt-2 text-center">
                        <h3>Follow Us</h3>
                        <ul class="social-list clearfix">
                            <li><a href="{{url($setting->facebook??"")}}" target="_blank" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{url($setting->youtube??"")}}" target="_blank" class="google-bg"><i class="fa fa-youtube-play"></i></a></li>
                            <li><a href="{{url($setting->telegram??"")}}" target="_blank" class="linkedin-bg"><i class="fa fa-telegram"></i></a></li>
                            <li><a href="{{url($setting->tiktok??"")}}" target="_blank" class=""><img src="{{asset('storage/img/others/tik-tok.png')}}" style="width: 45px;" alt=""></a></li>

                        </ul>
                    </div>
                </div>
            </div>
    </div>
</div>
<x-user-profile.footer/>

</x-common.client.container>
