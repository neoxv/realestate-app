<x-guest-layout>
    @include('includes.client.header')
    @include('includes.client.navbar')
    <div class="font-sans text-gray-900 antialiased">
        {{$slot}}
    </div>
</x-guest-layout>
