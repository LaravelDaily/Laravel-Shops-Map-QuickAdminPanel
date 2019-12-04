@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="content-box content-single">
                <article class="post-180 gd_place type-gd_place status-publish hentry gd_placecategory-hotels">
                    <header>
                        <h1 class="entry-title">{{ $shop->name }}</h1></header>
                    <div class="entry-content entry-summary">
                        @if($shop->photos->count())
                            <div class="geodir-post-slider center-gallery">
                                <div class="bxslider">
                                    @foreach($shop->photos as $photo)
                                    <div><img src="{{ $photo->url }}"></div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        @if($shop->categories->count())
                            <div class="geodir-single-taxonomies-container">
                                <p class="geodir_post_taxomomies clearfix"> 
                                    <span class="geodir-category">
                                        Categories: 
                                        @foreach($shop->categories as $category)
                                            <a href="{{ route('home') }}?category={{ $category->id }}">{{ $category->name }}</a>{{ !$loop->last ? ',' : ''  }}
                                        @endforeach
                                    </span>
                                </p>
                            </div>
                        @endif
                        <div class="geodir-single-tabs-container">
                            <div class="geodir-tabs" id="gd-tabs">
                                <dl class="geodir-tab-head"><dt></dt>
                                    <dd class="geodir-tab-active"><a data-tab="#post_content" data-status="enable"><i class="fas fa-home" aria-hidden="true"></i>About</a></dd><dt></dt>
                                    @if($shop->photos->count())
                                        <dd class=""><a data-tab="#post_images" data-status="enable"><i class="fas fa-image" aria-hidden="true"></i>Photos</a></dd><dt></dt>
                                    @endif
                                    @if($shop->latitude && $shop->longitude)
                                        <dd class=""><a data-tab="#post_map" data-status="enable"><i class="fas fa-globe-americas" aria-hidden="true"></i>Map</a></dd><dt></dt>
                                    @endif
                                    @if($shop->days->count())
                                        <dd class=""><a data-tab="#working_hours" data-status="enable"><i class="fas fa-clock" aria-hidden="true"></i>Working Hours</a></dd>
                                    @endif
                                </dl>
                                <ul class="geodir-tabs-content geodir-entry-content " style="z-index: 0; position: relative;">
                                    <li id="post_contentTab" style="display: none;"><span id="post_content"></span>
                                        <div id="geodir-tab-content-post_content" class="hash-offset"></div>
                                        <div class="geodir-post-meta-container">
                                            <div class="geodir_post_meta  geodir-field-post_content">
                                                <p>Address: {{ $shop->address }}</p>
                                                <p>Description: {{ $shop->description }}</p>
                                                @if($shop->days->count())
                                                    @if($shop->working_hours->currentOpenRange(now()))
                                                        <p>Shop is open and will close at {{ $shop->working_hours->currentOpenRange(now())->end() }}.</p>
                                                    @else
                                                        <p>Shop is closed since {{ $shop->working_hours->previousClose(now())->format('l H:i') }}
                                                            and will re-open at {{ $shop->working_hours->nextOpen(now())->format('l H:i') }}</p>
                                                    @endif
                                                @endif
                                                <p></p>
                                            </div>
                                        </div>
                                    </li>
                                    @if($shop->photos->count())
                                        <li id="post_imagesTab" style="display: none;"><span id="post_images"></span>
                                            <div id="geodir-tab-content-post_images" class="hash-offset"></div>
                                            <div class="geodir-post-slider">
                                                <div class="geodir-image-container geodir-image-sizes-medium_large ">
                                                    <div id="geodir_images_5de6cafacbba5_180" class="geodir-image-wrapper" data-controlnav="1" data-slideshow="1">
                                                        <ul class="geodir-gallery geodir-images clearfix">
                                                            @foreach($shop->photos as $photo)
                                                                <li>
                                                                    <a href="{{ $photo->getUrl() }}" class="geodir-lightbox-image" target="_blank"><img src="{{ $photo->getUrl('thumb') }}" width="1440" height="960"><i class="fas fa-search-plus" aria-hidden="true"></i></a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                    @if($shop->latitude && $shop->longitude)
                                        <li id="post_mapTab" style="display: none;">
                                            <div id="map-canvas" style="height: 425px; width: 100%; position: relative; overflow: hidden;">
                                            </div>
                                        </li>
                                    @endif
                                    @if($shop->days->count())
                                        <li id="working_hoursTab" style="display: none;">
                                            @foreach($shop->days as $day)
                                                <p>{{ ucfirst($day->name) }}: from {{ $day->pivot->from_hours }}:{{ $day->pivot->from_minutes }} to {{ $day->pivot->to_hours }}:{{ $day->pivot->to_minutes }}</p>
                                            @endforeach
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="geodir-single-taxonomies-container">
                            <div class="geodir-pos_navigation clearfix">
                                <div class="geodir-post_left">
                                    <a href="{{ url()->previous() }}" rel="prev">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class="entry-footer"></footer>
                </article>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
