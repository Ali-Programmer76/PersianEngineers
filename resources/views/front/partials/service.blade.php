<section class="service py-5">
    <div class="container-lg py-5">
        <div class="service-header">
            <h6 class="text-primary text-center fs-6 fw-bold">ما چیکار میکنیم</h6>
            <h1 class="text-dark text-center fw-bold mt-3">خدمات ما</h1>
        </div>
        <div class="service-body my-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-lg-12 my-2">
                            <div
                                class="service-item w-100 px-5 py-4 bg-light d-flex justify-content-center align-items-center shadow-sm">
                                <div class="service-item-img">
                                    <img src={{ asset('/front/images/service/engineer.png') }} alt="" height="80"
                                        width="80" class="bg-light" />
                                </div>
                                <div class="service-item-text pe-5">
                                    <h1 class="text-dark fs-3 fw-bold">{{ $service->service_title_first }}</h1>
                                    <p class="text-dark my-3">{{ $service->service_description_first }}</p>
                                    <a href="{{ $service->service_link_first }}"
                                        class="btn btn-light text-primary fw-bold shadow-lg">بیشتر
                                        بخوانید</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 my-2">
                            <div
                                class="service-item w-100 px-5 py-4 bg-primary d-flex justify-content-center align-items-center shadow-sm">
                                <div class="service-item-img">
                                    <img src={{ asset('/front/images/service/modern-house.png') }} alt="" height="80"
                                        width="80" class="bg-primary" />
                                </div>
                                <div class="service-item-text pe-5">
                                    <h1 class="text-white fs-3 fw-bold">{{ $service->service_title_second }}</h1>
                                    <p class="text-white my-3">{{ $service->service_description_second }}</p>
                                    <a href="{{ $service->service_link_second }}"
                                        class="btn btn-light text-primary fw-bold">بیشتر بخوانید</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 my-2">
                            <div
                                class="service-item w-100 px-5 py-4 bg-dark d-flex justify-content-center align-items-center shadow-sm">
                                <div class="service-item-img">
                                    <img src={{ asset('/front/images/service/reverse-engineering.png') }} alt=""
                                        height="80" width="80" class="bg-dark" />
                                </div>
                                <div class="service-item-text pe-5">
                                    <h1 class="text-white fs-3 fw-bold">{{ $service->service_title_third }}</h1>
                                    <p class="text-white my-3">{{ $service->service_description_third }}</p>
                                    <a href="{{ $service->service_link_third }}"
                                        class="btn btn-light text-primary fw-bold">بیشتر بخوانید</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-3 mt-md-0">
                    <div class="service-img d-flex align-items-center">
                        <img src="{{ asset('admin/images/service/' . $service->image) }}" alt="{{ $service->alt }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
