<div class="col-lg-6 col-md-6 col-sm-12 wow fadeInLeft delay-04s">
    <div class="row agent-4">
        <div class="col-lg-5 col-md-12 col-pad">
            <div class="photo">
                <img src="{{asset('storage/img/avatar.png')}}" alt="avatar-4" class="img-fluid">
                <div class="overlay">
                    <div class="border">
                        <div class="icon-holder">
                            <a href="{{config('app.facebook')}}" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                        </div>
                        <div class="icon-holder">
                            <a href="{{config('app.telegram')}}" class="twitter-bg"><i class="fa fa-telegram"></i></a>
                        </div>
                        <div class="icon-holder">
                            <a href="{{'mailto:'.config('app.email')}}" class="google-bg"><i class="fa fa-envelope-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7 col-md-12 col-pad align-self-center">
            <div class="details">
                <h3><a href="#">Zerubabel Getachew</a></h3>
                <h6>Office Manager</h6>
                <div class="contact">
                    <p>
                        <a href="{{'mailto:'.config('app.email')}}"><i class="fa fa-envelope-o"></i>{{config('app.email')}}</a>
                    </p>
                    <p>
                        <a href="{{'tel:'.config('app.phone')}}"> <i class="fa fa-phone"></i>{{config('app.phone')}}</a>
                    </p>
                    @if (config('app.second_phone') != null || config('app.second_phone') != '' )
                        <p>
                            <a href="{{'tel:'.config('app.second_phone')}}"> <i class="fa fa-phone"></i>{{config('app.second_phone')}}</a>
                        </p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
