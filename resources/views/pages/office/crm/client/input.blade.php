<x-office-layout title="{{ $data->id ? 'Update' : 'Create' }} Client">
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
                    <li class="breadcrumb-item text-muted">Master</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Client</li>
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
                    data-redirect-url="{{ route('office.crm.client.index') }}"
                    action="{{ $data->id ? route('office.crm.client.update', $data->id) : route('office.crm.client.store') }}">
                    <div class="card-header border-0 pt-6">
                        <div class="card-title">
                            <div class="d-flex align-items-center position-relative my-1">
                                <h1>Form {{ $data->id ? 'Update' : 'Create' }} Client</h1>
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <a id="back_form_button" href="{{ route('office.crm.client.index') }}"
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
                        <div class="form-group row">
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="document_id" name="document_id"
                                        placeholder="Document" value="{{ $data->document_id }}" />
                                    <label for="name">Document_id</label>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <select name="employee_id" id="employee_id" class="form-control">
                                        <option selected>Select Employee</option>
                                        @foreach ($employee as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $item->employee_id === $data->id ? 'selected' : '' }}>
                                                {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <select name="client_type_id" id="client_type_id" class="form-control">
                                        <option selected>Select Client Type</option>
                                        @foreach ($client_type as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $item->client_type_id === $data->id ? 'selected' : '' }}>
                                                {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <select name="company_industry_id" id="company_industry_id" class="form-control">
                                        <option selected>Select Company Industry</option>
                                        @foreach ($company_industry as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $item->company_industry_id === $data->id ? 'selected' : '' }}>
                                                {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="company_name" name="company_name"
                                        placeholder="Enter Company Name" value="{{ $data->company_name }}" />
                                    <label for="name">Company Name</label>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input type="file" class="form-control" id="company_logo" name="company_logo"
                                        placeholder="Enter Company Logo" value="{{ $data->company_logo }}" />
                                    <label for="name">Company Logo</label>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholder="Enter Title" value="{{ $data->title }}" />
                                    <label for="name">title</label>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter Name" value="{{ $data->name }}" />
                                    <label for="name">Name</label>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input type="tel" class="form-control" id="phone" name="phone"
                                        placeholder="Enter phone" value="{{ $data->phone }}" />
                                    <label for="name">Phone</label>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Enter email" value="{{ $data->email }}" />
                                    <label for="name">Email</label>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="billing_address"
                                        name="billing_address" placeholder="Enter billing_address"
                                        value="{{ $data->billing_address }}" />
                                    <label for="name">Billing Address</label>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <select name="billing_country_id" id="billing_country_id" class="form-control">
                                        <option selected>Select Billing Country</option>
                                        @foreach ($country as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $item->billing_country_id === $data->id ? 'selected' : '' }}>
                                                {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <select name="billing_province_id" id="billing_province_id" class="form-control">
                                        <option selected>Select Billing Province</option>
                                        @foreach ($province as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $item->billing_province_id === $data->id ? 'selected' : '' }}>
                                                {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <select name="billing_regency_id" id="billing_regency_id" class="form-control">
                                        <option selected>Select Billing Regency</option>
                                        @foreach ($regency as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $item->billing_regency_id === $data->id ? 'selected' : '' }}>
                                                {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <select name="billing_district_id" id="billing_district_id" class="form-control">
                                        <option selected>Select Billing District</option>
                                        @foreach ($district as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $item->billing_district_id === $data->id ? 'selected' : '' }}>
                                                {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <select name="billing_village_id" id="billing_village_id" class="form-control">
                                        <option selected>Select Billing Village</option>
                                        @foreach ($village as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $item->billing_village_id === $data->id ? 'selected' : '' }}>
                                                {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="billing_postcode"
                                        name="billing_postcode" placeholder="Enter Postcode"
                                        value="{{ $data->billing_postcode }}" />
                                    <label for="name">Billing Post Code</label>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="shipping_address"
                                        name="shipping_address" placeholder="Enter shipping_address"
                                        value="{{ $data->shipping_address }}" />
                                    <label for="name">Shipping Address</label>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <select name="shipping_country_id" id="shipping_country_id" class="form-control">
                                        <option selected>Select Shipping Country</option>
                                        @foreach ($country as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $item->shipping_country_id === $data->id ? 'selected' : '' }}>
                                                {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <select name="shipping_province_id" id="shipping_province_id"
                                        class="form-control">
                                        <option selected>Select Shipping Province</option>
                                        @foreach ($province as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $item->shipping_province_id === $data->id ? 'selected' : '' }}>
                                                {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <select name="shipping_regency_id" id="shipping_regency_id" class="form-control">
                                        <option selected>Select Shipping Regency</option>
                                        @foreach ($regency as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $item->shipping_regency_id === $data->id ? 'selected' : '' }}>
                                                {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <select name="shipping_district_id" id="shipping_district_id"
                                        class="form-control">
                                        <option selected>Select Shipping District</option>
                                        @foreach ($district as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $item->shipping_district_id === $data->id ? 'selected' : '' }}>
                                                {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <select name="shipping_village_id" id="shipping_village_id" class="form-control">
                                        <option selected>Select Shipping Village</option>
                                        @foreach ($village as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $item->shipping_village_id === $data->id ? 'selected' : '' }}>
                                                {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="shipping_postcode"
                                        name="shipping_postcode" placeholder="Enter Postcode"
                                        value="{{ $data->shipping_postcode }}" />
                                    <label for="name">Shipping Post Code</label>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Enter Password" value="{{ $data->password }}" />
                                    <label for="name">Password</label>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="date_birth" name="date_birth"
                                        placeholder="Enter Date Birth" value="{{ $data->date_birth }}" />
                                    <label for="name">Date Birth</label>
                                </div>
                            </div>
                            {{-- <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input type="url" class="form-control" id="url" name="url" placeholder="Enter Url" value="{{$data->url}}"/>
                                    <label for="name">Url</label>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="paypal" name="paypal" placeholder="Enter Paypal" value="{{$data->paypal}}"/>
                                    <label for="name">Paypal</label>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="goolge_id" name="goolge_id" placeholder="Enter Google Id" value="{{$data->goolge_id}}"/>
                                    <label for="name">Goolge ID</label>
                                </div>
                            </div> --}}
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="category" name="category"
                                        placeholder="Enter Category" value="{{ $data->category }}" />
                                    <label for="name">Category:Offline/Online</label>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="st" name="st"
                                        placeholder="Enter Status" value="{{ $data->st }}" />
                                    <label for="name">Status:Active/Non Active</label>
                                </div>
                            </div>
                            {{-- <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input type="company_logo" class="form-control" id="avatar" name="avatar" placeholder="Enter Avatar" value="{{$data->avatar}}"/>
                                    <label for="name">Avatar</label>
                                </div>
                            </div> --}}
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="last_seen" name="last_seen"
                                        placeholder="Enter Last Seen" value="{{ $data->last_seen }}" />
                                    <label for="name">Last Seen</label>
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
                                onclick="handle_confirm('Are you sure want to delete this Client ?', 'Yes, i`m sure', 'No, i`m not','DELETE','{{ route('office.crm.client.destroy', $data->id) }}');"
                                class="btn btn-sm btn-danger">
                                Delete
                            </button>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-office-layout>
