@props(['title'=>'title' ])
<div class="sub-banner" style="background-image: url({{asset('img/banners/img-5.jpg')}}">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>{{strtoupper($title)}}</h1>
            <ul class="breadcrumbs">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">{{ucfirst($title)}}</li>
            </ul>
        </div>
    </div>
</div>
