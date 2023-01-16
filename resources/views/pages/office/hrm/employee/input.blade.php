<x-office-layout title="{{$data->id ? 'Update' : 'Create'}} Employee">
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
                <form class="form w-100" novalidate="novalidate" id="form_input" data-redirect-url="{{route('office.master.employee.index')}}" action="{{$data->id ? route('office.master.employee.update',$data->id) : route('office.master.employee.store')}}">
                    <div class="card-header border-0 pt-6">
                        <div class="card-title">
                            <div class="d-flex align-items-center position-relative my-1">
                                <h1>Form {{$data->id ? 'Update' : 'Create'}} Employee</h1>
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <a id="back_form_button" href="{{route('office.master.employee.index')}}" class="btn btn-primary btn-sm btn-hover-scale menu-link">
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
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Personal Detail</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{$data->name}}"/>
                                                <label for="name">Name</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input type="number" class="form-control" id="phone" name="phone" placeholder="phone" value="{{$data->phone}}"/>
                                                <label for="phone">Phone</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control datestartnow" id="date_birth" name="date_birth" placeholder="Indonesia" value="{{$data->date_birth}}"/>
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
                                                            <input type="radio" class="btn-check" required value="Male" name="gender" id="btnradio1" autocomplete="off" >
                                                            <label class="btn btn-outline-dark" for="btnradio1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gender-male" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M9.5 2a.5.5 0 0 1 0-1h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V2.707L9.871 6.836a5 5 0 1 1-.707-.707L13.293 2H9.5zM6 6a4 4 0 1 0 0 8 4 4 0 0 0 0-8z"/>
                                                            </svg></label>
                                                        
                                                            <input type="radio" class="btn-check" required value="Female" name="gender" id="btnradio2" autocomplete="off">
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
                                                <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{$data->email}}"/>
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
                                                <textarea class="form-control" name="addres">{{$data->id ? $data->addres : "Enter employee Addres ..."}}</textarea>
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
                            </div>
                            <div class="col-6 mb-3">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Company Detail</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <select name="company_branch_id" placeholder="Name" class="form-select" readonly>
                                                @if($data->id == null)
                                                @foreach ($branch as $item)
                                                    <option value="{{ $item->id }}">
                                                        {{ $item->name }}
                                                    </option>
                                                @endforeach
                                                @else
                                                @foreach ($branch as $item)
                                                    <option value="{{ $item->id }}" {{ $item->id == $data->company_branch_id ? 'selected' : '' }}>
                                                        {{ $item->name }}
                                                    </option>
                                                @endforeach
                                                @endif
                                                </select>
                                                <label for="company_branch_id">Branch</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <select name="department_id" placeholder="Name" class="form-select select2" readonly>
                                                @if($data->id == null)
                                                @foreach ($department as $item)
                                                    <option value="{{ $item->id }}">
                                                        {{ $item->name }}
                                                    </option>
                                                @endforeach
                                                @else
                                                @foreach ($department as $item)
                                                    <option value="{{ $item->id }}" {{ $item->id == $data->department_id ? 'selected' : '' }}>
                                                        {{ $item->name }}
                                                    </option>
                                                @endforeach
                                                @endif
                                                </select>
                                                <label for="department_id">Department</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <select name="position_id" placeholder="Name" class="form-select" readonly>
                                                @if($data->id == null)
                                                @foreach ($position as $item)
                                                    <option value="{{ $item->id }}">
                                                        {{ $item->name }}
                                                    </option>
                                                @endforeach
                                                @else
                                                @foreach ($position as $item)
                                                    <option value="{{ $item->id }}" {{ $item->id == $data->position_id ? 'selected' : '' }}>
                                                        {{ $item->name }}
                                                    </option>
                                                @endforeach
                                                @endif
                                                </select>
                                                <label for="position_id">Position</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Document</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <select name="company_branch_id" placeholder="Name" class="form-select" readonly>
                                                @if($data->id == null)
                                                @foreach ($branch as $item)
                                                    <option value="{{ $item->id }}">
                                                        {{ $item->name }}
                                                    </option>
                                                @endforeach
                                                @else
                                                @foreach ($branch as $item)
                                                    <option value="{{ $item->id }}" {{ $item->id == $data->company_branch_id ? 'selected' : '' }}>
                                                        {{ $item->name }}
                                                    </option>
                                                @endforeach
                                                @endif
                                                </select>
                                                <label for="company_branch_id">Branch</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <select name="department_id" placeholder="Name" class="form-select select2" readonly>
                                                @if($data->id == null)
                                                @foreach ($department as $item)
                                                    <option value="{{ $item->id }}">
                                                        {{ $item->name }}
                                                    </option>
                                                @endforeach
                                                @else
                                                @foreach ($department as $item)
                                                    <option value="{{ $item->id }}" {{ $item->id == $data->department_id ? 'selected' : '' }}>
                                                        {{ $item->name }}
                                                    </option>
                                                @endforeach
                                                @endif
                                                </select>
                                                <label for="department_id">Department</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <select name="position_id" placeholder="Name" class="form-select" readonly>
                                                @if($data->id == null)
                                                @foreach ($position as $item)
                                                    <option value="{{ $item->id }}">
                                                        {{ $item->name }}
                                                    </option>
                                                @endforeach
                                                @else
                                                @foreach ($position as $item)
                                                    <option value="{{ $item->id }}" {{ $item->id == $data->position_id ? 'selected' : '' }}>
                                                        {{ $item->name }}
                                                    </option>
                                                @endforeach
                                                @endif
                                                </select>
                                                <label for="position_id">Position</label>
                                            </div>
                                        </div>
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
                        <button type="button" onclick="handle_confirm('Are you sure want to delete this department ?', 'Yes, i`m sure', 'No, i`m not','DELETE','{{route('office.master.employee.destroy',$data->id)}}');" class="btn btn-sm btn-danger">
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