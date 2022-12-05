@props(['detail'])
<div class="card ">
<div class="card-header pb-0 p-3">
    <div class="d-flex justify-content-between">
    <h6 class="mb-2">Transactions By Property Type</h6>
    </div>
</div>
<div class="table-responsive">
    <table class="table align-items-center ">
    <tbody>
        @foreach ( $detail as $item )
        <x-admin.table-card-row :type="ucfirst($item->type)" :sales="$item->sold_count" :value="$item->closing_price" :profit="$item->profit_price"
        :icon="
        $item->type =='house'?'fa fa-home':(
        $item->type == 'apartment'?'fa fa-building':(
        $item->type == 'shop'?'ni ni-shop':(
        $item->type == 'building'?'ni ni-building':(
        $item->type == 'warehouse'?'fas fa-warehouse':(
        $item->type == 'land'?'fa fa-globe':(
        $item->type = 'hotel/resort'? 'fa fa-bed'
                :null))))))"/>
        @endforeach


    </tbody>
    </table>
</div>
</div>
