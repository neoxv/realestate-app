
<x-common.header/>
<!-- main header start -->
<header class="main-header sticky-header" id="main-header-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light rounded">
                    <a class="navbar-brand logo" href="index.html">
                        <img src="{{asset('client-assets/img/logos/black-logo.png')}}" alt="logo">
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
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Properties
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">List
                                            Layout</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="properties-list-rightside.html">Right
                                                    Sidebar</a></li>
                                            <li><a class="dropdown-item" href="properties-list-leftside.html">Left
                                                    Sidebar</a></li>
                                            <li><a class="dropdown-item"
                                                    href="properties-list-fullwidth.html">Fullwidth</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Grid
                                            Layout</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="properties-grid-rightside.html">Right
                                                    Sidebar</a></li>
                                            <li><a class="dropdown-item" href="properties-grid-leftside.html">Left
                                                    Sidebar</a></li>
                                            <li><a class="dropdown-item"
                                                    href="properties-grid-fullwidth.html">Fullwidth</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Map
                                            View</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="properties-map-rightside-list.html">Map
                                                    List Right Sidebar</a></li>
                                            <li><a class="dropdown-item" href="properties-map-leftside-list.html">Map
                                                    List Left Sidebar</a></li>
                                            <li><a class="dropdown-item" href="properties-map-rightside-grid.html">Map
                                                    Grid Right Sidebar</a></li>
                                            <li><a class="dropdown-item" href="properties-map-leftside-grid.html">Map
                                                    Grid Left Sidebar</a></li>
                                            <li><a class="dropdown-item" href="properties-map-full.html">Map
                                                    FullWidth</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"
                                            href="#">Property Detail</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="properties-details.html">Property Detail
                                                    1</a></li>
                                            <li><a class="dropdown-item" href="properties-details-2.html">Property
                                                    Detail 2</a></li>
                                            <li><a class="dropdown-item" href="properties-details-3.html">Property
                                                    Detail 3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            @auth
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink7"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        My Account
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li>
                                            <a class="dropdown-item" href="{{route('profile')}}">Profile</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="favorited-properties.html">Favorited
                                            Properties</a>
                                        </li>
                                    </ul>
                                </li>
                            @endauth

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Contact
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                    <a class="dropdown-item" href="contact-1.html">Contact 1</a>
                                    <a class="dropdown-item" href="contact-2.html">Contact 2</a>
                                    <a class="dropdown-item" href="contact-3.html">Contact 3</a>
                                </div>
                            </li>
                            <li class="nav-item " style="padding:30px 17px 35px">
                                    <form class="form-inline my-2 my-lg-0">
                                    <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
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
