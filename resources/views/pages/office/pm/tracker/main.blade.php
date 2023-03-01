<x-office-layout title="Tracker">
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
                    <li class="breadcrumb-item text-muted">Tracker</li>
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
            <div class="card">
                <form class="form w-100" novalidate="novalidate" id="form_input" data-redirect-url="#">
                    <div class="card-body transition-fade">
                        <div class="row">
                            <input type="hidden" id="start_time" name="start_time"/>
                            <input type="hidden" id="end_time" name="end_time"/>
                            <input type="hidden" id="date" name="date"/>
                            <input type="hidden" id="is_active" name="is_active"/>
                            <input type="hidden" id="is_paused" name="is_paused"/>
                            <input type="hidden" id="total_time" name="total_time"/>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control form-control-solid" id="name" name="name" placeholder="Indonesia" value=""/>
                                    <label for="name">What are you working on?</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <select name="project_id" id="form-select-project" class="form-select form-select-solid form-select-lg">
                                            <option selected disabled>Select Project</option>
                                            @if (!empty($project))
                                                @foreach ($project as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select name="task_id" id="form-select-task" class="form-select form-select-solid form-select-lg">
                                            <option selected disabled>Select Task</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <p class="fw-bold">Timer <span id="hour"></span>:<span id="minute"></span>:<span id="seconds"></span></p>
                                @if ($status)
                                <div class="text-nowrap">
                                    <button type="button" id="pause" class="btn btn-sm btn-warning">Pause</button>
                                    <button type="button" id="resume" class="btn btn-sm btn-info d-none">Resume</button>
                                    <button type="button" id="stop" class="btn btn-sm btn-danger">Stop</button>
                                </div>
                                @else
                                    <button type="button" id="start-btn" class="btn btn-sm btn-primary">Start</button>
                                @endif
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card mt-7">
                <div class="card-header border-0 pt-6">
                    <form id="content_filter">
                        <div class="card-title">
                            <div class="d-flex align-items-center position-relative my-1">
                                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <input type="text" name="keyword" onkeyup="load_list();" class="form-control form-control-solid w-250px ps-14" placeholder="Search your working" />
                            </div>
                        </div>
                    </form>
                    <div class="card-toolbar">
                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                           <span class="btn btn-sm btn-primary">Total Time Tracker : {{ $timeConvert }}</span>
                        </div>
                    </div>
                </div>
                <div class="card-body transition-fade">
                    <div id="list_result"></div>
                </div>
            </div>
        </div>
    </div>
    @section('custom_js')
        <script>
            obj_select('form-select-project');
            obj_select('form-select-task');
            load_list(1);
        </script>
    @endsection
</x-office-layout>
