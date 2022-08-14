@props(['type'=>'text','name','inputClass'=>'input-text','placeholder','required'=>true])
<div {{$attributes->merge(['class'=>"form-group form-box p-0"])}} >
    <input
        type="{{$type}}"
        name="{{$name}}"
        class="{{$inputClass}} @error($name) border-danger @enderror"
        placeholder="{{$placeholder}}"
        value="{{old($name)}}"
        style="border-radius:0.5rem;"
        {{$required?'required':''}}>
    {{$slot}}
    <div class="m-0">
        @error($name)
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
</div>

