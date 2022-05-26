
<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.admin.head')
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
            <div class="container-fluid text-center font-weight-bolder ">
                {{ config('app.name', 'Laravel') }}
            </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder">Sign In</h4>
                  <p class="mb-0">Enter your email and password to sign in</p>
                </div>
                <div class="card-body">
                  <form role="form" method="POST" action="{{route('admin')}}">
                    @csrf
                    <div class="mb-3">
                      <input type="email"  name='email' class="form-control form-control-lg @error('email') border-danger @enderror" placeholder="Email" aria-label="Email" value="{{old('email')}}" >
                      <div class="m-0">
                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    </div>


                    <div class="mb-3">
                      <input type="password" name='password' class="form-control form-control-lg @error('password') border-danger @enderror @error('email') border-danger @enderror" placeholder="Password" aria-label="Password">
                        <div class="m-0">
                            @error('password')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <x-admin.switch-button name="remember" label="Remember Me" />

                    <div class="text-center">
                      <button type="submit"  class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Sign in</button>
                    </div>

                  </form>
                </div>
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url({{asset('admin-assets/img/login.jpg')}});background-size: cover;">
                <span class="mask bg-gradient-primary opacity-6"></span>
                <h4 class="mt-5 text-white font-weight-bolder position-relative">HOUSE + LOVE = HOME</h4>
                <p class="text-white position-relative">Going above and beyond to find your home.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
<script src="{{asset('admin-assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('admin-assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('admin-assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('admin-assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('admin-assets/js/argon-dashboard.min.js?v=2.0.2')}}"></script>
</body>

</html>
