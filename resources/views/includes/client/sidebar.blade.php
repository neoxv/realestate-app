<!-- Sidenav start -->
<nav id="sidebar" class="nav-sidebar">
    <!-- Close btn-->
    <div id="dismiss">
        <i class="fa fa-close"></i>
    </div>
    <div class="sidebar-inner">
        <div class="sidebar-logo">
            <img src="{{asset('storage/img/settings/' . config('app.logo'))}}" alt="sidebarlogo" style="border-radius: 10px">
        </div>
        <div class="sidebar-navigation">
            <h3 class="heading">Pages</h3>
            <ul class="menu-list">
                <li><a href="{{route('home')}}" class="active pt0">Home </a>
                </li>
                <li>
                    <a href="{{route('user.property.list')}}">Properties </a>
                </li>
                @auth
                <li>
                    <a href="{{route('profile')}}">Profile </a>
                </li>
                <li>
                    <a href="{{route('favourites',['user'=> Auth::user()->id])}}">Favourites </a>
                </li>
                @endauth
                <li><a href="{{route('contact')}}">Contact </a>
                </li>
            </ul>
        </div>
        <div class="get-in-touch">
            <h3 class="heading">Get in Touch</h3>
            <div class="media">
                <i class="fa fa-phone"></i>
                <div class="media-body">
                    <a href="{{'tel:'.config('app.phone')}}">{{config('app.phone')}}</a>
                </div>
            </div>
            <div class="media">
                <i class="fa fa-envelope"></i>
                <div class="media-body">
                   <a href="{{'mailto:'. config('app.email')}}">{{config('app.email')}}</a>
                </div>
            </div>
        </div>
        {{-- <div class="get-social">
            <h3 class="heading">Get Social</h3>
            <a href="#" class="facebook-bg">
                <i class="fa fa-facebook"></i>
            </a>
            <a href="#" class="twitter-bg">
                <i class="fa fa-twitter"></i>
            </a>
            <a href="#" class="google-bg">
                <i class="fa fa-google"></i>
            </a>
            <a href="#" class="linkedin-bg">
                <i class="fa fa-linkedin"></i>
            </a>
        </div> --}}
    </div>
</nav>
<!-- Sidenav end -->
