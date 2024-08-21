<section class="fact-section">
    <div class="fact-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="fact-item-wrap d-flex flex-wrap justify-content-center">
                    <div class="circle-overlay"></div>
                    <div class="fact-section-head">
                        <div class="divider-wrapper">
                            <span class="title-divider">
                                <span class="top-title">{{ $fact->sub_heading }}</span>
                            </span>
                        </div>
                        <h2 class="section-title">
                            {!! $heading !!}
                        </h2>
                        <div class="section-disc">
                            <p>
                                {{ $fact->text }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="achivement-wrapper ">
                    <div class="goal-wrapper">
                        <div class="circle-progressbar" data-animate="false">
                            <div class="circle-bar" data-percent="{{ $fact->counter_1 }}">
                                <div class="circle-number"></div>
                                <div class="goal">
                                    <h4>{{ $fact->counter_1_title }}</h4>
                                    <span>
                                        {{ $fact->counter_1_text }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="goal-wrapper">
                        <div class="circle-progressbar" data-animate="false">
                            <div class="circle-bar" data-percent="{{ $fact->counter_2 }}">
                                <div class="circle-number"></div>
                                <div class="goal">
                                    <h4>{{ $fact->counter_2_title }}</h4>
                                    <span>
                                        {{ $fact->counter_2_text }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="goal-wrapper">
                        <div class="circle-progressbar" data-animate="false">
                            <div class="circle-bar" data-percent="{{ $fact->counter_3 }}">
                                <div class="circle-number"></div>
                                <div class="goal">
                                    <h4>{{ $fact->counter_3_title }}</h4>
                                    <span>
                                        {{ $fact->counter_3_text }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
</section>