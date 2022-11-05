<x-common.client.container>
<!-- Sub banner start -->
<x-common.client.sub-banner :title="'favourites'"/>
<!-- Sub banner end -->

<!-- favourites start -->
<div class="contact-3 content-area-2">
    <div class="container">
       <div class="row filter-portfolio wow fadeInUp delay-04s">
                <div class="cards">
                    @if (count($favourites) == 0)
                        <p>No favourites yet.</p>
                    @endif
                    @foreach ($favourites as $favourite)
                        <x-home-page.featured-card :property='$favourite'/>
                    @endforeach
                </div>
            </div>

    </div>
</div>
<!-- favourites end -->


<x-user-profile.footer/>

</x-common.client.container>
