<x-office-layout title="{{$data->id ? 'Update' : 'Create'}} Training">
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
                    <li class="breadcrumb-item text-muted">Master</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Training</li>
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
                <form class="form w-100" novalidate="novalidate" id="form_input" data-redirect-url="{{route('office.hrm.training.training_list.index')}}" action="{{$data->id ? route('office.hrm.training.training_list.update',$data->id) : route('office.hrm.training.training_list.store')}}">
                    <div class="card-header border-0 pt-6">
                        <div class="card-title">
                            <div class="d-flex align-items-center position-relative my-1">
                                <h1>Form {{$data->id ? 'Update' : 'Create'}} Training</h1>
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <a id="back_form_button" href="{{route('office.hrm.training.training_list.index')}}" class="btn btn-primary btn-sm btn-hover-scale menu-link">
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
                        <div class="form-group row">
                            <div class="col-12 mb-3">
                                <div class="form-floating">
                                    <select name="company_branch_id" data-placeholder="Select company branch..." id="company_branch_id" class="form-select form-select-solid form-select-lg">
                                        <option value=""></option>
                                        @foreach ($company_branch as $item)
                                            <option value="{{ $item->id }}" {{ $item->id == $data->company_branch_id ? 'selected' : '' }}>
                                                {{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="form-floating">
                                    <select name="trainer_option_id" data-placeholder="Select trainer option..." id="trainer_option_id" class="form-select form-select-solid form-select-lg">
                                        <option value=""></option>
                                        <option value="1" {{ $data->trainer_option_id == "1" ? 'selected' : '' }}>Internal</option>
                                        <option value="2" {{ $data->trainer_option_id == "2" ? 'selected' : '' }}>External </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="form-floating">
                                    <select name="training_type_id" data-placeholder="Select training type..." id="training_type_id" class="form-select form-select-solid form-select-lg">
                                        <option value=""></option>
                                        @foreach ($training_type as $item)
                                            <option value="{{ $item->id }}" {{ $item->id == $data->training_type_id ? 'selected' : '' }}>
                                                {{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="form-floating">
                                    <select name="trainer_id" data-placeholder="Select trainer..." id="trainer_id" class="form-select form-select-solid form-select-lg">
                                        <option value=""></option>
                                        @foreach ($trainer as $item)
                                            <option value="{{ $item->id }}" {{ $item->id == $data->trainer_id ? 'selected' : '' }}>
                                                {{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="training_cost" name="training_cost" placeholder="training_cost" value="{{$data->training_cost}}"/>
                                    <label for="training_cost">Training Cost</label>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="form-floating">
                                    <select name="employee_id" data-placeholder="Select employee..." id="employee_id" class="form-select form-select-solid form-select-lg">
                                        <option value=""></option>
                                        @foreach ($employee as $item)
                                            <option value="{{ $item->id }}" {{ $item->id == $data->employee_id ? 'selected' : '' }}>
                                                {{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="form-floating">
                                    <select name="st" data-placeholder="Select status..." id="st" class="form-select form-select-solid form-select-lg">
                                        <option value=""></option>
                                        <option value="1" {{ $data->st == "1" ? 'selected' : '' }}> Pending</option>
                                        <option value="2" {{ $data->st == "2" ? 'selected' : '' }}> Started</option>
                                        <option value="3" {{ $data->st == "3" ? 'selected' : '' }}> Completed</option>
                                        <option value="4" {{ $data->st == "4" ? 'selected' : '' }}> Terminated</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="form-floating">
                                    <div class="form-floating">
                                        <input type="text" class="form-control datestartnow" id="start_date" name="start_date" placeholder="Indonesia" value="{{$data->start_date}}"/>
                                        <label for="start_date">Start Date</label>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-6 mb-3">
                                <div class="form-floating">
                                    <div class="form-floating">
                                        <input type="text" class="form-control datestartnow" id="end_date" name="end_date" placeholder="Indonesia" value="{{$data->end_date}}"/>
                                        <label for="end_date">End Date</label>
                                    </div>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <div class="col-12 mb-3">
                                    <label for="desc">Description</label>
                                    <div class="form-floating">
                                        <div id="desc">{!!$data->desc!!}</div>
                                        <textarea class="form-control d-none" name="desc">{{$data->desc}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button id="tombol_simpan" onclick="handle_upload('#tombol_simpan','#form_input','{{$data->id ? 'PATCH' : 'POST'}}');" class="btn btn-sm btn-{{$data->id ? 'warning' : 'success'}}">
                            {{$data->id ? 'Update' : 'Create'}}
                        </button>
                        @if($data->id)
                        <button type="button" onclick="handle_confirm_custom('Are you sure want to delete this company bank ?', 'Yes, i`m sure', 'No, i`m not','DELETE','{{route('office.hrm.training.training_list.destroy',$data->id)}}', '{{ route('office.hrm.training.training_list.index') }}');" class="btn btn-sm btn-danger">
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
        obj_startdatenow('start_date');
        obj_startdatenow('end_date');
        obj_select('employee_id');
        obj_select('st');
        obj_select('company_branch_id');
        obj_select('trainer_id');
        obj_select('training_type_id');
        obj_select('trainer_option_id');
        obj_startdatenow('complaint_date');
        obj_startdatenow('complaint_date');
        obj_quill('desc');
    </script>
    @endsection
</x-office-layout>