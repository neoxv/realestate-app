@props(['errors'])

@if ($errors->any())
    <div {{ $attributes->merge(['class'=>'text-danger border border-danger rounded mb-4 p-2']) }}>
           {{ __('Whoops! Something went wrong.') }}
    </div>
@endif
