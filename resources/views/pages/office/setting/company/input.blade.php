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
                    <li class="breadcrumb-item text-muted">Company</li>
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
                <form class="form w-100" novalidate="novalidate" id="form_input" data-redirect-url="{{route('office.setting.company.index')}}" action="{{$data->id ? route('office.setting.company.update',$data->id) : route('office.setting.company.store')}}">
                    <div class="card-header border-0 pt-6">
                        <div class="card-title">
                            <div class="d-flex align-items-center position-relative my-1">
                                <h1>Form {{$data->id ? 'Update' : 'Create'}} Company</h1>
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <a id="back_form_button" href="{{route('office.setting.company.index')}}" class="btn btn-primary btn-sm btn-hover-scale menu-link">
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
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{$data->name}}"/>
                                    <label for="name">Name</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="address" name="address" cols="50" placeholder="address" value="{{$data->address}}"/>{{$data->address}}</textarea>
                                    <label for="address">Address</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="phone" name="phone" placeholder="phone" value="{{$data->phone}}"/>
                                    <label for="phone">Phone</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="email" value="{{$data->email}}"/>
                                    <label for="email">email</label>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating mb-3">
                                    @if (isset($data) && $data->logo )
                                    <div class="row">
                                        <div class="col-md-2">
                                            <p>
                                                <img src="{{ route('office.setting.image.displayImageLogo', $data->id) }}"
                                                    class="img-rounded img-responsive" style="width: 75px; height:75px;"
                                                    alt="">
                                            </p>
                                        </div>
                                    </div>
                                    
                                    <input type="file" class="form-control" name="logo" id="logo">
                                    
                                    @elseif ($data->logo == null)
                                    <input type="file" class="form-control" name="logo" id="logo">
                                    @endif
                                    <label for="logo">Logo</label>
                                </div>

                                <div class="form-floating mb-3">
                                    @if (isset($data) && $data->icon )
                                    <div class="row">
                                        <div class="col-md-2">
                                            <p>
                                                <img src="{{ route('office.setting.image.displayImageIcon', $data->id) }}"
                                                    class="img-rounded img-responsive" style="width: 75px; height:75px;"
                                                    alt="">
                                            </p>
                                        </div>
                                    </div>
                                    
                                    <input type="file" class="form-control" name="icon" id="icon">
                                    
                                    @elseif ($data->icon == null)
                                    <input type="file" class="form-control" name="icon" id="icon">
                                    @endif
                                    <label for="icon">Icon</label>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="web_url" name="web_url" placeholder="web_url" value="{{$data->web_url}}"/>
                                    <label for="web_url">Web URL</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="instagram_url" name="instagram_url" placeholder="instagram_url" value="{{$data->instagram_url}}"/>
                                    <label for="instagram_url">Instagram URL</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="linkedin_url" name="linkedin_url" placeholder="linkedin_url" value="{{$data->linkedin_url}}"/>
                                    <label for="linkedin_url">Linkedin URL</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="facebook_url" name="facebook_url" placeholder="facebook_url" value="{{$data->facebook_url}}"/>
                                    <label for="facebook_url">Facebook URL</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="twitter_url" name="twitter_url" placeholder="twitter_url" value="{{$data->twitter_url}}"/>
                                    <label for="twitter_url">Twitter URL</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button id="tombol_simpan" onclick="handle_upload('#tombol_simpan','#form_input','{{$data->id ? 'PATCH' : 'POST'}}');" class="btn btn-sm btn-{{$data->id ? 'warning' : 'success'}}">
                            {{$data->id ? 'Update' : 'Create'}}
                        </button>
                        @if($data->id)
                        <button type="button" onclick="handle_confirm('Are you sure want to delete this department ?', 'Yes, i`m sure', 'No, i`m not','DELETE','{{route('office.setting.company.destroy',$data->id)}}');" class="btn btn-sm btn-danger">
                            Delete
                        </button>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-office-layout>