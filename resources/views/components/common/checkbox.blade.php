@props(['checkName'=>"",'checkValue'=>"", 'checkId', 'checkChecked'=>false])

<div {{$attributes->merge(['class'=>'form-check'])}}>
    <input class="form-check-input" type="checkbox" value="{{$checkValue}}" id="{{$checkId}}" name="$checkName" {{$checkChecked?'checked':''}}>
    <label class="form-check-label" for="{{$checkId}}" >
        {{$slot}}
    </label>
</div>
