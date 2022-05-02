<section class="project py-5">
    <div class="px-2">
        <div class="project-header py-5">
            <h6 class="text-primary text-center fs-6 fw-bold">نمونه کارها</h6>
            <h1 class="text-dark text-center fw-bold mt-3">پروژه ها</h1>
        </div>
        <div class="project-body">
            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-lg-4 col-md-6">
                        <div class="project-item w-100">
                            <img src="{{ asset('admin/images/project/' . $project->image) }}" class="w-100"
                                alt="{{ $project->alt }}" />
                            <div class="project-item-search">
                                <a href=""><i class="fas fa-search"></i></a>
                            </div>
                            <div class="project-item-description pe-3">
                                <h1 class="text-white fs-3 fw-bold">{{ $project->title }}</h1>
                                <h4 class="text-white fs-6 fw-bold">{{ $project->description }}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
