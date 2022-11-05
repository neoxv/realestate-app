@props(['label'=>''])
<div {{$attributes->merge(['class'=>'form-group'])}} >
    <label for=""> {{$label}}</label>
    {{$slot}}
</div>
