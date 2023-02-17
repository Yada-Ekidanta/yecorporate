<x-office-layout title="Project">
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6 animation-class">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">{{config('app.name')}}</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{route('office.dashboard.index')}}" class="text-muted text-hover-primary menu-link">Dashboard</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Project Management</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Detail <a href="{{ route('office.pm.project.index') }}" class="mx-2 text-muted">Project</a> {{ $data->name }}</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3 d-none">
                <!--begin::Secondary button-->
                <a href="#" class="btn btn-sm fw-bold bg-body btn-color-gray-700 btn-active-color-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Rollover</a>
                <!--end::Secondary button-->
                <!--begin::Primary button-->
                <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Add Target</a>
                <!--end::Primary button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
    <div id="kt_app_content" class="app-content flex-column-fluid py-3 py-lg-6 animation-class delay3">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="row mb-5">
                <div class="col-md-6">
                    <div class="card card-flush h-md-100 bg-secondary">
                        <div class="row">
                            <div class="col-md-3">
                                <img class="mx-auto p-3 ms-4 mt-4" src="{{ asset('storage/'.$data->image) }}" alt="project-image" height="100px" width="100px" style="border-radius: 50%; object-fit: cover;">
                            </div>
                            <div class="col-md-9 mt-9">
                                <div class="card-title">
                                    <h1>{{ $data->name }}</h1>
                                    <span>{{ $data->status }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-4">
                            <p class="card-text">{!! $data->desc !!}</p>
                        </div>
                        <div class="card-footer flex-wrap pt-0">
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Start Date :</p>
                                    <p class="fw-bold">{{ $data->start_date }}</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-end me-3">End Date :</p>
                                    <p class="fw-bold text-end {{date('Y-m-d') > $data->end_date ? 'text-danger' : '' }}">{{ $data->end_date }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row mb-5">
                        <div class="col-md-6">
                            <div class="card card-flush bg-secondary" style="height: 220px">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Total Task</h2>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="mx-auto bg-light" style="border-radius: 50%; width:105px; height:105px; margin-top: -20px;">
                                        <h1 class="text-center pt-12">{{ $count }}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-flush bg-secondary" style="height: 220px">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Total Budget</h2>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="mx-auto bg-light" style="border-radius: 50%; width:105px; height:105px; margin-top: -20px;">
                                        <h1 class="text-center pt-12">{{ $data->budget }} {{ $data->currency }}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-flush bg-secondary">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Teams</h2>
                                    </div>
                                    <div class="card-title">
                                        <a href="{{route('office.pm.team.create', $data->id)}}" class="btn btn-primary btn-sm btn-hover-scale menu-link">
                                            <span class="svg-icon svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                                                    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                                                </svg>
                                            </span>
                                            Add
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="container bg-light rounded pb-3">
                                        <div id="list_team"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12">
                    <div class="card card-flush bg-secondary">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Milestones</h2>
                            </div>
                            <div class="card-title">
                                <a href="{{route('office.pm.milestone.create', $data->id)}}" class="btn btn-primary btn-sm btn-hover-scale menu-link">
                                    <span class="svg-icon svg-icon-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                                        </svg>
                                    </span>
                                    Add
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="container bg-light rounded pb-3">
                                <div id="list_milestone"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-flush bg-secondary">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>List Tasks</h2>
                            </div>
                            <div class="card-title">
                                <a href="{{route('office.pm.task.create', $data->id)}}" class="btn btn-primary btn-sm btn-hover-scale menu-link">
                                    <span class="svg-icon svg-icon-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                                        </svg>
                                    </span>
                                    Add
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="container bg-light rounded pb-3">
                                <div id="list_task"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('custom_js')
    <script>
        load_milestone(1);
        load_team(1);
        load_task(1);
        function load_milestone(page){
            $.get('{{ route("office.pm.milestone.index", $data->id) }}?page=' + page, function(result) {
                $('#list_milestone').html(result);
            }, "html");
        }

        function load_team(page){
            $.get('{{ route("office.pm.team.index", $data->id) }}?page=' + page, function(result) {
                $('#list_team').html(result);
            }, "html");
        }

        function load_task(page){
            $.get('{{ route("office.pm.task.index", $data->id) }}?page=' + page, function(result) {
                $('#list_task').html(result);
            }, "html");
        }

        document.addEventListener("swup:contentReplaced", () => {
            load_milestone(1);
            load_team(1);
            load_task(1);
        });
    </script>
    @endsection
</x-office-layout>
