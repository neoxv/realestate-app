<x-common.admin.container>
    <x-admin.table :headers="['First Name','Last Name','Email','Phone Number','Created At','Status']" :title="'Users Table'" >
        <div class="row">
            <div class="col-md-3 m-2" style="padding: 0px 24px">
                <x-admin.search :action="'user.search'" :key="isset($key) && $subject == 'user'?$key:''"/>
            </div>
        </div>
            <x-slot name="form">
            </x-slot>
            @foreach ($users as $item )

                <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                        <div>
                            <img src="{{asset('img/avatar.png')}}" class="avatar avatar-sm me-3" alt="user1">
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
                    <td class="align-middle text-center" style="padding: 12px 24px;">
                         <span class="badge badge-sm {{$item->status?'bg-gradient-success':'bg-gradient-secondary'}}">{{$item->status?'Active':'InActive'}}</span>
                    </td>
                    <td class="align-middle text-center">
                            <div class="dropdown">
                                <button class="btn  bg-gradient-info dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="padding: 0px">
                                    <form action="{{route('user.update')}}" method="post" id="{{'update'.$item->id}}">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$item->id}}">
                                        @if ($item->status)
                                            <input type="hidden" name="status" value="0">
                                            <li><a class="dropdown-item" onclick="document.getElementById('update'+{{$item->id}}).submit()">Deactivate</a></li>
                                        @else
                                            <input type="hidden" name="status" value="1">
                                            <li><a class="dropdown-item" onclick="document.getElementById('update'+{{$item->id}}).submit()">Activate</a></li>
                                        @endif
                                    </form>
                                </ul>
                            </div>
                        </td>
                </tr>

            @endforeach

    </x-admin.table >
    <div class="d-flex justify-content-end" style="margin-right:10px;">
        {{$users->links()}}
    </div>

    <x-admin.table :headers="['Property','Favourites','type','Bedroom','Bathroom','Area','price']" :title="'Favourites Table'" >
        <div class="row">
            <div class="col-md-3 m-2" style="padding: 0px 24px">
                <x-admin.search :action="'property.favourite.search'" :key="isset($key) && $subject == 'favourite'?$key:''"/>
            </div>
        </div>
            <x-slot name="form">
            </x-slot>

        <div class="modal fade" id="feature-form" tabindex="-1" role="dialog" aria-labelledby="feature-form" aria-hidden="true" >
            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="card card-plain">
                            <div class="card-header pb-0 text-left">
                                <h3 class="font-weight-bolder text-primary text-gradient">Feature Property</h3>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{route('property.update')}}" id="featureProperty">
                                    @csrf
                                    <input type="hidden" name="featured_id" id="featured_id" value="">
                                    <input type="hidden" name="is_featured" id="is_featured" value="1">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-primary" for="from">From</label>
                                            <input class="form-control" type="date" value="{{\Carbon\Carbon::now()->toDateString()}}" id="feature_from" name="feature_from" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-primary" for="to">To</label>
                                            <input class="form-control" type="date" value="{{\Carbon\Carbon::now()->toDateString()}}" id="feature_to" name="feature_to" required>

                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1 mt-4">
                                    <button type="button" class="btn bg-gradient-secondary mr-2" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn bg-gradient-primary ml-2">Submit</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            @foreach ($properties as $item )

                <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                        <div class="mr-3">
                        <span class="badge badge-pill bg-gradient-warning" style="margin-right: 4px;">{{$item->number}}</span>
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm" >{{$item->name}}</h6>
                            <p class="text-xs text-secondary mb-0">{{$item->address}}, {{$item->city}}</p>
                        </div>
                        </div>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{count($item->users)}}</span>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{strtoupper($item->type)}}</span>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$item->bedroom??0}}</span>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$item->bathroom??0}}</span>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$item->area}}sqm</span>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{number_format($item->price)}} Birr</span>
                    </td>
                   <td class="align-middle text-center">
                            <div class="dropdown">
                                <button class="btn bg-gradient-info dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="padding: 0px">
                                    @if (!$item->is_brokered)
                                        @if (!$item->is_featured)
                                            <li class="dropdown-item" onclick="featureProperty({{$item->id}},true)">Feature</li>
                                        @else
                                        <form action="{{route('property.update')}}" method="post" id="{{'unfeature'.$item->id}}">
                                            @csrf
                                            <input type="hidden" name="featured_id" value="{{$item->id}}">
                                            <input type="hidden" name="is_featured" value="0">
                                            <li class="dropdown-item" onclick="document.getElementById('unfeature'+{{$item}}).submit()">Stop Featuring</li>
                                        </form>
                                        @endif
                                    @endif
                                </ul>
                            </div>
                        </td>
                </tr>
            @endforeach
    </x-admin.table >
    <div class="d-flex justify-content-end" style="margin-right:10px;">
        {{$properties->links()}}
    </div>


   <x-admin.toast-container />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>

    </x-common.admin.container>

<script>
function featureProperty(id, feature) {
    if(feature){
        $('#feature-form').modal('show');
        document.getElementById('featured_id').value = id
        document.getElementById('is_featured').value = true
        document.getElementById('feature_from').valueAsDate = new Date()
        document.getElementById('feature_to').valueAsDate = new Date()
    }
  }
</script>
