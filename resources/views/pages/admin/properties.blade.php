<x-common.admin.container>
    <x-admin.table :headers="['Property','Owner','Bed','Bathroom','Area','Status','price','closing','type']" :title="'Properties Table'">
        @for ($i = 0; $i < 5; $i++)
            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                    <div>
                        <img src="{{asset('admin-assets/img/team-2.jpg')}}" class="avatar avatar-sm me-3" alt="user1">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">property Name</h6>
                        <p class="text-xs text-secondary mb-0">addis ababa</p>
                    </div>
                    </div>
                </td>
                <td>
                    <p class="text-xs font-weight-bold mb-0">Owner</p>
                    <p class="text-xs text-secondary mb-0">0937448512</p>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">2</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">8</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">180sqm</span>
                </td>
                <td class="align-middle text-center text-sm">
                    {{-- make this conditional  --}}
                    <span class="badge badge-sm bg-gradient-success">Online</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">192,500 Birr</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">180,000 Birr</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">building</span>
                </td>
                <td class="align-middle">
                    <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-ellipsis-v text-xs"></i>
                    </button>
                </td>
            </tr>

        @endfor
        </x-admin.table >
            <x-admin.table :headers="['Property','Owner','Bed','Bathroom','Area','Status','price','closing','type']" :title="'Properties Table'">
        @for ($i = 0; $i < 5; $i++)
            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                    <div>
                        <img src="{{asset('admin-assets/img/team-2.jpg')}}" class="avatar avatar-sm me-3" alt="user1">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">property Name</h6>
                        <p class="text-xs text-secondary mb-0">addis ababa</p>
                    </div>
                    </div>
                </td>
                <td>
                    <p class="text-xs font-weight-bold mb-0">Owner</p>
                    <p class="text-xs text-secondary mb-0">0937448512</p>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">2</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">8</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">180sqm</span>
                </td>
                <td class="align-middle text-center text-sm">
                    {{-- make this conditional  --}}
                    <span class="badge badge-sm bg-gradient-success">Online</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">192,500 Birr</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">180,000 Birr</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">building</span>
                </td>
                <td class="align-middle">
                    <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-ellipsis-v text-xs"></i>
                    </button>
                </td>
            </tr>

        @endfor
        </x-admin.table >
</x-common.admin.container>
