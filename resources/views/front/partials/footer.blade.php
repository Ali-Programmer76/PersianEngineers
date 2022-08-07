<footer class="footer pt-5">
    <div class="container-lg pt-5">
        <div class="row">
            <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                <div class="footer-about">
                    <h6 class="text-white fs-5 fw-bold">{{ $footerAbout->title }}</h6>
                    <p class="text-white fs-6 mt-5">{{ $footerAbout->description }}</p>
                    <ul class="d-flex">
                        <li>
                            <a href="{{ $footerAbout->instagram }}"><i class="fab fa-instagram-square"></i></a>
                        </li>
                        <li>
                            <a href="{{ $footerAbout->twitter }}"><i class="fab fa-twitter-square"></i></a>
                        </li>
                        <li>
                            <a href="{{ $footerAbout->telegram }}"><i class="fab fa-telegram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                <div class="footer-service">
                    <h6 class="text-white fs-5 fw-bold">خدمات ما</h6>
                    @foreach ($footerServices as $footerService)
                        <div class="footer-service-item d-flex mt-5">
                            <div class="footer-service-item-img">
                                <img src={{ asset('admin/images/footer/service/' . $footerService->image) }}
                                    alt="{{ $footerService->alt }}" />
                            </div>
                            <div class="footer-service-item-text pe-3">
                                <h6>
                                    <a href="{{ $footerService->link }}"
                                        class="text-white">{{ $footerService->title }}</a>
                                </h6>
                                <div class="footer-service-item-information mt-4 text-primary">
                                    <span><i class="fas fa-user"></i>{{ $footerService->author }}</span>
                                    <span><i class="fas fa-comment"></i>23 نظر</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-2 col-md-6 mt-4 mt-lg-0">
                <div class="footer-quick-access">
                    <h6 class="text-white fs-5 fw-bold">دسترسی سریع</h6>
                    <div class="footer-quick-access-link mt-5">
                        <ul>
                            @foreach ($footerQuickAccesses as $footerQuickAccess)
                                <li>
                                    <a href="{{ $footerQuickAccess->link }}"><i
                                            class="fas fa-chevron-left"></i>{{ $footerQuickAccess->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 mt-4 mt-lg-0">
                <div class="footer-question">
                    <h6 class="text-white fs-5 fw-bold">ارتباط با ما</h6>
                    <div class="footer-question-ways mt-5">
                        <ul>
                            <li class="mt-4">
                                <i class="fas fa-map text-primary"></i>
                                <span class="text-white fs-6 pe-2">{{ $footerContact->address }}</span>
                            </li>
                            <li class="mt-4">
                                <i class="fas fa-phone text-primary"></i>
                                <span class="text-white fs-6 pe-2">{{ $footerContact->phone }}</span>
                            </li>
                            <li class="mt-4 d-flex align-items-center">
                                <i class="fas fa-envelope text-primary"></i>
                                <span
                                    class="text-white pe-2 footer-question-email">{{ $footerContact->email }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copy-right">
        <p>&copy; تمامی حقوق مادی و معنوی این وبسایت متعلق به سیدعلی حسینی می باشد.</p>
    </div>
</footer>
