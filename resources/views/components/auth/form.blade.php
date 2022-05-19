<x-guest-layout>
<!-- Contact section start -->
<div class="contact-section">
    <div class="container-fluid">
        <div class="row login-box">
            <div class="col-lg-6 align-self-center pad-0 form-section" style="background-color: #FAE9E4">
                <div class="form-inner">
                    <x-common.logo :type="'black'"  />

                        <h3>{{$title}}</h3>
                    <!-- Session Status -->
                    <x-auth.session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth.validation-errors class="mb-4" :errors="$errors" />

                        {{$slot}}
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


