@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'text-success']) }}>
       <h6> {{ $status }} </h6>
    </div>
@endif
