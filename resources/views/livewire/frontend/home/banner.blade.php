<section class="home-banner" data-background="{{ getFileUrl($banner->image) }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="banner-content text-center">
                    <div class="section-head">
                        <div class="divider-wrapper">
                            <span class="title-divider">
                                <span class="top-title">{{ $banner->sub_heading }}</span>
                            </span>
                        </div>
                        <h2 class="section-title banner-title">
                            {!! $heading !!}
                        </h2>
                    </div>
                    <div class="banner-text">
                        <p>{{ $banner->text }}</p>
                    </div>
                    <div class="banner-button">
                        <a href="{{ $banner->button_1_link }}" class="button-round-primary">{{ $banner->button_1_text }}</a>
                        <a href="{{ $banner->button_2_link }}" class="button-round-white">{{ $banner->button_2_text }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
</section>