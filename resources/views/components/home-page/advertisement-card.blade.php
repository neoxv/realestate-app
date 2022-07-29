@props(['ad'=>null])
<div class="col-lg-6 col-md-6 col-sm-12" onclick="javascript:window.location.href='https://{{$ad?->link}}'">
                    <div class="slick-slide-item">
                    <div class="property-box-4">
                        <div class="thumbnail_inner">
                            <div class="thumbnail">
                                <a href="#">
                                    @if($ad != null)
                                        <img src="{{asset(count($ad->documents) > 0 ?'storage/img/ads/'. $ad->documents->first()->filename:'storage/img/default.png')}}" alt="property-box-4" class="img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
                                    @else
                                        <img src="{{asset('storage/img/ads/default.png')}}" alt="property-box-4" class="img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
                                    @endif
                                </a>
                            </div>
                        </div>
                        <div class="content">
                            <div class="inner">
                            </div>
                        </div>
                        <a class="transparent_link" href="#"></a>
                    </div>
                </div>
</div>
