<x-common.admin.container>
    <x-admin.table :headers="['Property','Owner','Bedroom','Bathroom','Area','Status','price','closing','type']" :title="'Properties Table'" >
        @foreach ($properties as $item )

            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                    <div>
                        <img src="{{asset('admin-assets/img/team-2.jpg')}}" class="avatar avatar-sm me-3" alt="user1">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">{{$item->name}}</h6>
                        <p class="text-xs text-secondary mb-0">{{$item->address}}, {{$item->city}}</p>
                    </div>
                    </div>
                </td>
                <td>
                    <p class="text-xs font-weight-bold mb-0">{{$item->owner->name}} ({{$item->owner->primary_phone}})</p>
                    <p class="text-xs text-secondary mb-0">{{$item->owner->address}}</p>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{$item->bedroom}}</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{$item->bathroom}}</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{$item->area}}sqm</span>
                </td>
                <td class="align-middle text-center text-sm">
                    {{-- make this conditional  --}}
                    <span class="badge badge-sm bg-gradient-success">Online</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{number_format($item->price)}} Birr</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{number_format($item->closing_price)}} Birr</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{$item->type}}</span>
                </td>
                <td class="align-middle">
                    <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-ellipsis-v text-xs"></i>
                    </button>
                </td>
            </tr>

        @endforeach

        </x-admin.table >
        <div class="d-flex justify-content-end" style="margin-right:10px;">
        {{$properties->links()}}
        </div>

  <x-admin.table :headers="['Name','Address','Primary Phone','Secondary Phone','Email','Pending Properties']" :title="'Owners Table'">
        @foreach ($owners as $item )

            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                    <div>
                        <img src="{{asset('admin-assets/img/team-2.jpg')}}" class="avatar avatar-sm me-3" alt="user1">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">{{$item->name}}</h6>
                    </div>
                    </div>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{$item->address}}</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{$item->primary_phone}}</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{$item->secondary_phone}}</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{$item->email}}</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{$item->sold_properties}}</span>
                </td>
                <td class="align-middle">
                    <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-ellipsis-v text-xs"></i>
                    </button>
                </td>
            </tr>

        @endforeach

        </x-admin.table >
        <div class="d-flex justify-content-end" style="margin-right:10px;">
        {{$owners->links()}}
        </div>
    </x-common.admin.container>
