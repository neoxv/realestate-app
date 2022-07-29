<x-common.admin.container>
    <x-admin.table :headers="['Property','Owner','from','to']" :title="'Featured Table'" >
    <div class="row">
        <div class="col-md-3 m-2" style="padding: 0px 24px">
            <x-admin.search :action="'property.search'" :key="isset($key)?$key:''"/>
        </div>
    </div>
        <x-slot name='form'>
        </x-slot>
        @foreach ($featured as $item )
            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                    <div>
                        <img src="{{asset('admin-assets/img/team-2.jpg')}}" class="avatar avatar-sm me-3" alt="user1">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm" >{{$item->name}}</h6>
                        <p class="text-xs text-secondary mb-0">{{$item->address}}, {{$item->city}}</p>
                    </div>
                    </div>
                </td>
                <td class="align-middle text-center">
                    <p class="text-xs font-weight-bold mb-0">{{$item->owner->name}} ({{$item->owner->primary_phone}})</p>
                    <p class="text-xs text-secondary mb-0">{{$item->owner->address}}</p>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{ (new \Carbon\Carbon($item->feature_from))->toDateString()}}</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{(new \Carbon\Carbon($item->feature_to))->toDateString()}}</span>
                </td>
                <td class="align-middle text-center">
                        <div class="dropdown">
                            <button class="btn bg-gradient-info dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="padding: 0px">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Action</a></li>
                            </ul>
                        </div>
                    </td>
            </tr>
        @endforeach

        </x-admin.table >
        <div class="d-flex justify-content-end" style="margin-right:10px;">
            {{$featured->links()}}
        </div>


 <x-admin.table :headers="['Advertisment','Client','LINK','from','to','status']" :title="'Advertisment Table'" >
    <div class="row">
        <div class="col-md-3 m-2" style="padding: 0px 24px">
            <x-admin.search :action="'property.search'" :key="isset($key)?$key:''"/>
        </div>
    </div>
    <x-slot name="form">
        <button type="button" class="btn btn-block bg-gradient-primary mb-3" style="{display: inline;}" data-bs-toggle="modal" data-bs-target="#advertisment-form">+</button>
            <div class="modal fade" id="advertisment-form" tabindex="-1" role="dialog" aria-labelledby="advertisment-form" aria-hidden="true" >
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h3 class="font-weight-bolder text-primary text-gradient">Add Advertisment</h3>
                        <p class="mb-0">Enter Advertisement information.</p>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('advertisement.create')}}" id="createFeature">
                            @csrf

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="client" class="text-primary">Client</label>
                                    <select class="form-control" name="client_id" id="client" placeholder="Client" required>
                                        @foreach ( $clients as $client )
                                            <option value="{{$client->id}}">{{ucfirst($client->name)}} - ({{$client->phonenumber}})</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="text-primary" for="from">From</label>
                                    <input class="form-control" type="date" value="{{\Carbon\Carbon::now()->toDateString()}}" id="from" required name="from">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="text-primary" for="to">To</label>
                                    <input class="form-control" type="date" value="{{\Carbon\Carbon::now()->toDateString()}}" id="to" required name="to">

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title" class="text-primary">Title</label>
                                    <input type="text" class="form-control" value="" id="title" placeholder="Title" required name="title">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-primary" for="link">Link</label>
                                    <input class="form-control" type="text" value="" id="link" placeholder="URL" required name="link">

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <label for="images" class="text-primary">Advertisment Image</label>
                            <div class="needsclick dropzone form-control" id="dropzone">

                            </div>
                            </div>
                        </div>

                        <div class="card-footer text-center pt-0 px-lg-2 px-1 mt-4">
                        <button type="button" class="btn bg-gradient-secondary mr-2">Cancel</button>
                        <button type="submit" class="btn bg-gradient-primary ml-2">Submit</button>
                        </div>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </x-slot>
