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
                                <form method="get" action="{{route('user.property.filter')}}">
                                    @csrf
                                    <div class="form-group">
                                        <x-common.client.form-group :label="'Type | ዓይነት'">
                                                <x-common.client.select class="search-fields" :name="'is_rental'"  :options="[['value'=>'1','name'=>'For Rent|ኪራይ'],['value'=>'2','name'=>'For Sale|ሽያጭ']]" />
                                        </x-common.client.form-group >

                                        <x-common.client.form-group :label="'Category | ምድብ'">
                                                <x-common.client.select class="search-fields" :name="'type'" :options="[['value'=>'house','name'=>'House|ቤት'],['value'=>'land','name'=>'Land|
መሬት'],['value'=>'apartment','name'=>'Apartment|አፓርታማ'],['value'=>'warehouse','name'=>'Warehouse|መጋዘን'],['value'=>'building','name'=>'Building|ህንፃ'],['value'=>'shop','name'=>'Shop|ሱቅ'],['value' => 'hotel/resort', 'name'=>'Hotel/resort|ሆቴል/ሪዞርት']]" />
                                        </x-common.client.form-group >

                                        <x-common.client.form-group :label="'Location | አካባቢ'" >
                                                <x-common.client.select class="search-fields" :name="'city'" :options="[['value'=>'addis ababa','name'=>'Addis Ababa|አዲስ አበባ']]" />
                                        </x-common.client.form-group >

                                        <x-common.client.form-group :label="'Sub City | ክፍለ ከተማ'" >
                                            @php
                                                $subcity_list = array_map(function ($a) { return ['value'=>strtolower((explode('|',$a))[0]),'name'=>$a]; },['All|ሁሉም','Addis Ketema|አዲስ ከተማ ','Akaky Kaliti|አቃቂ ቃሊቲ','Arada|አራዳ', 'Bole|ቦሌ', 'Gullele|ጉሌሌ','Kirkos|ቂርቆስ','Kolfe Keranio|ኮልፌ ቀራንዮ','Lemi Kura|ለሚ ኩራ', 'Lideta|ልደታ','Nifas Silk-Lafto|ንፋስ ስልክ ላፍቶ','Yeka|የካ']);
                                            @endphp
                                                <x-common.client.select class="search-fields" :name="'subcity'" :options="$subcity_list" />
                                        </x-common.client.form-group >
                                        <x-common.client.form-group  :label="'Bedroom | መኝታ ቤት'">
                                                <x-common.client.select class="search-fields" :name="'bedroom'" :options="[['value'=>'1','name'=>'1'],['value'=>'2','name'=>'2'],['value'=>'3','name'=>'3'],['value'=>'4','name'=>'4']]" />
                                        </x-common.client.form-group >
                                        <x-common.client.form-group :label="'Area | ስፋት'">
                                            <x-common.client.range-slider  :max="100000" :minname="'min_area'" :maxname="'max_area'" :unit="'sqm'"/>
                                        </x-common.client.form-group >

                                        <x-common.client.form-group :label="'Price | ዋጋ'">
                                            <x-common.client.range-slider  :max="50000000" :minname="'min_price'" :maxname="'max_price'" :unit="'birr'"/>
                                        </x-common.client.form-group >
                                        <div class="row">
                                            <div class="col-md-6">
                                                <a class="btn btn-4 btn-block" href="{{route('user.property.list')}}" style="color: white">Reset</a>
                                            </div>
                                            <div class="col-md-6">
                                                <button class="btn- btn-4 btn-block">Filter</button>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Categories start -->
                    <div class="widget categories">
                        <h5 class="sidebar-title">Categories</h5>
                        <ul>
                            @foreach ($count as $item => $value)
                                <form class="form-inline my-2 my-lg-0" action="{{route('user.property.search')}}" method="get" id="{{'search'.$item}}">
                                        @csrf
                                        <input type="hidden" name="search" value="{{$item}}">
                                    <li onclick="(function(){document.getElementById('search'+ '{{$item}}').submit()})()">
                                    {{ucfirst($item)}}<span style="color:blue">({{$value}})</span>
                                    </li>
                                </form>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<x-user-profile.footer/>

</x-common.client.container>
