@props(['title','stockCount','soldCount','icon'=>'fa fa-home'])
<li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
<div class="d-flex align-items-center">
<div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
    <i class="text-white opacity-10 {{$icon}}" ></i>
</div>
<div class="d-flex flex-column">
    <h6 class="mb-1 text-dark text-sm">{{$title}}</h6>
    <span class="text-xs">{{$stockCount}} in stock, <span class="font-weight-bold">{{$soldCount}}+ sold</span></span>
</div>
</div>
<div class="d-flex">
    {{-- button will route as to another page --}}
<button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
</div>
</li>
