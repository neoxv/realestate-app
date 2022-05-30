<x-common.admin.container>
    <div class="row">
        @for ($i = 0; $i < 4; $i++)
            <x-admin.count-card/>
        @endfor
    </div>
    <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
            <x-admin.chart-card/>
        </div>
        <div class="col-lg-5">
            <x-admin.carousel-card />
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
            <x-admin.table-card />
        </div>
        <div class="col-lg-5">
            <x-admin.list-card />
        </div>
    </div>
</x-common.admin.container>
