<div class="card ">
<div class="card-header pb-0 p-3">
    <div class="d-flex justify-content-between">
    <h6 class="mb-2">Sales by Property Type</h6>
    </div>
</div>
<div class="table-responsive">
    <table class="table align-items-center ">
    <tbody>
        <x-admin.table-row :type="'House'" :sales="1000" :value="10000" :profit="10" :icon="'fa fa-home'"/>
        <x-admin.table-row :type="'Apartment'" :sales="1000" :value="10000" :profit="10" :icon="'fa fa-building'"/>
        <x-admin.table-row :type="'Shop'" :sales="1000" :value="10000" :profit="10" :icon="'ni ni-shop'"/>
        <x-admin.table-row :type="'Building'" :sales="1000" :value="10000" :profit="10" :icon="'ni ni-building'"/>
        <x-admin.table-row :type="'Warehouse'" :sales="1000" :value="10000" :profit="10" :icon="'fas fa-warehouse'"/>
        <x-admin.table-row :type="'Land'" :sales="1000" :value="10000" :profit="10" :icon="'fa fa-globe'"/>


    </tbody>
    </table>
</div>
</div>
