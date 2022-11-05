<x-common.admin.container>
 <x-admin.table :headers="['First Name','Last Name','Email','Phonenumber']" :title="'Admins Table'" >
    <x-slot name="form">
        <button type="button" class="btn btn-block bg-gradient-primary mb-3" style="{display: inline;}" data-bs-toggle="modal" data-bs-target="#admin-form" onclick="resetForm('createAdmin','admin_id')">+</button>
            <div class="modal fade" id="admin-form" tabindex="-1" role="dialog" aria-labelledby="admin-form" aria-hidden="true" >
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h3 class="font-weight-bolder text-primary text-gradient">Add Admin</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" onsubmit="setAdminAction(this)" id="createAdmin">
                            @csrf
                            <input type="hidden" name="id" id="admin_id">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="text-primary">Full Name</label>
                                        <input type="text" class="form-control" id="admin_name" name="name" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="text-primary">Email</label>
                                        <input type="text" class="form-control" id="admin_email" name="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="text-primary">Phonenumber</label>
                                        <input type="text" class="form-control" id="admin_phonenumber" name="phone" placeholder="09..." required>
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
        <div class="modal fade" id="password-form" tabindex="-1" role="dialog" aria-labelledby="password-form" aria-hidden="true" >
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="card card-plain">
                            <div class="card-header pb-0 text-left">
                                <h3 class="font-weight-bolder text-primary text-gradient">Change Password</h3>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{route('admin.account.update')}}" id="updatePassword">
                                    @csrf
                                    <input type="hidden" name="id" id="admin_pass_id" value="">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="text-primary" for="from">Old Password</label>
                                            <input class="form-control" type="password" value="" id="old_password" name="old_password" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="text-primary" for="to">New Password</label>
                                            <input class="form-control" type="password" value="" id="password" name="password" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="text-primary" for="to">Confirm</label>
                                            <input class="form-control" type="password" value="" id="password_confirmation" name="password_confirmation" required>

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
        @foreach ($admins as $item )
            <tr>
                <td class="align-middle text-center">
                    <p class="text-xs font-weight-bold mb-0">{{ucfirst($item->first_name)}} </p>
                </td>
                <td class="align-middle text-center">
                    <p class="text-xs font-weight-bold mb-0">{{ucfirst($item->last_name)}} </p>
                </td>
                <td class="align-middle text-center">
                    <p class="text-xs font-weight-bold mb-0">{{$item->email}} </p>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{$item->phone}}</span>
                </td>
                <td class="align-middle text-center">
                        <div class="dropdown">
                            <button class="btn bg-gradient-info dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="padding: 0px">
                                <li><a class="dropdown-item" onclick="editAdmin({{$item}},false)">Edit</a></li>
                                <li><a class="dropdown-item" onclick="editAdmin({{$item}},true)">Change Password</a></li>
                                <form action="{{route('admin.account.delete')}}" method="post" id="{{'deleteAdmin'.$item->id}}">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$item->id}}">
                                    <li><a class="dropdown-item" onclick="document.getElementById('deleteAdmin'+{{$item->id}}).submit()" >Delete</a></li>
                                </form>
                            </ul>
                        </div>
                    </td>
            </tr>
        @endforeach

</x-admin.table >
<div class="d-flex justify-content-end" style="margin-right:10px;">
{{-- {{$admins->links()}} --}}
</div>
    <x-admin.toast-container />
    <script>
    function resetForm(formName,idName){
        let form = document.getElementById(formName)
        form.reset()
        document.getElementById(idName).value = null
    }

    function setAdminAction(form) {
        if(document.getElementById("admin_id") && document.getElementById("admin_id").value){
            form.action="{{route('admin.account.update')}}"
        }else{
            form.action="{{route('admin.account.create')}}"
        }
            form.submit()
    }

    function editAdmin(admin,password) {
        if(password){
            $('#password-form').modal('show')
            $('#admin_pass_id').val(admin.id)
        }else{
            $('#admin-form').modal('show')
            $('#admin_id').val(admin.id)
            $('#admin_name').val(admin.first_name + ' '+ admin.last_name)
            $('#admin_email').val(admin.email)
            $('#admin_phonenumber').val(admin.phone)
        }

    }
</script>
</x-common.admin.container>

