<x-common.admin.container>
    <x-admin.table :headers="['Property','Owner','from','to']" :title="'Featured Table'" >
    <div class="row">
        <div class="col-md-3 m-2" style="padding: 0px 24px">
            <x-admin.search :action="'property.featured.search'" :key="isset($key) && $subject == 'featured'?$key:''"/>
        </div>
    </div>
        <x-slot name='form'>
        </x-slot>
        @foreach ($featured as $item )
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
                                @if (!$item->is_brokered)
                                        <form action="{{route('property.update')}}" method="post" id="{{'unfeature'.$item->id}}">
                                            @csrf
                                            <input type="hidden" name="featured_id" value="{{$item->id}}">
                                            <input type="hidden" name="is_featured" value="0">
                                            <li class="dropdown-item" onclick="document.getElementById('unfeature'+{{$item->id}}).submit()">Stop Featuring</li>
                                        </form>
                                    @endif
                            </ul>
                        </div>
                    </td>
            </tr>
        @endforeach

        </x-admin.table >
        <div class="d-flex justify-content-end" style="margin-right:10px;">
            {{$featured->links()}}
        </div>



 <x-admin.table :headers="['Client','Phonenumber','Advertisements']" :title="'Clients Table'" >
        <div class="row">
            <div class="col-md-3 m-2" style="padding: 0px 24px">
                <x-admin.search :action="'client.search'" :key="isset($key) && $subject == 'client'?$key:''"/>
            </div>
        </div>
    <x-slot name="form">
        <button type="button" class="btn btn-block bg-gradient-primary mb-3" style="{display: inline;}" data-bs-toggle="modal" data-bs-target="#client-form" onclick="resetForm('createClient','client_id')">+</button>
            <div class="modal fade" id="client-form" tabindex="-1" role="dialog" aria-labelledby="client-form" aria-hidden="true" >
            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h3 class="font-weight-bolder text-primary text-gradient">Add Client</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" onsubmit="setClientAction(this)" id="createClient">
                            @csrf
                            <input type="hidden" name="id" id="client_id">
                            <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-primary">Client Name</label>
                                        <input type="text" class="form-control" id="client_name" name="name" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-primary">Client Phonenumber</label>
                                        <input type="text" class="form-control" id="client_phonenumber" name="phonenumber" placeholder="09..." required>
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
                                <li><a class="dropdown-item" onclick="editClient({{$item}})">Edit</a></li>
                                <form action="{{route('client.delete',["client"=>$item->id])}}" method="post" id="{{'deleteClient'.$item->id}}">
                                        @csrf
                                    <li><a class="dropdown-item" onclick="document.getElementById('deleteClient'+{{$item->id}}).submit()" >Delete</a></li>
                                </form>
                            </ul>
                        </div>
                    </td>
            </tr>
        @endforeach

</x-admin.table >
<div class="d-flex justify-content-end" style="margin-right:10px;">
{{$clients->links()}}
</div>

 <x-admin.table :headers="['Advertisement','Client','LINK','from','to','status']" :title="'Advertisement Table'" >
    <div class="row">
        <div class="col-md-3 m-2" style="padding: 0px 24px">
            <x-admin.search :action="'advertisement.search'" :key="isset($key) && $subject == 'advertisement'?$key:''"/>
        </div>
    </div>
    <x-slot name="form">
        <button type="button" class="btn btn-block bg-gradient-primary mb-3" style="{display: inline;}" data-bs-toggle="modal" data-bs-target="#advertisement-form" onclick="resetAdvertisementForm()">+</button>
            <div class="modal fade" id="advertisement-form" tabindex="-1" role="dialog" aria-labelledby="advertisement-form" aria-hidden="true" >
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h3 class="font-weight-bolder text-primary text-gradient">Add Advertisement</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" onsubmit="setAdvertisementAction(this)" id="createAdvertisement">
                            @csrf
                            <input type="hidden" name="id" id="advertisement_id">
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
                                    <input class="form-control" type="date"  id="advertisement_from" required name="from">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="text-primary" for="to">To</label>
                                    <input class="form-control" type="date"  id="advertisement_to" required name="to">

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
                            <label for="images" class="text-primary">Advertisement Image</label>
                            <div class="needsclick dropzone form-control" id="dropzone">

                            </div>
                            </div>
                            <div class="col-md-6">
                                <label class="text-primary" id="advertisement-images-label"></label>

                                <div class=" d-flex justify-content-between mb-2" id="advertisement-images">
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
        </x-slot>
