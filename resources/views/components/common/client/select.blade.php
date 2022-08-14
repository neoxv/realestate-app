
@props(['options'=>[],'name'=>'','disable' =>false])

<select {{$attributes->merge(['class'=>'selectpicker'])}}  name={{$name}} @disabled($disable)>
     @foreach($options as $option)
        <option value="{{$option['value']}}">{{ucfirst($option['name'])}}</option>
    @endforeach
</select>
