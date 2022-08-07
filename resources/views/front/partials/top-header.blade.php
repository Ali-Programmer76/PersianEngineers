<div class="top-header">
    <div class="container-lg">
        <div class="row py-1">
            <div class="col-lg-9">
                <div class="row h-100">
                    <div class="col-lg-6">
                        <div class="email-address h-100 d-flex align-items-center">
                            آدرس ایمیل:
                            <span>{{ $topHeader->email }}</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="call h-100 d-flex align-items-center mt-2 mt-md-0">
                            شماره تلفن:
                            <span>{{ $topHeader->phone }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="top-header-social">
                    <div class="row py-1">
                        <div class="col-lg-12">
                            <ul class="d-flex justify-content-end">
                                <li>
                                    <a href="{{ $topHeader->instagram }}" target="_blank"><i
                                            class="fab fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="{{ $topHeader->twitter }}" target="_blank"><i
                                            class="fab fa-twitter-square"></i></a>
                                </li>
                                <li>
                                    <a href="{{ $topHeader->telegram }}" target="_blank"><i
                                            class="fab fa-telegram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
