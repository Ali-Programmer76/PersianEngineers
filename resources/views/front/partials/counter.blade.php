<section class="counter-section w-100 py-5" style="background-image: url('{{ asset('/front/images/counter.png') }}');">
    <div class="overlay"></div>
    <div class="container-lg py-5">
        <div class="row">
            @foreach ($counters as $counter)
                <div class="col-lg-3 col-md-6 mt-3 mt-lg-0">
                    <div class="counter-item d-flex justify-content-center align-items-center">
                        <div class="counter-item-img w-25 ps-3">
                            <img src="{{ asset('admin/images/counter/' . $counter->image) }}" alt=""
                                class="w-100" />
                        </div>
                        <div class="counter-item-text w-75">
                            <span class="counter-number text-primary fs-1 fw-bold">{{ $counter->title }}</span>
                            <p class="counter-text text-white fs-5 fw-bold">{{ $counter->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
