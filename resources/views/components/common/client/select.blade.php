
@props(['options'])

<select {{$attributes->merge(['class'=>'selectpicker'])}} >
    @foreach($options as $option)
        <option value="{{$option['id']}}">{{$option['name']}}</option>
    @endforeach

</select>
