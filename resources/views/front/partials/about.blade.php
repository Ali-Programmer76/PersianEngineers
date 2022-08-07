<section class="about">
    <div class="container-lg">
        <div class="row">
            <div class="col-md-6">
                <div class="about-content">
                    <h5 class="text-primary">{{ $about->title }}</h5>
                    <h1 class="fs-4 fw-bold py-3 text-dark">{{ $about->subtitle }}</h1>
                    <p class="fs-6 text-muted py-3">{{ $about->description }}</p>
                    <h2 class="fs-4 mb-5 text-dark">{{ $about->help }}</h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="services d-flex my-2">
                                <div class="services-img w-25">
                                    <img src={{ asset('/front/images/about/building.png') }} alt=""
                                        class="w-100" />
                                </div>
                                <div class="services-text w-75 px-3">
                                    <h3 class="fs-5">{{ $about->service_title_first }}</h3>
                                    <p class=" fs-6 text-muted">{{ $about->service_description_first }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services d-flex my-2">
                                <div class="services-img w-25">
                                    <img src={{ asset('/front/images/about/consult.png') }} alt=""
                                        class="w-100" />
                                </div>
                                <div class="services-text w-75 px-3">
                                    <h3 class="fs-5">{{ $about->service_title_second }}</h3>
                                    <p class="fs-6 text-muted">{{ $about->service_description_second }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services d-flex my-2">
                                <div class="services-img w-25">
                                    <img src={{ asset('/front/images/about/engineer.png') }} alt=""
                                        class="w-100" />
                                </div>
                                <div class="services-text w-75 px-3">
                                    <h3 class="fs-5">{{ $about->service_title_third }}</h3>
                                    <p class="fs-6 text-muted">{{ $about->service_description_third }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services d-flex my-2">
                                <div class="services-img w-25">
                                    <img src={{ asset('/front/images/about/floor-plan.png') }} alt=""
                                        class="w-100" />
                                </div>
                                <div class="services-text w-75 px-3">
                                    <h3 class="fs-5">{{ $about->service_title_fourth }}</h3>
                                    <p class="fs-6 text-muted">{{ $about->service_description_fourth }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-3 mt-md-0">
                <div class="about-img">
                    <img src="{{ asset('admin/images/about/' . $about->image) }}" class="about-img-repair"
                        alt="{{ $about->alt }}">
                    <div class="about-counter-wrap d-flex align-items-center p-1">
                        <div class="about-icon w-25">
                            <img src={{ asset('/front/images/engineer.png') }} alt="" class="w-100" />
                        </div>
                        <div class="about-text d-flex flex-column p-3">
                            <span class="about-number text-white fs-5 fw-bold">{{ $about->experience_title }}</span>
                            <span
                                class="about-caption text-white fs-5 fw-bold">{{ $about->experience_description }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
