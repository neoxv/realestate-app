@props(['type'=>'text','name','inputClass'=>'input-text','placeholder','required'=>true])
<div {{$attributes->merge(['class'=>"form-group form-box"])}}>
    <input type="{{$type}}" name="{{$name}}" class="{{$inputClass}}"
                placeholder="{{$placeholder}}"
                {{$required ? 'required':''}}>
    {{$slot}}
</div>
