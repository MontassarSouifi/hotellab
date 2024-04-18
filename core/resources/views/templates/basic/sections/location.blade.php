@php
$location = getContent('location.content', true);
$locations = \App\Models\Location::where('status', 1)->orderBy('id', 'DESC')->limit(10)->get();
@endphp

<!-- location section start -->
<section class="pt-100 pb-100 bg_img location-section" style="background-image: url('{{ getImage('assets/images/frontend/location/'.$location->data_values->background_image, '1920x1280') }}');">
    <div class="container-fluid">
        <div class="row justify-content-xl-end justify-content-center">
            <div class="col-12">
                <div class="location-slider d-flex flex-wrap justify-content-center">
                    @foreach ($locations as $location)
                        @if ($location->image)
                            <div class="single-slide">
                                <div class="location-card has--link rounded-3">
                                    <a href="{{ route('search.location.property', [$location->id, slug($location->name)]) }}" class="item--link"></a>
                                    <img src="{{ getImage(imagePath()['location']['path'].'/'.$location->image, imagePath()['location']['size']) }}" alt="image">
                                    <div class="overlay-content">
                                        <div class="top"></div>
                                        <div class="bottom">
                                            <h4 class="location-name text-white">{{ __($location->name) }}</h4>
                                            <p class="text-white fs--14px">@lang('Average price') <span class="float-end">{{ $general->cur_sym }}{{ showAmount($location->average_price) }}</span></p>
                                        </div>
                                    </div>
                                </div><!-- location-card end -->
                            </div><!-- single-slide end -->
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@push('script')
    <script>
        (function($) {
            "use strict";

            $('.location-slider').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        })(jQuery);
    </script>
@endpush