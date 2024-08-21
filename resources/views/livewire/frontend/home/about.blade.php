<section class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-about-left about-image-wrap d-flex flex-wrap">
                    <div class="home-about-image left-image">
                        <img src="{{ getFileUrl($home_about->video_thumbnail) }}" alt="">
                        <div class="video-button">
                            <a id="video-container-two" data-video-id="IUN664s7N-c">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                    </div>
                    <div class="home-about-image right-image"><img src="{{ getFileUrl($home_about->image) }}" alt="">
                    </div>
                    <div class="home-about-image bottom-image">
                        <img src="{{ getFileUrl($home_about->bottom_image) }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-about-right">
                    <div class="section-about-content">
                        <div class="section-head">
                            <div class="divider-wrapper">
                                <span class="title-divider">
                                    <span class="top-title">{{ $home_about->sub_heading }}</span>
                                </span>
                            </div>
                            <h2 class="section-title">
                                {!! $heading !!}
                            </h2>
                            <div class="section-disc">
                                <p>
                                    {{ $home_about->text }}
                                </p>
                            </div>
                        </div>
                        <div class="about-list">
                            <ul>
                                @foreach($features as $feature)
                                <li>{{ $feature->title }}</li>
                                @endforeach
                            </ul>
                            <div class="exp-date">
                                <h2>{{ $home_about->experience }}</h2>
                                <h4>YEARS</h4>
                                <span class="date-decs">OF EXPERIENCE</span>
                            </div>
                        </div>
                        <div class="aboutbtn">
                            <a href="about-us.html" class="button-round-primary">MORE ABOUT US</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>