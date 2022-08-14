<x-common.admin.container>
    <x-admin.table :headers="['Property','Owner','Bedroom','Bathroom','Area','Status','price','closing','type']" :title="'Properties Table'" >

    <div class="row">
        <div class="col-md-3 m-2" style="padding: 0px 24px">
            <x-admin.search :action="'property.search'" :key="isset($key)?$key:''"/>
        </div>
    </div>
        <x-slot name="form">
        <button type="button" class="btn btn-block bg-gradient-primary mb-3" style="{display: inline;}" data-bs-toggle="modal" data-bs-target="#property-form">+</button>
            <div class="modal fade" id="property-form" tabindex="-1" role="dialog" aria-labelledby="property-form" aria-hidden="true" >
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h3 class="font-weight-bolder text-primary text-gradient">Add Property</h3>
                        <p class="mb-0">Enter property information.</p>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('property.create')}}" id="createProperty">
                            @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="text-primary" for="name">Property Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="G+3 Living House..." required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="type" class="text-primary">Type</label>
                                    <select class="form-control @error('type') is-invalid @enderror" name="type" id="type" placeholder="Building" required>
                                        @foreach ($types as $type)
                                            <option value="{{$type}}">{{ucfirst($type)}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="text-primary" for="price">Price</label>
                                    <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Birr" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="text-primary" for="area">Area</label>
                                    <input type="number" class="form-control @error('area') is-invalid @enderror" id="area" name="area" placeholder="sqm" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="text-primary" for="bedroom">Bedrooms</label>
                                    <input class="form-control" type="number" value="1" id="bedroom" name="bedroom" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="text-primary" for="bathroom">Bathroom</label>
                                    <input class="form-control" type="number" value="1" id="bedroom" name="bathroom" required>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                            <div class="form-group">
                               <label class="text-primary" for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Summit condominum" required>
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                 <label class="text-primary" for="city">City</label>
                                <input type="text" class="form-control" id="city" name="city" placeholder="Addis ababa" required>
                            </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="owner" class="text-primary">Owner</label>
                                <select class="form-control" name="owner_id" id="owner" placeholder="Abebe Kebede" required>
                                @foreach ($ownersList as $owner )
                                    <option value="{{$owner->id}}">{{ucfirst($owner->name).' - '.$owner->primary_phone}}</option>
                                @endforeach
                                </select>
                            </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="is_rental" class="text-primary">Transaction Type</label>
                                    <select class="form-control" name="is_rental" id="is_rental" required>
                                            <option value="true">Rental</option>
                                            <option value="false">Sale</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="is_negotiable" class="text-primary">Price Type</label>
                                    <select class="form-control" name="is_negotiable" id="is_negotiable" required>
                                            <option value="true">Negotiable</option>
                                            <option value="false">Fixed</option>
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
                        <div class="row">
                            <label class="text-primary">Features</label>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" name="parking">
                                    <label class="custom-control-label" for="customCheck1">Parking</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" name="swimming-pool">
                                    <label class="custom-control-label" for="customCheck1">Swimming Pool</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" name="alarm">
                                    <label class="custom-control-label" for="customCheck1">Alarm</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" name="laundary-room">
                                    <label class="custom-control-label" for="customCheck1">Laundary Room</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" name="garage">
                                    <label class="custom-control-label" for="customCheck1">Garage</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" name="patio">
                                    <label class="custom-control-label" for="customCheck1">Places to seat/Patio</label>
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

        <div class="modal fade" id="feature-form" tabindex="-1" role="dialog" aria-labelledby="feature-form" aria-hidden="true" >
            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="card card-plain">
                            <div class="card-header pb-0 text-left">
                                <h3 class="font-weight-bolder text-primary text-gradient">Feature Property</h3>
                                <p class="mb-0">Enter Feature information.</p>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{route('property.update')}}" id="featureProperty">
                                    @csrf
                                    <input type="hidden" name="featured_id" id="featured_id" value="">
                                    <input type="hidden" name="is_featured" id="is_featured" value="true">
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
        @foreach ($properties as $item )

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
                    <span class="text-secondary text-xs font-weight-bold">{{strtoupper($item->type)}}</span>
                </td>
                <td class="align-middle text-center">
                        <div class="dropdown">
                            <button class="btn bg-gradient-info dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="padding: 0px">
                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                <li class="dropdown-item" onclick="featureProperty({{$item->id}})">{{$item->is_featured?'Stop Featuring':'Feature'}}</li>
                                <li><a class="dropdown-item" href="#">Close Property</a></li>
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
                <x-admin.search :action="'property.search'" :key="isset($key)?$key:''"/>
            </div>
        </div>
        <x-slot name="form">
            <button type="button" class="btn btn-block bg-gradient-primary mb-3" style="{display: inline;}" data-bs-toggle="modal" data-bs-target="#owner-form">+</button>
                <div class="modal fade" id="owner-form" tabindex="-1" role="dialog" aria-labelledby="owner-form" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="card card-plain">
                        <div class="card-header pb-0 text-left">
                            <h3 class="font-weight-bolder text-primary text-gradient">Add Owner</h3>
                            <p class="mb-0">Enter owner information.</p>
                        </div>
                        <div class="card-body">
                            <form role="form" method="post" action="{{route('owner.create')}}" id="createOwner"">
                               @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="text-primary">Full Name</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="text-primary">Email</label>
                                            <input type="email" class="form-control" placeholder="Email" name="email" aria-label="Email" aria-describedby="email-addon">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="text-primary">Primary Phone</label>
                                            <input type="text" class="form-control" id="primary_phone" name="primary_phone" placeholder="09...">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="text-primary">Address</label>
                                            <input type="text" class="form-control" id="address" name="address" placeholder="Bole...">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="text-primary">Secondary Phone</label>
                                            <input type="text" class="form-control" id="secondary_phone" name="secondary_phone" placeholder="09...">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <button type="button" class="btn bg-gradient-secondary">Cancel</button>
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
    maxFiles:5,
    acceptedFiles: ".jpeg,.jpg,.png,.gif,.pdf",
    parallelUploads: 2,
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

  function featureProperty(id) {
    $('#feature-form').modal('show');
    document.getElementById('featured_id').value = id
    document.getElementById('is_featured').value = true
    document.getElementById('feature_from').valueAsDate = new Date()
    document.getElementById('feature_to').valueAsDate = new Date()
  }

</script>

    </x-common.admin.container>
