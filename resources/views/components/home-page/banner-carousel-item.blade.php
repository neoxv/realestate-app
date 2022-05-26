@props(['header', 'subheader', 'image', 'link','buttonTitle','active'=>false])

<div class="{{$active ? 'carousel-item  item-bg active':'carousel-item  item-bg'}}">
    <img class="d-block w-100 h-100" src="{{$image}}" alt="banner">
    <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
        <div class="carousel-content container b1-inner-2">
            <div {{ $attributes}}>
                <h5 data-animation="animated fadeInDown delay-05s">{{$subheader}}</h5>
                <h1 data-animation="animated fadeInDown delay-05s">{{$header}}</h1>
                <a data-animation="animated fadeInUp delay-10s" href="{{$link}}" class="btn btn-2 btn-theme"><span>{{$buttonTitle}}</span></a>
            </div>
        </div>
    </div>
</div>
