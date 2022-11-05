@props(['key'=>''])
<x-guest-layout>
    @include('includes.client.navbar')
    @include('includes.client.sidebar')
    <div class="font-sans text-gray-900 antialiased">
        {{$slot}}
    </div>
</x-guest-layout>
