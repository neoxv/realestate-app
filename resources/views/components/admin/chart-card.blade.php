@props(['title','subtitle','id'])
<div class="card z-index-2 h-100">
<div class="card-header pb-0 pt-3 bg-transparent">
    <h6 class="text-capitalize">{{ucwords($title)}}</h6>
    <p class="text-sm mb-0">
    <i class="fa fa-arrow-up text-success"></i>
    <span class="font-weight-bold">{{$subtitle}}</span>
    </p>
</div>
<div class="card-body p-3">
    <div class="chart">
    <canvas id="{{$id}}" class="chart-canvas" height="300"></canvas>
    </div>
</div>
</div>
