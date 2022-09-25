@props(['title', 'message', 'type'])
<div class="alert  alert-dismissible fade show  justify-content-end {{$type == 'success'?'alert-success':'alert-danger'}}" style="color:white;width:30vh;margin-right:15px;float;width: fit-content;right: 50px;top: 0;position: relative;max-width:350px" role="alert">
    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
    <span class="alert-text"><strong>{{$title}}!</strong> {{$message}}!</span>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