<style>
@media only screen and (min-width: 675px) {
    .center-gallery {
        width: 50%;
        margin: auto;
    }
}
</style>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<script type="text/javascript">
if (window.location.hash && window.location.hash.indexOf('&') === -1 && jQuery(window.location.hash + 'Tab').length) {
    hashVal = window.location.hash;
} else {
    hashVal = jQuery('dl.geodir-tab-head dd.geodir-tab-active').find('a').attr('data-tab');
}
openTab(hashVal);

jQuery('dl.geodir-tab-head dd a').click(function() {
    openTab(jQuery(this).data('tab'))
});

function openTab(hashVal)
{
    jQuery('dl.geodir-tab-head dd').each(function() {
        var tab = '';
        tab = jQuery(this).find('a').attr('data-tab');
        jQuery(this).removeClass('geodir-tab-active');
        if (hashVal != tab) {
            jQuery(tab + 'Tab').hide();
        }
    });
    jQuery('a[data-tab="'+hashVal+'"]').parent().addClass('geodir-tab-active');
    jQuery(hashVal + 'Tab').show();
}

$(function(){
    $('.bxslider').bxSlider({
        mode: 'fade',
        slideWidth: 600
    });
});
</script>
@if($shop->latitude && $shop->longitude)
    <script type='text/javascript' src='https://maps.google.com/maps/api/js?language=en&key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&region=GB'></script>
    <script defer>
        function initialize() {
            var latLng = new google.maps.LatLng({{ $shop->latitude }}, {{ $shop->longitude }});
            var mapOptions = {
                zoom: 14,
                minZoom: 6,
                maxZoom: 17,
                zoomControl:true,
                zoomControlOptions: {
                    style:google.maps.ZoomControlStyle.DEFAULT
                },
                center: latLng,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                scrollwheel: false,
                panControl:false,
                mapTypeControl:false,
                scaleControl:false,
                overviewMapControl:false,
                rotateControl:false
            }
            var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
            var image = new google.maps.MarkerImage("{{ asset('assets/images/pin.png') }}", null, null, null, new google.maps.Size(40,52));

            var content = `
            <div class="gd-bubble" style="">
                <div class="gd-bubble-inside">
                    <div class="geodir-bubble_desc">
                    <div class="geodir-bubble_image">
                        <div class="geodir-post-slider">
                            <div class="geodir-image-container geodir-image-sizes-medium_large ">
                                <div id="geodir_images_5de53f2a45254_189" class="geodir-image-wrapper" data-controlnav="1">
                                    <ul class="geodir-post-image geodir-images clearfix">
                                        <li>
                                            <div class="geodir-post-title">
                                                <h4 class="geodir-entry-title">
                                                    <a href="{{ route('shop', $shop->id) }}" title="View: {{ $shop->name }}">{{ $shop->name }}</a>
                                                </h4>
                                            </div>
                                            <a href="{{ route('shop', $shop->id) }}"><img src="{{ $shop->thumbnail }}" alt="{{ $shop->name }}" class="align size-medium_large" width="1400" height="930"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="geodir-bubble-meta-side">
                    <div class="geodir-output-location">
                    <div class="geodir-output-location geodir-output-location-mapbubble">
                        <div class="geodir_post_meta  geodir-field-post_title"><span class="geodir_post_meta_icon geodir-i-text">
                            <i class="fas fa-minus" aria-hidden="true"></i>
                            <span class="geodir_post_meta_title">Place Title: </span></span>{{ $shop->name }}</div>
                        <div class="geodir_post_meta  geodir-field-address" itemscope="" itemtype="http://schema.org/PostalAddress">
                            <span class="geodir_post_meta_icon geodir-i-address"><i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                            <span class="geodir_post_meta_title">Address: </span></span><span itemprop="streetAddress">{{ $shop->address }}</span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            </div>`;
            var marker = new google.maps.Marker({
                position: latLng,
                icon:image,
                map: map,
                title: '{{ $shop->name }}'
            });
            var infowindow = new google.maps.InfoWindow();
            google.maps.event.addListener(marker, 'click', (function (marker) {
                return function () {
                    infowindow.setContent(content)
                    infowindow.open(map, marker);
                }
            })(marker));
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
@endif
@endsection