@props(['type'])
<a href="{{route('home')}}" class="logos">
    @if ($type == 'black')
        <img src="{{asset('img/settings/' . config('app.logo'))}}" alt="logo" style="border-radius: 10px" class="w-50 h-50   border-radius-lg shadow-sm">
    @else
        <img src="{{asset('img/settings/' . config('app.logo'))}}" alt="logo" style="border-radius: 10px" class="w-50 h-50 border-radius-lg shadow-sm">
    @endif
</a>