@foreach ($advertisements as $ads )
            <tr>
                <td class="align-middle text-center">
                    <p class="text-xs font-weight-bold mb-0">{{$ads->title}} </p>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{$ads->client->name}}</span>
                </td>
                <td class="align-middle text-center">
                    <a href="https://{{$ads->link}}" class="text-info text-xs font-weight-bold">{{$ads->link}} </a>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{ (new \Carbon\Carbon($ads->from))->toDateString()}}</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{(new \Carbon\Carbon($ads->to))->toDateString()}}</span>
                </td>
                <td class="align-middle text-center">
                    @if ($ads->statu)
                        <span class="badge badge-sm bg-gradient-success">Active</span>
                    @else
                        <span class="badge badge-sm bg-gradient-secondary">Inactive</span>
                    @endif
                </td>

                <td class="align-middle text-center">
                        <div class="dropdown">
                            <button class="btn bg-gradient-info dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="padding: 0px">
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
        {{$advertisements->links()}}
        </div>


 <x-admin.table :headers="['Client','Phonenumber','Advertisments']" :title="'Clients Table'" >
        <div class="row">
        <div class="col-md-3 m-2" style="padding: 0px 24px">
            <x-admin.search :action="'property.search'" :key="isset($key)?$key:''"/>
        </div>
    </div>
    <x-slot name="form">
        <button type="button" class="btn btn-block bg-gradient-primary mb-3" style="{display: inline;}" data-bs-toggle="modal" data-bs-target="#client-form">+</button>
            <div class="modal fade" id="client-form" tabindex="-1" role="dialog" aria-labelledby="client-form" aria-hidden="true" >
            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h3 class="font-weight-bolder text-primary text-gradient">Add Client</h3>
                        <p class="mb-0">Enter Client information.</p>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('client.create')}}" id="creatClient">
                            @csrf
                            <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-primary">Client Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-primary">Client Phonenumber</label>
                                        <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="09..." required>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1 mt-4">
                            <button type="button" class="btn bg-gradient-secondary mr-2">Cancel</button>
                            <button type="submit" class="btn bg-gradient-primary ml-2">Submit</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </x-slot>
@foreach ($clients as $item )
            <tr>
                <td class="align-middle text-center">
                    <p class="text-xs font-weight-bold mb-0">{{$item->name}} </p>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{$item->phonenumber}}</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{(int)$item->advertisements_count}}</span>
                </td>
                <td class="align-middle text-center">
                        <div class="dropdown">
                            <button class="btn bg-gradient-info dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="padding: 0px">
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
        {{$clients->links()}}
        </div>

   <x-admin.toast-container />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
<script>

  var uploadedDocumentMap = {}
  Dropzone.options.dropzone = {
    url: "{{ route('store.document') }}",
    init: function() {
            this.on("sending", function(file, xhr, formData){
                    formData.append("location", "img/ads");
            });
        },
    method: "post",
    maxFiles:1,
    acceptedFiles: ".jpeg,.jpg,.png,.gif,.pdf",
    parallelUploads: 1,
    uploadMultiple: true,
    maxFilesize: 2, // MB
    addRemoveLinks: true,
    timeout: 10000,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    renameFile: function(file) {
      var dt = new Date();
      var time = dt.getTime();
      if(file.name.length <= 5){
        return time + file.name;
      }else{
        return time + file.name.substring(file.name.length - 6)
      }
    },
    success: function (file, response) {
        let formContainer = document.querySelector('#createFeature');
        var input = document.createElement("input");
        input.setAttribute('type', 'hidden');
        input.setAttribute('name', 'document[]');
        input.setAttribute('value', response.image);
        formContainer.append(input)
        uploadedDocumentMap[file.name] = response.name
    },
    removedfile: function (file) {
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedDocumentMap[file.name]
      }
      $('form').find('input[name="document[]"][value="' + name + '"]').remove()
    }
  }


function fetchProperties(params) {

}
</script>

    </x-common.admin.container>
