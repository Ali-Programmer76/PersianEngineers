<section class="hero-wrap" style="background-image: url('{{ asset('admin/images/hero/' . $hero->image) }}');">
    <div class="overlay"></div>
    <div class="container-lg">
        <div class="row min-vh-100 align-items-center justify-content-center text-center">
            <div class="col-lg-9">
                <div class="hero-wrap-content position-relative">
                    <span class="subheading text-white fs-5 fw-bold">از {{ $hero->established }}</span>
                    <h2 class="text-white fs-4 fw-bold lh-2 py-3 my-3">{{ $hero->description }}</h2>
                    <p class="mt-5">
                        <a href="{{ $hero->about }}" class="btn btn-dark w-25 px-3 py-2">درباره ما</a>
                        <a href="{{ $hero->question }}" class="btn btn-primary text-dark w-25 px-3 py-2">سؤالات
                            متداول</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
