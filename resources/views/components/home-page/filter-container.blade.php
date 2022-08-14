@props(['label'=>''])
<div class="col-6 col-lg-3 col-md-6">
    <x-common.client.form-group :label="$label">
        {{$slot}}
    </x-common.client.form-group>
</div>
