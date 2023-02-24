<x-office-layout title="{{ $data->id ? 'Update' : 'Create' }} Accounts">
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6 animation-class">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                    {{ config('app.name') }}</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('office.dashboard.index') }}"
                            class="text-muted text-hover-primary menu-link">Dashboard</a>
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
                    <li class="breadcrumb-item text-muted">Accounts</li>
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
                <a href="#" class="btn btn-sm fw-bold bg-body btn-color-gray-700 btn-active-color-primary"
                    data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Rollover</a>
                <!--end::Secondary button-->
                <!--begin::Primary button-->
                <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                    data-bs-target="#kt_modal_new_target">Add Target</a>
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
                <form class="form w-100" novalidate="novalidate" id="form_input"
                    data-redirect-url="{{ route('office.crm.accounts.index') }}"
                    action="{{ $data->id ? route('office.crm.accounts.update', $data->id) : route('office.crm.accounts.store') }}">
                    <div class="card-header border-0 pt-6">
                        <div class="card-title">
                            <div class="d-flex align-items-center position-relative my-1">
                                <h1>Form {{ $data->id ? 'Update' : 'Create' }} Accounts</h1>
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <a id="back_form_button" href="{{ route('office.crm.accounts.index') }}"
                                    class="btn btn-primary btn-sm btn-hover-scale menu-link">
                                    <span class="svg-icon svg-icon-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.60001 11H21C21.6 11 22 11.4 22 12C22 12.6 21.6 13 21 13H9.60001V11Z"
                                                fill="currentColor" />
                                            <path opacity="0.3"
                                                d="M9.6 20V4L2.3 11.3C1.9 11.7 1.9 12.3 2.3 12.7L9.6 20Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    Back
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body transition-fade">
                        <div class="form-group row mb-3">
                            <input type="hidden" id="data" value="{{$data}}">
                            <div class="col-4 mb-3">
                                <div class="form-group">
                                    <select name="client_type_id" id="client_type_id" class="form-select form-select-solid">
                                        <option disabled selected>Select Client Type</option>
                                        @foreach ($client_type as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $data->client_type_id === $item->id ? 'selected' : '' }}>
                                                {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-group">
                                    <select name="company_industry_id" id="company_industry_id" class="form-select form-select-solid">
                                        <option disabled selected>Select Company Industry</option>
                                        @foreach ($company_industry as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $data->company_industry_id === $item->id ? 'selected' : '' }}>
                                                {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control form-control-solid" id="company_name" name="company_name"
                                        placeholder="Enter Company Name" value="{{ $data->company_name }}" />
                                    <label for="company_name">Company Name</label>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control form-control-solid" id="title" name="title"
                                        placeholder="Enter Title" value="{{ $data->title }}" />
                                    <label for="title">Title</label>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control form-control-solid" id="name" name="name"
                                        placeholder="Enter Name" value="{{ $data->name }}" />
                                    <label for="name">Name</label>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input type="tel" class="form-control form-control-solid" id="phone" name="phone"
                                        placeholder="Enter phone" value="{{ $data->phone }}" />
                                    <label for="phone">Phone</label>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input type="email" class="form-control form-control-solid" id="email" name="email"
                                        placeholder="Enter email" value="{{ $data->email }}" />
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input type="password" class="form-control form-control-solid" id="password" name="password"
                                        placeholder="Enter Password" />
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input type="date" class="form-control form-control-solid" id="date_birth" name="date_birth"
                                        placeholder="Enter Date Birth" value="{{ $data->date_birth }}" />
                                    <label for="date_birth">Date Birth</label>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input type="url" class="form-control form-control-solid" id="url" name="url"
                                        placeholder="Enter Company Url" value="{{ $data->url }}" />
                                    <label for="url">Company Url</label>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-group">
                                    <select name="category" id="category" class="form-select form-select-solid">
                                        <option disabled selected>Category</option>
                                        <option value="Online" {{ $data->category === 'Online' ? 'selected' : '' }}>Online</option>
                                        <option value="Offline" {{ $data->category === 'Offline' ? 'selected' : '' }}>Offline</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-group">
                                    <select name="st" id="st" class="form-select form-select-solid">
                                        <option disabled selected>Status</option>
                                        <option value="Active" {{ $data->st === 'Active' ? 'selected' : '' }}>Active</option>
                                        <option value="Non Active" {{ $data->st === 'Non Active' ? 'selected' : '' }}>Non Active</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="form-label fw-bold ms-1">Billing Address</label>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control form-control-solid" id="billing_address"
                                        name="billing_address" placeholder="Enter billing_address"
                                        value="{{ $data->billing_address }}" />
                                    <label for="billing_address">Billing Address</label>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-group">
                                    <select name="billing_country_id" id="billing_country_id" class="form-select form-select-solid">
                                        <option disabled selected>Select Country</option>
                                        @foreach ($country as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $data->billing_country_id === $item->id ? 'selected' : '' }}>
                                                {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-group">
                                    <select name="billing_province_id" id="billing_province_id" class="form-select form-select-solid">
                                        <option disabled selected>Select Province</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-group">
                                    <select name="billing_regency_id" id="billing_regency_id" class="form-select form-select-solid">
                                        <option disabled selected>Select Regency</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-group">
                                    <select name="billing_district_id" id="billing_district_id" class="form-select form-select-solid">
                                        <option disabled selected>Select District</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-group">
                                    <select name="billing_village_id" id="billing_village_id" class="form-select form-select-solid">
                                        <option disabled selected>Select Village</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input type="number" class="form-control form-control-solid" id="billing_postcode"
                                        name="billing_postcode" placeholder="Enter Postcode"
                                        value="{{ $data->billing_postcode }}" />
                                    <label for="billing_postcode">Post Code</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="form-label fw-bold ms-1">Shipping Address</label>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control form-control-solid" id="shipping_address"
                                        name="shipping_address" placeholder="Enter shipping_address"
                                        value="{{ $data->shipping_address }}" />
                                    <label for="shipping_address">Shipping Address</label>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-group">
                                    <select name="shipping_country_id" id="shipping_country_id" class="form-select form-select-solid">
                                        <option disabled selected>Select Country</option>
                                        @foreach ($country as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $data->shipping_country_id === $item->id ? 'selected' : '' }}>
                                                {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-group">
                                    <select name="shipping_province_id" id="shipping_province_id"
                                        class="form-select form-select-solid">
                                        <option disabled selected>Select Province</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-group">
                                    <select name="shipping_regency_id" id="shipping_regency_id" class="form-select form-select-solid">
                                        <option disabled selected>Select Regency</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-group">
                                    <select name="shipping_district_id" id="shipping_district_id"
                                        class="form-select form-select-solid">
                                        <option disabled selected>Select District</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-group">
                                    <select name="shipping_village_id" id="shipping_village_id" class="form-select form-select-solid">
                                        <option disabled selected>Select Village</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input type="number" class="form-control form-control-solid" id="shipping_postcode"
                                        name="shipping_postcode" placeholder="Enter Postcode"
                                        value="{{ $data->shipping_postcode }}" />
                                    <label for="name">Post Code</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="company_logo" class="form-label fw-bold ms-1">Company Logo</label>
                                    <input type="file" class="form-control form-control-solid" id="company_logo" name="company_logo"
                                    placeholder="Enter Company Logo" value="{{ $data->company_logo }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button id="tombol_simpan"
                            onclick="handle_upload('#tombol_simpan','#form_input','{{ $data->id ? 'PATCH' : 'POST' }}');"
                            class="btn btn-sm btn-{{ $data->id ? 'warning' : 'success' }}">
                            {{ $data->id ? 'Update' : 'Create' }}
                        </button>
                        @if ($data->id)
                            <button type="button"
                                onclick="handle_confirm_custom('Are you sure want to delete this Client ?', 'Yes, i`m sure', 'No, i`m not','DELETE','{{ route('office.crm.accounts.destroy', $data->id) }}','{{ route('office.crm.accounts.index') }}');"
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
        obj_select('document_id')
        obj_select('employee_id')
        obj_select('client_type_id')
        obj_select('company_industry_id')
        obj_select('billing_country_id')
        obj_select('billing_province_id')
        obj_select('billing_regency_id')
        obj_select('billing_district_id')
        obj_select('billing_village_id')
        obj_select('shipping_country_id')
        obj_select('shipping_province_id')
        obj_select('shipping_regency_id')
        obj_select('shipping_district_id')
        obj_select('shipping_village_id')
        obj_select('category')
        obj_select('st')
        obj_date('last_seen')
        obj_date('date_birth')

        get_province('billing_country_id', 'billing_province_id');
        get_regency('billing_province_id', 'billing_regency_id');
        get_district('billing_regency_id', 'billing_district_id');
        get_village('billing_district_id', 'billing_village_id');
        get_postcode('billing_village_id', 'billing_postcode');

        get_province('shipping_country_id', 'shipping_province_id');
        get_regency('shipping_province_id', 'shipping_regency_id');
        get_district('shipping_regency_id', 'shipping_district_id');
        get_village('shipping_district_id', 'shipping_village_id');
        get_postcode('shipping_village_id', 'shipping_postcode');

        var getData = $('#data').val();
        var data =  JSON.parse(getData);
        if (data.id != null) {
            get_regional_data('billing_country_id', 'billing_province_id', 'billing_regency_id', 'billing_district_id', 'billing_village_id', data.billing_country_id, data.billing_province_id, data.billing_regency_id, data.billing_district_id, data.billing_village_id);
            get_regional_data('shipping_country_id', 'shipping_province_id', 'shipping_regency_id', 'shipping_district_id', 'shipping_village_id', data.shipping_country_id, data.shipping_province_id, data.shipping_regency_id, data.shipping_district_id, data.shipping_village_id);
        }
    </script>
    @endsection
</x-office-layout>
