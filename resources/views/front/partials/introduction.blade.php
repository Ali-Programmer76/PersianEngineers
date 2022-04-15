<section class="introduction py-md-5"
    style="background-image: url('{{ asset('admin/images/introduction/' . $introduction->image) }}');">
    <div class="overlay"></div>
    <div class="container-lg py-5">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="introduction-content">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-8">
                            <div class="introduction-text">
                                <h6 class="text-white">{{ $introduction->title }}</h6>
                                <h1 class="mt-3">{{ $introduction->description }}</h1>
                            </div>
                        </div>
                        <div class="col-md-4 mt-3 mt-md-0">
                            <div class="introduction-btn w-100 mx-auto">
                                <a href="{{ $introduction->link }}"
                                    class="btn btn-primary text-dark w-75 px-3 py-2">بستن قرارداد</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
