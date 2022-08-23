<!-- Footer start -->
<footer class="footer-1">
    <div class="container footer-inner">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>Contact Us</h4>
                    <ul class="contact-info">
                        <li>
                            <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>{{config('app.address')}}
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i><a href="{{'mailto:'. config('app.email')}}">{{config('app.email')}}</a>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i><a href="{{'tel:'.config('app.phone')}}">{{config('app.phone')}}</a>
                        </li>
                </div>
            </div>
            {{-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>
                        Useful Links
                    </h4>

                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="footer-item recent-posts">
                    <h4>Heading</h4>
                </div>
            </div> --}}

        </div>
    </div>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    {{-- portfolio link --}}
                </div>
                <div class="col-lg-4 col-md-12">
                    <ul class="social-list clearfix">
                        <li><a href="{{config('app.facebook')}}" target="_blank" ><i class="fa fa-facebook" style="color:#4867aa" ></i></a></li>
                        <li><a href="{{config('app.youtube')}}" target="_blank"><i class="fa fa-youtube-play" style="color:#fb3958"></i></a></li>
                        <li><a href="{{config('app.telegram')}}" target="_blank" ><i class="fa fa-telegram" style="color:#1c82ca"></i></a></li>
                        <li><a href="{{config('app.tiktok')}}" target="_blank" ><img src="{{asset('storage/img/others/tik-tok.png')}}" style="width: 20px;" alt=""></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->
