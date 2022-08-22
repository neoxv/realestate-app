@props(['title','subtitle'=>'','show'=>false,'buttonurl','buttontitle'])
<div {{$attributes->merge(['class'=>'main-title'])}}>
    <h1>{{$title}}</h1>
    <p>{{$subtitle}}</p>

    @if($show)
        <a href="{{route($buttonurl)}}" class="important-btn btn-5">{{$buttontitle}}</a>
    @endif
</div>
