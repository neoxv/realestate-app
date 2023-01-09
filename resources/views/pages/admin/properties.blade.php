<x-common.admin.container>
    <x-admin.table :headers="['Property','Owner','Bedroom','Bathroom','Area','Status','price','closing','type']" :title="'Properties Table'" >

    <div class="row">
        <div class="col-md-3 m-2" style="padding: 0px 24px">
            <x-admin.search :action="'property.search'" :key="isset($key) && $subject == 'property'?$key:''"/>
        </div>
    </div>
        <x-slot name="form">
        <button type="button" class="btn btn-block bg-gradient-primary mb-3" style="{display: inline;}" data-bs-toggle="modal" data-bs-target="#property-form" onclick="resetPropertyForm()">+</button>
            <div class="modal fade" id="property-form" tabindex="-1" role="dialog" aria-labelledby="property-form" aria-hidden="true" >
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h3 class="font-weight-bolder text-primary text-gradient">Add Property</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" onsubmit="setPropertyAction(this)" id="createProperty">
                            @csrf
                            <input type="hidden" name="id" id="property-id">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="is_rental" class="text-primary">Transaction Type</label>
                                    <select class="form-control" name="is_rental" id="is_rental" required>
                                            <option value="1">Rental</option>
                                            <option value="0">Sale</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="type" class="text-primary">Type</label>
                                    <select class="form-control @error('type') is-invalid @enderror" onclick="typeChoice(event)" name="type" id="type" placeholder="Building" required>
                                        @foreach ($types as $type)
                                            <option value="{{$type}}">{{ucfirst($type)}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                             <div class="col-md-3">
                                <div class="form-group">
                                    <label class="text-primary" for="city">City</label>
                                    <input type="text" class="form-control" id="city" name="city" placeholder="Addis ababa" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="text-primary" for="city">Sub-City</label>
                                    @php
                                        $subcity_list = array_map(function ($a) { return ['value'=>strtolower((explode('|',$a))[0]),'name'=>$a]; },['None','Addis Ketema|አዲስ ከተማ ','Akaky Kaliti|አቃቂ ቃሊቲ','Arada|አራዳ', 'Bole|ቦሌ', 'Gullele|ጉሌሌ','Kirkos|ቂርቆስ','Kolfe Keranio|ኮልፌ ቀራንዮ','Lemi Kura|ለሚ ኩራ', 'Lideta|ልደታ','Nifas Silk-Lafto|ንፋስ ስልክ ላፍቶ','Yeka|የካ']);
                                    @endphp
                                    <select class="form-control @error('subcity') is-invalid @enderror"  name="subcity" id="subcity" placeholder="Subcity" >
                                        @foreach ($subcity_list as $item)
                                            <option value="{{$item['value']}}">{{ucfirst($item['name'])}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                             <div class="col-md-3">
                                <div class="form-group">
                                <label class="text-primary" for="address">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Summit condominum" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="text-primary" for="name">Property Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="G+3 Living House..." required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="text-primary" for="price">Price</label>
                                    <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Birr" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="text-primary" for="bathroom">Video Link</label>
                                    <input class="form-control" type="text" value="" id="video" name="video" placeholder="http://" >
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="text-primary" for="area">Area</label>
                                    <input type="number" min="0" class="form-control @error('area') is-invalid @enderror" id="area" name="area" placeholder="sqm" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="text-primary" for="bedroom">Bedrooms</label>
                                    <input class="form-control" min="0" type="number" value="0" id="bedroom" name="bedroom" disabled required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="text-primary" for="bathroom">Bathroom</label>
                                    <input class="form-control" min="0" type="number" value="0" id="bathroom" name="bathroom" disabled required>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="owner" class="text-primary">Owner</label>
                                    <select class="form-control" name="owner_id" id="owner" placeholder="Abebe Kebede" required>
                                    @foreach ($ownersList as $owner )
                                        <option value="{{$owner->id}}">{{ucfirst($owner->name).' - '.$owner->primary_phone}}</option>
                                    @endforeach
                                    </select>
                                </div>

                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="is_negotiable" class="text-primary">Price Type</label>
                                    <select class="form-control" name="is_negotiable" id="is_negotiable" required>
                                            <option value="1">Negotiable</option>
                                            <option value="0">Fixed</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="description" class="text-primary">Detaild Information</label>
                                    <textarea class="form-control" id="description" name="description" rows="6" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="images" class="text-primary">Property Images</label>
                                <div class="needsclick dropzone form-control" id="dropzone">

                                </div>
                            </div>
                        </div>
                        <label class="text-primary" id="property-images-label"></label>

                        <div class=" d-flex justify-content-start mb-2" id="property-images">
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                               <div class="form-group">
                                    <label class="text-primary" for="bathroom">Agent Phonenumber</label>
                                    <input class="form-control" type="text"  id="agent_phonenumber" name="agent_phonenumber" >

                                </div>
                            </div>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="property-status" value="true" name="status" checked="">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Change Status</label>
                        </div>

                        <div class="row">
                            <label class="text-primary">Features</label>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="parking" id="parking" name="amenities[]">
                                    <label class="custom-control-label" for="customCheck1">Parking</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="swimming-pool" id="swimming-pool" name="amenities[]">
                                    <label class="custom-control-label" for="customCheck1">Swimming Pool</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="alarm" id="alarm" name="amenities[]">
                                    <label class="custom-control-label" for="customCheck1">Alarm</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="laundary-room" id="laundary-room" name="amenities[]">
                                    <label class="custom-control-label" for="customCheck1">Laundary Room</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="garage" id="garage" name="amenities[]">
                                    <label class="custom-control-label" for="customCheck1">Garage</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="patio" id="patio" name="amenities[]">
                                    <label class="custom-control-label" for="customCheck1">Places to seat/Patio</label>
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

        <div class="modal fade" id="close-form" tabindex="-1" role="dialog" aria-labelledby="close-form" aria-hidden="true" >
            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="card card-plain">
                            <div class="card-header pb-0 text-left">
                                <h3 class="font-weight-bolder text-primary text-gradient">Close Property</h3>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{route('property.update')}}" id="closeProperty">
                                    @csrf
                                    <input type="hidden" name="closed_id" id="closed_id" value="">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="text-primary" for="closing_price">Closing Price</label>
                                            <input class="form-control" type="text" value="0" id="closing_price" name="closing_price" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="text-primary" for="profit">Profit</label>
                                            <input class="form-control" type="text" value="0" id="profit" name="profit" required>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="text-primary" for="from">Date</label>
                                            <input class="form-control" type="date" value="{{\Carbon\Carbon::now()->toDateString()}}" id="closing_date" name="closing_date" required>
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
                <td>
                    <p class="text-xs font-weight-bold mb-0">{{$item->owner->name}} ({{$item->owner->primary_phone}})</p>
                    <p class="text-xs text-secondary mb-0">{{$item->owner->address}}</p>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{$item->bedroom?? 0 }}</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{$item->bathroom?? 0}}</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{$item->area}}sqm</span>
                </td>
                <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm {{$item->status?'bg-gradient-success':'bg-gradient-secondary'}}">{{$item->status?'Online':'Offline'}}</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{number_format($item->price)}} Birr</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{number_format($item->closing_price)}} Birr</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{strtoupper($item->type)}}</span>
                </td>
                <td class="align-middle text-center">
                        <div class="dropdown">
                            <button class="btn bg-gradient-info dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="padding: 0px">
                                <li><a class="dropdown-item" onclick="editProperty({{$item}})">Edit</a></li>
                                @if (!$item->is_brokered)
                                    @if (!$item->is_featured)
                                        <li class="dropdown-item" onclick="featureProperty({{$item->id}},true)">Feature</li>
                                    @else
                                    <form action="{{route('property.update')}}" method="post" id="{{'unfeature'.$item->id}}">
                                        @csrf
                                        <input type="hidden" name="featured_id" value="{{$item->id}}">
                                        <input type="hidden" name="is_featured" value="0">
                                        <li class="dropdown-item" onclick="document.getElementById('unfeature'+{{$item->id}}).submit()">Stop Featuring</li>
                                    </form>
                                    @endif
                                    <li><a class="dropdown-item" onclick="closeProperty({{$item->id}})" href="#">Close Property</a></li>

                                    <form action="{{route('property.delete',["property"=>$item->id])}}" method="post" id="{{'deleteProperty'.$item->id}}">
                                        @csrf
                                    <li><a class="dropdown-item" onclick="document.getElementById('deleteProperty'+{{$item->id}}).submit()" >Delete</a></li>
                                    </form>
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

    <x-admin.table :headers="['Name','Address','Primary Phone','Secondary Phone','Email','Pending Properties']" :title="'Owners Table'" >
        <div class="row">
            <div class="col-md-3 m-2" style="padding: 0px 24px">
                <x-admin.search :action="'owner.search'" :key="isset($key) && $subject == 'owner'?$key:''"/>
            </div>
        </div>
        <x-slot name="form">
            <button type="button" class="btn btn-block bg-gradient-primary mb-3" style="{display: inline;}" data-bs-toggle="modal" data-bs-target="#owner-form" onclick="resetForm('create_owner','owner_id')">+</button>
                <div class="modal fade" id="owner-form" tabindex="-1" role="dialog" aria-labelledby="owner-form" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="card card-plain">
                        <div class="card-header pb-0 text-left">
                            <h3 class="font-weight-bolder text-primary text-gradient">Add Owner</h3>
                        </div>
                        <div class="card-body">
                            <form role="form" method="post" onsubmit="setOwnerAction(this)" id="create_owner"">
                               @csrf
                               <input type="hidden" name="id" id="owner_id">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="text-primary">Full Name</label>
                                            <input type="text" class="form-control" id="owner_name" name="name" placeholder="Full Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="text-primary">Primary Phone</label>
                                            <input required type="text" class="form-control" id="owner_primary_phone" name="primary_phone" placeholder="09...">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="text-primary">Email</label>
                                            <input type="email" class="form-control" placeholder="Email" name="email" id="owner_email" aria-label="Email" aria-describedby="email-addon">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="text-primary">Address</label>
                                            <input type="text" class="form-control" id="owner_address" name="address" placeholder="Bole...">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="text-primary">Secondary Phone</label>
                                            <input type="text" class="form-control" id="owner_secondary_phone" name="secondary_phone" placeholder="09...">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <button type="button" class="btn bg-gradient-secondary"  data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn bg-gradient-primary">Submit</button>
                                </div>
                            </form>
                        </div>

                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </x-slot>

        @foreach ($owners as $item )

                <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                        <div>
                            <img src="{{asset('storage/img/avatar.png')}}" class="avatar avatar-sm me-3" alt="user1">
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
                    <td class="align-middle text-center">
                        <div class="dropdown">
                            <button class="btn bg-gradient-info dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="padding: 0px">
                                <li><a class="dropdown-item" onclick="editOwner({{$item}})">Edit</a></li>
                                <form action="{{route('owner.delete',["owner"=>$item->id])}}" method="post" id="{{'deleteOwner'.$item->id}}">
                                        @csrf
                                    <li><a class="dropdown-item" onclick="document.getElementById('deleteOwner'+{{$item->id}}).submit()" href="#">Delete</a></li>
                                </form>
                            </ul>
                        </div>
                    </td>
                </tr>

            @endforeach

    </x-admin.table >
    <div class="d-flex justify-content-end" style="margin-right:10px;">
        {{$owners->links()}}
    </div>

    <x-admin.toast-container />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
