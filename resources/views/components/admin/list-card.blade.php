<div class="card">
<div class="card-header pb-0 p-3">
    <h6 class="mb-0">Categories</h6>
</div>
<div class="card-body p-3">
    <ul class="list-group">
        <x-admin.list-item :title="'House'" :stock-count='100' sold-count='20' :icon="'fa fa-home'"/>
        <x-admin.list-item :title="'Apartment'" :stock-count='100' sold-count='20' :icon="'fa fa-building'"/>
        <x-admin.list-item :title="'Shop'" :stock-count='100' sold-count='20' :icon="'ni ni-shop'"/>
        <x-admin.list-item :title="'Building'" :stock-count='100' sold-count='20' :icon="'ni ni-building'"/>
        <x-admin.list-item :title="'Warehouse'" :stock-count='100' sold-count='20' :icon="'fas fa-warehouse'"/>
        <x-admin.list-item :title="'Land'" :stock-count='100' sold-count='20' :icon="'fa fa-globe'"/>

    </ul>
</div>
</div>
