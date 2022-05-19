<x-guest-layout>
<!-- Contact section start -->
<div class="contact-section">
    <div class="container-fluid">
        <div class="row login-box">
            <div class="col-lg-6 align-self-center pad-0 form-section" style="background-color: #FAE9E4">
                <div class="form-inner">
                    <x-common.logo :type="'black'"  />
                    <h3>Sign Into Your Account</h3>
                    <form action="{{route('login')}}" method="POST">
                        @csrf
                        <div class="form-group form-box">
                            <x-common.input type="text" name="phone"  placeholder="Enter your phone" required  class="input-text"/>
                            <i class="flaticon-mail-2"></i>
                        </div>
                        <div class="form-group form-box">
                            <x-common.input type="password" name="Password" class="input-text" placeholder="Password" required />
                            <i class="flaticon-password"></i>
                        </div>
                        <div class="checkbox form-group clearfix">
                            <div class="form-check checkbox-theme">
                                <x-common.input class="form-check-input" type="checkbox" value="" id="rememberMe" />
                                <x-common.label class="form-check-label" for="rememberMe" :label="__('Remember me')"/>
                            </div>
                            <a href="forgot-password.html" class="forgot-password">Forgot Password</a>
                        </div>
                        <div class="form-group">
                            <x-common.button :title="__('Login')" type="submit" class="btn btn-4 btn-block" />
                        </div>

                        <div class="extra-login form-group clearfix">
                            <span>XERO</span>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                    <div class="clearfix"></div>
                    <p>Don't have an account? <a href="{{route('register')}}" class="thembo"> Register here</a></p>
                </div>
            </div>
            <div class="col-lg-6 bg-color-15 pad-0 none-992 bg-img">
                <div class="info clearfix">
                    <h1>Welcome to <a href="index.html">Xero</a></h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact section end -->

</x-guest-layout>