<script>
  var uploadedDocumentMap = {}
  Dropzone.options.dropzone = {
    url: "{{ route('store.document') }}",
    init:function() {
                this.on("sending", function(file, xhr, formData){
                        formData.append("location", "img/properties");
                });
            },
    method: "post",
    maxFiles:10,
    acceptedFiles: ".jpeg,.jpg,.png,.gif,.pdf",
    parallelUploads: 1,
    uploadMultiple: false,
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
        let formContainer = document.querySelector('#createProperty');
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

  function featureProperty(id, feature) {
    if(feature){
        $('#feature-form').modal('show');
        document.getElementById('featured_id').value = id
        document.getElementById('is_featured').value = true
        document.getElementById('feature_from').valueAsDate = new Date()
        document.getElementById('feature_to').valueAsDate = new Date()
    }
  }

  function closeProperty(id){
    $('#close-form').modal('show');
    document.getElementById('closed_id').value = id
  }

  function editProperty(property){
    $('#property-form').modal('show')
    $('#property-id').val(property.id)
    $('#is_rental').val(property.is_rental == 1?'1':'0')
    $('#type').val(property.type)
    $('#city').val(property.city)
    $('#subcity').val(property.subcity??'none')
    $('#address').val(property.address)
    $('#name').val(property.name)
    $('#price').val(property.price)
    $('#video').val(property.video??"")
    $('#area').val(property.area)
    $('#bedroom').val(property.bedroom)
    $('#bathroom').val(property.bathroom)
    if(property.type != 'land' &&  property.type != 'shop' && property.type != 'building' && property.type != 'warehouse/factory' && property.type != 'hotel/resort'){
        $('#bedroom').removeAttr('disabled')
        $('#bathroom').removeAttr('disabled')
    }
    $('#owner').val(property.owner.id)
    $('#is_negotiable').val(property.is_negotiable?'1':'0')
    $('#description').val(property.description)
    $('#agent_phonenumber').val(property.agent_phonenumber)
    $('#property-status').prop('checked',property.status)
    if(property.amenities){
        let amenties = property.amenities?.split(',')
        if(amenties.length > 0){
            amenties.forEach(amenity => {
                $(`#${amenity}`).prop('checked',true)
            });
        }
    }

    if(property?.documents != null && property?.documents.length > 0){
        document.getElementById("property-images-label").innerHTML = "Property Images"
    }
    let imageDiv = document.getElementById('property-images')
        while (imageDiv.firstChild) {
        imageDiv.removeChild(imageDiv.lastChild);
    }
    property?.documents.forEach(doc => {
        var elem = document.createElement("img");
        elem.setAttribute("src", "storage/img/properties/"+doc.filename);
        elem.setAttribute("height", "150px");
        elem.setAttribute("width", "150px");
        elem.classList.add("border-radius-lg")
        elem.classList.add("shadow-sm")
        var removeElement = document.createElement("button");
        removeElement.innerHTML = 'Delete';
        removeElement.className += " btn btn-sm bg-gradient-primary m-2"
        removeElement.onclick = function(e){
            e.preventDefault()
            removePropertyImage(doc)
            return false
        };
        var container = document.createElement("div")
        container.className = "d-flex flex-column m-2"
        container.setAttribute("id",doc.filename)
        container.appendChild(elem)
        container.appendChild(removeElement)
        document.getElementById("property-images").appendChild(container);
    });

  }

  function removePropertyImage(doc){
    console.log(doc)
    const containerDiv = document.getElementById(doc.filename)
    containerDiv.innerHTML = ''
    var elem = document.createElement("input");
        elem.setAttribute("type", "hidden");
        elem.setAttribute("value", doc.filename);
        elem.setAttribute("name", "removedDocuments[]");
    var form = document.getElementById('createProperty')
    form.appendChild(elem)
  }

  function editOwner(owner) {
     $('#owner-form').modal('show')
    $('#owner_id').val(owner.id)
    $('#owner_name').val(owner.name)
    $('#owner_email').val(owner.email??"")
    $('#owner_primary_phone').val(owner.primary_phone??"")
    $('#owner_address').val(owner.address??"")
    $('#owner_secondary_phone').val(owner.secondary_phone??"")
  }

    function typeChoice(event) {
        event.preventDefault();
        let bedroomInput = document.getElementById('bedroom')
        let bathroomInput = document.getElementById('bathroom')
        if (event.target.value == 'land' || event.target.value == 'shop' || event.target.value == 'building' || event.target.value == 'warehouse/factory') {
            bedroomInput.setAttribute('disabled','')
            bathroomInput.setAttribute('disabled','')
        }else{
            bedroomInput.removeAttribute('disabled')
            bathroomInput.removeAttribute('disabled')
        }
    }

    function setPropertyAction(form){
        if(document.getElementById("property-id") && document.getElementById("property-id").value){
            form.action="{{route('property.update')}}"
        }else{
            form.action="{{route('property.create')}}"
        }
        form.submit()
    }

    function setOwnerAction(form){
        if(document.getElementById("owner_id") && document.getElementById("owner_id").value){
            form.action="{{route('owner.update')}}"
        }else{
            form.action="{{route('owner.create')}}"
        }
        form.submit()
    }



    function resetPropertyForm(){
        resetForm('createProperty','property-id')
        let imageDiv = document.getElementById('property-images')
         while (imageDiv.firstChild) {
            imageDiv.removeChild(imageDiv.lastChild);
        }
        document.getElementById('property-images-label').innerHTML = ""
    }

    function resetForm(formName,idName){
        let form = document.getElementById(formName)
        form.reset()
        document.getElementById(idName).value = null
    }

</script>

    </x-common.admin.container>
