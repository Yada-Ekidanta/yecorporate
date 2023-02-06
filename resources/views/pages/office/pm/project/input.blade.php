<x-office-layout title="{{$data->id ? 'Update' : 'Create'}} Project">
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
                    <li class="breadcrumb-item text-muted">Project</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">{{$data->id ? 'Update' : 'Create'}}</li>
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
                <form class="form w-100" novalidate="novalidate" id="form_input" data-redirect-url="{{route('office.pm.project.index')}}" action="{{$data->id ? route('office.pm.project.update',$data->id) : route('office.pm.project.store')}}" enctype="multipart/form-data">
                    <div class="card-header border-0 pt-6">
                        <div class="card-title">
                            <div class="d-flex align-items-center position-relative my-1">
                                <h1>Form {{$data->id ? 'Update' : 'Create'}} Project</h1>
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <a id="back_form_button" href="{{route('office.pm.project.index')}}" class="btn btn-primary btn-sm btn-hover-scale menu-link">
                                    <span class="svg-icon svg-icon-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.60001 11H21C21.6 11 22 11.4 22 12C22 12.6 21.6 13 21 13H9.60001V11Z" fill="currentColor"/>
                                            <path opacity="0.3" d="M9.6 20V4L2.3 11.3C1.9 11.7 1.9 12.3 2.3 12.7L9.6 20Z" fill="currentColor"/>
                                        </svg>
                                    </span>
                                    Back
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body transition-fade">
                        <div class="mb-5">
                            <div class="form-floating">
                                <input type="text" class="form-control form-control-solid" id="name" name="name" placeholder="Indonesia" value="{{$data->name}}"/>
                                <label for="name">Name</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-6 mb-5">
                                <div class="form-floating">
                                    <input type="text" class="form-control form-control-solid" id="start_date" name="start_date" placeholder="Indonesia" value="{{$data->start_date}}"/>
                                    <label for="start_date">Start Date</label>
                                </div>
                            </div>
                            <div class="col-6 mb-5">
                                <div class="form-floating">
                                    <input type="text" class="form-control form-control-solid" id="end_date" name="end_date" placeholder="Indonesia" value="{{$data->end_date}}"/>
                                    <label for="end_date">End Date</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5">
                            <div>
                                @if ($data->id)
                                    <img src="{{ asset('storage/'.$data->image) }}" class="rounded img-responsive mb-5" style="width: 150px; height:100px;" alt="Project Image">
                                @endif
                                <input type="file" class="form-control form-control-solid" id="image" name="image" value="{{$data->image}}"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-4 mb-5">
                                <div class="form-floating">
                                    <input type="tel" class="form-control form-control-solid number_only ribuan" id="estimated_hrs" name="estimated_hrs" placeholder="Indonesia" value="{{$data->estimated_hrs}}"/>
                                    <label for="estimated_hrs">Estimated Hours</label>
                                </div>
                            </div>
                            <div class="col-4 mb-5">
                                <div class="form-floating">
                                    <input type="tel" class="form-control form-control-solid number_only ribuan" id="budget" name="budget" placeholder="Indonesia" value="{{$data->budget}}"/>
                                    <label for="budget">Budget</label>
                                </div>
                            </div>
                            <div class="col-4 mb-5">
                                <div class="form-floating">
                                    <input type="text" class="form-control form-control-solid" id="currency" name="currency" placeholder="Indonesia" value="{{$data->currency}}"/>
                                    <label for="currency">Currency</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="desc">Description</label>
                                <div class="form-floating">
                                    <div id="desc">{!!$data->desc!!}</div>
                                    <textarea name="desc" class="form-control form-control-solid d-none">{{$data->desc}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button id="tombol_simpan" onclick="handle_upload('#tombol_simpan','#form_input','{{$data->id ? 'PATCH' : 'POST'}}');" class="btn btn-sm btn-{{$data->id ? 'warning' : 'success'}}">
                            {{$data->id ? 'Update' : 'Create'}}
                        </button>
                        @if($data->id)
                            <button type="button" onclick="handle_confirm('Are you sure want to delete this bank ?', 'Yes, i`m sure', 'No, i`m not','DELETE','{{route('office.pm.project.destroy',$data->id)}}');" class="btn btn-sm btn-danger">
                                Delete
                            </button>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
    @section('custom_js')
        <script>
            obj_quill('desc');
            obj_startdatenow('start_date');
            obj_startdatenow('end_date');
        </script>
    @endsection
</x-office-layout>
