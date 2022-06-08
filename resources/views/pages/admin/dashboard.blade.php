<x-common.admin.container>
    <div class="row">
        <x-admin.count-card :title="'Properties For Sale'" :count="$total_sale" :icon="'fa fa-home'"/>

        <x-admin.count-card :title="'Properties For Rent'" :count="$total_rental" :icon="'fa fa-building'"/>

        <x-admin.count-card :title="'Total Users'" :count="$total_user" :icon="'fa fa-user'"/>

        <x-admin.count-card :title="'Total Transactions'" :count="$total_transaction" :icon="'fa fa-handshake-o'"/>


    </div>
    <div class="row mt-4">
        <div class="col-lg-6 mb-lg-0 mb-4">
            <x-admin.chart-card :title="'Users Overview'" :subtitle="'Increase per Month'" :id="'chart-line'" />
        </div>
        <div class="col-lg-3">
            <x-admin.chart-card :title="'Property Sell Overview'" :subtitle="'Increase per Sale'" :id="'doughnut-chart1'"/>
        </div>
        <div class="col-lg-3">
            <x-admin.chart-card :title="'Stock Overview'" :subtitle="'Increase per Amount'" :id="'doughnut-chart2'"/>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
            <x-admin.table-card :detail='$report'/>
        </div>
        <div class="col-lg-5">
            <x-admin.list-card :detail='$report'/>
        </div>
    </div>
    <x-admin.chart-script :user-data="$user_count" :data='$report'/>
</x-common.admin.container>
