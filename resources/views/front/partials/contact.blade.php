<section class="contact" style="background-image: url('{{ asset('/front/images/contact.png') }}');">
    <div class="overlay"></div>
    <div class="container-lg">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="contact-form">
                    <div class="contact-form-header">
                        <h6 class="text-primary fs-6 fw-bold">فرم ارسال پیام</h6>
                        <h1 class="text-dark fs-4 fw-bold my-3">منتظر پیامتان هستیم</h1>
                    </div>
                    <div class="contact-form-body my-4">
                        <form action="{{ route('contact.ajax') }}" method="post" id="form-contact-ajax">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 my-3">
                                    <div class="contact-form-body-input input-group">
                                        <label for="fullname">نام و نام خانوادگی شما</label>
                                        <input type="text" class="w-100 mt-2 p-2" name="fullname" id="fullname"
                                            placeholder="نام و نام خانوادگی">
                                    </div>
                                </div>
                                <div class="col-md-6 my-3">
                                    <div class="contact-form-body-input input-group">
                                        <label for="email">ایمیل شما</label>
                                        <input type="email" class="w-100 mt-2 p-2" name="email" id="email"
                                            placeholder="ایمیل">
                                    </div>
                                </div>
                                <div class="col-md-12 my-3">
                                    <div class="contact-form-body-input input-group">
                                        <label for="subject">موضوع پیام</label>
                                        <input type="text" class="w-100 mt-2 p-2" name="subject" id="subject"
                                            placeholder="موضوع">
                                    </div>
                                </div>
                                <div class="col-md-12 my-3">
                                    <div class="contact-form-body-input input-group">
                                        <label for="description">متن پیام</label>
                                        <textarea id="description" class="w-100 mt-2 p-2" name="description" placeholder="متن پیام"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 my-3">
                                    <button type="submit"
                                        class="btn btn-primary text-dark w-25 border-0 py-2">ارسال</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 contact-bg pe-4">
                <div class="contact-faq">
                    <div class="contact-faq-header">
                        <h6 class="text-primary fs-6 fw-bold">سؤالات متداول</h6>
                        <h1 class="text-dark fs-4 fw-bold my-3">{{ $faq->title }}</h1>
                        <p class="text-muted">{{ $faq->description }}
                    </div>
                    <div class="contact-faq-body my-4">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        {{ $faq->faq_title_first }}
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="text-muted fw-bold">{{ $faq->faq_description_first }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        {{ $faq->faq_title_second }}
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="text-muted fw-bold">{{ $faq->faq_description_second }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        {{ $faq->faq_title_third }}
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="text-muted fw-bold">{{ $faq->faq_description_third }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@section('javaScript')
    <script>
        $('#form-contact-ajax').submit(function(e) {
            e.preventDefault();
            let fullname = $('input[name=fullname]').val();
            let email = $('input[name=email]').val();
            let subject = $('input[name=subject]').val();
            let description = $('textarea[name=description]').val();
            let token = $('input[name=_token]').val();
            let url = $('#form-contact-ajax').attr('action');
            $.ajax({
                type: "POST",
                url: url,
                data: {
                    'fullname': fullname,
                    'email': email,
                    'subject': subject,
                    'description': description,
                    '_token': token
                },
                success: function(response) {
                    if (response) {
                        $.toast({
                            heading: 'با تشکر از شما',
                            text: 'پیام شما با موفقیت ارسال شد.',
                            showHideTransition: 'slide',
                            hideAfter: 5000,
                            position: 'bottom-right',
                            icon: 'success'
                        });
                        $('input[name=fullname]').val("");
                        $('input[name=email]').val("");
                        $('input[name=subject]').val("");
                        $('textarea[name=description]').val("");
                    }
                }
            });
        });
    </script>
@endsection
