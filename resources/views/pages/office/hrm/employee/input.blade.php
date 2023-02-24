<x-office-layout title="{{$data_employee->id ? 'Update' : 'Create'}} Employee">
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
                    <li class="breadcrumb-item text-muted">Employee</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">{{$data_employee->id ? 'Update' : 'Create'}}</li>
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
                <form class="form w-100" novalidate="novalidate" id="form_input" data-redirect-url="{{route('office.hrm.employee.index')}}" action="{{$data_employee->id ? route('office.hrm.employee.update',$data_employee->id) : route('office.hrm.employee.store')}}">
                    <div class="card-header border-0 pt-6">
                        <div class="card-title">
                            <div class="d-flex align-items-center position-relative my-1">
                                <h1>Form {{$data_employee->id ? 'Update' : 'Create'}} Employee</h1>
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <a id="back_form_button" href="{{route('office.hrm.employee.index')}}" class="btn btn-primary btn-sm btn-hover-scale menu-link">
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
                            <div class="col-6 mb-3">
                                <div class="card card-flush bg-secondary" style="height: 740px">
                                    <div class="card-header bg-secondary d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Personal Detail</h5>
                                    </div>
                                    <input type="hidden" value="{{ $data_employee }}" id="data" >
                                    <div class="card-body bg-secondary"  style="border-radius: 0px 0px 10px 10px">
                                        <div class="row mb-3">
                                            <div class="col-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{$data_employee->name}}"/>
                                                    <label for="name">Name</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-floating">
                                                    <input type="text" onkeypress="return number(event)"
                                                    maxlength="12" class="form-control" id="phone" name="phone" placeholder="phone" value="{{$data_employee->phone}}"/>
                                                    <label for="phone">Phone</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control datestartnow" id="date_birth" name="date_birth" placeholder="Indonesia" value="{{$data_employee->date_birth}}"/>
                                                    <label for="date_birth">Date Of Birth</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-floating">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <label for="gender"> Gender </label>
                                                        </div>
                                                        <div class="col-2">
                                                            <div class="btn-group ms-5" role="group" aria-label="Basic radio toggle button group">
                                                                <input type="radio" class="btn-check" required value="M" name="gender" id="btnradio1" autocomplete="off" >
                                                                <label class="btn btn-outline-dark" for="btnradio1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gender-male" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M9.5 2a.5.5 0 0 1 0-1h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V2.707L9.871 6.836a5 5 0 1 1-.707-.707L13.293 2H9.5zM6 6a4 4 0 1 0 0 8 4 4 0 0 0 0-8z"/>
                                                                </svg></label>
                                                            
                                                                <input type="radio" class="btn-check" required value="F" name="gender" id="btnradio2" autocomplete="off">
                                                                <label class="btn btn-outline-danger" for="btnradio2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gender-female" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8 1a4 4 0 1 0 0 8 4 4 0 0 0 0-8zM3 5a5 5 0 1 1 5.5 4.975V12h2a.5.5 0 0 1 0 1h-2v2.5a.5.5 0 0 1-1 0V13h-2a.5.5 0 0 1 0-1h2V9.975A5 5 0 0 1 3 5z"/>
                                                                </svg></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-floating">
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="email" value="{{$data_employee->email}}"/>
                                                    <label for="email">Email</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-floating">
                                                    <input type="password" class="form-control" id="password" name="password" placeholder="password" value="{{ $data_employee->password }}"/>
                                                    <label for="password">Password</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-12 mb-3">
                                                <label for="jobdesc">Job Descripsi</label>
                                                <div class="form-floating">
                                                    <div id="jobdesc">{!!$data_employee->jobdesc!!}</div>
                                                    <textarea class="form-control d-none" name="jobdesc">{{$data_employee->jobdesc}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="row mt-3">
                                            <div class="col-12 mb-3">
                                                <label for="jobdesc">Job Descripsi</label>
                                                <div class="form-floating">
                                                    <textarea class="form-control" name="jobdesc">{{$data_employee->id ? $data_employee->jobdesc : " "}}</textarea>
                                                </div>
                                            </div>
                                        </div> --}}

                                        <div class="row mt-3">
                                            <div class="col-6 mb-3">
                                                <div class="form-group">
                                                    <select id="country_id" data-control="select2" name="country_id" data-placeholder="Select Country..."  class="form-select">
                                                        <option value=""></option>
                                                        @foreach ($country as $item)
                                                            <option value="{{ $item->id }}" {{ $item->id == $data_employee->country_id ? 'selected' : '' }}>
                                                                {{ $item->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <div class="form-group">
                                                    <select name="province_id" data-control="select2"  id="province_id" class="form-select" disabled>
                                                        <option disabled selected>Select Province</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-6 mb-3">
                                                <div class="form-group">
                                                    <select name="regency_id" data-control="select2"  id="regency_id" class="form-select" disabled>
                                                        <option disabled selected>Select Regency</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <div class="form-group">
                                                    <select name="district_id" data-control="select2"  id="district_id" class="form-select" disabled>
                                                        <option disabled selected>Select District</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-6 mb-3">
                                                <div class="form-group">
                                                    <select name="village_id" data-control="select2"  id="village_id" class="form-select" disabled>
                                                        <option disabled selected>Select Village</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="postcode" name="postcode" placeholder="Enter Postcode" value="{{ $data_employee->postcode }}" />
                                                    <label for="postcode">Postcode</label>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-12 mb-3">
                                                    <label for="address">Address</label>
                                                    <div class="form-floating">
                                                        <div id="address">{!!$data_employee->address!!}</div>
                                                        <textarea class="form-control d-none" name="address">{{$data_employee->address}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="card em-card" style="height: 740px">
                                    <div class="card-header bg-secondary d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Company Detail</h5>
                                    </div>
                                    <div class="card-body bg-secondary"  style="border-radius: 0px 0px 10px 10px">
                                        <div class="row mb-3">
                                            <div class="col-12">
                                                <div class="form-floating">
                                                    <select id="company_branch_id" name="company_branch_id" aria-label="Select a Company Branch" data-control="select2" data-placeholder="Select a Company Branch.." class="form-select form-select-solid form-select-lg">
                                                        <option value=""></option>
                                                        @foreach ($branch as $item)
                                                            <option value="{{ $item->id }}" {{ $item->id == $data_employee->company_branch_id ? 'selected' : '' }}>
                                                                {{ $item->name }}  
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-12">
                                                <div class="form-floating">
                                                    <select name="village_id" data-control="select2"  id="village_id" class="form-select" disabled>
                                                        <option value=""></option>
                                                        @foreach ($department as $item)
                                                            <option value="{{ $item->id }}" {{ $item->id == $data_employee->department_id ? 'selected' : '' }}>
                                                                {{ $item->name }}  
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <select id="department_id" name="department_id" aria-label="Select a Department" data-control="select2" data-placeholder="Select a Department.." class="form-select form-select-solid">
                                                        <option value=""></option>
                                                        @foreach ($department as $item)
                                                            <option value="{{ $item->id }}" {{ $item->id == $data_employee->department_id ? 'selected' : '' }}>
                                                                {{ $item->name }}  
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-12">
                                                <div class="form-floating">
                                                    <select id="position_id" name="position_id" aria-label="Select a Position" data-control="select2" data-placeholder="Select a Position.." class="form-select form-select-solid form-select-lg">
                                                        <option value=""></option>
                                                        @foreach ($position as $item)
                                                            <option value="{{ $item->id }}" {{ $item->id == $data_employee->position_id ? 'selected' : '' }}>
                                                                {{ $item->name }}  
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="row mb-3">
                                            <div class="col-12">
                                                <div class="form-floating">
                                                    <select id="employee_bank_account_id" name="employee_bank_account_id" aria-label="Select a employee bank accont" data-control="select2" data-placeholder="Select a employee bank accont.." class="form-select form-select-solid form-select-lg">
                                                        <option value=""></option>
                                                        @foreach ($employee_bank_account as $item)
                                                            <option value="{{ $item->id }}" {{ $item->id == $data_employee->employee_bank_account_id ? 'selected' : '' }}>
                                                                {{ $item->name }}  
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="card em-card" style="height: 415px">
                                    <div class="card-header bg-secondary d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Document</h5>
                                    </div>
                                    <div class="card-body bg-secondary"  style="border-radius: 0px 0px 10px 10px">
                                        <div class="row mb-3">
                                            <div class="col-12">
                                                <div class="form-floating mb-3">
                                                    @if (isset($data_employee) && $data_employee->avatar )
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <p>
                                                                <img src=""
                                                                    class="img-rounded img-responsive" style="width: 75px; height:75px;"
                                                                    alt="">
                                                            </p>
                                                        </div>
                                                    </div>
                                                    
                                                    <input type="file" class="form-control" name="avatar" id="avatar">
                                                    
                                                    @elseif ($data_employee->avatar == null)
                                                    <input type="file" class="form-control" name="avatar" id="avatar">
                                                    @endif
                                                    <label for="avatar">Avatar</label>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <div class="form-floating">
                                                        <input type="number" maxlength="12" onkeypress="return number(event)" class="form-control" id="account_number" name="account_number" placeholder="account_number"/>
                                                        <label for="account_number">Account Number</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="card em-card" style="height: 415px">
                                    <div class="card-header d-flex bg-secondary justify-content-between align-items-center">
                                        <h5 class="mb-0">Bank Account Detail</h5>
                                    </div>
                                    <div class="card-body bg-secondary"  style="border-radius: 0px 0px 10px 10px">
                                        <div class="row mb-3">
                                            <div class="col-12">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="name_bank" name="name_bank" placeholder="name_bank"/>
                                                    <label for="name_bank">Name</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-6">
                                                <div class="form-floating">
                                                    <select id="employee_id" name="employee_id" aria-label="Select a Employee" data-control="select2" data-placeholder="Select a Employee.." class="form-select form-select-solid form-select-lg">
                                                        <option value=""></option>
                                                        @foreach ($employee as $item)
                                                            <option value="{{ $item->id }}" {{ $item->id == $data_employee_bank_account->employee_id ? 'selected' : '' }}>
                                                                {{ $item->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-floating">
                                                    <select id="bank_id" name="bank_id" aria-label="Select a Bank" data-control="select2" data-placeholder="Select a Bank.." class="form-select form-select-solid form-select-lg">
                                                        <option value=""></option>
                                                        @foreach ($bank as $item)
                                                            <option value="{{ $item->id }}" {{ $item->id == $data_employee_bank_account->bank_id ? 'selected' : '' }}>
                                                                {{ $item->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-12">
                                                <div class="form-floating">
                                                    <input type="number" onkeypress="return number(event)" class="form-control" id="account_number" name="account_number" placeholder="account_number"/>
                                                    <label for="account_number">Account Number</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-12">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="branch_name" name="branch_name" placeholder="branch_name"/>
                                                    <label for="branch_name">Branch Name</label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row mb-3">
                                            <div class="col-12">
                                                <div class="form-floating mb-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="is_primary" value="{{$data_employee_bank_account->is_primary}}" id="flexCheckChecked" {{ $data_employee_bank_account->is_primary ? "checked" : " "}}>
                                                        <label class="form-check-label" for="flexCheckChecked">
                                                            Is Primary
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button id="tombol_simpan" onclick="handle_upload('#tombol_simpan','#form_input','{{$data_employee->id ? 'PATCH' : 'POST'}}');" class="btn btn-sm btn-{{$data_employee->id ? 'warning' : 'success'}}">
                            {{$data_employee->id ? 'Update' : 'Create'}}
                        </button>
                        @if($data_employee->id)
                        <button type="button" onclick="handle_confirm('Are you sure want to delete this department ?', 'Yes, i`m sure', 'No, i`m not','DELETE','{{route('office.hrm.employee.destroy',$data_employee->id)}}');" class="btn btn-sm btn-danger">
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
            obj_date('date_birth');
            obj_quill('jobdesc');
            obj_quill('address');
            obj_select('country_id');

            function number(evt){
                var charCode = (evt.which) ? evt.which : event.keyCode
                    if (charCode > 31 && (charCode < 48 || charCode > 57 ))
                        return false;
                    return true;    
            }

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