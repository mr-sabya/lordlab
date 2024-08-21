<section class="service-section">
    <div class="service-inner-wrap">
        <div class="container">
            <div class="overlay"></div>
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="section-head white-section-head">
                        <div class="divider-wrapper">
                            <span class="title-divider">
                                <span class="top-title">{{ $home_service->sub_heading }}</span>
                            </span>
                        </div>
                        <h2 class="section-title">
                            {!! $heading !!}
                        </h2>
                        <div class="section-disc">
                            <p>
                                {{ $home_service->text }}
                            </p>
                            <div class="service-list">
                                <ul>
                                    <li>
                                        <i class="far fa-dot-circle"></i>
                                        <span class="dot-list-text">{{ $home_service->feature_1 }}</span>
                                    </li>
                                    <li>
                                        <i class="far fa-dot-circle"></i>
                                        <span class="dot-list-text">{{ $home_service->feature_2 }}</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="author-content d-flex align-items-center justify-content-between">
                                <div class="service-tag d-flex align-items-center">
                                    <figure class="author-img">
                                        <img src="{{ asset('assets/frontend/img/agency-img18.jpg') }}" alt="">
                                    </figure>
                                    <div>
                                        <h5 class="author-name">George Smith</h5>
                                        <span class="tag-discription">CEO, Director</span>
                                    </div>
                                </div>
                                <div class="servicebtn">
                                    <div>
                                        <a href="service.html" class="button-round-primary">More service</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="types-of-duty">
                        <div class="service-type">
                            <div class="overlay75"></div>
                            <div class="service-icon">
                                <i aria-hidden="true" class="icon icon-chart2"></i>
                            </div>
                            <h5 class="service-title">
                                Website Development
                            </h5>
                        </div>
                        <div class="service-type">
                            <div class="overlay75"></div>
                            <div class="service-icon">
                                <i aria-hidden="true" class="icon icon-design"></i>
                            </div>
                            <h5 class="service-title">
                                Graphic & Sketch Designing
                            </h5>
                        </div>
                        <div class="service-type">
                            <div class="overlay75"></div>
                            <div class="service-icon">
                                <i aria-hidden="true" class="icon icon-Document-Search"></i>
                            </div>
                            <h5 class="service-title">
                                SEO & Content Writing
                            </h5>
                        </div>
                        <div class="service-type">
                            <div class="overlay75"></div>
                            <div class="service-icon">
                                <i aria-hidden="true" class="icon icon-api_setup"></i>
                            </div>
                            <h5 class="service-title">
                                Digital Market Planning
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="service-item-inner">
        <div class="container">
            <div class="service-contact-wrapper primary-bg ">
                <div class="contact-package col-xl-5 col-lg-5 col-md-12">
                    <div class="contact-number-tag d-flex align-items-center">
                        <figure class="contact-icon">
                            <span class="icon-outer-circle">
                                <i aria-hidden="true" class="icon icon-phone-call2"></i>
                            </span>
                        </figure>
                        <div class="contact-detail-tag">
                            <h6>GET A FREE CONSULTATION</h6>
                            <span>987 233 0000</span>
                        </div>
                    </div>
                </div>
                <div class="contct-info col-xl-4 col-lg-4 col-md-12">
                    <p>
                        Vero id posuere tempus aspernatur quaerat mollis voluptatum eveniet porro viverra libero habitasse Aut ab nibh aliqua optio veniet porro.
                    </p>
                </div>
                <div class="contactbtn col-xl-3 col-lg-3 col-md-12">
                    <a href="#contact-section" class="button-round-white">MAKE APPOINTMENT</a>
                </div>
            </div>
        </div>
    </div>
</section>