@props(['type'])
<a href="{{route('home')}}" class="logos">
    @if ($type == 'black')
        <img src="{{asset('client-assets/img/logos/black-logo.png')}}" alt="logo">
    @else
        <img src="{{asset('client-assets/img/logos/white-logo.png')}}" alt="logo">
    @endif
</a>
