<x-auth.form>
    <x-slot name="title">
        {{__('Create An Cccount')}}
    </x-slot>
    <form action="{{route('register')}}" method="POST">
        <x-common.form-input :type="'text'" :name="'firstname'"  :placeholder="'First Name'" />

        <x-common.form-input :type="'text'" :name="'lastname'"  :placeholder="'Last Name'" />

        <x-common.form-input :type="'text'" :name="'phone'"  :placeholder="'Phone Number'" />

        <x-common.form-input :type="'password'" :name="'password'"  :placeholder="'Password'"/>

        <x-common.form-input :type="'password_confirmation'" :name="'password_confirmation'"  :placeholder="'Password'"/>


        <div class="checkbox form-group clearfix">
            <x-common.checkbox :check-id="'rememberMe'"  class="checkbox-theme">
                    I agree to the <a href="#"> terms of service</a>
            </x-common.checkbox>
        </div>

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
