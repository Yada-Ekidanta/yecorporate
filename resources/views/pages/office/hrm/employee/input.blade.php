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
                                <div class="card-header bg-secondary d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Personal Detail</h5>
                                </div>
                                <div class="card-body bg-secondary">
                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{$data_employee->name}}"/>
                                                <label for="name">Name</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input type="number" class="form-control" id="phone" name="phone" placeholder="phone" value="{{$data_employee->phone}}"/>
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
                                                        <label for="gender"> Gender :</label>
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
                                                <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{$data_employee->email}}"/>
                                                <label for="email">Email</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="password" name="password" placeholder="password" value="* * *"/>
                                                <label for="password">Password</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-12 mb-3">
                                            <label for="addres">Addres</label>
                                            <div class="form-floating">
                                                <textarea class="form-control" name="addres">{{$data_employee->id ? $data_employee->addres : "Enter employee Addres ..."}}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="country_id" name="country_id" placeholder="country_id"/>
                                                <label for="country_id">Country</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="province_id" name="province_id" placeholder="province_id"/>
                                                <label for="province_id">Province</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="regency_id" name="regency_id" placeholder="regency_id"/>
                                                <label for="regency_id">Regency</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="district_id" name="district_id" placeholder="district_id"/>
                                                <label for="district_id">District</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="village_id" name="village_id" placeholder="village_id"/>
                                                <label for="village_id">Village</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-secondary">
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="card-header bg-secondary d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Company Detail</h5>
                                </div>
                                <div class="card-body bg-secondary">
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <select name="company_branch_id" aria-label="Select a Company Branch" data-control="select2" data-placeholder="Select a Company Branch.." class="form-select form-select-solid form-select-lg">
                                                    <option value=""></option>
                                                    @if($data_employee->id == null)
                                                    @foreach ($branch as $item)
                                                    <option value="{{ $item->id }}">
                                                        {{ $item->name }}
                                                    </option>
                                                    @endforeach
                                                    @else
                                                    @foreach ($branch as $item)
                                                        <option value="{{ $item->id }}" {{ $item->id == $data_employee->company_branch_id ? 'selected' : '' }}>
                                                            {{ $item->name }}
                                                        </option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <select name="department_id" aria-label="Select a Department" data-control="select2" data-placeholder="Select a Department.." class="form-select form-select-solid form-select-lg">
                                                    <option value=""></option>
                                                    @if($data_employee->id == null)
                                                    @foreach ($department as $item)
                                                    <option value="{{ $item->id }}">
                                                        {{ $item->name }}
                                                    </option>
                                                    @endforeach
                                                    @else
                                                    @foreach ($department as $item)
                                                        <option value="{{ $item->id }}" {{ $item->id == $data_employee->department_id ? 'selected' : '' }}>
                                                            {{ $item->name }}
                                                        </option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <select name="position_id" aria-label="Select a Position" data-control="select2" data-placeholder="Select a Position.." class="form-select form-select-solid form-select-lg">
                                                    <option value=""></option>
                                                    @if($data_employee->id == null)
                                                    @foreach ($position as $item)
                                                    <option value="{{ $item->id }}">
                                                        {{ $item->name }}
                                                    </option>
                                                    @endforeach
                                                    @else
                                                    @foreach ($position as $item)
                                                        <option value="{{ $item->id }}" {{ $item->id == $data_employee->position_id ? 'selected' : '' }}>
                                                            {{ $item->name }}
                                                        </option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-secondary">
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="card-header bg-secondary d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Document</h5>
                                </div>
                                <div class="card-body bg-secondary">
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
                                    </div>
                                </div>
                                <div class="card-footer bg-secondary">
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="card-header d-flex bg-secondary justify-content-between align-items-center">
                                    <h5 class="mb-0">Bank Account Detail</h5>
                                </div>
                                <div class="card-body bg-secondary">
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="name"/>
                                                <label for="name">Name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <select name="employee_id" aria-label="Select a Employee" data-control="select2" data-placeholder="Select a Employee.." class="form-select form-select-solid form-select-lg">
                                                    <option value=""></option>
                                                    @if($data_employee_bank_account->id == null)
                                                    @foreach ($employee as $item)
                                                    <option value="{{ $item->id }}">
                                                        {{ $item->name }}
                                                    </option>
                                                    @endforeach
                                                    @else
                                                    @foreach ($employee as $item)
                                                        <option value="{{ $item->id }}" {{ $item->id == $data_employee_bank_account->employee_id ? 'selected' : '' }}>
                                                            {{ $item->name }}
                                                        </option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <select name="bank_id" aria-label="Select a Bank" data-control="select2" data-placeholder="Select a Bank.." class="form-select form-select-solid form-select-lg">
                                                    <option value=""></option>
                                                    @if($data_employee_bank_account->id == null)
                                                    @foreach ($bank as $item)
                                                    <option value="{{ $item->id }}">
                                                        {{ $item->name }}
                                                    </option>
                                                    @endforeach
                                                    @else
                                                    @foreach ($bank as $item)
                                                        <option value="{{ $item->id }}" {{ $item->id == $data_employee_bank_account->bank_id ? 'selected' : '' }}>
                                                            {{ $item->name }}
                                                        </option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="account_number" name="account_number" placeholder="account_number"/>
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
                                <div class="card-footer bg-secondary">
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
        obj_startdatenow('date_birth');
        obj_quill('desc');
    </script>
    @endsection
</x-office-layout>