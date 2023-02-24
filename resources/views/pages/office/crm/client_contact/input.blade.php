<x-office-layout title="{{ $data->id ? 'Update' : 'Create' }} Client Contact">
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
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">CRM</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Client Contact</li>
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
                <form class="form w-100" novalidate="novalidate" id="form_input" data-redirect-url="{{ route('office.crm.client-contact.index') }}"
                    action="{{ $data->id ? route('office.crm.client-contact.update', $data->id) : route('office.crm.client-contact.store') }}">
                    <div class="card-header border-0 pt-6">
                        <div class="card-title">
                            <div class="d-flex align-items-center position-relative my-1">
                                <h1>Form {{ $data->id ? 'Update' : 'Create' }} Client Contact</h1>
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <a id="back_form_button" href="{{ route('office.crm.client-contact.index') }}" class="btn btn-primary btn-sm btn-hover-scale menu-link">
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
                            <input type="hidden" id="data" value="{{$data}}">
                            <div class="col-4 mb-3">
                                <div class="form-group">
                                    <select name="client_id" id="client_id" class="form-select form-select-solid">
                                        <option disabled selected>Select Client</option>
                                        @foreach ($client as $item)
                                            <option value="{{ $item->id }}" {{ $data->client_id === $item->id ? 'selected' : '' }}>
                                                {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-group">
                                    <select name="st" id="st" class="form-select form-select-solid">
                                        <option disabled selected>Select Status</option>
                                        <option value="Active" {{ $data->st === 'Active' ? 'selected' : '' }}>Active</option>
                                        <option value="Non Active" {{ $data->st === 'Non Active' ? 'selected' : '' }}>Non Active</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control form-control-solid" id="title" name="title" placeholder="Enter Title" value="{{ $data->title }}" />
                                    <label for="itle">Title</label>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control form-control-solid" id="name" name="name" placeholder="Enter Name" value="{{ $data->name }}" />
                                    <label for="name">Name</label>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input type="tel" class="form-control form-control-solid" id="phone" name="phone" placeholder="Enter Phonet" value="{{ $data->phone }}" />
                                    <label for="phone">Phone</label>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input type="email" class="form-control form-control-solid format_email" id="email" name="email" placeholder="Enter Email" value="{{ $data->email }}" />
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-group">
                                    <select name="country_id" id="country_id" class="form-select form-select-solid">
                                        <option disabled selected>Select Country</option>
                                        @foreach ($country as $item)
                                            <option value="{{ $item->id }}" {{ $data->country_id === $item->id ? 'selected' : '' }}>
                                                {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-group">
                                    <select name="province_id" id="province_id" class="form-select form-select-solid">
                                        <option disabled selected>Select Province</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-group">
                                    <select name="regency_id" id="regency_id" class="form-select form-select-solid">
                                        <option disabled selected>Select Regency</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-group">
                                    <select name="district_id" id="district_id" class="form-select form-select-solid">
                                        <option disabled selected>Select District</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-group">
                                    <select name="village_id" id="village_id" class="form-select form-select-solid">
                                        <option disabled selected>Select Village</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control form-control-solid" id="postcode" name="postcode" placeholder="Enter Postcode" value="{{ $data->postcode }}" />
                                    <label for="postcode">Postcode</label>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="form-group">
                                    <label for="address" class="form-label ms-2">Address</label>
                                    <div id="address" style="height: 150px">{!! $data->address !!}</div>
                                    <textarea name="address" class="form-control d-none">{{ $data->address }}</textarea>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="form-group">
                                    <label for="description" class="form-label ms-2">Description</label>
                                    <div id="description" style="height: 150px">{!! $data->description !!}</div>
                                    <textarea name="description" class="form-control d-none">{{ $data->description }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ps-0">
                            <button id="tombol_simpan" onclick="handle_upload('#tombol_simpan','#form_input','{{ $data->id ? 'PATCH' : 'POST' }}');" class="btn btn-sm btn-{{ $data->id ? 'warning' : 'success' }}">
                                {{ $data->id ? 'Update' : 'Create' }}
                            </button>
                            @if ($data->id)
                                <button type="button" onclick="handle_confirm_custom('Are you sure want to delete this Opportunity ?', 'Yes, i`m sure', 'No, i`m not','DELETE','{{ route('office.crm.client-contact.destroy', $data->id) }}','{{ route('office.crm.client-contact.index') }}');"
                                    class="btn btn-sm btn-danger">
                                    Delete
                                </button>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @section('custom_js')
        <script>
            obj_quill('address');
            obj_quill('description');
            obj_select('employee_id');
            obj_select('client_id');
            obj_select('st');
            obj_select('country_id');
            obj_select('district_id');
            obj_select('province_id');
            obj_select('regency_id');
            obj_select('village_id');

            get_province('country_id', 'province_id');
            get_regency('province_id', 'regency_id');
            get_district('regency_id', 'district_id');
            get_village('district_id', 'village_id');
            get_postcode('village_id', 'postcode');

            var getData = $('#data').val();
            var data =  JSON.parse(getData);
            if (data.id != null) {
                get_regional_data('country_id', 'province_id', 'regency_id', 'district_id', 'village_id', data.country_id, data.province_id, data.regency_id, data.district_id, data.village_id);
            }
        </script>
    @endsection
</x-office-layout>
