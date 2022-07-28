<div class="d-flex justify-content-end flex-column align-items-end" >
    @if ($errors->any())
    {{-- <x-common.toast :title="'Error'" :message="$error"/> --}}
        @foreach ($errors->all() as $error)
            <x-common.toast :title="'Error'" :message="$error" :type="'error'"/>
        @endforeach
    @elseif (Session::has('success'))
        <x-common.toast :title="'Success'" :message="Session::get('success')" :type="'success'"/>

    @elseif (Session::has('error'))
        <x-common.toast :title="'Error'" :message="Session::get('error')" :type="'error'"/>
    @endif
</div>
