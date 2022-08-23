<!-- Top header start -->
<header class="top-header th-bg" id="top-header-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-7">
                <div class="list-inline">
                    <i class="fa fa-envelope" style="color:white; margin-right:4px"></i><a href="{{'mailto:'. config('app.email')}}">{{config('app.email')}}</a>
                    <i class="fa fa-phone" style="color:white;margin-right:4px"></i><a href="{{'tel:'.config('app.phone')}}">{{config('app.phone')}}</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-5 ">
                <ul class="top-social-media pull-right d-flex">
                @auth()
                <li style="color: white">
                    {{ ucfirst(Auth::user()->first_name) }} {{ ucfirst(Auth::user()->last_name) }}
                </li>
                    <li>
                        <form action="{{route('logout')}}" method="POST">
                        @csrf
                            <button class="btn sign-in btn-link" type="submit" style="color: white" ><i class="fa fa-sign-in"></i> Logout </button>
                        </form>
                    </li>
                @endauth
                @guest()
                    <li>
                        <a href="{{route('login')}}" class="sign-in"><i class="fa fa-sign-in"></i> Login </a>
                    </li>
                    <li>
                        <a href="{{route('register')}}" class="sign-in"><i class="fa fa-user"></i> Register</a>
                    </li>
                @endguest

                </ul>
            </div>
        </div>
    </div>
</header>
<!-- Top header end -->
