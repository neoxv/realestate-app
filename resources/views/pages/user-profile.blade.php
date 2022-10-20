<x-common.client.container>
<!-- Sub banner start -->
<x-common.client.sub-banner :title="'Profile'"/>
<!-- Sub banner end -->

<!-- User page start -->
<div class="user-page content-area-7 submit-property">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="user-profile-box mrb" >
                        <!--header -->
                        <div class="header clearfix" style="background-image: url({{asset('img/banners/img-4.jpg')}})">
                            <h2>{{ucfirst(Auth::user()->first_name)}} {{ucfirst(Auth::user()->last_name)}}</h2>
                            <img src="{{asset('img/avatar.png')}}" alt="avatar" class="img-fluid profile-img" style="background-color: white">
                        </div>
                        <!-- Detail -->
                        <div class="detail clearfix">
                            <ul>
                                <li>
                                    <a href="{{route('profile')}}" class="active">
                                        <i class="flaticon-user"></i>Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('favourites',['user'=> Auth::user()->id])}}">
                                        <i class="flaticon-heart-shape-outline"></i>Favourited Properties
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('profile.password')}}">
                                        <i class="flaticon-locked-padlock"></i>Change Password
                                    </a>
                                </li>
                                <form id="logout" action="{{route('logout')}}" method="post">
                                    @csrf
                                    <li>
                                        <a onclick="(function(){document.getElementById('logout').submit()})()" class="border-bto2">
                                            <i class="flaticon-logout"></i>Log Out
                                        </a>
                                    </li>
                                </form>
                            </ul>
                        </div>
                    </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="my-address contact-2">
                    <h3 class="heading-3">Profile Details</h3>
                    <form action="#" method="POST" action="{{route('profile')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{Auth::user()->id}}">
                        <div class="row">
                            <div class="col-lg-12 ">
                                <div class="form-group name">
                                    <label>Your Name</label>
                                    <input type="text" name="name" class="form-control" value="{{ucfirst(Auth::user()->first_name) . " " . ucfirst(Auth::user()->last_name)}}" placeholder="John Deo">
                                </div>
                            </div>
                            <div class="col-lg-12 ">
                                <div class="form-group subject">
                                    <label>Phone</label>
                                    <input type="text" name="phone" value="{{Auth::user()->phone}}" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-lg-12 ">
                                <div class="form-group number">
                                    <label>Email</label>
                                    <input type="email" name="email" value="{{Auth::user()->email}}" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="send-btn">
                                    <button type="submit" class="btn btn-4">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- User page end -->
<x-user-profile.footer/>

</x-common.client.container>