@foreach ($advertisements as $item )
            <tr>

                <td class="align-middle text-center">
                    <div class="d-flex px-2 py-1">
                        <div>
                            <img src="{{asset(count($item->documents) > 0 ?'img/ads/'. $item->documents->first()->filename:'img/default.png')}}" class="avatar avatar-sm me-3" alt="user1">
                        </div>
                        {{-- <p class="text-xs font-weight-bold mb-0">{{$item->title}} </p> --}}
                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm" >{{$item->title}}</h6>
                        </div>
                    </div>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{$item->client->name}}</span>
                </td>
                <td class="align-middle text-center">
                    <a href="https://{{$item->link}}" class="text-info text-xs font-weight-bold">{{$item->link}} </a>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{ (new \Carbon\Carbon($item->from))->toDateString()}}</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{(new \Carbon\Carbon($item->to))->toDateString()}}</span>
                </td>
                <td class="align-middle text-center">
                    @if ($item->status)
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
                                <li><a class="dropdown-item" onclick="editAdvertisement({{$item}})">Edit</a></li>
                                <form action="{{route('advertisement.update')}}" method="post" id="{{'status'.$item->id}}">
                                    @csrf
                                        <input type="hidden" name="id" value="{{$item->id}}">
                                    @if ($item->status)
                                        <input type="hidden" name="status" value="0">
                                        <li><a class="dropdown-item" onclick="document.getElementById('status'+{{$item->id}}).submit()">Deactivate</a></li>
                                    @else
                                        <input type="hidden" name="status" value="1">
                                        <li><a class="dropdown-item" onclick="document.getElementById('status'+{{$item->id}}).submit()">Activate</a></li>
                                    @endif
                                </form>
                                <form action="{{route('advertisement.delete',["advertisement"=>$item->id])}}" method="post" id="{{'deleteAd'.$item->id}}">
                                        @csrf
                                    <li><a class="dropdown-item" onclick="document.getElementById('deleteAd'+{{$item->id}}).submit()" >Delete</a></li>
                                </form>
                            </ul>
                        </div>
                    </td>
            </tr>
        @endforeach

</x-admin.table >
        <div class="d-flex justify-content-end" style="margin-right:10px;">
        {{$advertisements->links()}}
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
        let formContainer = document.querySelector('#createAdvertisement');
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


function editClient(client) {
    $('#client-form').modal('show')
    $('#client_id').val(client.id)
    $('#client_name').val(client.name)
    $('#client_phonenumber').val(client.phonenumber)
}

function padTo2Digits(num) {
  return num.toString().padStart(2, '0');
}

function editAdvertisement(advertisement) {
    $('#advertisement-form').modal('show')
    $('#advertisement_id').val(advertisement.id)
    $('#title').val(advertisement.title)
    $('#link').val(advertisement.link)
    $('#client').val(advertisement.client.id)
    var from = new Date(advertisement.from)
    var to = new Date(advertisement.to)

    document.getElementById('advertisement_from').value = [from.getFullYear(),
                                                            padTo2Digits(from.getMonth() + 1),
                                                            padTo2Digits(from.getDate()),
                                                            ].join('-')
    document.getElementById('advertisement_to').value =[to.getFullYear(),
                                                        padTo2Digits(to.getMonth() + 1),
                                                        padTo2Digits(to.getDate()),
                                                        ].join('-')

    if(advertisement?.documents != null && advertisement?.documents.length > 0){
        document.getElementById("advertisement-images-label").innerHTML = "Advertisement Images"
    }
    let imageDiv = document.getElementById('advertisement-images')
        while (imageDiv.firstChild) {
        imageDiv.removeChild(imageDiv.lastChild);
    }
    advertisement?.documents.forEach(doc => {
        var elem = document.createElement("img");
        elem.setAttribute("src", "img/ads/"+doc.filename);
        elem.setAttribute("height", "150px");
        elem.setAttribute("width", "150px");
        elem.classList.add("border-radius-lg")
        elem.classList.add("shadow-sm")
        document.getElementById("advertisement-images").appendChild(elem);
    });
}

function setClientAction(form) {
    if(document.getElementById("client_id") && document.getElementById("client_id").value){
        form.action="{{route('client.update')}}"
    }else{
        form.action="{{route('client.create')}}"
    }
        form.submit()
}

function setAdvertisementAction(form){
    if(document.getElementById("advertisement_id") && document.getElementById("advertisement_id").value){
        form.action="{{route('advertisement.update')}}"
    }else{
        form.action="{{route('advertisement.create')}}"
    }
        form.submit()
}

function resetAdvertisementForm(){
    resetForm('createAdvertisement','advertisement_id')
    let imageDiv = document.getElementById('advertisement-images')
        while (imageDiv.firstChild) {
        imageDiv.removeChild(imageDiv.lastChild);
    }
    document.getElementById('advertisement-images-label').innerHTML = ""
}

function resetForm(formName,idName){
        let form = document.getElementById(formName)
        form.reset()
        document.getElementById(idName).value = null
    }
</script>

    </x-common.admin.container>
