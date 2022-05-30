@props(['type','sales','value','profit','icon'])
<tr>
<td class="w-30">
    <div class="d-flex px-2 py-1 align-items-center">
    <div>
            <i class="{{$icon}}" ></i>
    </div>
    <div class="ms-4">
        <p class="text-xs font-weight-bold mb-0">Type:</p>
        <h6 class="text-sm mb-0">{{$type}}</h6>
    </div>
    </div>
</td>
<td>
    <div class="text-center">
    <p class="text-xs font-weight-bold mb-0">Sales:</p>
    <h6 class="text-sm mb-0">{{number_format($sales)}}</h6>
    </div>
</td>
<td>
    <div class="text-center">
    <p class="text-xs font-weight-bold mb-0">Value:</p>
    <h6 class="text-sm mb-0">{{number_format($value)}} ETB</h6>
    </div>
</td>
<td class="align-middle text-sm">
    <div class="col text-center">
    <p class="text-xs font-weight-bold mb-0">Profit:</p>
    <h6 class="text-sm mb-0">{{$profit}}%</h6>
    </div>
</td>
</tr>
