@props(['detail'])

<div class="card">
<div class="card-header pb-0 p-3">
    <h6 class="mb-0">Stock</h6>
</div>
<div class="card-body p-3">
    <ul class="list-group">

        @foreach ($detail as $item)

            <x-admin.list-item :title="ucfirst($item->type)" :stock-count="$item->sale_count + $item->rental_count" :sold-count="$item->sold_count"
                :icon="
                $item->type =='house'?'fa fa-home':(
                $item->type == 'apartment'?'fa fa-building':(
                $item->type == 'shop'?'ni ni-shop':(
                $item->type == 'building'?'ni ni-building':(
                $item->type == 'warehouse/factory'?'fas fa-warehouse':(
                $item->type == 'land'?'fa fa-globe':(
                $item->type == 'hotel/resort'? 'fa fa-bed'
                :null))))))"/>
        @endforeach
    </ul>
</div>
</div>
