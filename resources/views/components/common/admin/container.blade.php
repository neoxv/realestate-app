<x-app-layout>
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <x-admin.breadcrumb :page="ucfirst(explode('.',Route::currentRouteName())[1])"/>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          {{-- <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div> --}}
          <ul class="navbar-nav ms-md-auto justify-content-end">
            <li class="nav-item d-flex align-items-center justify-content-around">
                @auth()
                 <li style="color: white;margin-right:15px;margin-top:6px;">
                    {{ ucfirst(Auth::user()->first_name) }} {{ ucfirst(Auth::user()->last_name) }}
                </li>
                <form action="{{route('logout.admin')}}" method="POST">
                    @csrf
                    <button class="btn  btn-link" type="submit" style="color: white" >
                         <i class="fa fa-sign-out me-sm-1"></i>
                        <span class="d-sm-inline d-none">Sign Out</span>
                    </button>
                </form>
                @endauth
                @guest
                    <a href="{{route('login')}}" class="nav-link text-white font-weight-bold px-0">
                        <i class="fa fa-user me-sm-1"></i>
                        <span class="d-sm-inline d-none">Sign In</span>
                    </a>
                @endguest
            </li>

            {{-- <li class="nav-item px-3 dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" >
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                  @for($i=0;$i<3;$i++)
                    <li class="mb-2">
                    <a class="dropdown-item border-radius-md" href="javascript:;">
                        <div class="d-flex py-1">
                        <div class="my-auto">
                            <img src="{{asset('storage/img/avatar.png')}}" class="avatar avatar-sm  me-3 ">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="text-sm font-weight-normal mb-1">
                            <span class="font-weight-bold">New message</span> from Laur
                            </h6>
                            <p class="text-xs text-secondary mb-0">
                            <i class="fa fa-clock me-1"></i>
                            13 minutes ago
                            </p>
                        </div>
                        </div>
                    </a>
                    </li>
                  @endfor
              </ul>
            </li> --}}
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                    <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line bg-white"></i>
                    <i class="sidenav-toggler-line bg-white"></i>
                    <i class="sidenav-toggler-line bg-white"></i>
                    </div>
                </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4" style="overflow-x:hidden">
        {{$slot}}
    </div>

</x-app-layout>
