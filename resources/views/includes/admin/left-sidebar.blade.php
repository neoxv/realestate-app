
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main" style="z-index: 5">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#" target="_blank">
        <img src="{{asset('storage/img/settings/' . config('app.logo'))}}" class="navbar-brand-img h-100" alt="main_logo" style="border-radius: 10px">
        <span class="ms-1 font-weight-bold">{{config('app.name')}}</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">

        <x-admin.nav-item :icon="'ni ni-tv-2 text-primary'" :title="'Dashboard'" :link="'admin.dashboard'" />
        <x-admin.nav-item :icon="'ni ni-calendar-grid-58 text-warning'" :title="'Properties'" :link="'admin.properties'" />
        <x-admin.nav-item :icon="'ni ni-single-02 text-success'" :title="'Users'" :link="'admin.users'" />
        <x-admin.nav-item :icon="'ni ni-notification-70 text-info'" :title="'Advertisements'" :link="'admin.advertisements'" />
        <x-admin.nav-item :icon="'ni ni ni-settings-gear-65 text-dark'" :title="'Settings'" :link="'admin.settings'" />
        <x-admin.nav-item :icon="'ni ni-circle-08 text-primary'" :title="'Account'" :link="'admin.account'" />

      </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
        <x-common.signature/>
    </div>
  </aside>
