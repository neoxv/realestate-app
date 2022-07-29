<x-auth.form >
    <x-slot name="title">
        {{__('Sign Into Your Account')}}
    </x-slot>
    <form action="{{route('login')}}" method="POST">
        @csrf
        <x-common.client.form-input :type="'text'" :name="'phone'"  :placeholder="'Phone Number'" :value="old('phone')"  />

        <x-common.client.form-input :type="'password'" :name="'password'"  :placeholder="'Password'"  />

        <div class="checkbox form-group clearfix">
            <x-common.client.checkbox :check-id="'rememberMe'"  class="checkbox-theme">
                    Remember me
            </x-common.client.checkbox>
            <a href="forgot-password.html" class="forgot-password">Forgot Password</a>
        </div>
        <div class="form-group">
            <x-common.client.button :title="__('Login')" type="submit" class="btn btn-4 btn-block" />
        </div>

        <div class="extra-login form-group clearfix">
            <span>{{config('app.name')}}</span>
        </div>
        <div class="clearfix"></div>
    </form>
    <div class="clearfix"></div>
    <p>Don't have an account? <a href="{{route('register')}}" class="thembo"> Register here</a></p>
</x-auth.form>
