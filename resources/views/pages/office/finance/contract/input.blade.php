<x-office-layout title="{{$data->id ? 'Update' : 'Create'}} Contract">
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
                    <li class="breadcrumb-item text-muted">Contract</li>
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
                <form class="form w-100" novalidate="novalidate" id="form_input" data-redirect-url="{{route('office.finance.contract.index')}}" action="{{$data->id ? route('office.finance.contract.update',$data->id) : route('office.finance.contract.store')}}">
                    <div class="card-header border-0 pt-6">
                        <div class="card-title">
                            <div class="d-flex align-items-center position-relative my-1">
                                <h1>Form {{$data->id ? 'Update' : 'Create'}} Contract</h1>
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <a id="back_form_button" href="{{route('office.finance.contract.index')}}" class="btn btn-primary btn-sm btn-hover-scale menu-link">
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
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6 pt-5">
                                        <div class="form-group">
                                            <label class="form-label text-gray-700 fw-bold" for="subject">Subject</label>
                                            <input type="text" class="form-control" id="subject" name="subject" placeholder="102" value="{{$data->subject}}"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6 pt-5">
                                        <div class="form-group">
                                            <label class="form-label text-gray-700 fw-bold" for="client_id">Client</label>
                                            <select name="client_id" id="client_id" class="form-select">
                                                @foreach ($clients as $client)
                                                    <option value="{{ $client->id }}" {{ $client->id === $data->client_id || $client->id === old('client_id') ? 'selected' : '' }}>{{ $client->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-5">
                                        <div class="form-group">
                                            <label class="form-label text-gray-700 fw-bold" for="type">Contract Type</label>
                                            <select name="type" id="type" class="form-select">
                                                @foreach ($types as $type)
                                                    <option value="{{ $type->id }}" {{ $type->id === $data->type || $type->id === old('type') ? 'selected' : '' }}>{{ $type->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6 pt-5">
                                        <div class="form-group">
                                            <label class="form-label text-gray-700 fw-bold" for="value">Contract Value</label>
                                            <input type="number" class="form-control" id="value" name="value" value="{{$data->value}}"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6 pt-5">
                                        <div class="form-group">
                                            <label class="form-label text-gray-700 fw-bold" for="start_date">Start Date</label>
                                            <input type="date" class="form-control" id="start_date" name="start_date" value="{{$data->start_date}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-5">
                                        <div class="form-group">
                                            <label class="form-label text-gray-700 fw-bold" for="end_date">End Date</label>
                                            <input type="date" class="form-control" id="end_date" name="end_date" value="{{$data->end_date}}"/>
                                        </div>
                                    </div>
                                
                                </div>
                                <div class="col-md-12 pt-5">
                                    <div class="form-group">
                                        <label class="form-label text-gray-700 fw-bold" for="description">Description</label>
                                        <textarea class="form-control" id="description" name="description" value="{{$data->description}}"/> </textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 form-group">
                                    <label class="form-label">{{__('Status')}}</label>
                                    <div class="d-flex radio-check">
                                        <div class="custom-control custom-radio custom-control-inline m-1">
                                            <input type="radio" id="start" name="status" value="start" class="form-check-input" checked>
                                            <label class="form-check-labe" for="start">{{__('Start')}}</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline m-1">
                                            <input type="radio" id="close" name="status" value="close" class="form-check-input">
                                            <label class="form-check-labe" for="close">{{__('Close')}}</label>
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
                        <button type="button" onclick="handle_confirm('Are you sure want to delete this contract ?', 'Yes, i`m sure', 'No, i`m not','DELETE','{{route('office.finance.contract.destroy',$data->id)}}');" class="btn btn-sm btn-danger">
                            Delete
                        </button>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-office-layout>