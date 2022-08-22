<x-common.admin.container>

<div class="row">
<div class="col-12">
    <div class="card ">
        <div class="card-header pb-0 text-left">
            <h3 class="font-weight-bolder text-primary text-gradient">Create Setting</h3>
        </div>
        <div class="card-body">
            <form method="post" action="{{route('setting.create')}}" id="createProperty">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="text-primary" for="name">App Name</label>
                            <input type="text" class="form-control" id="name" name="app_name" placeholder="Real Estate" required value="{{$setting ? $setting->app_name:""}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="email" class="text-primary">Email</label>
                            <input type="email" class="form-control @error('type') is-invalid @enderror" name="email" id="email" placeholder="realestate@gmail.com" required value={{$setting ? $setting->email:""}}>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="text-primary" for="address">Address</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" placeholder="Building, Office Number"  value={{$setting ? $setting->address:""}}>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="text-primary">Primary Phone</label>
                            <input type="text" class="form-control" id="primary_phone" name="primary_phone" placeholder="09..." required value={{$setting ? $setting->primary_phone:""}}>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="text-primary">Secondary Phone</label>
                            <input type="text" class="form-control" id="secondary_phone" name="secondary_phone" placeholder="09..." value={{$setting ? $setting->secondary_phone:""}}>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="text-primary" for="youtube">Youtube</label>
                            <input class="form-control" type="text" id="youtube" name="youtube" placeholder="Youtube URL"  value={{$setting ? $setting->youtube:""}}>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="text-primary" for="facebook">Facebook</label>
                            <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Facebook URL"  value={{$setting ? $setting->facebook:""}}>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="text-primary" for="telegram">Telegram</label>
                            <input type="text" class="form-control" id="telegram" name="telegram" placeholder="Telegram URL"  value={{$setting ? $setting->telegram:""}}>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="text-primary" for="tiktok">Tiktok</label>
                            <input class="form-control" type="text" id="tiktok" name="tiktok" placeholder="Tiktok URL"  value={{$setting ? $setting->tiktok:""}}>

                        </div>
                    </div>
                </div>
                <div class="row flex align-items-center">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="description" class="text-primary">About Information</label>
                        <textarea class="form-control" id="description" name="description" rows="6"   >{{$setting ? $setting->description:""}}</textarea>
                    </div>
                    </div>
                    <div class="col-md-3">
                    <label for="images" class="text-primary">Logo</label>
                    <div class="needsclick dropzone form-control" id="dropzone">

                    </div>
                    </div>
                    <div class="col-md-3">
                    <label for="images" class="text-primary">Current Logo</label>
                        <div class=" position-relative">
                        <img src="{{asset(isset($setting->documents->filename) ?'storage/img/settings/'. $setting->documents->filename:'storage/img/default.png')}}" alt="Logo" class="w-100 border-radius-lg shadow-sm" style="height: 200px">
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1 mt-4">
                    <button type="submit" class="btn bg-gradient-primary ml-2">Submit</button>
                </div>
            </form>
        </div>

    </div>
</div>
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
                        formData.append("location", "img/settings");
                });
            },
    method: "post",
    maxFiles:1,
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
        var name = file.name.split('.')
        var extension = name[name.length -1]
        return 'logo.'+extension
    },
    success: function (file, response) {
        let formContainer = document.querySelector('#createProperty');
        var input = document.createElement("input");
        input.setAttribute('type', 'hidden');
        input.setAttribute('name', 'document[]');
        input.setAttribute('value', response.image);
        formContainer.append(input)
        uploadedDocumentMap[file.name] = response.image
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

</script>
</x-common.admin.container>
