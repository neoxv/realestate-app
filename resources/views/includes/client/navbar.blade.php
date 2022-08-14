
<x-common.client.header/>
<!-- main header start -->
<header class="main-header sticky-header" id="main-header-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light rounded">
                    <a class="navbar-brand logo" href="{{route('home')}}">
                        <img src="{{asset('storage/img/settings/' . config('app.logo'))}}" alt="logo" style="border-radius: 10px">
                    </a>
                    <button class="navbar-toggler" type="button" id="drawer">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav justify-content-end ml-auto">
                            <li class="nav-item dropdown active">
                                <a class="nav-link " href="{{route('home')}}" id="navbarDropdownMenuLink"
                                     aria-haspopup="true" aria-expanded="false">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{route('user.property.list')}}" id="navbarDropdownMenuLink2"
                                     aria-haspopup="true" aria-expanded="false">
                                    Properties
                                </a>
                            </li>
                            @auth
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="{{route('profile')}}" id="navbarDropdownMenuLink2"
                                        aria-haspopup="true" aria-expanded="false">
                                        Profile
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="{{route('favourites',['user'=> Auth::user()->id])}}" id="navbarDropdownMenuLink2"
                                        aria-haspopup="true" aria-expanded="false">
                                        Favourites
                                    </a>
                                </li>
                            @endauth

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{route('contact')}}" id="navbarDropdown3" role="button"
                                   aria-haspopup="true" aria-expanded="false">
                                    Contact
                                </a>
                            </li>
                            <li class="nav-item " style="padding:30px 17px 35px">
                                    <form class="form-inline my-2 my-lg-0" action="{{route('user.property.search')}}" method="post">
                                        @csrf
                                    <input class="form-control mr-2" type="search" placeholder="Search" name="search" aria-label="Search" value="{{$key}}">
                                    <button   class="btn my-2 my-sm-0" style="color: white; background-color:#3f56ff;padding:6px" type="submit"><i class="fa fa-search" ></i> Search</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- main header end -->
