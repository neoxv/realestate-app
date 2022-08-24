<x-guest-layout>
<!-- Contact section start -->
<div class="contact-section">
    <div class="container-fluid">
        <div class="row login-box">
            <div class="col-lg-6 align-self-center pad-0 form-section" style="background-color: #FAE9E4;">
                <div class="form-inner" style="border-radius:5%;">
                    <x-common.client.logo :type="'black'"  />

                        <h3>{{$title}}</h3>
                    <!-- Session Status -->
                    <x-auth.session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth.validation-errors  :errors="$errors" />

                        {{$slot}}
                </div>
            </div>
            <div class="col-lg-6 bg-color-15 pad-0 none-992 bg-img" style="background: rgba(0, 0, 0, 0.04) url('storage/img/banners/img-7.jpg') no-repeat;background-size:cover">
                <div class="info clearfix">
                    <h1>Welcome to <a href="{{route('home')}}">{{config('app.name')}}</a></h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact section end -->

</x-guest-layout>


