<x-auth.form>
    <x-slot name="title">
        {{__('Create An Account')}}
    </x-slot>
    <form action="{{route('register')}}" method="POST">
        @csrf
        <x-common.client.form-input :type="'text'" :name="'first_name'" :value="old('first_name')"  :placeholder="'First Name'" />

        <x-common.client.form-input :type="'text'" :name="'last_name'"  :placeholder="'Last Name'" :value="old('last_name')" />

        <x-common.client.form-input :type="'text'" :name="'phone'"  :placeholder="'Phone Number'" :value="old('phone')" />

        <x-common.client.form-input :type="'password'" :name="'password'"  :placeholder="'Password'" />

        <x-common.client.form-input :type="'password'" :name="'password_confirmation'"  :placeholder="'Password'"/>

        <div class="form-group">
            <button type="submit" class="btn btn-4 btn-block">Register</button>
        </div>
        <div class="extra-login form-group clearfix">
            <span>XERO</span>
        </div>
        <div class="clearfix"></div>
    </form>
    <div class="clearfix"></div>
    <p>Already a member? <a href="{{route('login')}}">Login here</a></p>
</x-auth.form>
