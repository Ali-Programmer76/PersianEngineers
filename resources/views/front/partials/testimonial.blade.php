<section class="testimonial py-5">
    <div class="container-lg py-5">
        <div class="testimonial-header">
            <h6 class="text-primary text-center fs-6 fw-bold">نظرات مشتریان</h6>
            <h1 class="text-dark text-center fw-bold mt-3">مشتریان شرکت ما</h1>
        </div>
        <div class="testimonial-body mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-6">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators" dir="ltr">
                            <button class="bg-primary active" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide-to="0" aria-current="true" aria-label="Slide 1">
                            </button>
                            <button class="bg-primary" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide-to="1" aria-label="Slide 2">
                            </button>
                            <button class="bg-primary" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide-to="2" aria-label="Slide 3">
                            </button>
                        </div>
                        <div class="carousel-inner">
                            @foreach ($testimonials as $testimonial)
                                <div class="carousel-item p-4 @if ($loop->first) active @endif">
                                    <div class="slider-item">
                                        <div class="slider-item-information d-flex align-items-center">
                                            <img src="{{ asset('admin/images/testimonial/' . $testimonial->image) }}"
                                                alt="{{ $testimonial->alt }}" class="img-fluid rounded-circle" />
                                            <div class="slider-item-information-text pe-3">
                                                <h2 class="text-dark fs-3 fw-bold">{{ $testimonial->name }}</h2>
                                                <h4 class="text-primary fs-6 fw-bold">{{ $testimonial->job }}</h4>
                                            </div>
                                        </div>
                                        <div class="slider-item-description mt-4">
                                            <p class="text-muted fs-6 fw-bold">{{ $testimonial->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
