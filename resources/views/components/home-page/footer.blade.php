<!-- Footer 2 start -->
<footer class="footer-2 bg-white">
    <div class="footer-wrapper">
        <div class="row align-items-end">
            <div class="col-lg-6 col-pad">
                <div class="footer-left" >
                    <div class="inner" >
                        <span>Ready To Do This</span>
                        <h2>Let's get <br> to work</h2>
                        <a href="{{route('contact')}}" class="btn btn-lg btn-white-lg-outline">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-pad">
                <div class="footer-right" >
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="footer-link">
                                <h4>Useful Links</h4>
                                <ul class="links">
                                    <li><a href="{{route('user.property.list')}}">Properties</a></li>
                                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12 mt_mobile--30">
                            <div class="footer-link"><h4>Say Hello</h4>
                                <ul class="links mb-30">
                                    <li>
                                        <a href="{{'mailto:'.config('app.email')}}">{{config('app.email')}}</a>
                                    </li>
                                    <li>
                                    <a href="{{'tel:'.config('app.phone')}}">{{config('app.phone')}}</a>
                                    </li>
                                </ul>
                                <ul class="social-share d-flex">
                                    <li><a href="{{config('app.facebook')}}" target="_blank" ><i class="fa fa-facebook" style="color:#4867aa" ></i></a></li>
                                    <li><a href="{{config('app.youtube')}}" target="_blank"><i class="fa fa-youtube-play" style="color:#fb3958"></i></a></li>
                                    <li><a href="{{config('app.telegram')}}" target="_blank" ><i class="fa fa-telegram" style="color:#1c82ca"></i></a></li>
                                    <li><a href="{{config('app.tiktok')}}" target="_blank" ><img src="{{asset('storage/img/others/tik-tok.png')}}" style="width: 20px;" alt=""></a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            {{-- portfolio link --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer 2 end -->
