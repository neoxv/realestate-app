<div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators4" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators4" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators4" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators4" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators4" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
        @for ($i = 0; $i< 5; $i++)
            @if($i == 0)
                <x-welcome.carousel-item class="carousel-item active"/>
            @else
                <x-welcome.carousel-item class="carousel-item"/>
            @endif
        @endfor
    </div>
</div>
