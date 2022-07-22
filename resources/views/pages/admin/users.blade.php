<x-common.admin.container>
    <x-admin.table :headers="['First Name','Last Name','Email','Phone Number','Created At']" :title="'Users Table'" >
        <x-slot name="form">
        </x-slot>
        @foreach ($users as $item )

            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                    <div>
                        <img src="{{asset('admin-assets/img/team-2.jpg')}}" class="avatar avatar-sm me-3" alt="user1">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm" >{{$item->first_name}}</h6>
                    </div>
                    </div>
                </td>
                <td class="align-middle text-center" style="padding: 12px 24px;">
                    <p class="text-xs font-weight-bold mb-0">{{$item->last_name}}</p>
                </td>
                <td class="align-middle text-center" style="padding: 12px 24px;">
                    <span class="text-secondary text-xs font-weight-bold">{{$item->email}}</span>
                </td>
                <td class="align-middle text-center" style="padding: 12px 24px;">
                    <span class="text-secondary text-xs font-weight-bold">{{$item->phone}}</span>
                </td>
                <td class="align-middle text-center" style="padding: 12px 24px;">
                    <span class="text-secondary text-xs font-weight-bold">{{$item->created_at}}</span>
                </td>
                <td class="align-middle text-center">
                        <div class="dropdown">
                            <button class="btn  bg-gradient-info dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </td>
            </tr>

        @endforeach

        </x-admin.table >
        <div class="d-flex justify-content-end" style="margin-right:10px;">
        {{$users->links()}}
        </div>


   <x-admin.toast-container />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>

    </x-common.admin.container>
