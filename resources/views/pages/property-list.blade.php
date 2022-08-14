<x-common.client.container :key="isset($key)?$key:''">
<!-- Sub banner start -->
<x-common.client.sub-banner :title="'Properties List'"/>
<!-- Sub banner end -->

<!-- properties list rightside start -->
<div class="properties-list-rightside content-area-2 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="option-bar">
                    <div class="row clearfix">
                        <div class="col-xl-4 col-lg-5 col-md-5 col-sm-5 col-3">
                            <h4>
                                <span class="heading-icon">
                                    <i class="fa fa-caret-right icon-design"></i>
                                    <i class="fa fa-th-list"></i>
                                </span>
                                <span class="heading">Properties List</span>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="subtitle">
                    {{count($properties)}} Result Found
                </div>
                @if(count($properties) > 0)
                    @foreach ($properties as $property)
                        <x-property-list.search-card :property="$property" />
                    @endforeach
                @else
                <div class="text-center m-2">
                    <h6> No Properties Found.</h6>
                </div>
                @endif

                <div class="pagination-box hidden-mb-45 text-center">
                    <nav aria-label="Page navigation example">
                         {{$properties->links()}}
                    </nav>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar mbl">
                    <!-- Search area start -->
                    <div class="widget search-area">
                        <h5 class="sidebar-title">Advanced Search</h5>
                        <div class="search-area-inner">
                            <div class="search-contents ">
                                <form method="post" action="{{route('user.property.filter')}}">
                                    @csrf
                                    <div class="form-group">
                                        <x-common.client.form-group :label="'Type'">
                                                <x-common.client.select class="search-fields" :name="'is_rental'"  :options="[['value'=>'1','name'=>'For Rent'],['value'=>'2','name'=>'For Sale']]" />
                                        </x-common.client.form-group >

                                        <x-common.client.form-group :label="'Category'">
                                                <x-common.client.select class="search-fields" :name="'type'" :options="[['value'=>'house','name'=>'House'],['value'=>'land','name'=>'Land'],['value'=>'apartment','name'=>'Apartment'],['value'=>'warehouse','name'=>'Warehouse'],['value'=>'building','name'=>'Building'],['value'=>'shop','name'=>'Shop']]" />
                                        </x-common.client.form-group >

                                        <x-common.client.form-group :label="'Location'" >
                                                <x-common.client.select class="search-fields" :name="'city'" :options="[['value'=>'addis ababa','name'=>'Addis Ababa']]" />
                                        </x-common.client.form-group >

                                        <x-common.client.form-group :label="'Sub City'" >
                                            @php
                                                $subcity_list = array_map(function ($a) { return ['value'=>strtolower($a),'name'=>$a]; },['Addis Ketema','Akaky Kaliti','Arada', 'Bole', 'Gullele','Kirkos','Kolfe Keranio', 'Lideta','Nifas Silk-Lafto','Yeka']);
                                            @endphp
                                                <x-common.client.select class="search-fields" :name="'subcity'" :options="$subcity_list" />
                                        </x-common.client.form-group >
                                        <x-common.client.form-group  :label="'Bedroom'">
                                                <x-common.client.select class="search-fields" :name="'bedroom'" :options="[['value'=>'1','name'=>'1'],['value'=>'2','name'=>'2'],['value'=>'3','name'=>'3'],['value'=>'4','name'=>'4']]" />
                                        </x-common.client.form-group >
                                        <x-common.client.form-group :label="'Area'">
                                            <x-common.client.range-slider  :max="100000" :minname="'min_area'" :maxname="'max_area'" :unit="'sqm'"/>
                                        </x-common.client.form-group >

                                        <x-common.client.form-group :label="'Price'">
                                            <x-common.client.range-slider  :max="50000000" :minname="'min_price'" :maxname="'max_price'" :unit="'birr'"/>
                                        </x-common.client.form-group >
                                    <button class="btn- btn-4 btn-block">Filter</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Categories start -->
                    <div class="widget categories">
                        <h5 class="sidebar-title">Categories</h5>
                        <ul>
                            <li><a href="#">Apartments<span>(12)</span></a></li>
                            <li><a href="#">Houses<span>(8)</span></a></li>
                            <li><a href="#">Family Houses<span>(23)</span></a></li>
                            <li><a href="#">Offices<span>(5)</span></a></li>
                            <li><a href="#">Villas<span>(63)</span></a></li>
                            <li><a href="#">Other<span>(7)</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<x-user-profile.footer/>

</x-common.client.container>
