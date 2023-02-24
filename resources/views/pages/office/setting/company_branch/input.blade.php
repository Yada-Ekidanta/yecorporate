<x-office-layout title="{{$data->id ? 'Update' : 'Create'}} Document Type">
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
                    <li class="breadcrumb-item text-muted">Setting</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Company Branch</li>
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
                <form class="form w-100" novalidate="novalidate" id="form_input" data-redirect-url="{{route('office.setting.company-branch.index')}}" action="{{$data->id ? route('office.setting.company-branch.update',$data->id) : route('office.setting.company-branch.store')}}">
                    <div class="card-header border-0 pt-6">
                        <div class="card-title">
                            <div class="d-flex align-items-center position-relative my-1">
                                <h1>Form {{$data->id ? 'Update' : 'Create'}} Company Branch</h1>
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <a id="back_form_button" href="{{route('office.setting.company-branch.index')}}" class="btn btn-primary btn-sm btn-hover-scale menu-link">
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
                            <div class="col-4 mb-3">
                                <div class="form-floating mb-3">
                                    <select name="company_id" placeholder="Name" class="form-select">
                                    @if($data->id == null)
                                    @foreach ($company as $item)
                                        <option value="{{ $item->id }}">
                                            {{ $item->name }}
                                        </option>
                                    @endforeach
                                    @else
                                    @foreach ($company as $item)
                                        <option value="{{ $item->id }}" {{ $item->id == $data->company_id ? 'selected' : '' }}>
                                            {{ $item->name }}
                                        </option>
                                    @endforeach
                                    @endif
                                    </select>
                                    <label for="company_id">Company</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{$data->name}}"/>
                                    <label for="name">Name</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="address" name="address" placeholder="address" value="{{$data->address}}"/>
                                    <label for="address">Address</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="instruction" name="instruction" placeholder="instruction" value="{{$data->instruction}}"/>
                                    <label for="instruction">Instruction</label>
                                </div>

                                <div class="form-floating mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="is_primary" value="{{$data->is_primary}}" id="flexCheckChecked" {{ $data->is_primary ? "checked" : " "}}>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Is Primary
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-group mb-3">
                                    <select name="country_id" id="country_id" class="form-select">
                                        <option disabled selected>Select Country</option>
                                        @foreach ($country as $item)
                                            <option value="{{ $item->id }}" {{ $data->country_id === $item->id ? 'selected' : '' }}>
                                                {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <select name="province_id" id="province_id" class="form-select" disabled>
                                        <option disabled selected>Select Province</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <select name="regency_id" id="regency_id" class="form-select" disabled>
                                        <option disabled selected>Select Regency</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <select name="district_id" id="district_id" class="form-select" disabled>
                                        <option disabled selected>Select District</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <select name="village_id" id="village_id" class="form-select" disabled>
                                        <option disabled selected>Select Village</option>
                                    </select>
                                </div>
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="postcode" name="postcode" placeholder="Enter Postcode" value="{{ $data->postcode }}" />
                                    <label for="postcode">Postcode</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button id="tombol_simpan" onclick="handle_upload('#tombol_simpan','#form_input','{{$data->id ? 'PATCH' : 'POST'}}');" class="btn btn-sm btn-{{$data->id ? 'warning' : 'success'}}">
                            {{$data->id ? 'Update' : 'Create'}}
                        </button>
                        @if($data->id)
                        <button type="button" onclick="handle_confirm('Are you sure want to delete this department ?', 'Yes, i`m sure', 'No, i`m not','DELETE','{{route('office.setting.company-branch.destroy',$data->id)}}');" class="btn btn-sm btn-danger">
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
            obj_select('country_id');
            obj_select('district_id');
            obj_select('province_id');
            obj_select('regency_id');
            obj_select('village_id');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).ready(function() {
                $("#country_id").change(function() {
                    $.ajax({
                        type: "POST",
                        url: "{{ route('office.master.regional.filter_province') }}",
                        data: {
                            country: $("#country_id").val(),
                        },
                        success: function(response) {
                            $("#province_id").removeAttr("disabled");
                            $("#province_id").html(response);
                            $("#province_id").append("<option disabled selected>Select Province</option>");
                        }
                    });
                });
                $("#province_id").change(function() {
                    $.ajax({
                        type: "POST",
                        url: "{{ route('office.master.regional.filter_regency') }}",
                        data: {
                            province: $("#province_id").val(),
                        },
                        success: function(response) {
                            $("#regency_id").removeAttr("disabled");
                            $("#regency_id").html(response);
                            $("#regency_id").append("<option disabled selected>Select Regency</option>");
                        }
                    });
                });
                $("#regency_id").change(function() {
                    $.ajax({
                        type: "POST",
                        url: "{{ route('office.master.regional.filter_district') }}",
                        data: {
                            regency: $("#regency_id").val()
                        },
                        success: function(response) {
                            $("#district_id").removeAttr("disabled");
                            $("#district_id").html(response);
                            $("#district_id").append("<option disabled selected>Select District</option>");
                        }
                    });
                });
                $("#district_id").change(function() {
                    $.ajax({
                        type: "POST",
                        url: "{{ route('office.master.regional.filter_village') }}",
                        data: {
                            district: $("#district_id").val()
                        },
                        success: function(response) {
                            $("#village_id").removeAttr("disabled");
                            $("#village_id").html(response);
                            $("#village_id").append("<option disabled selected>Select Village</option>");
                        }
                    });
                });
                $("#village_id").change(function(){
                    $.ajax({
                        type: "POST",
                        url: "{{route('office.master.regional.filter_postcode')}}",
                        data: {village : $("#village_id").val()},
                        success: function(response){
                            $("#postcode").val(response);
                        }
                    });
                });
            });
        </script>
        @if ($data->country_id)
            <script>
                $('#country_id').val('{{ $data->country_id }}');
                setTimeout(function() {
                    $('#country_id').trigger('change');
                    setTimeout(function() {
                        $('#province_id').val('{{ $data->province_id }}');
                        $('#province_id').trigger('change');
                        setTimeout(function() {
                            $('#regency_id').val('{{ $data->regency_id }}');
                            $('#regency_id').trigger('change');
                            setTimeout(function() {
                                $('#district_id').val('{{ $data->district_id }}');
                                $('#district_id').trigger('change');
                                setTimeout(function() {
                                    $('#village_id').val('{{ $data->village_id }}');
                                    $('#village_id').trigger('change');
                                }, 1200);
                            }, 1200);
                        }, 1200);
                    }, 1200);
                }, 500);
            </script>
        @endif
    @endsection       
</x-office-layout>