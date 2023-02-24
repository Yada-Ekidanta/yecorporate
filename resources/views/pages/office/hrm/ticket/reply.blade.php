<x-office-layout title="{{'Reply'}} Ticket">
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
                    <li class="breadcrumb-item text-muted">Ticket</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">{{ 'Reply' }}</li>
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
    <div class="row">
        <div class="col-lg-6">
            <div id="kt_app_content" class="app-content flex-column-fluid py-3 py-lg-6 animation-class delay3">
                <div id="kt_app_content_container" class="app-container container-fluid">
                    <div class="card">
                        <form class="form w-100" novalidate="novalidate" id="form_input" data-redirect-url="{{route('office.hrm.ticket.index')}}" action="{{ route('office.hrm.ticket.store') }}">
                            <div class="card-header border-0 pt-6">
                                <div class="card-title">
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <h1>Support Reply</h1>
                                        &nbsp;&nbsp;&nbsp;
                                        <a href="#" class="btn btn-sm btn-hover-scale btn-icon btn-bg-light btn-active-color-warning w-30px h-30px menu-link">
                                            <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M2 4.63158C2 3.1782 3.1782 2 4.63158 2H13.47C14.0155 2 14.278 2.66919 13.8778 3.04006L12.4556 4.35821C11.9009 4.87228 11.1726 5.15789 10.4163 5.15789H7.1579C6.05333 5.15789 5.15789 6.05333 5.15789 7.1579V16.8421C5.15789 17.9467 6.05333 18.8421 7.1579 18.8421H16.8421C17.9467 18.8421 18.8421 17.9467 18.8421 16.8421V13.7518C18.8421 12.927 19.1817 12.1387 19.7809 11.572L20.9878 10.4308C21.3703 10.0691 22 10.3403 22 10.8668V19.3684C22 20.8218 20.8218 22 19.3684 22H4.63158C3.1782 22 2 20.8218 2 19.3684V4.63158Z" fill="currentColor"/>
                                                    <path d="M10.9256 11.1882C10.5351 10.7977 10.5351 10.1645 10.9256 9.77397L18.0669 2.6327C18.8479 1.85165 20.1143 1.85165 20.8953 2.6327L21.3665 3.10391C22.1476 3.88496 22.1476 5.15129 21.3665 5.93234L14.2252 13.0736C13.8347 13.4641 13.2016 13.4641 12.811 13.0736L10.9256 11.1882Z" fill="currentColor"/>
                                                    <path d="M8.82343 12.0064L8.08852 14.3348C7.8655 15.0414 8.46151 15.7366 9.19388 15.6242L11.8974 15.2092C12.4642 15.1222 12.6916 14.4278 12.2861 14.0223L9.98595 11.7221C9.61452 11.3507 8.98154 11.5055 8.82343 12.0064Z" fill="currentColor"/>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body transition-fade">
                                <div class="form-group row">
                                    <div class="col-10 mb-3">
                                        <div class="form-floating">
                                            <div id="remark" name="remark"></div>
                                            <textarea class="form-control d-none" id="remark" name="remark"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-2 mb-3">
                                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                            <button id="tombol_simpan" class="btn btn-hover-scale btn-active-color-primary" onclick="handle_upload('#tombol_simpan','#form_input','{{ 'POST'}}');">
                                                <span class="svg-icon svg-icon-2">
                                                    <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.5" d="M12.4 9H1.00002C0.400015 9 1.52588e-05 8.6 1.52588e-05 8C1.52588e-05 7.4 0.400015 7 1.00002 7L12.4 7V9Z" fill="currentColor"/>
                                                    <path d="M14.1071 1.7071C13.4771 1.07714 12.4 1.52331 12.4 2.41421V13.5858C12.4 14.4767 13.4771 14.9229 14.1071 14.2929L19.7 8.7C20.1 8.3 20.1 7.7 19.7 7.3L14.1071 1.7071Z" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div id="kt_app_content" class="app-content flex-column-fluid py-3 py-lg-6 animation-class delay3">
                <div id="kt_app_content_container" class="app-container container-fluid">
                    <div class="card">
                        {{-- @foreach ($ticketreply as $reply) --}}
                            <div class="card">
                                <ul class="list-group team-msg">
                                    <div class="card-header d-flex justify-content-between">
                                        <h5> p
                                        </h5>
                                        <span>p</span>
                                    </div>
                                    <div class="card-body">
                                        <p>p </p>
                                    </div>

                                </ul>
                            </div>
                        {{-- @endforeach --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('custom_js')
    <script>
        obj_quill('remark');
        obj_select('employee_id');
        obj_select('priority');
        obj_startdatenow('end_date');
    </script>
    @endsection
</x-office-layout>