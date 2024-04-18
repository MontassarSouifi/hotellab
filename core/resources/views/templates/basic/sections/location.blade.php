@php
$location = getContent('location.content', true);
$locations = \App\Models\Location::where('status', 1)->orderBy('id', 'DESC')->limit(10)->get();
@endphp

<!-- location section start -->
<section class="pt-100 pb-100 bg_img location-section" style="background-image: url('{{ getImage('assets/images/frontend/location/'.$location->data_values->background_image, '1920x1280') }}');">
    <div class="container-fluid">
        <div class="section-header text-xl-start text-center" style="display: flex; flex-direction: column; align-items: center">
            <h2 class="section-title" >{{ __($location->data_values->heading) }}</h2>
            <a style="width: fit-content" href="{{ $location->data_values->button_url }}" class="btn btn--base mt-4">{{ __($location->data_values->button) }}</a>
        </div>
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
        // Get all elements with the class "prev" and "slick-arrow"
        const elements = document.querySelectorAll('.next.slick-arrow');

        // Function to simulate click event
        function simulateClick(element) {
            const event = new MouseEvent('click', {
                bubbles: true,
                cancelable: true,
                view: window
            });
            element.dispatchEvent(event);
        }

        // Function to click on each element every 2000 milliseconds
        let intervalId;

        function clickEvery2000() {
            elements.forEach(element => {
                simulateClick(element);
            });
        }

        // Call the function initially
        clickEvery2000();

        // Call the function every 2000 milliseconds, and save the interval ID
        intervalId = setInterval(clickEvery2000, 2000);

        // Add event listener to pause and resume interval when hovering over ".location-slider"
        const locationSlider = document.querySelector('.location-slider');

        locationSlider.addEventListener('mouseenter', function() {
            clearInterval(intervalId); // Pause the interval when hovering
        });

        locationSlider.addEventListener('mouseleave', function() {
            // Resume the interval when unhovering
            intervalId = setInterval(clickEvery2000, 2000);
        });
    </script>
@endpush
