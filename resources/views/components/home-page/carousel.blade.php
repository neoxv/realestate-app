<div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators4" data-slide-to="0" class="active"></li>
    </ol>
    <div class="carousel-inner">
        @for ($i = 0; $i< 1; $i++)
            <x-home-page.carousel-item class="{{$i == 0?'carousel-item active':'carousel-item'}}"/>
        @endfor
    </div>
</div>
