<section class="team py-5">
    <div class="container py-5">
        <div class="team-header">
            <h6 class="text-primary text-center fs-6 fw-bold">تیم و کارکنان</h6>
            <h1 class="text-dark text-center fw-bold mt-3">مهندسان و کارمندان ما</h1>
        </div>
        <div class="team-body mt-5">
            <div class="row">
                @foreach ($teams as $team)
                    <div class="col-lg-3 col-md-6 mt-4 mt-md-2 mt-lg-0">
                        <div class="team-item">
                            <div class="team-item-img">
                                <img src="{{ asset('admin/images/team/' . $team->image) }}" alt="{{ $team->alt }}">
                                <ul>
                                    <li>
                                        <a href="{{ $team->instagram }}"><i class="fab fa-instagram-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ $team->twitter }}"><i class="fab fa-twitter-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ $team->linkedin }}"><i class="fab fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-item-text p-3">
                                <h2 class="text-dark text-center fs-3 fw-bold">{{ $team->name }}</h2>
                                <h6 class="text-muted text-center fs-6 fw-bold">{{ $team->job }}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
