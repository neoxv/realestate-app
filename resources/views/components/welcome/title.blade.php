@props(['title','subtitle','show'=>false,'buttonUrl','buttonTitle'])
<div class="main-title">
    <h1>{{$title}}</h1>
    <p>{{$subtitle}}</p>

    @if(true)
        <a href="{{$buttonUrl}}" class="important-btn btn-5">{{$buttonTitle}}</a>
    @endif
</div>
