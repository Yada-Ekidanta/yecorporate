<x-office-layout title="{{ $data->id ? 'Update' : 'Create' }} Client Contract">
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6 animation-class">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">{{ config('app.name') }}</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('office.dashboard.index') }}" class="text-muted text-hover-primary menu-link">Dashboard</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <li class="breadcrumb-item text-muted">Client Contract</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">{{ $data->id ? 'Update' : 'Create' }}</li>
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
                <form class="form w-100" novalidate="" id="form_input" data-redirect-url="{{ route('office.crm.client-contract.index') }}"
                    action="{{ $data->id ? route('office.crm.client-contract.update', $data->id) : route('office.crm.client-contract.store') }}">
                    <div class="card-header border-0 pt-6">
                        <div class="card-title">
                            <div class="d-flex align-items-center position-relative my-1">
                                <h1>Form {{ $data->id ? 'Update' : 'Create' }} Client Contract</h1>
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <a id="back_form_button" href="{{ route('office.crm.client-contract.index') }}" class="btn btn-primary btn-sm btn-hover-scale menu-link">
                                    <span class="svg-icon svg-icon-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.60001 11H21C21.6 11 22 11.4 22 12C22 12.6 21.6 13 21 13H9.60001V11Z" fill="currentColor" />
                                            <path opacity="0.3" d="M9.6 20V4L2.3 11.3C1.9 11.7 1.9 12.3 2.3 12.7L9.6 20Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    Back
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="{{ $data->name }}" />
                                    <label for="name">Name</label>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <select name="client_id" id="client_id" class="form-select">
                                        <option disabled selected>Select Client</option>
                                        @foreach ($client as $item)
                                            <option value="{{ $item->id }}" {{ $data->client_id === $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <select name="client_contract_type_id" id="client_contract_type_id" class="form-select">
                                        <option disabled selected>Select Client Contract Type</option>
                                        @foreach ($client_contract_type as $item)
                                            <option value="{{ $item->id }}" {{ $data->client_id === $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject" value="{{ $data->subject }}" />
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="value" name="value" placeholder="Enter Value" value="{{ $data->value }}" />
                                    <label for="value">Value</label>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="start_at" name="start_at" placeholder="Enter Start At" value="{{ $data->start_at }}" />
                                    <label for="start_at">Start At</label>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="end_at" name="end_at" placeholder="Enter End At" value="{{ $data->end_at }}" />
                                    <label for="end_at">End At</label>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                {{-- <div class="form-group">
                                    <select name="st" id="st" class="form-select">
                                        <option disabled selected>Select Status</option>
                                        <option value="status a" {{ $data->st === 'status a' ? 'selected' : '' }}>Status A</option>
                                        <option value="status b" {{ $data->st === 'status b' ? 'selected' : '' }}>Status B</option>
                                    </select>
                                </div> --}}
                            </div>
                            <div class="col-6 mb-3">
                                <div class="form-group">
                                    <label for="owner_signature" class="form-label ms-1">Owner Signature</label>
                                    <div id="owner_signature" style="height: 150px">{!! $data->owner_signature !!}</div>
                                    <textarea name="owner_signature" class="form-control d-none">{{ $data->owner_signature }}</textarea>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="form-group">
                                    <label for="client_signature" class="form-label ms-1">Client Signature</label>
                                    <div id="client_signature" style="height: 150px">{!! $data->client_signature !!}</div>
                                    <textarea name="client_signature" class="form-control d-none">{{ $data->client_signature }}</textarea>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="form-group">
                                    <label for="desc" class="form-label ms-1">Description</label>
                                    <div id="desc" style="height: 150px">{!! $data->desc !!}</div>
                                    <textarea name="desc" class="form-control d-none">{{ $data->desc }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button id="tombol_simpan" onclick="handle_upload('#tombol_simpan','#form_input','{{ $data->id ? 'PATCH' : 'POST' }}');" class="btn btn-sm btn-{{ $data->id ? 'warning' : 'success' }}">
                            {{ $data->id ? 'Update' : 'Create' }}
                        </button>
                        @if ($data->id)
                            <button type="button" onclick="handle_confirm('Are you sure want to delete this Opportunity ?', 'Yes, i`m sure', 'No, i`m not','DELETE','{{ route('office.crm.client-contract.destroy', $data->id) }}');"
                                class="btn btn-sm btn-danger">
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
            obj_select('client_id');
            obj_select('employee_id');
            obj_select('client_contract_type_id');
            obj_select('st')
            obj_quill('description');
            // obj_quill('owner_signature');
            // obj_quill('client_signature');
            obj_startdatenow('start_at');
            obj_startdatenow('end_at');
        </script>
    @endsection
</x-office-layout>
